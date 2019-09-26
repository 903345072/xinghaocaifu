<?php

namespace console\models;

use Yii;
use common\models\Order;
use common\models\Product;
use common\models\DataAll;
use common\helpers\StringHelper;

class Gather extends \yii\base\Object
{
    use \common\traits\ChisWill;

    public $productList = [];

    protected $updateMap = [];

    protected $switchMap = [];

    protected $faker;

    public function init()
    {
        parent::init();
        //$this->productList = array_intersect_key($this->productList, array_flip(config('productList')));
    }

    protected function uniqueInsert($name, $data)
    {
        $row = self::db("SELECT
            id,
            price,
            Close,
            Date
        FROM
            data_{$name}
        ORDER BY
            id DESC
        LIMIT 1")->queryOne();

          $this->insert($name,$data);

//            if ($row['time'] != $data['time']){
//                $this->insert($name, $data,1);
//            }else{
//                $data['id'] = $row['id'];
//                $this->insert($name, $data,2);
//            }
    }
    protected function insert($name, $data)
    {
        try {
            // 是否开启作弊模式
            if (($switch = option('risk_switch')) && option('risk_product')[$name]) { //总控开了，单个商品控制开了     //isset($this->switchMap[$name])
                $riseQuery = Order::find()->joinWith('product')->where([
                    'order_state'        => Order::ORDER_POSITION,
                    'product.table_name' => $name,
                ])->select('SUM(hand * order.one_profit) hand');
                $downQuery = clone $riseQuery;
                $riseQuery->andWhere(['rise_fall' => Order::RISE]);
                $downQuery->andWhere(['rise_fall' => Order::FALL]);
                $rise = $riseQuery->one()->hand ?: 0;
                $down = $downQuery->one()->hand ?: 0;
                if ($rise != $down) {
                    $wave = $rise > $down ? -1 : 1;
                    if (strpos($data['price'], '.') !== false) {
                        list($int, $point) = explode('.', $data['price']);
                        $point = pow(10, -1 * strlen($point));
                    } else {
                        $point = 1;
                    }
                    // 获取行情信息
                    $dataInfo      = DataAll::findOne($name);
                    $data['price'] = $dataInfo->price;
                    $wawe_point = $point * $wave * intval(mt_rand(150, 500) / 50);
                    $data['price'] += $wawe_point;
                    $data['Low'] +=$wawe_point;
                    $data['High'] +=$wawe_point;
                    $data['Close'] +=$wawe_point;
                    $data['Open'] +=$wawe_point;
                }
            }


          $this->updateMap[$name] = $data;

        } catch (\yii\db\IntegrityException $e) {
            // 唯一索引冲突才会进这，什么都不必做
        }
    }

    protected function afterInsert()
    {
        $priceJson = @file_get_contents(Yii::getAlias('@frontend/web/price.json')) ?: '{}';
        $priceJson = json_decode($priceJson, true);
        foreach ($this->updateMap as $tableName => $info) {

            // 更新 data_all 的最新价格
            self::dbUpdate('data_all', ['price'=>$info['price']], ['name' => $tableName]);
            // 将所有更新的价格写入文件
            $priceJson[$tableName] = $info['price'];
        }
        file_put_contents(Yii::getAlias('@frontend/web/price.json'), json_encode($priceJson));
    }

    protected function listen()
    {
        $this->afterInsert();
         //更新所有持仓订单的浮亏
        self::db('  UPDATE
                        `order` o,
                        product p,
                        data_all a
                    SET
                        sell_price = a.price,
                        profit = IF (
                            o.rise_fall = ' . Order::RISE . ',
                            a.price - o.price,
                            o.price - a.price
                        ) * o.hand * o.one_profit
                    WHERE
                        a.name = p.`table_name`
                    AND o.product_id = p.id
                    AND o.order_state =  ' . Order::ORDER_POSITION . '
                    AND sell_price != a.price')
        ->execute();
         //获取所有品类当前交易状态
        $productMap = $this->getAllTradeTime();
        $extra      = [];
        foreach ($productMap as $product => $isTrade) {
            if ($isTrade === true) {
                $extra[] = $product;
            }
        }
        if ($extra) {
            $extraWhere = ' OR (order_state = ' . Order::ORDER_POSITION . ' and product_id in (' . implode(',',
                    $extra) . ') )';
        } else {
            $extraWhere = '';
        }

        // 获取所有止盈止损订单ID
        $ids = self::db('SELECT o.id, a.price, o.rise_fall, o.product_id,o.stop_profit_price,o.stop_loss_price 
FROM `order` o INNER JOIN product p on p.id = o.product_id INNER JOIN data_all a on a.name = p.table_name where 
            ( o.order_state = ' . Order::ORDER_POSITION . ')' . $extraWhere)->queryAll();
        array_walk($ids, function ($value) use ($extra) {
            //最新价格
            $price = $value['price'];
            if ($value['rise_fall'] == Order::RISE) {
                if ($price >= $value['stop_profit_price'] || $price <= $value['stop_loss_price']) {
                    Order::sellOrder($value['id'], true, $price);
                }
            } else {

                if ($price <= $value['stop_profit_price'] || $price >= $value['stop_loss_price']) {
                    Order::sellOrder($value['id'], true, $price);
                }
            }

            if (in_array($value['product_id'], $extra)) {
                Order::sellOrder($value['id'], true, $price);
            }
        });
//        $ids = self::db('SELECT id from `order` where (order_state = ' . Order::ORDER_POSITION . ' AND (
//            profit + deposit <= 0 OR (profit <= stop_loss_price * -1 AND stop_loss_point <> 0) OR (profit >= stop_profit_price AND stop_profit_point <> 0)))' . $extraWhere)->queryAll();
//        array_walk($ids, function ($value) {
//            Order::sellOrder($value['id'], true);
//        });
    }

    protected function getAllTradeTime()
    {
        $data     = [];
        $products = Product::find()->where([
            'force_sell' => Product::FORCE_SELL_YES,
            'state'      => Product::STATE_VALID,
        ])->select(['id'])->asArray()->all();
        foreach ($products as $product) {
            $data[$product['id']] = Product::isLastTradeTime($product['id'], 120);
        }
        return $data;
    }

    protected function getFloatLength($num) {
        $count = 0;

        $temp = explode ( '.', $num );

        if (sizeof ( $temp ) > 1) {
            $decimal = end ( $temp );
            $count = strlen ( $decimal );
        }

        return $count;
    }

   public function randFloat($min = 0, $max = 1) {
        $rand = $min + mt_rand() / mt_getrandmax() * ($max - $min);
        return floatval(number_format($rand,2));
    }

}
