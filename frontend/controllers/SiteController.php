<?php

namespace frontend\controllers;

use common\components\ARQuery;
use common\components\BRQuery;
use common\components\CheckFile;
use common\helpers\Curl;
use common\models\DataPp0;
use common\models\DataSr0;
use common\models\UserPoints;
use frontend\models\Article;
use Yii;
use frontend\models\User;
use frontend\models\Product;
use frontend\models\DataAll;
use frontend\models\Retail;
use common\models\Order;
use yii\filters\VerbFilter;
use yii\log\FileTarget;
use frontend\models\UserCharge;
use common\models\DataCl;
use console\models\GatherJincheng;
use yii\web\Controller;
use common\components\Filter;
class SiteController extends \frontend\components\Controller
{
    /**
     * CURL发送Request请求,含POST和REQUEST
     *
     * @param string $url     请求的链接
     * @param mixed  $params  传递的参数
     * @param string $method  请求的方法
     * @param mixed  $options CURL的参数
     *
     * @return array
     */


    public function sendRequest($url, $params = [], $method = 'POST', $options = [])
    {
        $method       = strtoupper($method);
        $protocol     = substr($url, 0, 5);
        $query_string = is_array($params) ? http_build_query($params) : $params;

        $ch       = curl_init();
        $defaults = [];
        if ('GET' == $method) {
            $geturl                = $query_string ? $url . (stripos($url,
                    "?") !== false ? "&" : "?") . $query_string : $url;
            $defaults[CURLOPT_URL] = $geturl;
            //echo $geturl;
        } else {
            $defaults[CURLOPT_URL] = $url;
            if ($method == 'POST') {
                $defaults[CURLOPT_POST] = 1;
            } else {
                $defaults[CURLOPT_CUSTOMREQUEST] = $method;
            }
            $defaults[CURLOPT_POSTFIELDS] = $query_string;
        }

        $defaults[CURLOPT_HEADER]         = "utf-8";
        $defaults[CURLOPT_USERAGENT]      = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.98 Safari/537.36";
        $defaults[CURLOPT_FOLLOWLOCATION] = true;
        $defaults[CURLOPT_RETURNTRANSFER] = true;
        $defaults[CURLOPT_CONNECTTIMEOUT] = 10;
        $defaults[CURLOPT_TIMEOUT]        = 10;

        // disable 100-continue
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Expect:']);

        if ('https' == $protocol) {
            $defaults[CURLOPT_SSL_VERIFYPEER] = false;
            $defaults[CURLOPT_SSL_VERIFYHOST] = false;
        }

        curl_setopt_array($ch, (array) $options + $defaults);

        $ret = curl_exec($ch);
        $err = curl_error($ch);

        if (false === $ret || ! empty($err)) {
            $errno = curl_errno($ch);
            $info  = curl_getinfo($ch);
            curl_close($ch);

            return [
                'ret'   => false,
                'errno' => $errno,
                'msg'   => $err,
                'info'  => $info,
            ];
        }
        curl_close($ch);



        return [
            'ret' => true,
            'msg' => $ret,
        ];
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
    public function beforeAction($action)
    {
        if (! parent::beforeAction($action)) {
            return false;
        } else {
            $actions = ['login', 'register', 'forget', 'verify-code', 'kline','filter', 'get-price','run','hynotify','ylnotify','dels','test1','del-wrong'];
            if (user()->isGuest && ! in_array($this->action->id, $actions)) {
                $this->redirect(['site/login']);
                return false;
            }
            return true;
        }
    }

    public function actionYlnotify()      //亿联支付回调
    {
        $log = new FileTarget();
        $log->logFile = Yii::getAlias('@givemoney/recharge.log');
        $returnArray = array( // 返回字段
            "memberid" => $_REQUEST["memberid"], // 商户ID
            "orderid" =>  $_REQUEST["orderid"], // 订单号
            "amount" =>  $_REQUEST["amount"], // 交易金额
            "datetime" =>  $_REQUEST["datetime"], // 交易时间
            "transaction_id" =>  $_REQUEST["transaction_id"], // 流水号
            "returncode" => $_REQUEST["returncode"]
        );
        $md5key = "y8zes5689ug5pr2igw2b0rfzbet1r4wg";
        ksort($returnArray);
        reset($returnArray);
        $md5str = "";
        foreach ($returnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $md5key));
        $log->messages[] = ['订单:'.$returnArray['orderid'].'充值:'.$returnArray['amount'].'签名:'.$_REQUEST["sign"].'校验签名:'.$sign,8,'application',time()];
        $log->export();
        if($_REQUEST["sign"] == $sign){
            if ($_REQUEST["returncode"] == "00") {
                $userCharge = UserCharge::find()->where('trade_no = :trade_no', [':trade_no' => $returnArray['orderid']])->one();
                if (!empty($userCharge)) {
                    //充值状态：1待付款，2成功，-1失败
                    if ($userCharge->charge_state == 1) {
                        //找到这个用户
                        $user = User::findOne($userCharge->user_id);
                        //给用户加钱
                        $user->account += $userCharge->amount;
                        if ($user->save()) {
                            //更新充值状态---成功
                            $userCharge->charge_state = 2;
                        }
                    }
                    //更新充值记录表
                    $res = $userCharge->update();
                    if ($res){
                        exit("OK");
                    }
                }
            }
        }
    }
    public function actionHynotify()
    {
        $log = new FileTarget();
        $log->logFile = Yii::getAlias('@givemoney/recharge.log');
        $status = post('status'); //状态
        $customerid = post('customerid'); //商户id
        $sdpayno = post('sdpayno');//平台订单号
        $sdorderno = post('sdorderno');  //商户订单号
        $total_fee = post('total_fee'); //到账金额
        $paytype = post('paytype');
        $sign = post('sign');
        $check_sign = md5('customerid='.$customerid.'&status='.$status.'&sdpayno='.$sdpayno.'&sdorderno='.$sdorderno.'&total_fee='.$total_fee.'&paytype='.$paytype.'&7a68ac64e17a0ba4e1e8c859f6df022399701710');
        $log->messages[] = ['订单:'.$sdorderno.'充值:'.$total_fee.'签名:'.$sign.'校验签名:'.$check_sign,8,'application',time()];
        $log->export();
        if($check_sign == $sign){
            if ($status == 1) {
                $userCharge = UserCharge::find()->where('trade_no = :trade_no', [':trade_no' => $sdorderno])->one();
                if (!empty($userCharge)) {
                    //充值状态：1待付款，2成功，-1失败
                    if ($userCharge->charge_state == 1) {
                        //找到这个用户
                        $user = User::findOne($userCharge->user_id);

                        //给用户加钱
                        $user->account += $userCharge->amount;
                        if ($user->save()) {
                            //更新充值状态---成功
                            $userCharge->charge_state = 2;
                        }
                    }
                    //更新充值记录表
                    $userCharge->update();

                    echo "success";
                    exit();
                }
            }
        }
    }

    public function actionIndex()
    {

        $this->view->title = '首页';
        //国内期货
        $cashProduct   = Product::getIndexCashProduct();
        $volumeProduct = Product::getIndexVolumeProduct();
        $productCode   = implode(',', array_values(Yii::$app->params['productCode']));

        $article = Article::find()->orderBy('publish_time desc')->one();

        return $this->render('index', compact('cashProduct', 'volumeProduct', 'productCode', 'article'));
    }

    /**
     * 获取商品价格
     * @return mixed
     */
    public function actionAjaxAllProduct()
    {
//        $name = post('data');
        //周末休市
        // if (date('w') == 6 || date('w') == 0) {
        //     return success(['name' => $name, 'price' => '休市', 'diff' => '休市', 'diff_rate' => '休市']);
        // }
        //期货的最新价格数据集
        $newData = DataAll::allProductPrice();

        if (! empty($newData)) {
//            return success($newData->attributes);
            return success($newData);
        }

        return error('无此期货数据！');
    }

    public function actionIndexDetail()
    {
        return $this->render('indexDetail');
    }

    public function actionRule()
    {
        $this->view->title = '平台介绍';

        return $this->render('rule');
    }

    // public function actionPc()
    // {
    //     $order = Order::find()->where(['order_state' => 1])->all();
    //     foreach($order as $k => $v ) {
    //         Order::sellOrder($v['id'],1);

    //     }
    //     test('运行成功');
    // }

    public function actionAttention()
    {
        $this->view->title = '我的关注';

        return $this->render('attention');
    }

    //期货的最新价格数据集
    public function actionAjaxNewProductPrice()
    {
        $name = post('data');
        //周末休市
        if ((date('w') == 6 && date('G') > 4) || date('w') == 0) {
            return success(['name' => $name, 'price' => '休市', 'diff' => '休市', 'diff_rate' => '休市']);
        }
        //期货的最新价格数据集
        $newData = DataAll::newProductPrice($name);
        if (! empty($newData)) {
            return success($newData->attributes);
        }

        return error('无此期货数据！');
    }

    public function actionRegister()
    {
        $this->view->title = '注册';
        $model                 = new User(['scenario' => 'register']);
        $model->registerMobile = session('registerMobile');
        //有微圈显示邀请码
        if (get('pid')) {
            $model->pid  = get('pid');
            $user        = User::find()->where(['id' => $model->pid])->one();
            $retail      = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => $user->admin_id])->one();
            $model->code = isset($retail) ? $retail->code : '';
        }

        if (get('code')){
            $model->code = get('code');
        }



        if ($model->load(post())) {
            $model->username = clean($model->nickname);
            $model->nickname = clean($model->nickname);
            $model->face     = config('web_logo');
            $model->code = clean($model->code);
            $userPhone       = User::find()->where(['username' => $model->username])->one();
            if (! empty($userPhone)) {
                return error('已经注册过了');
            }
            // 默认模拟账户金额
            $model->moni_acount = 100000;

            if (empty($model->code)) {
                $model->code = '344485';
            }
            if ($model->validate()) {
                $retail = Retail::find()->joinWith(['adminUser'])
                    //->andWhere(['adminUser.power' => 9998])
                    ->andWhere(['retail.code' => $model->code])
                    ->one();
                if (! empty($retail)) {
                    $model->admin_id = $retail->adminUser->id;
                } else {
                    return error('请填写正确的邀请码');
                }
                $model->face = config('web_logo');
                $model->hashPassword()->insert(false);
                $model->login(false);

                UserPoints::getPoints($model->id, UserPoints::TYPE_GET_REGISTER);

                return success(url(['site/index']));
                // return $this->goBack();
            } else {
                return error($model);
            }

//            if (!empty($model->code)) {
//                $retail = Retail::find()->joinWith(['adminUser'])->where(['code' => $model->code])->one();
//                if (!empty($retail)) {
//                    $model->pid = 0;
//                    $model->admin_id = $retail->adminUser->id;
//                    //已扫码为主
//                    if (!empty($model->pid)) {
//                        $user = User::find()->where(['state' => User::STATE_VALID, 'mobile' => $model->pid])->one();
//                        if (!empty($user)) {
//                            $model->pid = $user->id;
//                            $model->admin_id = $user->admin_id;
//                        }
//                    }
//                } else {
//                    return error('请填写正确的邀请码(如果有邀请人手机号，邀请码可以为空！)');
//                }
//            } else {
//                $user = User::find()->where(['state' => User::STATE_VALID, 'mobile' => $model->pid])->one();
//                if (!empty($user)) {
//                    $model->pid = $user->id;
//                    $model->admin_id = $user->admin_id;
//                } else {
//                    return error('请填写正确的邀请码，或者扫码进入！');
//                }
//            }
//
//            if ($model->validate()) {
//                $model->hashPassword()->insert(false);
//                $model->login(false);
//                //新用户注册
//                $model->giveRegUserCoupon();
//                return success(url(['site/index']));
//            } else {
//                return error($model);
//            }
        }
//        $user = User::findOne(get('id'));
//
//        if (!empty($user)) {
//            $model->pid = $user->mobile;
//            $model->recMobile = substr($user->mobile, 0, 3) . '*****' . substr($user->mobile, -3) . '            (推广人)';
//        }

        return $this->render('register', compact('model', 'wx'));
    }

    public function actionLogin()
    {
        self::beginForm();
        $this->view->title = config('web_name', '夕秀微盘') . '-登录';

        if (! user()->isGuest) {
            return $this->redirect(['index']);
        }

        $model = new User(['scenario' => 'login']);

        if ($model->load(post())) {
            $user = User::find()->where(['mobile' => $model->username])->one();
            if (! empty($user)) {
                if ($user->state == User::STATE_INVALID) {
                    return error('您的账号已经冻结！');
                }
            }
            if ($model->login()) {
                return success(url('site/index'));
            } else {
                return error($model);
            }
        }

        return $this->render('login', compact('model'));
    }

    public function actionShareUrl($id)
    {
        $this->view->title = '邀请注册界面';
        $url               = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . WX_APPID . '&redirect_uri=http%3a%2f%2f' . $_SERVER['HTTP_HOST'] . '/site/register%3fid%3d' . $id . '&response_type=code&scope=snsapi_userinfo&state=index#wechat_redirect';

        return $this->render('shareUrl', compact('url'));
    }

    public function actionForget()
    {
        $this->view->title = '忘记密码';
        $model             = new User(['scenario' => 'forget']);

        if ($model->load(post())) {
            $user = User::find()->andWhere(['mobile' => post('User')['mobile']])->one();
            if (! $user) {
                return error('请输入手机号码！');
            }
            if ($model->validate()) {
                $user->password = $model->password;
                $user->hashPassword()->update();
                $user->login(false);

                return success(url('site/index'));
                // return $this->goBack();
            } else {
                return error($model);
            }
        }

        return $this->render('forget', compact('model'));
    }

    /**
     * 退出登录
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        user()->logout(false);

        return $this->redirect(['index']);
    }

    /**
     * 验证码
     * @return mixed
     */
    public function actionVerifyCode()
    {
        $mobile = post('mobile');
        // 生成随机数，非正式环境一直是1234
        $randomNum = rand(1024, 9951);
        $res       = sendcode($mobile, $randomNum);
        // $res = ['code'=>2, 'info' => $randomNum];
        if ($res['code'] == 2) {
            // 记录随机数
            session('verifyCode', $randomNum, 1800);
            session('registerMobile', $mobile);
        }
        return success($res['info']);
    }

    public function actionTest(){

       $info =  DataSr0::find()->all();
       foreach ($info as $k=>$v){
           print_r($v->Name);
       }
        $riseQuery = Order::find()->joinWith('product')->where([
            'order_state'        => 2,
            'product.table_name' => 'cl',
        ])->select('SUM(hand) hand')->one();
        dump($riseQuery->hand);
    }

     public function actionTest1(){
         $gather = new GatherJincheng();
         $gather->run();
     }

    /**
     * @param $id
     * 获取商品数据
     */
    public function actionGetData()
    {
        $symbol = get('symbol');
        $type = get('type');
        $model = Product::find()->where(['identify'=>$symbol])->one();
        $name  = $model->table_name;
        $limit = $type==5?2000:'300';
        $data  = self::db("SELECT
            id,
            price,
            Low,
            High,
            Open,
            Volume,
            Amount,
            Close,
            time
        FROM
            data_{$name}
        ORDER BY
            id DESC
        LIMIT {$limit}")->queryAll();

        $data1  = self::db("SELECT
            time
        FROM
            data_{$name}
        ORDER BY
            id DESC
        LIMIT 1")->queryOne();
        $arr = [];
        if ($type == 5){
            foreach ($data as $k=>$v){
                if (!(($v['time']-strtotime(date("Y-m-d H",$data1['time']).":00:00"))%1800)){
                    $arr[] = $v;
                }
            }
            $data = $arr;

        }
        array_filter($data,function (&$item){
            $item['Date'] = (string)($item['time']);
            $item['Open'] = floatval($item['Open']);
            $item['Low'] = floatval($item['Low']);
            $item['High'] = floatval($item['High']);
            $item['Close'] = floatval($item['Close']);
            $item['Volume'] = floatval($item['Volume']);
            $item['Amount'] = floatval($item['Amount']);
            unset($item['time']);
            unset($item['id']);
        });
     echo json_encode($data);die;

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

    public function actionGetFn()
    {
        $symbol = get('symbol');
        $data = DataAll::find()->where(['symbol'=>$symbol])->asArray()->one();
        $data['SP1'] = $data['sp'];
        $data['BP1'] = $data['bp'];
        $data['NewPrice'] = $data['price'];
        $data['SV1'] = rand(3,98);
        $data['BV1'] = rand(5,67);
        $data['High'] = $data['high'];
        $data['Open'] = $data['open'];
        $data['Open_Int'] = 0;
        $data['Price3'] = 0;
        $data['Low'] = $data['low'];
        $data['LastClose'] = $data['close'];
        $data['Price2'] = 0;
        $data['Amount'] = 0;
       echo json_encode($data);
       exit();
    }
    /**
     * 获取昨日收盘价
     * @param string $symbol 产品标识
     * @return string  昨日收盘价
     **/
    public function getNewClose($symbol){
        $k_params = [
            'market'      => $symbol,
            'type'   => '1day',
            'size'=>3
        ];
        $kline_data = $this->sendRequest(STOCKET_KURL, $k_params, 'GET', []);//k线数据
        $kline_data = $kline_data['msg'];
        $k_data = json_decode($kline_data,1);
        $yes_close = $k_data['data'][1][4];
        return $yes_close;
    }

    /**
     * 输出xml字符
     * @throws WxPayException
     **/
    private function ToXml($array)
    {
        $xml = "<xml>";
        foreach ($array as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
            } else {
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
            }
        }
        $xml .= "</xml>";

        return $xml;
    }

    public function actionWrong()
    {
        $this->view->title = '错误';

        return $this->render('/user/wrong');
    }

    public function actionR1()
    {
        if (req()->isPost) {
            return success(Yii::$app->getRequest()->getHeaders());
        }

        return $this->render('r1');
    }

    public function actionR2()
    {
        if (req()->isPost) {
            return $this->redirect(['r1']);
        }

        return $this->render('r2');
    }

    public function actionDetail()
    {
        $this->layout      = false;
        $this->view->title = '图表';

        return $this->render('Detail');
    }
    public function actionKline()
    {
        $model = post('model');
        $identify = post('identify');
        switch ($model)
        {
            case '1':
                $url = "https://stock.sina.com.cn/futures/api/jsonp.php//InnerFuturesNewService.getMinLine?symbol=".$identify;
                break;
            case '5':
                $url = "http://stock2.finance.sina.com.cn/futures/api/json.php/IndexService.getInnerFuturesMiniKLine5m?symbol=".$identify;
                break;
            case '30':
                $url = "http://stock2.finance.sina.com.cn/futures/api/json.php/IndexService.getInnerFuturesMiniKLine30m?symbol=".$identify;
                break;
            case 'day':
                $url = "http://stock2.finance.sina.com.cn/futures/api/json.php/IndexService.getInnerFuturesDailyKLine?symbol=".$identify;
                break;
            default:
                $url="";
                break;
        }
        if($url)
        {
            $data = str_replace('(', '', Curl::get($url));
            $data = str_replace(');', '', $data);
            $data = json_decode($data, true);
            $data = json_encode(['data' => $data]);

            return $data;
        }
        return false;
    }

    public function actionGetLine()//分时线接口，9小时累进;全日线，当天24小时；
    {
        $id=get('pid');
        $model = Product::findModel($id);
        $name = $model->table_name;


        return false;
        if(empty(get('time')))
        {
            $end=date("Y-m-d H:i:s",time()+60*60*4);
            // $end=date("2017-12-02 09:52:44");
            $start=date("Y-m-d H:i:s",strtotime($end)-60*60*7);
        }
        else
        {
            $start=date("Y-m-d H:i:s",get('time')/1000);
            $end=date("Y-m-d H:i:s",get('time')/1000+10800);
        }
        if(get('isAllDay')=='true')
        {
            $end=date("Y-m-d 23:23:59");
            //$end=date("2017-12-02 23:23:59");
            $start=date("Y-m-d H:i:s",strtotime($end)-60*60*24);

        }

        $format='%Y-%m-%d %H:%i';
        $data = self::db("SELECT
                 cu.price indices, UNIX_TIMESTAMP(DATE_FORMAT(time,'".$format."')) * 1000 time
        FROM
            (
                SELECT
                    
                    max(d1.id) id
                FROM
                    data_" . $name . " d1
                where time >'".$start."' and time <'".$end."'
                group by
                    DATE_FORMAT(time,'".$format."')
            ) sub,
            data_" . $name . " cu
        WHERE
            cu.id = sub.id")->queryAll();
        //$response->send();
        $da=null;
        if(!empty($data))
        {
            for($i=0;$i<count($data);$i++)
            {
                $da[$i]['time']=(float)$data[$i]['time'];
                $da[$i]['indices']=(float)$data[$i]['indices'];

            }
        }

        $jsonarr['msg']="请求成功！";
        $jsonarr['success']=true;
        $jsonarr['totalCount']=0;
        $jsonarr['resultObject']['startTime']=strtotime($start)*1000;
        $jsonarr['resultObject']['endTime']=strtotime($end)*1000;
        $jsonarr['resultList']=$da;
        echo json_encode($jsonarr);

    }
    public function actionGetPrice()
    {
        $simple_identify = post('simple_identify');
        $url = "http://hq.sinajs.cn/list=hf_".$simple_identify;
        if($url)
        {
            $data = str_replace('var hq_str_hf_'.$simple_identify.'="', '', Curl::get($url));
            $data = str_replace('";', '', $data);
            $data = explode(',', $data);
            unset($data[13]);
            $data = json_encode(['data' => $data]);
            return $data;
        }
    }

    public function actionGetProList($symbol)
    {

         $symbol = explode(',',$symbol);
         $data = DataAll::find()->where(['symbol'=>$symbol])->asArray()->all();

         foreach ($data as $k=>&$v){
             $v['NewPrice'] = $v['price'];
             $v['LastClose'] = $v['close'];
             $v['Symbol'] = $v['symbol'];
         }

             echo json_encode($data);
             exit();

    }

    public function actionTest2(){
        $model = new GatherJincheng();
        $model->run();
    }

    /*定时删除行k线库数据*/
    public function actionDels()
    {
          $a = \Yii::$app->params['productList'];
          array_walk($a,function ($item){
              $last_id = self::db("select id From data_{$item} order by id desc limit 1")->queryone(); //获取第2000条数据
              $count = self::db("select count(*) as count From data_{$item}")->queryone();
              if ($count > KData_MAX_NUM){
                  $limit_id = $last_id['id'] - KData_MAX_NUM;
                  $flag = self::db("select id from data_{$item} where id<{$limit_id}")->queryone();
                  while($flag){
                      self::dbDelete("data_{$item}","id<{$limit_id} limit 500");
                      $flag = self::db("select id from data_{$item} where id<{$limit_id}")->queryone();
                  }
              }
          });
    }

    /*定时删除错误数据*/
      public function actionDelWrong()
      {
          $a = \Yii::$app->params['productList'];
          array_walk($a,function ($item){
              $name = self::db("select id,Name From data_{$item} order by id asc limit 1")->queryone();//最早一条数据
              $name = $name['Name'];
              self::dbDelete("data_{$item}","Name != '{$name}' or price = 0 limit 20");
          });
      }


    public function actionTest6()
    {
        $obj = User::findOne(100051);
        if ($obj->state == 1){
            $obj->account += 100;
           $obj->state = 2;
//            \yii::error('dd','pay');
            $obj->save(0);
        }

    }



}
