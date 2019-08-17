<?php

namespace frontend\controllers;

use Yii;
use frontend\models\User;
use frontend\models\Product;
use frontend\models\Order;
use frontend\models\ProductPrice;
use frontend\models\Coupon;
use frontend\models\UserCoupon;
use frontend\models\DataAll;

class OrderController extends \frontend\components\Controller
{
    //下单
    public function actionIndex()
    {
        $this->view->title = '下单';
        $pid = req('pid');
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }
        $product = Product::find()->andWhere(['id' => $pid])->with('dataAll')->one();
        $productPrice = ProductPrice::getSetProductPrice($product->id);
        if (!isset($productPrice)) {
            return $this->redirect(['site/wrong']);
        }
        //体验卷
        $couponType = UserCoupon::getNumberType(0);
        return $this->render('index', compact('product', 'productPrice', 'couponType'));
    }

    /**
     * 更新所有持仓单数据ajax请求
     * @access public
     * @return json
     */
    public function actionAjaxUpdateOrder()
    {
        error_reporting(0);
        $o_id = post('o_id', '');
        $orders = Order::find()->where(['order_state' => Order::ORDER_POSITION, 'user_id' => u()->id])->all();//dump($orders);exit;
        $data = [];
        $o_id_arr = explode(',', $o_id);
        $order_id = [];
        foreach ($orders as $order) {
            $order_id[] = $order->id;
            $data[$order->id] = Order::userWinOrder($order);
        }
        $order_id_arr = [];
        foreach ($o_id_arr as $v)
        {
            if(!in_array($v, $order_id)) $order_id_arr[$v] = $v;
        }
        return success($data, $order_id_arr);
//        return success($data);
    }

    /**
     * 更新一条持仓单数据ajax请求
     * @access public
     * @return json
     */
    public function actionAjaxUpdateOrderOne()
    {
        $data = Order::getUserOrderData(post('id'));
        // test($data);
        return success($data);
    }

    /**
     * 保存止盈止损点数
     * @access public
     * @return json
     */
    public function actionAjaxSaveOrderPoint()
    {
        $data = post('data');
        $order = Order::find()->where(['id' => $data['id'], 'user_id' => u()->id, 'order_state' => Order::ORDER_POSITION])->with('product')->one();
        if (empty($order)) {
            return error('此订单已被系统平仓！');
        }
        $order->stop_profit_price = $order->deposit * $data['profit'] / 100;
        $order->stop_loss_price = $order->deposit * $data['loss'] / 100;
        $order->stop_profit_point = $data['profit'];
        $order->stop_loss_point = $data['loss'];
        if ($order->update()) {
            return success('设置成功!');
        } else {
            return error('设置失败！');
        } 
    }

    /**
     * 保存订单
     * @access public
     * @return json
     */
    public function actionAjaxSafeOrder()
    {
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }
        $data = post();
        if(empty($data)) return error('系统提示:非法操作');
        //周末休市
        /*if (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
            return error('系统提示:周末休市!');
        }
        */
        //判断此期货是否在交易时间内
        if (!Product::isTradeTime($data['product_id'])) {
            return error('系统提示:非买入时间!');
        }
        if ($data['hand'] <= 0) {
            return error('系统提示:交易手数异常!');
        }

        $order = new Order();

        $productPrice = ProductPrice::find()->where(['product_id' => $data['product_id'], 'hand' => $data['hand']])->one();

        if ($data['hand'] > $productPrice->max_hand) {
            return error('系统提示:最大手数为'.$productPrice->max_hand.'手！');
        }

        //订单处理
        $res = $order->saveOrder($data, $productPrice);
        if ($res['code'] == 1) {
            return success($res['info']);
        } else {
            return error($res['info']);
        }
    }

    /**
     * 平仓订单ajax请求
     * @access public
     * @return json
     */
    public function actionAjaxSellOrder()
    {
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }


        $id = post('id');
        $type = post('type', 1);
        $model_type = post('model_type', 1);

        if(2 == $type)//一键平仓
        {
            $time_limit = time()-180;
            $product_id = post('product_id');
            $order_list = Order::find()->where(['product_id' => $product_id, 'order_state' => Order::ORDER_POSITION, 'user_id' => u()->id, 'model_type' => $model_type])->andWhere(['<','created_at',$time_limit])->all();

            if (empty($order_list)) {
                return error('系统提示:所有订单均已平仓');
            }
            foreach($order_list as $v)
            {
                Order::sellOrder($v['id']);
            }

            return success('系统提示:订单平仓成功');

        }else{
            $order = Order::find()->where(['id' => $id, 'order_state' => Order::ORDER_POSITION, 'user_id' => u()->id,])->one();
            if ((time()-strtotime($order->created_at)) <180){
                return error('系统提示:下单后三分钟内禁止平仓');
            }
            if (empty($order)) {
                return error('系统提示:订单已平仓');
            }
            $bool = Order::sellOrder($order->id);
            if ($bool) {
                return success('系统提示:订单平仓成功');
            } else {
                return error('系统提示:数据异常！');
            }
        }
    }

    /**
     * @return string
     * 首页交易展示页面
     */
    public function actionDeal()
    {
        $model_type = get('model_type', 1);
        $trade_type = get('trade_type', 2);
        $this->view->title = $model_type == 1 ? '实盘交易': '模拟交易';
        $products = Product::find()->where(['on_sale' => Product::ON_SALE_YES, 'state' => Product::STATE_VALID])->with('dataAll')->orderBy('hot DESC')->all();
        foreach($products as $k => $v)
        {
            $products[$k]['isTrade'] = 1;
            if (!Product::isTradeTime($v['id']) || (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1))) {
                $products[$k]['isTrade'] = 2;
            }

            $tradeTime = unserialize($v['trade_time']);
            if($tradeTime)
            {
                /*$tradeTime_ = '';
                foreach($tradeTime as $val)
                {
                    $tradeTime_ .= $val['start']. "-" .date('H:i',strtotime($val['end']) - 120) .'       ';
                }*/
                $_startTime = $tradeTime[0]['start'];
                $_endTime   = end($tradeTime)['end'];
                if (strtotime($_startTime) < strtotime($_endTime)) {
                    $tradeTime_ = $_startTime . '-' . $_endTime;
                } else {
                    $tradeTime_ = $_startTime . '-次日' . $_endTime;
                }
                $products[$k]['tradeTime'] = $tradeTime_;

            }else{
                $products[$k]['tradeTime'] = '24小时';
            }

        }

        $productCode   = implode(',', array_values(Yii::$app->params['productCode']));

        return $this->render('deal', compact('products', 'trade_type', 'model_type', 'productCode'));
    }

    /**
     * @return string|\yii\web\Response
     * 商品详情页面
     */
    public function actionProductDetail()
    {
        $model_type = get('model_type', 1);
        $id = get('id', 0);
        if($id == 0) return $this->redirect(['user/wrong']);
        //$products = Product::getDetailProduct($id);
        $products = Product::find()->where(['id' => $id])->with('priceExtend')->one();

        $tradeTime = unserialize($products['trade_time']);
        $products['tradeTime'] = '00:00';
        if($tradeTime)
        {
            foreach($tradeTime as $val)
            {
                $products['tradeTime'] = $val['end'];
            }

        }


        $this->view->title = isset($products) ? $products->name.'-行情走势' :'详情';

        if (!isset($products)) {
            return $this->redirect(['user/wrong']);
        }
        //周末休市
        $week = 0;
        $is_trade = 0;
        if (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
            $week = 1;
        }
        //判断此期货是否在交易时间内
        if (!Product::isTradeTime($id)) {
            $is_trade = 1;
        }

//        $week = $is_trade = 0;
        return $this->render('productDetail', compact('products', 'week', 'is_trade', 'model_type'));
    }

    /**
     * @return string|\yii\web\Response
     * 交易记录
     */
    public function actionRecord()
    {
        $this->view->title = '交易记录';
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id, 'model_type' => 1])->with('product')->orderBy('created_at DESC')->all();
        foreach($order as $k => $v)
        {
            $productPrice = ProductPrice::find()->where(['product_id' => $v->product_id, 'hand' => $v->hand])->one();
            $order[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order[$k]['stop_loss_price'] = round($v->stop_loss_point * $productPrice->one_profit);
        }

        $query = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id])->andFilterWhere(['>', 'profit', '0']);
        $profit_hand = $query->sum('hand');
        $win_order = $query->count();
        $position_order = Order::find()->where(['order_state' => Order::ORDER_POSITION, 'user_id' => u()->id])->count();
//        if(!$position_order){
//            $position_order = array();
//        }
        if(count($order) > 0){
            $win_rate = sprintf('%.2f', $win_order/count($order))*100;
        }else{
            $win_rate = 0;
        }
        $top_profit = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id])->max('profit');
        if(!$top_profit){
            $top_profit = 0;
        }
//        if (empty($order)) {
//            return $this->redirect(['site/index']);
//        }
        $profit_hand = $profit_hand ? $profit_hand : 0;
        return $this->render('record', compact('order', 'profit_hand', 'win_rate', 'position_order', 'top_profit'));
    }

    /**
     * @return string|\yii\web\Response
     * 当前持仓页面
     */
    public function actionPosition()
    {
        $model_type = get('model_type', 1);
        $type = get('type', 1);
        if($model_type == 2) $this->redirect(url(['order/mockTrad', 'type'=>$type]));

        $this->view->title = '交易列表';
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order_position = Order::find()->where(['order_state' => Order::ORDER_POSITION, 'user_id' => u()->id, 'model_type' => 1])->with('product')->orderBy('created_at DESC')->all();
        foreach($order_position as $k => $v)
        {
            $productPrice = ProductPrice::find()->where(['product_id' => $v->product_id, 'hand' => $v->hand])->one();
            $order_position[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_position[$k]['stop_loss_price'] = round($v->stop_loss_point * $productPrice->one_profit);

        }
        $order_throw = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id, 'model_type' => 1])->with('product')->orderBy('created_at DESC')->all();
        foreach($order_throw as $k => $v)
        {
            $productPrice = ProductPrice::find()->where(['product_id' => $v->product_id, 'hand' => $v->hand])->one();
            $order_throw[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_throw[$k]['stop_loss_price'] = round($v->stop_loss_point * $productPrice->one_profit);
        }

        return $this->render('position', compact('order_position', 'order_throw', 'type'));
    }

    public function actionMockTrad()
    {
        $type = get('type', 1);
        $this->view->title = '模拟交易列表';
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order_position = Order::find()->where(['order_state' => Order::ORDER_POSITION, 'user_id' => u()->id, 'model_type' => 2])->with('product')->orderBy('created_at DESC')->all();
        foreach($order_position as $k => $v)
        {
            $productPrice = ProductPrice::find()->where(['product_id' => $v->product_id, 'hand' => $v->hand])->one();
            $order_position[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_position[$k]['stop_loss_price'] = round($v->stop_loss_point * $productPrice->one_profit);

        }
        $order_throw = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id, 'model_type' => 2])->with('product')->orderBy('created_at DESC')->all();
        foreach($order_throw as $k => $v)
        {
            $productPrice = ProductPrice::find()->where(['product_id' => $v->product_id, 'hand' => $v->hand])->one();
            $order_throw[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_throw[$k]['stop_loss_price'] = round($v->stop_loss_point * $productPrice->one_profit);

        }

        return $this->render('mocktrad', compact('order_position', 'order_throw', 'type'));
    }
    public function actionTestDeal()
    {
        $this->view->title = '模拟操盘';
        return $this->render('testDeal');
    }


    public function actionTopSeed()
    {
        $this->view->title = '极速下单';
        return $this->render('TopSeed');
    }
    public function actionBuy()
    {
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $this->layout = 'main_old';

        $model_type = get('model_type', 1);
        $rise_fall = get('rise_fall', 1);
        $product_id = get('product_id');
        if(!$product_id) return $this->redirect(['user/wrong']);
        $productInfo = Product::find()->where(['id' => $product_id])->with('priceExtend')->one();

        $tradeTime = unserialize($productInfo['trade_time']);
        if($tradeTime)
        {
            $tradeTime_ = '';
            foreach($tradeTime as $val)
            {
                $tradeTime_ .= $val['end'] . '       ';
            }
            $productInfo['tradeTime'] = date('H:i',strtotime($tradeTime_) - 120);

        }else{
            $productInfo['tradeTime'] = '00:00';
        }

        $this->view->title = $rise_fall == 1 ? '买涨' : '买跌';
        $header = $productInfo->name."-".$this->view->title;
        $productPrices = ProductPrice::find()->where(['product_id' => $product_id])->orderBy('deposit ASC')->all();
        foreach ($productPrices as $k => $v)
        {
//            $productPrices[$k]['data_stop_profit_price'] = $v['stop_profit_price'];
//            $productPrices[$k]['data_stop_loss_price'] = $v['stop_loss_price'];
//            $productPrices[$k]['data_hand'] = $v['hand'];
//            $productPrices[$k]['data_point_unit'] = $v['point_unit'];
            $stop_profit_price = explode(',', $v['stop_profit_price']);
            sort($stop_profit_price);
            $productPrices[$k]['stop_profit_price'] = $stop_profit_price;

            $stop_loss_price = explode(',', $v['stop_loss_price']);
            sort($stop_loss_price);
            $productPrices[$k]['stop_loss_price'] = explode(',', $v['stop_loss_price']);

            $hand = explode(',', $v['hand']);
            sort($hand);
            $productPrices[$k]['hand'] = explode(',', $v['hand']);

            $point_unit = explode(',', $v['point_unit']);
            sort($point_unit);
            $productPrices[$k]['point_unit'] = explode(',', $v['point_unit']);
        }

        $userId = u()->id;
        $points = User::find()->where(['id' => $userId])->one()->points;

        return $this->render('buy', compact('rise_fall', 'productInfo', 'header', 'model_type', 'points'));
    }

    public function actionAccount()
    {
        $this->view->title = '结算';
        return $this->render('account');
    }

    public function actionRuleplay()
    {
        $this->view->title = '玩法';
        return $this->render('ruleplay');
    }

}
