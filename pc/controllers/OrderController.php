<?php

namespace home\controllers;

use Yii;
use home\models\User;
use home\models\Product;
use home\models\Order;
use home\models\ProductPrice;
use home\models\Coupon;
use home\models\UserCoupon;
use home\models\DataAll;

class OrderController extends \home\components\Controller
{
    public function beforeAction($action)
    {


        return true;
    }

    /**
     * 下单
     *
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        $this->view->title = '下单';
        $pid               = req('pid');
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }
        $product      = Product::find()->andWhere(['id' => $pid])->with('dataAll')->one();
        $productPrice = ProductPrice::getSetProductPrice($product->id);
        if (! isset($productPrice)) {
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
//        $orders = Order::find()->where(['order_state' => Order::ORDER_POSITION, 'user_id' => u()->id])->all();
//        $data   = [];
//        foreach ($orders as $order) {
//            $data[$order->id] = Order::userWinOrder($order);
//        }
//
//        return success($data);
        error_reporting(0);
        $o_id     = post('o_id', '');
        $orders   = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
        ])->all();//dump($orders);exit;
        $data     = [];
        $o_id_arr = explode(',', $o_id);
        $order_id = [];
        foreach ($orders as $order) {
            $order_id[]       = $order->id;
            $data[$order->id] = Order::userWinOrder($order);
        }
        $order_id_arr = [];
        foreach ($o_id_arr as $v) {
            if (! in_array($v, $order_id)) {
                $order_id_arr[$v] = $v;
            }
        }

        return success($data, $order_id_arr);
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
        $data  = post('data');
        $order = Order::find()->where([
            'id'          => $data['id'],
            'user_id'     => u()->id,
            'order_state' => Order::ORDER_POSITION,
        ])->with('product')->one();
        if (empty($order)) {
            return error('此订单已被系统平仓！');
        }
        $order->stop_profit_price = $order->deposit * $data['profit'] / 100;
        $order->stop_loss_price   = $order->deposit * $data['loss'] / 100;
        $order->stop_profit_point = $data['profit'];
        $order->stop_loss_point   = $data['loss'];
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
//            return $this->redirect(['site/login']);
            return error('1');
        }
        $data = post();
        if (empty($data)) {
            return error('系统提示:非法操作');
        }
        //周末休市
        /*if (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
            return error('系统提示:周末休市!');
        }
        //判断此期货是否在交易时间内
        if (!Product::isTradeTime($data['product_id'])) {
            return error('系统提示:非买入时间!');
        }
        */
        if ($data['hand'] <= 0) {
            return error('系统提示:交易手数异常!');
        }

        $order = new Order();

        $productPrice = ProductPrice::find()->where([
            'product_id' => $data['product_id'],
            'hand'       => $data['hand'],
        ])->one();

        if ($data['hand'] > $productPrice->max_hand) {
            return error('系统提示:最大手数为' . $productPrice->max_hand . '手！');
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
//            return $this->redirect(['site/login']);
            return error('1');
        }

        $id         = post('id');
        $type       = post('type', 1);
        $model_type = post('model_type', 1);

        if (2 == $type)//一键平仓
        {
            $product_id = post('product_id');
            $order_list = Order::find()->where([
                'product_id'  => $product_id,
                'order_state' => Order::ORDER_POSITION,
                'user_id'     => u()->id,
                'model_type'  => $model_type,
            ])->all();
            if (empty($order_list)) {
                return error('系统提示:所有订单均已平仓');
            }
            foreach ($order_list as $v) {
                Order::sellOrder($v['id']);
            }

            return success('系统提示:订单平仓成功');
        } else {
            $order = Order::find()->where([
                'id'          => $id,
                'order_state' => Order::ORDER_POSITION,
                'user_id'     => u()->id,
            ])->one();
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
     * @return string|\yii\web\Response
     * 商品详情页面
     */
    public function actionProductDetail()
    {
        $model_type = get('model_type', 1);

        $id = get('id', 0);
        if ($id == 0) {
            return $this->redirect(['user/wrong']);
        }
        $products          = Product::getDetailProduct($id);
        $this->view->title = isset($products) ? $products->name . '-行情走势' : '详情';

        if (! isset($products)) {
            return $this->redirect(['user/wrong']);
        }
        //周末休市
        $week     = 0;
        $is_trade = 0;
        if (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
            $week = 1;
        }
        //判断此期货是否在交易时间内
        if (! Product::isTradeTime($id)) {
            $is_trade = 1;
        }
        $week = $is_trade = 0;

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
        $order          = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
        ])->with('product')->all();
        $query          = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
        ])->andFilterWhere([
            '>',
            'profit',
            '0',
        ]);
        $profit_hand    = $query->sum('hand');
        $win_order      = $query->count();
        $position_order = Order::find()->where(['order_state' => Order::ORDER_POSITION, 'user_id' => u()->id])->count();
        $win_rate       = sprintf('%.2f', $win_order / count($order)) * 100;
        $top_profit     = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
        ])->max('profit');
        if (empty($order)) {
            return $this->redirect(['site/index']);
        }

        return $this->render('record', compact('order', 'profit_hand', 'win_rate', 'position_order', 'top_profit'));
    }

    /**
     * @return string|\yii\web\Response
     * 当前持仓页面
     */
    public function actionPosition()
    {
        $model_type = get('model_type', 1);
        $type       = get('type', 1);
        if ($model_type == 2) {
            $this->redirect(url(['order/mockTrad', 'type' => $type]));
        }

        $this->view->title = '交易列表';
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order_position = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->with('product')->orderBy('created_at DESC')->all();
        $order_throw    = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->with('product')->orderBy('created_at DESC')->all();

        return $this->render('position', compact('order_position', 'order_throw', 'type'));
    }

    public function actionMockTrad()
    {
        $type              = get('type', 1);
        $this->view->title = '模拟交易列表';
        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order_position = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => 2,
        ])->with('product')->orderBy('created_at DESC')->all();
        $order_throw    = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 2,
        ])->with('product')->orderBy('created_at DESC')->all();

        return $this->render('mocktrad', compact('order_position', 'order_throw', 'type'));
    }

    public function actionTopSeed()
    {
        $this->view->title = '极速下单';

        return $this->render('TopSeed');
    }

    /*public function actionBuy()
    {
        $model_type = get('model_type', 1);
        $rise_fall  = get('rise_fall', 1);
        $product_id = get('product_id');
        if (! $product_id) {
            return $this->redirect(['user/wrong']);
        }
        $productInfo       = Product::find()->where(['id' => $product_id])->with('priceExtend')->one();
        $this->view->title = $rise_fall == 1 ? '买涨' : '买跌';
        $header            = $productInfo->name . "-" . $this->view->title;
        $productPrices     = ProductPrice::find()->where(['product_id' => $product_id])->orderBy('deposit ASC')->all();
        foreach ($productPrices as $k => $v) {
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

        return $this->render('buy', compact('rise_fall', 'productInfo', 'header', 'model_type'));
    }*/

    public function actionAccount()
    {
        $this->view->title = '结算';

        return $this->render('account');
    }

    public function actionQuotation()
    {
        $this->layout      = 'web_main';
        $this->view->title = '实盘交易';

        $cashProduct   = Product::getIndexCashProduct();
        $volumeProduct = Product::getIndexVolumeProduct();

        return $this->render('quotation', compact('cashProduct', 'volumeProduct'));
    }

    /**
     * @return string
     * 首页交易展示页面
     */
    public function actionDeal()
    {
        $this->layout      = 'web_main';
        $model_type        = get('model_type', 1);
        $trade_type        = get('trade_type', 1);
        $this->view->title = $model_type == 1 ? '实盘交易' : '模拟交易';

        if ($trade_type == 2) {
            $Product = Product::getIndexCashProduct();
        } else {
            $Product = Product::getIndexVolumeProduct();
        }

        $productCode = implode(',', array_values(Yii::$app->params['productCode']));

        return $this->render('deal', compact('Product', 'productCode', 'model_type', 'trade_type'));
    }

    public function actionQuotInter()
    {
        $this->layout = 'web_main';
//  	$this->layout=false;
        $type = $_GET['type'];
        if ($type == 1) {
            $Product           = Product::getIndexCashProduct();
            $this->view->title = '实盘交易(国际)';
        } else {
            $Product           = Product::getIndexVolumeProduct();
            $this->view->title = '实盘交易(国内)';
        }

        $productCode = implode(',', array_values(Yii::$app->params['productCode']));

        return $this->render('quotInter', compact('Product', 'productCode'));
    }

    public function actionQuotdeal()
    {
        $this->layout = 'web_main';
//  	$this->layout=false;
        $type = $_GET['type'];
        if ($type == 1) {
            $Product           = Product::getIndexCashProduct();
            $this->view->title = '模拟实盘交易(国际)';
        } else {
            $Product           = Product::getIndexVolumeProduct();
            $this->view->title = '模拟实盘交易(国内)';
        }

        $productCode = implode(',', array_values(Yii::$app->params['productCode']));

        return $this->render('quotdeal', compact('Product', 'productCode'));
    }

    public function actionGetData()
    {
        $id    = $_POST['id'];
        $model = Product::findModel($id);
        $name  = $model->table_name;
        $unit  = get('unit');
        switch ($unit) {
            case 'day':
                $time   = '1';
                $format = '%Y-%m-%d';
                break;
            default:
                $lastTime = \common\models\DataAll::find()->where(['name' => $name])->one()->time;
                $time     = 'time >= "' . date('Y-m-d 00:00:00') . '"';
                //$time = 'time >= "' . date('2018-05-04 00:00:00') . '"';
                //$time = 'time >= "' . date('Y-m-d 13:00:00') . '" and time <"' . date('Y-m-d 19:00:00') . '"';
                $format = '%Y-%m-%d %H:%i';
                break;
        }

        $response = Yii::$app->response;

        $response->format = \yii\web\Response::FORMAT_JSON;

        $response->data = self::db('SELECT
                sub.*, cu.price close, UNIX_TIMESTAMP(DATE_FORMAT(time, "' . $format . '")) * 1000 time
        FROM
            (
                SELECT
                    min(d1.price) low,
                    max(d1.price) high,
                    d1.price open,
                    max(d1.id) id
                FROM
                    data_' . $name . ' d1
                where ' . $time . '
                group by
                    DATE_FORMAT(time, "' . $format . '")
            ) sub,
            data_' . $name . ' cu
        WHERE
            cu.id = sub.id')->queryAll();
        $response->send();
    }

    public function actionGetDataDays()
    {
        $id    = $_POST['id'];
        $model = Product::findModel($id);
        $name  = $model->table_name;
        $unit  = get('unit');
        switch ($unit) {
            case 'day':
                $time   = '1';
                $format = '%Y-%m-%d';
                break;
            default:
                $lastTime = \common\models\DataAll::find()->where(['name' => $name])->one()->time;
                $time     = 'time >= "' . date('2018-04-29 00:00:00') . '"';
                $format   = '%Y-%m-%d %H:%i';
                break;
        }

        $response = Yii::$app->response;

        $response->format = \yii\web\Response::FORMAT_JSON;

        $response->data = self::db('SELECT
                sub.*, cu.price close, UNIX_TIMESTAMP(DATE_FORMAT(time, "' . $format . '")) * 1000 time
        FROM
            (
                SELECT
                    min(d1.price) low,
                    max(d1.price) high,
                    d1.price open,
                    max(d1.id) id
                FROM
                    data_' . $name . ' d1
                where ' . $time . '
                group by
                    DATE_FORMAT(time, "' . $format . '")
            ) sub,
            data_' . $name . ' cu
        WHERE
            cu.id = sub.id')->queryAll();
        $response->send();
    }

    public function actionBuy()
    {


        $id         = get('id', 0);
        $model_type = get('model_type', 1);
        if ($id == 0) {
            return $this->redirect(['wrong']);
        }

        $this->layout      = 'web_main';
        $this->view->title = $model_type == 1 ? '实盘交易' : '模拟交易';

        $products = Product::getDetailProduct($id);
        if (! isset($products)) {
            return $this->redirect(['wrong']);
        }

        //周末休市
        $week     = 0;
        $is_trade = 0;
        if (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
            $week = 1;
        }
        //判断此期货是否在交易时间内
        if (! Product::isTradeTime($id)) {
            $is_trade = 1;
        }

        $domestic = Product::find()->where(['type' => 1])->with('dataAll')->all();//dump($domestic);exit;
        $abroad   = Product::find()->where(['type' => 2])->with('priceExtend')->with('dataAll')->all();

        $order_position = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => $model_type,
            'product_id'  => $id,
        ])->with('product')->orderBy('created_at DESC')->all();
        $order_throw    = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => $model_type,
            'product_id'  => $id,
        ])->with('product')->orderBy('created_at DESC')->all();

        $productInfo   = Product::find()->where(['id' => $id])->with('priceExtend')->one();
        $productPrices = ProductPrice::find()->where(['product_id' => $id])->orderBy('deposit ASC')->all();
        foreach ($productPrices as $k => $v) {
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

        return $this->render('buy',
            compact('products', 'week', 'is_trade', 'domestic', 'abroad', 'productInfo', 'model_type', 'id',
                'order_throw', 'order_position'));
    }

    public function actionSimulationbuy()
    {
        $this->layout      = 'web_main';
        $this->view->title = '模拟交易界面';
        $model_type        = 2;
        $id                = get('id', 0);

        $modelurl = 'simulationbuy';

        if ($id == 0) {
            return $this->redirect(['wrong']);
        }
        $products = Product::getDetailProduct($id);
//        $this->view->title = isset($products) ? $products->name.'-行情走势' :'详情';

        if (! isset($products)) {
            return $this->redirect(['wrong']);
        }
        //周末休市
        $week     = 0;
        $is_trade = 0;
        if (date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
            $week = 1;
        }
        //判断此期货是否在交易时间内
        if (! Product::isTradeTime($id)) {
            $is_trade = 1;
        }

        $domestic = Product::find()->where(['type' => 1])->with('dataAll')->all();//dump($domestic);exit;
        $abroad   = Product::find()->where(['type' => 2])->with('priceExtend')->with('dataAll')->all();

        $order_position = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => 2,
            'product_id'  => $id,
        ])->with('product')->orderBy('created_at DESC')->all();
        $order_throw    = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 2,
            'product_id'  => $id,
        ])->with('product')->orderBy('created_at DESC')->all();

        $productInfo   = Product::find()->where(['id' => $id])->with('priceExtend')->one();
        $productPrices = ProductPrice::find()->where(['product_id' => $id])->orderBy('deposit ASC')->all();
        foreach ($productPrices as $k => $v) {
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

        return $this->render('productDetail',
            compact('products', 'week', 'is_trade', 'domestic', 'abroad', 'productInfo', 'model_type', 'id',
                'order_position', 'order_throw', 'modelurl'));
    }

    public function actionPositions()
    {
        $model_type    = get('model_type', 1);
        $sql           = 'select count(o.id) as count,a.symbol from `order` o INNER JOIN product p on p.id = o.product_id 
             INNER JOIN data_all a on a.name = p.table_name where o.user_id =' . u()->id . ' and o.order_state = ' . Order::ORDER_POSITION .
            ' and o.model_type = ' . $model_type . ' group by a.symbol';
        $data['count'] = self::db($sql)->queryAll();

        $productId   = get('product_id', 0);
        $sql         = 'select id from `order` where user_id=' . u()->id . ' and order_state=' . Order::ORDER_POSITION
            . ' and product_id=' . $productId . ' and model_type = ' . $model_type;
        $data['ids'] = self::db($sql)->queryAll();

        return json_encode($data);
    }

    public function actionWrong()
    {
        $this->layout      = 'web_main';
        $this->view->title = '界面出错';

        return $this->render('wrong');
    }

    /**
     * @param $id
     * 获取商品数据
     */
    public function actionGetDate($id)
    {
        $model = Product::findModel($id);
        $name  = $model->table_name;
        $unit  = get('unit');
        switch ($unit) {
            case 'day':
                $time   = '1';
                $format = '%Y-%m-%d';
                break;
            default:
                $lastTime = \common\models\DataAll::find()->where(['name' => $name])->one()->time;
                $time     = 'time >= "' . date('Y-m-d 00:00:00') . '"';
                $format   = '%Y-%m-%d %H:%i';
                break;
        }

        $response = Yii::$app->response;

        $response->format = \yii\web\Response::FORMAT_JSON;

        $response->data = self::db('SELECT
                sub.*, cu.price close, UNIX_TIMESTAMP(DATE_FORMAT(time, "' . $format . '")) * 1000 time
        FROM
            (
                SELECT
                    min(d1.price) low,
                    max(d1.price) high,
                    d1.price open,
                    max(d1.id) id
                FROM
                    data_' . $name . ' d1
                where ' . $time . '
                group by
                    DATE_FORMAT(time, "' . $format . '")
            ) sub,
            data_' . $name . ' cu
        WHERE
            cu.id = sub.id')->queryAll();
        $response->send();
    }
}
