<?php

namespace home\controllers;

use common\models\UserPoints;
use home\models\UserNotice;
use Yii;
use home\models\User;
use home\models\Product;
use home\models\Article;
use home\models\DataAll;
use home\models\Retail;
use yii\log\FileTarget;
use home\models\UserCharge;
class SiteController extends \home\components\Controller
{
    public function beforeAction($action)
    {
        if (! parent::beforeAction($action)) {
            return false;
        }

        return true;
    }

    public function actionIndex()
    {

        if ($this->module->id == 'app-pc'){
            $this->layout      = 'web_main';
            $this->view->title = '首页';
            // 国内期货
            $cashProduct = Product::getIndexCashProduct();
            // 国际期货
            $volumeProduct = Product::getIndexVolumeProduct();
            $article = Article::find()->orderBy('publish_time desc')->one();
            return $this->render('index', compact('cashProduct', 'volumeProduct', 'article'));
        }else{
            return $this->redirect(url(['order/buy','id'=>1,'model_type'=>1]));
        }


    }

    public function actionLogin()
    {
        $this->layout      = 'web_main';
        $this->view->title = '登录';
        if (! user()->isGuest) {

            return $this->redirect(['order/buy','id'=>1,'model_type'=>1]);
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
                if ($this->module->id == 'app-pc'){
                    return success(url(['/']));
                }else{
                    return success(url(['order/buy','id'=>1,'model_type'=>1]));
                }

            } else {
                return error($model);
            }
        }

        return $this->render('login', compact('model'));
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
        $data['PriceChangeRatio']=($data['NewPrice']-$data['LastClose'])*100/$data['LastClose'];
        echo json_encode($data);
        exit();
    }
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
            Date
        FROM
            data_{$name}
        ORDER BY
            id DESC
        LIMIT {$limit}")->queryAll();

        $data1  = self::db("SELECT
            Date
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
            $item['Date'] = (string)($item['Date']);
            $item['Open'] = floatval($item['Open']);
            $item['Low'] = floatval($item['Low']);
            $item['High'] = floatval($item['High']);
            $item['Close'] = floatval($item['Close']);
            $item['Volume'] = floatval($item['Volume']);
            $item['Amount'] = floatval($item['Amount']);
            $item['price'] = floatval($item['Close']);
            unset($item['time']);
            unset($item['id']);
        });
        echo json_encode($data);die;
    }
    public function actionHynotify()   //翰银回调
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
                        exit("ok");
                    }
                }
            }
        }
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

    public function actionAjaxReadeMessage()
    {
        $msgId  = post('msg_id');
        $notice = UserNotice::find()->where(['id' => $msgId])->one();
        if ($notice) {
            $notice->status = 2;
            $notice->save();

            return 1;
        }

        return 0;
    }

    public function actionRegister()
    {
        $this->layout      = 'web_main';
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

        if ($model->load(post())) {
            $model->username = clean($model->mobile);
            $model->nickname = clean($model->nickname);
            $model->face     = config('web_logo');
            $userPhone       = User::find()->where(['username' => $model->username])->one();
            if (! empty($userPhone)) {
                return error('已经注册过了');
            }

            // 默认代理商
            if (empty($model->code)) {
                $model->code = '344485';
            }

            // 默认模拟账户金额
            $model->moni_acount = 100000;

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
            } else {
                return error($model);
            }
        }

        return $this->render('register', compact('model'));
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

    /**
     * 退出登录
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        user()->logout(false);

        return $this->redirect(['index']);
    }

    public function actionForget()
    {
        $this->layout      = 'web_main';
        $this->view->title = '忘记密码';
        $model             = new User(['scenario' => 'forget']);

        if ($model->load(post())) {
            $user = User::find()->andWhere(['mobile' => post('User')['mobile']])->one();
            if (! $user) {
                return error('请输入正确手机号码！');
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


}
