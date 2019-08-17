<?php

namespace home\controllers;

use Yii;
use home\models\User;
use home\models\UserAccount;
use home\models\UserWithdraw;
use home\models\UserCharge;
use common\helpers\FileHelper;
use home\models\Product;
use home\models\Order;
use home\models\ProductPrice;
use home\models\Coupon;
use home\models\UserCoupon;
use home\models\Retail;
use home\models\AdminUser;
use home\models\DataAll;
use home\models\Article;
use home\models\UserAction;

class PcController extends \home\components\Controller
{

    public $enableCsrfValidation = false;
    public function beforeAction($action)
    {
    	$this->layout = 'web_main';
//        if (user()->isGuest) {
//            $this->redirect('/site/login');
//            return false;
//        }
        if (!parent::beforeAction($action)) {
            return false;
        } else {
            $actions = ['login', 'register', 'forget'];
            if (user()->isGuest && !in_array($this->action->id, $actions)) {
                $this->redirect(['web/login']);
                return false;
            }
            return true;
        }
    }

	public function actionSystem()
    {
        $this->view->title = '系统公告';
        return $this->render('/web/user/system');
    }
	public function actionFirmbargain()
    {
        $this->view->title = '交易';
        return $this->render('user/firmbargain');
    }
	public function actionPassword()
    {
    	$this->layout = false;
    	
        $this->view->title = '修改密码';
        return $this->render('user/password');
    }
	public function actionPtp()
    {
    	$this->layout = false;
        $this->view->title = '推广赚钱';
        return $this->render('user/ptp');
    }
	public function actionTradegrid()
    {
        $this->layout = false;
        $this->view->title = '登录成功';
        return $this->render('/web/user/tradegrid');
    }
    public function actionWithdraw()
    {
        $this->view->title = '提现';
        return $this->render('user/withdraw');
    }
	public function actionIntegral()
    {
        $this->view->title = '积分';
        return $this->render('user/integral');
    }
	public function actionDeallist()
    {
        $this->view->title = '模拟交易';
        return $this->render('user/deallist');
    }
	public function actionRechargeMoney()
    {
        $this->view->title = '充值';
        return $this->render('user/rechargemoney');
    }
	public function actionInformationList()
    {
    	$this->layout=false;
        $this->view->title = '资讯列表';
        return $this->render('user/InformationList');
    }
	public function actionRule()
    {
        $this->view->title = '玩法(规则)';
        return $this->render('user/rule');
    }


    //可用界面
    public function actionIndex()
    {
        $this->layout = 'web_main';
        $this->view->title = '首页';
//        if (user()->isGuest) {
//            return $this->redirect('/web/site/index');
//            return $this->render('/web/site/index', compact('model'));
//        }

        return $this->render('/web/user/index');
    }
    public function actionRegister()
    {
        $this->view->title = '注册';
        $model = new User(['scenario' => 'register']);
        $model->registerMobile = session('registerMobile');

        if ($model->load(post())) {
            $model->username = $model->mobile;
            $model->face = config('web_logo');
            $userPhone = User::find()->where(['username' => $model->username])->one();
            if (!empty($userPhone)) {
                return error('已经注册过了');
            }

            if ($model->validate()) {
//                $retail = Retail::find()->joinWith(['adminUser'])
//                    ->andWhere(['adminUser.power' => 9995])
//                    ->andWhere(['retail.code' => $model->code])
//                    ->one();
//                if (!empty($retail)) {
//                    $model->admin_id = $retail->adminUser->id;
//                } else {
//                    return error('请填写正确的邀请码');
//                }
                $model->face = config('web_logo');
                $model->hashPassword()->insert(false);
                $model->login(false);
                return success(url(['site/index']));
                // return $this->goBack();
            } else {
                return error($model);
            }
        }
        if(get('pid'))
        {
            $model->pid = get('pid');
            $user = User::find()->where(['id' => $model->pid])->one();
            $retail = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => $user->admin_id])->one();
            $model->code = isset($retail)?$retail->code:'';
        }
        return $this->render('/web/site/register', compact('model', 'wx'));
    }
    public function actionLogin()
    {
        $this->view->title = '登录';
//        if (!user()->isGuest) {
//            return $this->redirect(['index']);
//        }

        $model = new User(['scenario' => 'login']);


        if ($model->load(post())) {
            $user = User::find()->where(['mobile' => $model->username])->one();
            if (!empty($user)) {
                if ($user->state == User::STATE_INVALID) {
                    return error('您的账号已经冻结！');
                }
            }

            if ($model->login()) {
//                dump($model->login());
//                dump($model);exit;

                return success(url('/web/site/login'));
            } else {
                return error($model);
            }
        }
        return $this->render('/web/site/login', compact('model'));
    }
    public function actionQuotation()
    {
        $this->view->title = '实盘交易';
        return $this->render('/web/user/quotation');
    }
    public function actionQuotInter()
    {
//  	$this->layout=false;
        $type = $_GET['type'];
        if($type == 1){
            $Product = Product::getIndexCashProduct();
            $this->view->title = '实盘交易(国际)';
        }else{
            $Product = Product::getIndexVolumeProduct();
            $this->view->title = '实盘交易(国内)';
        }
        return $this->render('user/quotInter',compact('Product'));
    }
    public function actionAjaxAllProduct()
    {
        $newData = DataAll::allProductPrice();

        if (!empty($newData)) {
            return success($newData);
        }
        return error('无此期货数据！');
    }
    public function actionLatestNews()
    {
        $this->view->title = '最新资讯';
        return $this->render('/web/user/latestNews');
    }
    public function actionLoginsucc()
    {
        $this->view->title = '登录成功';
        return $this->render('/web/user/loginsucc');
    }
    public function actionNewGui()
    {
        $this->view->title = '新手指引';
        return $this->render('/web/user/newGui');
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
        $res = sendsms($mobile, $randomNum);
        // $res = ['code'=>2, 'info' => $randomNum];
        if ($res['code'] == 2) {
            // 记录随机数
            session('verifyCode', $randomNum, 1800);
            session('registerMobile', $mobile);
        }
        return success($res['info']);
    }

    //2018-05-17 添加9个界面
	public function actionUserannounce()
    {
        $this->view->title = '公告';
        return $this->render('/web/user/userannounce');
    }
	public function actionUsercash()
    {
        $this->view->title = '提现';
        return $this->render('/web/user/usercash');
    }
	public function actionUsercharge()
    {
        $this->view->title = '充值';
        return $this->render('/web/user/usercharge');
    }
	public function actionUserinvite()
    {
        $this->view->title = '推广赚钱';
        return $this->render('/web/user/userinvite');
    }
	public function actionUsernews()
    {
        $this->view->title = '信息中心';
        return $this->render('/web/user/usernews');
    }
	public function actionUserpassword()
    {
        $this->view->title = '修改密码';
        return $this->render('/web/user/userpassword');
    }
	public function actionUserpoint()
    {
        $this->view->title = '我的积分';
        return $this->render('/web/user/userpoint');
    }
	public function actionUserrecord()
    {
        $this->view->title = '交易记录';
        return $this->render('/web/user/userrecord');
    }
	public function actionUsersim()
    {
        $this->view->title = '模拟交易列表';
        return $this->render('/web/user/usersim');
    }
}
