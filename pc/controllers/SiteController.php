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
        $this->layout      = 'web_main';
        $this->view->title = '首页';

        // 国内期货
        $cashProduct = Product::getIndexCashProduct();
        // 国际期货
        $volumeProduct = Product::getIndexVolumeProduct();

        $article = Article::find()->orderBy('publish_time desc')->one();

        return $this->render('index', compact('cashProduct', 'volumeProduct', 'article'));
    }

    public function actionLogin()
    {
        $this->layout      = 'web_main';
        $this->view->title = '登录';
        if (! user()->isGuest) {
            return $this->redirect(['site/index']);
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
            $model->username = clean($model->nickname);
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
        $randomNum = YII_ENV_PROD ? rand(1024, 9951) : 1234;
        $res       = sendsms($mobile, $randomNum);
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
