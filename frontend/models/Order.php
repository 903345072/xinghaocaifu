<?php

namespace frontend\models;

use Yii;

class Order extends \common\models\Order
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            // [['field1', 'field2'], 'required', 'message' => '{attribute} is required'],
        ]);
    }

    public function scenarios()
    {
        return array_merge(parent::scenarios(), [
            // 'scenario' => ['field1', 'field2'],
        ]);
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            // 'field1' => 'description1',
            // 'field2' => 'description2',
        ]);
    }

    /*public function saveOrder($data, $productPrice)
    {

        $order = new Order();
        $order->attributes  = $data;
        //$order->deposit = $productPrice->deposit;
        $order->deposit = $productPrice->deposit * $order->hand;
        $order->model_type = $data['model_type'];
        //查询余额是否够用
        $user = User::findModel(u()->id);
        if ($user->state == User::STATE_INVALID) {
            return ['code' => -1, 'info' => '您的账号已经冻结！'];
        }
        if($order->model_type ==1){
            if ($user->blocked_account < 0 || $user->account < 0) {
                return ['code' => -1, 'info' => '您的账号异常请联系管理员！'];
            }
            if (($user->blocked_account + $order->deposit + $order->fee) > $user->account) {
                return ['code' => -1, 'info' => '您的余额已不够支付，请充值！'];
            }
        }else{
            if ($user->blocked_moni < 0 || $user->moni_acount < 0) {
                return ['code' => -1, 'info' => '您的账号异常请联系管理员！'];
            }
            if (($user->blocked_moni + $order->deposit + $order->fee) > $user->moni_acount) {
                return ['code' => -1, 'info' => '您的模拟余额已不够支付，请联系管理员！'];
            }
        }


        //当前最新价格
        $dataAll = DataAll::newProductPrice($productPrice->product_id);
        if (empty($dataAll)) {
            return ['code' => -1, 'info' => '找不到这个期货的最新价格！'];
        }
        $order->price       = $dataAll->price;

        //计算止盈/损几点
        $stop_profit_price = abs($data['stop_profit_price']);
        $stop_loss_price = abs($data['stop_loss_price']);


        //计算 点位格式
        $point_info = explode('.', $productPrice->point_unit);
        $point_length = isset($point_info[1]) ? strlen($point_info[1]) : 0;

        if($point_length > 0)
        {
            $stop_profit_point  = $stop_profit_price / pow(10, $point_length);
            $stop_loss_point    = $stop_loss_price / pow(10, $point_length);
        }else{
            $stop_profit_point  = $stop_profit_price;
            $stop_loss_point    = $stop_loss_price;
        }

        if($order->rise_fall == self::RISE)//涨
        {
            $order->stop_profit_price = $order->price + $stop_profit_point*$productPrice->point_unit;
            $order->stop_profit_point = $stop_profit_point;
            $order->stop_loss_price = $order->price - $stop_loss_point*$productPrice->point_unit;
            $order->stop_loss_point = $stop_loss_point;

        }else{//跌

            $order->stop_profit_price = $order->price - $stop_profit_point*$productPrice->point_unit;
            $order->stop_profit_point = $stop_profit_point;
            $order->stop_loss_price = $order->price + $stop_loss_point*$productPrice->point_unit;
            $order->stop_loss_point = $stop_loss_point;
        }

        $order->product_id  = $productPrice->product_id;
        $order->hand        = $data['hand'];
        $order->one_profit  = $productPrice->one_profit;

        $order->rise_fall   = $data['rise_fall'];
        $order->order_state = Order::ORDER_POSITION;
        $order->user_id     = u()->id;
        $order->fee         = $productPrice->fee;


        if (!$order->save()) {
            return ['code' => -1, 'info' => $this];
        } else {
            if($order->model_type == 1){
                if ($order->fee > 0) {
                    //给用户返点
                    UserRebate::isUserRebate($order->fee, $order->id);

                    $user->blocked_account += $order->deposit;
                    $user->account -= $order->fee;
                    $user->save(false);
                } else {
                    //使用体验劵
                    UserCoupon::deleteUserCoupon($order->discount, $order->hand);
                }
            }else{
                if ($order->fee > 0) {

                    $user->blocked_moni += $order->deposit;
                    $user->moni_acount -= $order->fee;
                    $user->save(false);
                }
            }

            return ['code' => 1, 'info' => '购买成功！'];
        }
    }*/

    /*public function saveOrder($data, $productPrice)
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
        $order->fee = $productPrice->fee * $exchangeRate;
        // 止盈金额
        $order->stop_profit_amount = $stop_profit_price;
        // 止损金额
        $order->stop_loss_amount = $stop_loss_price;

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

        if ($order->rise_fall == self::RISE) {// 买涨
            // 订单当前买入价
            $order->price = $dataAll->sp;

            $order->stop_profit_price = $order->price + $stop_profit_point * $productPrice->point_unit;
            $order->stop_profit_point = $stop_profit_point;
            $order->stop_loss_price   = $order->price - $stop_loss_point * $productPrice->point_unit;
            $order->stop_loss_point   = $stop_loss_point;
        } else { // 买跌
            // 订单当前买入价
            $order->price = $dataAll->bp;

            $order->stop_profit_price = $order->price - $stop_profit_point * $productPrice->point_unit;
            $order->stop_profit_point = $stop_profit_point;
            $order->stop_loss_price   = $order->price + $stop_loss_point * $productPrice->point_unit;
            $order->stop_loss_point   = $stop_loss_point;
        }

        if (! $order->save()) {
            return ['code' => -1, 'info' => $this];
        } else {
            if ($order->model_type == 1) {
                if ($order->fee > 0) {
                    //给用户返点
                    UserRebate::isUserRebate($order->fee, $order->id);

                    $user->blocked_account += $disposit;
                    $user->account         -= $order->fee;
                    $user->save(false);
                } else {
                    //使用体验劵
                    UserCoupon::deleteUserCoupon($order->discount, $order->hand);
                }
            } else {
                if ($order->fee > 0) {

                    $user->blocked_moni += $disposit * $exchangeRate;
                    $user->moni_acount  -= $order->fee;
                    $user->save(false);
                }
            }

            return ['code' => 1, 'info' => '购买成功！'];
        }
    }*/

    /**
     * 盈利钱数
     *
     * @param  int|model 订单id/model
     *
     * @access public
     * @return number 钱数
     */
    /*public static function userWinOrder($order)
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
            'profit'          => $profit,
            'price'           => $dataAll->price,
            'currency_profit' => $currency_profit,
            'currency'        => $order->currency,
            'currency_symbol' => self::getCurrencySymbol($order->currency),
        ];
    }*/

    /**
     * 订单最新的数据
     *
     * @param  int 订单id
     *
     * @access public
     * @return array
     */
    /*public static function getUserOrderData($id)
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
    }*/
}
