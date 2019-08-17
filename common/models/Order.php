<?php

namespace common\models;

use Yii;

/**
 * 这是表 `order` 的模型
 */
class Order extends \common\components\ARModel
{
    // 1买，2卖
    const BUY = 1;

    const SELL = 2;

    // 持仓状态，1持仓，2抛出
    const ORDER_POSITION = 1;

    const ORDER_THROW = 2;

    //涨跌（1涨2跌）
    const RISE = 1;

    const FALL = 2;

    // 币种 1RMB，2USD
    const CURRENCY_RMB = 1;

    const CURRENCY_USD = 2;

    // 是否系统平仓
    const IS_CONSOLE_YES = 1;

    const IS_CONSOLE_NO = -1;

    // 默认美元汇率
    const USA_RATE = 6.77;

    public $product_name;

    public function rules()
    {
        return [
            [['user_id', 'product_id', 'hand', 'price', 'one_profit'], 'required'],
            [
                [
                    'user_id',
                    'product_id',
                    'hand',
                    'rise_fall',
                    'sell_hand',
                    'currency',
                    'order_state',
                    'created_by',
                    'updated_by',
                ],
                'integer',
            ],
            [
                [
                    'price',
                    'one_profit',
                    'fee',
                    'stop_profit_price',
                    'stop_profit_point',
                    'stop_loss_price',
                    'stop_loss_point',
                    'deposit',
                    'sell_price',
                    'sell_deposit',
                    'discount',
                    'profit',
                ],
                'number',
            ],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'                 => 'ID',
            'user_id'            => 'User ID',
            'product_id'         => '买卖品类',
            'hand'               => '手数',
            'price'              => '买入价',
            'one_profit'         => '一手盈亏',
            'fee'                => '手续费',
            'stop_profit_price'  => '止盈价格',
            'stop_profit_amount' => '止盈金额',
            'stop_profit_point'  => '止盈点数',
            'stop_loss_price'    => '止损价格',
            'stop_loss_amount'   => '止损金额',
            'stop_loss_point'    => '止损点数',
            'deposit'            => '保证金',
            'rise_fall'          => '涨跌：1涨，2跌',
            'sell_price'         => '卖出价格',
            'sell_hand'          => '卖出手数',
            'sell_deposit'       => '卖出总价',
            'discount'           => '优惠金额',
            'currency'           => '币种：1人民币，2美元',
            'profit'             => '盈亏',
            'order_state'        => '持仓状态，1持仓，2抛出',
            'created_at'         => '下单时间',
            'created_by'         => 'Created By',
            'updated_at'         => '平仓时间',
            'updated_by'         => 'Updated By',
        ];
    }

    /****************************** 以下为设置关联模型的方法 ******************************/

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /****************************** 以下为公共显示条件的方法 ******************************/

    public function search()
    {
        $this->setSearchParams();

        return self::find()
            ->filterWhere([
                'order.id'                 => $this->id,
                'order.user_id'            => $this->user_id,
                'order.product_id'         => $this->product_id,
                'order.hand'               => $this->hand,
                'order.price'              => $this->price,
                'order.one_profit'         => $this->one_profit,
                'order.fee'                => $this->fee,
                'order.stop_profit_price'  => $this->stop_profit_price,
                'order.stop_profit_amount' => $this->stop_profit_amount,
                'order.stop_profit_point'  => $this->stop_profit_point,
                'order.stop_loss_price'    => $this->stop_loss_price,
                'order.stop_loss_amount'   => $this->stop_loss_amount,
                'order.stop_loss_point'    => $this->stop_loss_point,
                'order.deposit'            => $this->deposit,
                'order.rise_fall'          => $this->rise_fall,
                'order.sell_price'         => $this->sell_price,
                'order.sell_hand'          => $this->sell_hand,
                'order.sell_deposit'       => $this->sell_deposit,
                'order.discount'           => $this->discount,
                'order.currency'           => $this->currency,
                'order.profit'             => $this->profit,
                'order.order_state'        => $this->order_state,
                'order.created_by'         => $this->created_by,
                'order.updated_by'         => $this->updated_by,
            ])
            ->andFilterWhere(['like', 'order.created_at', $this->created_at])
            ->andFilterWhere(['like', 'order.updated_at', $this->updated_at])
            ->andTableSearch();
    }

    /****************************** 以下为公共操作的方法 ******************************/

    public function saveOrder($data, $productPrice)
    {
        $order             = new Order();
        $order->attributes = $data;

        // 交易币种
        $currency = 1; // 默认人民币
        $product  = Product::findModel($productPrice->product_id);
        if ($product) {
            $currency = $product->currency;
        }

        // 交易汇率
        switch ($currency) {
            case 1: // 人民币
            default;
                $exchangeRate = 1;
                break;
            case 2: // 美元
                $exchangeRate = config('USD');
                break;
            case 3: // 港元
                $exchangeRate = config('HKD');
                break;
            case 4: // 欧元
                $exchangeRate = config('EURO');
                break;
        }
        if (empty($exchangeRate) || $exchangeRate < 0) {
            $exchangeRate = 1;
        }

        // 交易手数
        $hands = $data['hand'];
        // 止损增幅
        $stop_loss_price_add = $productPrice->deposit;

        // 止盈金额
        $stop_profit_price = abs($data['stop_profit_price']);
        // 止损金额
        $stop_loss_price = abs($data['stop_loss_price']);

        //计算 点位格式0.01
//        $point_info   = explode('.', $productPrice->point_unit);
//        $point_length = isset($point_info[1]) ? strlen($point_info[1])-1 : 0;

//        if ($point_length > 0) {
//            $stop_profit_point = $stop_profit_price / $productPrice->one_profit * pow(10, $point_length);
//            $stop_loss_point   = $stop_loss_price / $productPrice->one_profit * pow(10, $point_length);
//        } else {
        $stop_profit_point = $stop_profit_price / $productPrice->one_profit;
        $stop_loss_point   = $stop_loss_price / $productPrice->one_profit;
//        }

        $disposit = ($stop_loss_price_add * $hands + $stop_loss_price) * $exchangeRate;

        $points = empty($data['points']) ? 0 : $data['points'];

        // 订单交易币种
        $order->currency = $currency;
        // 订单保证金
        $order->deposit = $disposit;
        // 交易类型 1实盘交易2模拟交易
        $order->model_type = $data['model_type'];
        // 交易产品ID
        $order->product_id = $productPrice->product_id;
        // 订单交易手数
        $order->hand = $hands;
        // 一手盈亏金额
        $order->one_profit = $productPrice->one_profit * $exchangeRate;
        // 买涨买跌 1买涨 2买跌
        $order->rise_fall = $data['rise_fall'];
        // 订单状态 （持仓）
        $order->order_state = Order::ORDER_POSITION;
        // 订单用户ID
        $order->user_id = u()->id;
        // 订单交易手续费
        $order->fee = round($productPrice->fee * $exchangeRate) - $points;
        // 止盈金额
        $order->stop_profit_amount = $stop_profit_price * $exchangeRate;
        // 止损金额
        $order->stop_loss_amount = $stop_loss_price * $exchangeRate;

        //查询余额是否够用
        $user = User::findModel(u()->id);
        if ($user->state == User::STATE_INVALID) {
            return ['code' => -1, 'info' => '您的账号已经冻结！'];
        }
        if ($order->model_type == 1) {
            if ($user->blocked_account < 0 || $user->account < 0) {
                return ['code' => -1, 'info' => '您的账号异常请联系管理员！'];
            }
            if (($user->blocked_account + $disposit + $order->fee) > $user->account) {
                return ['code' => -1, 'info' => '您的余额已不够支付，请充值！'];
            }
        } else {
            if ($user->blocked_moni < 0 || $user->moni_acount < 0) {
                return ['code' => -1, 'info' => '您的账号异常请联系管理员！'];
            }
            if (($user->blocked_moni + $disposit + $order->fee) > $user->moni_acount) {
                return ['code' => -1, 'info' => '您的模拟余额已不够支付，请联系管理员！'];
            }
        }

        //当前最新价格
        $dataAll = DataAll::newProductPrice($productPrice->product_id);
        if (empty($dataAll)) {
            return ['code' => -1, 'info' => '找不到这个期货的最新价格！'];
        }

        if ($order->rise_fall == self::RISE) { // 买涨
            // 订单当前买入价
            $order->price = $dataAll->sp;

            $order->stop_profit_price = $order->price + ($stop_profit_point * $productPrice->point_unit) / $hands;
            $order->stop_profit_point = $stop_profit_point;
            $order->stop_loss_price   = $order->price - ($stop_loss_point * $productPrice->point_unit) / $hands;
            $order->stop_loss_point   = $stop_loss_point;
        } else { // 买跌
            // 订单当前买入价
            $order->price = $dataAll->bp;

            $order->stop_profit_price = $order->price - ($stop_profit_point * $productPrice->point_unit) / $hands;
            $order->stop_profit_point = $stop_profit_point;
            $order->stop_loss_price   = $order->price + ($stop_loss_point * $productPrice->point_unit) / $hands;
            $order->stop_loss_point   = $stop_loss_point;
        }

        if (! $order->save()) {
            return ['code' => -1, 'info' => $this];
        } else {
            if ($order->model_type == 1) {
                if ($order->fee > 0) {
                    //给用户返点
                    UserRebate::isUserRebate($order->fee, $order->id);

                    if (! empty($data['points'])) {
                        $points = $data['points'] * 100;
                        UserPoints::usePoints($user->id, $points);
                    }

                    $user->blocked_account += $disposit;
                    $user->account         -= $order->fee;
                    $user->save(false);
                } else {
                    //使用体验劵
                    UserCoupon::deleteUserCoupon($order->discount, $order->hand);
                }

                UserPoints::getPoints($user->id, UserPoints::TYPE_GET_TRADE);
            } else {
                if ($order->fee > 0) {

                    $user->blocked_moni += $disposit;
                    $user->moni_acount  -= $order->fee;
                    $user->save(false);
                }

                UserPoints::getPoints($user->id, UserPoints::TYPE_GET_TRADE_MONI);
            }

            return ['code' => 1, 'info' => '购买成功！'];
        }
    }

    /**
     * 盈利钱数
     *
     * @param  int|model 订单id/model
     *
     * @access public
     * @return number 钱数
     */
    public static function userWinOrder($order)
    {
        if (is_numeric($order)) {
            $order = self::findModel($order);
        }
        $productPrice = ProductPrice::find()->where([
            'product_id' => $order->product_id,
            'hand'       => $order->hand,
        ])->one();
        $dataAll      = DataAll::newProductPrice($order->product_id);
//        $point_info = explode('.', $productPrice->point_unit);
//        $point_length = isset($point_info[1]) ? strlen($point_info[1])-1 : 0;

        if ($order->rise_fall == self::RISE) {
            //钱数 （当前价格-购买价格）*手数*每个点的差价

            $diffPoint = $dataAll->price - $order->price;

            $diffPoint = $diffPoint / $productPrice->point_unit;

            if ($diffPoint > 0)//涨了
            {
                $profit = sprintf('%.2f', $diffPoint * $order->one_profit * $order->hand);//赢钱
                if ($dataAll->price >= $order->stop_profit_price)//大于最大止盈金额
                {
                    $profit = sprintf('%.2f', $order->stop_profit_point * $order->one_profit * $order->hand);
                }
            } else {//跌了
                //输钱
                $profit = sprintf('%.2f', $diffPoint * $order->one_profit * $order->hand);
                if ($dataAll->price <= $order->stop_loss_price)//小于最大止损金额
                {
                    $profit = -sprintf('%.2f', $order->stop_loss_point * $order->one_profit * $order->hand);
                }
            }
        } else {
            $diffPoint = $order->price - $dataAll->price;
            $diffPoint = $diffPoint / $productPrice->point_unit;

            if ($diffPoint > 0)//跌了 //赢钱
            {
                $profit = sprintf('%.2f', $diffPoint * $order->one_profit * $order->hand);

                if ($dataAll->price <= $order->stop_profit_price)//小于最大止盈金额
                {
                    $profit = sprintf('%.2f', $order->stop_profit_point * $order->one_profit * $order->hand);
                }
            } else {//涨了 //输钱

                $profit = sprintf('%.2f', $diffPoint * $order->one_profit * $order->hand);

                if ($dataAll->price >= $order->stop_loss_price)//大于最大止损金额
                {
                    $profit = -sprintf('%.2f', $order->stop_loss_point * $order->one_profit * $order->hand);
                }
            }
        }

        $exchangeRate    = self::getExchangeRate($order->currency);
        $currency_profit = sprintf('%.2f', $profit / $exchangeRate);

        //盈利多少钱
        return [
            'stop_profit_amount' =>$order->stop_profit_amount,
            'stop_loss_amount' =>$order->stop_loss_amount,
            'profit'          => $profit,
            'price'           => $dataAll->price,
            'currency_profit' => $currency_profit,
            'currency'        => $order->currency,
            'currency_symbol' => self::getCurrencySymbol($order->currency),
        ];
    }

    /**
     * 订单最新的数据
     *
     * @param  int 订单id
     *
     * @access public
     * @return array
     */
    public static function getUserOrderData($id)
    {
        $order                   = self::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'id'          => $id,
        ])->one();
        $profitInfo              = self::userWinOrder($order);
        $data['profit']          = $profitInfo['profit'];
        $data['currency_profit'] = $profitInfo['currency_profit'];
        $data['currency']        = $profitInfo['currency'];
        $data['price']           = DataAll::newProductPrice($order->product_id)->price;
        $data['profitRate']      = sprintf('%.2f', $data['profit'] * 100 / $order->deposit);
        $data['deposit']         = $data['profit'] + $order->deposit;

        return $data;
    }

    /**
     * 卖出产品
     *
     * @param  int 订单id
     *
     * @access public
     * @return boolean
     */
    public static function sellOrder($id, $isConsole = false, $price = 0)
    {
        $query = self::find()->where(['id' => $id, 'order_state' => self::ORDER_POSITION])->with('product');
        if (! $isConsole) {
            $query->andWhere(['user_id' => u()->id]);
        }
        $order = $query->one();
        if (! empty($order)) {
            if (! empty($price)) {
                if ($price == 0) {
                    //最新价格
                    $dataAll = DataAll::newProductPrice($order->product_id);
                    $price   = $dataAll->price;
                }
            } else {
                //最新价格
                $dataAll = DataAll::newProductPrice($order->product_id);
                $price   = $dataAll->price;
            }

            //买涨
            if ($order->rise_fall == self::RISE) {
                $diffPoint = $price - $order->price;
            } else {
                //买跌
                $diffPoint = $order->price - $price;
            }

            $productPrice = ProductPrice::find()->where([
                'product_id' => $order->product_id,
                'hand'       => $order->hand,
            ])->one();
//            $point_info = explode('.', $productPrice->point_unit);
//            $point_length = isset($point_info[1]) ? strlen($point_info[1])-1 : 0;
//
//            if ($point_length > 0) {
//                $diffPoint = $diffPoint / pow(10, $point_length);
//            } else {
//                $diffPoint = $diffPoint / $productPrice->point_unit;
//            }
            $diffPoint = $diffPoint / $productPrice->point_unit;//计算出点差

            //挣了多少钱
            $order->profit = sprintf('%.2f', $diffPoint * $order->one_profit * $order->hand);
            //如果平仓的时候收益超出，按设定最高收益
            if ($order->profit > 0) {

                if ($order->stop_profit_point > 0) {
                    //盈利不能超过设置盈利
                    if ($order->profit > $order->one_profit * $order->stop_profit_point * $order->hand) {
                        $order->profit = $order->one_profit * $order->stop_profit_point * $order->hand;
                    }
                }

                //盈利不超过保证金
                /*if ($order->profit > $order->deposit) {
                    $order->profit = $order->deposit;
                }*/
            } else {

                if ($order->stop_loss_point > 0) {
                    //亏损不能超过设置亏损
                    if (-$order->profit > $order->one_profit * $order->stop_loss_point * $order->hand) {
                        $order->profit = -$order->one_profit * $order->stop_loss_point * $order->hand;
                    }
                }
                //亏损不超过保证金
                if (-$order->profit > $order->deposit) {
                    $order->profit = -$order->deposit;
                }
            }

            //卖掉收入
            $order->sell_deposit = sprintf('%.2f', $order->deposit + $order->profit);

            $order->sell_hand   = $order->hand;
            $order->sell_price  = $price;
            $order->order_state = self::ORDER_THROW;
            $order->is_console  = $isConsole === true ? self::IS_CONSOLE_YES : self::IS_CONSOLE_NO;

            if ($order->save()) {
                //去除该单用户的冻结资金 增加钱数 (用户是否用现金支付fee等于0用了体验卷)
                $user = User::findOne($order->user_id);

                if ($order->model_type == 1) {
                    $user->blocked_account -= $order->deposit - $order->discount;
                    $user->account         += $order->profit;
//                if ($order->profit != 0) {
//                    //微会员与结算会员的保证金关联
//                    AdminDeposit::depositRecord($order);
//                }
                    if ($order->profit > 0) {
                        $user->profit_account += $order->profit;
                    } else {

                        $user->loss_account += $order->profit;
                    }
                    if ($user->account < 0) {
                        $user->account = 0;
                    }
                } else {
                    $user->blocked_moni -= $order->deposit - $order->discount;
                    $user->moni_acount  += $order->profit;

                    if ($user->moni_acount < 0) {
                        $user->moni_acount = 0;
                    }
                }

                $user->save(false);

                return true;
            }
        }

        return false;
    }

    /**
     * 获取汇率
     *
     * @param $currency
     *
     * @return int|mixed
     */
    public static function getExchangeRate($currency)
    {
        // 交易汇率
        switch ($currency) {
            case 1: // 人民币
            default;
                $exchangeRate = 1;
                break;
            case 2: // 美元
                $exchangeRate = config('USD');
                break;
            case 3: // 港元
                $exchangeRate = config('HKD');
                break;
            case 4: // 欧元
                $exchangeRate = config('EURO');
                break;
        }
        if (empty($exchangeRate) || $exchangeRate < 0) {
            $exchangeRate = 1;
        }

        return $exchangeRate;
    }

    /**
     * 币种符号
     *
     * @param $currency
     *
     * @return int|mixed
     */
    public static function getCurrencySymbol($currency)
    {
        switch ($currency) {
            case 1: // 人民币
            default;
                $symbol = '￥';
                break;
            case 2: // 美元
                $symbol = '$';
                break;
            case 3: // 港元
                $symbol = 'HK$';
                break;
            case 4: // 欧元
                $symbol = '€';
                break;
        }
        if (empty($symbol) || $symbol < 0) {
            $symbol = '￥';
        }

        return $symbol;
    }

    /****************************** 以下为字段的映射方法和格式化方法 ******************************/

    // Map method of field `order_state`
    public static function getOrderStateMap($prepend = false)
    {
        $map = [
            self::ORDER_POSITION => '持仓中',
            self::ORDER_THROW    => '已结算',
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `order_state`
    public function getOrderStateValue($value = null)
    {
        return $this->resetValue($value);
    }

    // Map method of field `rise_fall`
    public static function getRiseFallMap($prepend = false)
    {
        $map = [
            self::RISE => '买涨',
            self::FALL => '买跌',
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `rise_fall`
    public function getRiseFallValue($value = null)
    {
        return $this->resetValue($value);
    }

    // Map method of field `currency`
    public static function getCurrencyMap($prepend = false)
    {
        $map = [
            self::CURRENCY_RMB => '人民币',
            self::CURRENCY_USD => '美元',
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `currency`
    public function getCurrencyValue($value = null)
    {
        return $this->resetValue($value);
    }

    public static function getProductNameMap($prepend = false)
    {
        $map = Product::find()->andWhere(['on_sale' => Product::ON_SALE_YES])->map('id', 'name');

        return self::resetMap($map, $prepend);
    }

    public function getProductNameValue($value = null)
    {
        return $this->resetValue($value);
    }

    // Map method of field `is_console`
    public static function getIsConsoleMap($prepend = false)
    {
        $map = [
            self::IS_CONSOLE_YES => '是',
            self::IS_CONSOLE_NO  => '否',
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `is_console`
    public function getIsConsoleValue($value = null)
    {
        return $this->resetValue($value);
    }
}
