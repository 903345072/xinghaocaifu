<?php

namespace frontend\controllers;

use common\models\UserPoints;
use frontend\models\UserFeedback;
use Yii;
use frontend\models\User;
use frontend\models\UserAccount;
use frontend\models\UserWithdraw;
use frontend\models\UserCharge;
use common\helpers\FileHelper;
use frontend\models\Product;
use frontend\models\Order;
use frontend\models\ProductPrice;
use frontend\models\Coupon;
use frontend\models\UserCoupon;
use frontend\models\UserNotice;
use frontend\models\UserPayment;
use frontend\models\Retail;
use frontend\models\AdminUser;
use frontend\models\DataAll;
use frontend\models\Article;
use frontend\models\UserAction;

class UserController extends \frontend\components\Controller
{
    public function beforeAction($action)
    {
        $this->layout = 'main';
        if (user()->isGuest) {
            $this->redirect('/site/login');

            return false;
        }
        if (! parent::beforeAction($action)) {
            return false;
        } else {
            return true;
        }
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShare()
    {
        $this->view->title = '我的分享';
        if (user()->isGuest) {
            return $this->redirect('/site/login');
        }
        //生成二维码
        require Yii::getAlias('@vendor/phpqrcode/phpqrcode.php');

        $url                  = 'http://' . $_SERVER['HTTP_HOST'] . url(['/site/shareUrl', 'id' => u()->id]); //二维码内容
        $errorCorrectionLevel = 'L';//容错级别   
        $matrixPointSize      = 6;//生成图片大小
        $filePath             = Yii::getAlias('@webroot/' . config('uploadPath') . '/images/');
        FileHelper::mkdir($filePath);
        $src = $filePath . 'code_' . u()->id . '.png';
        //生成二维码图片   
        \QRcode::png($url, $src, $errorCorrectionLevel, $matrixPointSize, 2);
        $img = config('uploadPath') . '/images/code_' . u()->id . '.png';

        return $this->render('share', compact('img', 'url'));
    }

    public function actionWithDraw()
    {
        $this->layout      = 'user';
        $this->view->title = '提现';
        $charges = config('charges')*post('UserWithdraw')['amount']/100;
        if (user()->isGuest) {
            return $this->redirect('/site/login');
        }
        $user        = User::findModel(u()->id);
        $userAccount = UserAccount::find()->where(['user_id' => u()->id])->one();
        if (empty($userAccount)) {
            $userAccount = new UserAccount();
        }
        $userAccount->scenario = 'withDraw';
        $userWithdraw          = new UserWithdraw();
        if ($userAccount->load(post()) || $userWithdraw->load(post())) {
            if (!Yii::$app->security->validatePassword(post('password'), $user->password)){
                return error('登陆密码错误');
            }
            $userAccount->realname  = clean($userAccount->realname);
            $userAccount->bank_card = clean($userAccount->bank_card);
            $userAccount->bank_address = clean($userAccount->bank_address);
            $userWithdraw->amount = post('UserWithdraw')['amount'];
            $userWithdraw->charges = $charges;
            if (! is_numeric($userWithdraw->amount)) {
                return error('取现金额必须是数字');
            }
            /*if ($userWithdraw->amount > 20000) {
                return error('取现不能超过20000');
            }*/
            if ($userWithdraw->amount < 100) {
                return error('取现不能小于100');
            }
            //经纪人提现现必须要有200元资产冻结
            if ($userWithdraw->amount > ($user->account - $user->blocked_account - 200) && $user->is_manager == User::IS_MANAGER_YES) {
                return error('经纪人提现现必须要有200元资产冻结！');
            }
            if ($userWithdraw->amount < 0 || $userWithdraw->amount > ($user->account - $user->blocked_account)) {
                return error('取现金额不能超过您的可用余额！');
            }
            //提现必须要有一手80元现金交易记录
//              $order = Order::find()->select('SUM(deposit) AS deposit')->where(['>', 'fee', 0])->andWhere(['user_id' => u()->id])->one();
//              if ($order->deposit < 300) {
//                  return error('提现必须要有300元现金交易记录! ');
//              }

            $userAccount->user_id   = $userWithdraw->user_id = u()->id;
            $userAccount->bank_user = $userAccount->realname;
            $userAccount->id_card   = 'xx';
            if ($userAccount->validate()) {
                if ($userAccount->id) {
                    $userAccount->update();
                } else {
                    $userAccount->insert(false);
                }
                $userWithdraw->account_id = $userAccount->id;
                $userWithdraw->insert(false);
                //扣除取现金额
                $user->account -= $userWithdraw->amount+$charges;
                $user->save(false);
                session('verifyCode', null);

                return success('取现申请成功！');
            } else {
                return error($userAccount);
            }
        }

        $bankList = Yii::$app->params['bankList'];

        return $this->render('withDraw', compact('userAccount', 'userWithdraw', 'user', 'bankList'));
    }

    public function actionDeposits()
    {
        $this->view->title = '提现记录';
        $list              = UserWithdraw::find()->where(['user_id' => u()->id])->all();

        return $this->render('deposits', compact('list'));
    }

    public function actionTransDetail()
    {
        $this->view->title = '交易明细';

        $user  = User::findModel(u()->id);
        $start = date('Y-m-01 00:00:00', time());
        $end   = date('Y-m-01 00:00:00', strtotime(date('Y-m-01', time()) . '+1 month'));
        $query = Order::find()->where(['user_id' => u()->id])->with('product')->orderBy('order.created_at DESC');
        if (post('data') || get('year')) {
            if (post('data')) {
                $arr = post('data');
            } else {
                $arr = get();
            }
            $start = $arr['year'] . '-' . $arr['month'] . '-01 00:00:00';
            if (($arr['month'] + 1) > 12) {
                $arr['year']  += 1;
                $arr['month'] = 1;
            } else {
                $arr['month'] += 1;
            }
            $start = post('data')['year'] . '-' . post('data')['month'] . '-01 00:00:00';
            $end   = $arr['year'] . '-' . $arr['month'] . '-01 00:00:00';
        }
        $query = $query->andWhere(['>', 'order.created_at', $start])->andWhere(['<', 'order.created_at', $end]);

        $data      = $query->paginate(10);
        $count     = $query->totalCount;
        $pageCount = $count / 10;
        if (! is_int($pageCount)) {
            $pageCount = (int) $pageCount + 1;
        }
        if (post('data') || get('year')) {
            return success($this->renderPartial('_transDetail', compact('data')), $pageCount);
        }
        //总金额
        $allOrder = Order::find()->where(['user_id' => u()->id])->select('SUM(deposit) AS deposit')->one();

        return $this->render('transDetail', compact('user', 'count', 'pageCount', 'allOrder', 'data'));
    }

    public function actionIntegral()
    {
        $this->view->title = '积分';

        $userId = u()->id;
        $points = User::find()->where(['id' => $userId])->one()->points;

        $userPoints = UserPoints::find()
            ->where(['user_id' => $userId])
            ->orderBy(['id' => 'desc'])
            ->limit(20)
            ->all();

        return $this->render('integral', compact('points', 'userPoints'));
    }

    public function actionExperience()
    {
        $this->view->title = '体验券';

        $userCoupons = UserCoupon::find()->andWhere([
            'use_state' => UserCoupon::USE_STATE_WAIT,
            'user_id'   => u()->id,
        ])->andWhere(['>', 'number', 0])->andWhere([
            '>',
            'valid_time',
            self::$time,
        ])->joinWith(['coupon'])->orderBy('amount ASC')->all();

        return $this->render('experience', compact('userCoupons'));
    }

    public function actionManager()
    {
        $this->view->title = '申请经纪人';
        //如果是经纪人
        if (u()->is_manager == User::IS_MANAGER_YES) {
            $this->view->title = '我是经纪人';
            $idArr             = User::getUserOfflineId();
            $data              = User::getUserOfflineData($idArr);

            return $this->render('isManager', compact('data', 'idArr'));
        }
        $userAccount = UserAccount::find()->where(['user_id' => u()->id])->one();
        if (empty($userAccount)) {
            $userAccount = new UserAccount();
        }
        if ($userAccount->load(post())) {
            $userAccount->user_id   = u()->id;
            $userAccount->bank_user = $userAccount->realname;
            if ($userAccount->validate()) {
                //判断代理商邀请码是否存在
                $retail = Retail::find()->with(['adminUser'])->where(['code' => $userAccount->coding])->one();
                if (empty($retail)) {
                    return error('此邀请码不存在！');
                }
                if ($userAccount->id) {
                    $userAccount->update();
                } else {
                    $userAccount->insert(false);
                }
                $user              = User::findModel(u()->id);
                $user->apply_state = User::APPLY_STATE_WAIT;
                $user->tem_id      = $retail->adminUser->id;
                $user->update();

                return success('信息提交成功！');
            } else {
                return error($userAccount);
            }
        }
        $retail              = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => u()->admin_id])->one();
        $userAccount->coding = $retail->code;

        return $this->render('manager', compact('userAccount'));
    }

    public function actionMyOffline()
    {
        $this->view->title = '名下用户记录';
        //如果是经纪人
        if (u()->is_manager != User::IS_MANAGER_YES) {
            return $this->redirect('/site/wrong');
        }
        //名下的用户
        $idArr = User::getUserOfflineId();
        // $idArr = array_merge($idArr[0], $idArr[1]);
        $idArr = $idArr[0];
        $query = User::find()->where(['state' => User::STATE_VALID])->andWhere([
            'in',
            'id',
            $idArr,
        ])->orderBy('created_at DESC');
        $data  = $query->paginate(8);

        return $this->render('myOffline', compact('data'));
    }

    public function actionManagerRule()
    {
        $this->view->title = '经纪人规范';

        return $this->render('managerRule');
    }

    /**
     * @return string
     * 充值金额
     */
    public function actionRecharge()
    {
        $this->view->title = '充值';

        if ($_POST) {
            $money = post('money');
            $type  = post('type');

            switch ($type) {
                case 1:
                default:
                    return $this->render('mobilewx', compact('money'));
                    break;
                case 2:
                    return $this->render('mobilezfb', compact('money'));
                    break;
                case 3:
                    return $this->render('mobilebank', compact('money'));
                    break;
            }
        }

        $user = User::findModel(u()->id);

        return $this->render('recharge', compact('user'));
    }

    public function actionRechargeList()
    {
        $list = UserPayment::find()->where(['user_id'=>u()->id])->orderBy('id', 'desc')->all();
        return $this->render('rechargeList', compact('list'));
    }

    /**
     * 充值记录
     */
    public function actionRechargeRecord()
    {
        $this->view->title = '充值记录';

        $query     = UserCharge::find()->where([
            'charge_state' => UserCharge::CHARGE_STATE_PASS,
            'user_id'      => u()->id,
        ])->orderBy('created_at DESC');
        $data      = $query->paginate(10);
        $pageCount = $query->totalCount / 10;
        if (! is_int($pageCount)) {
            $pageCount = (int) $pageCount + 1;
        }
        if (get('p') > 1) {
            return $this->renderPartial('_rechangeRecord', compact('data'));
        }

        return $this->render('rechargeRecord', compact('data', 'pageCount'));
    }

    /**
     * @return string|\yii\web\Response
     * 充值
     */
    public function actionPay()
    {
        $this->layout      = 'empty';
        $this->view->title = '安全支付';
        $amount            = post('money',10);
        switch (post('type', 2)) {
            case '1':
               $html = UserCharge::ylpay($amount, 'wangyin');//微信扫码支付，翰银支付
                if (! $html) {
                    return $this->redirect(['site/wrong']);
                }
                echo $html;
                break;
            case '2':
                $paytype = 'alipay';
               UserCharge::ourspay($amount,$paytype);//ourspay

                break;
            case '3':
        //微信、支付宝、银行卡线下转账
                $tip = '使用微信扫一扫即可转账';
                $src =config('web_rul').config('wx_qrcode');
                return $this->render('pay');
                break;
            default:
                return $this->render('zfpay', compact('info'));
                break;
        }
    }



    public function actionWrong()
    {
        $this->view->title = '错误';

        return $this->render('wrong');
    }

    public function actionGener()
    {
        $this->view->title = '推广赚钱';

        //如果是经纪人
        if (u()->is_manager == User::IS_MANAGER_YES) {
            $idArr = User::getUserOfflineId();
            $data  = User::getUserOfflineData($idArr);
            //查询邀请码
            $user   = User::find()->where(['id' => u()->id])->one();
            $retail = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => $user->admin_id])->one();
            $code   = isset($retail) ? $retail->code : '';

            return $this->render('gener', compact('data', 'idArr', 'code'));
        }

        $this->layout = 'user';
        $userAccount  = UserAccount::find()->where(['user_id' => u()->id])->one();
        if (empty($userAccount)) {
            $userAccount = new UserAccount();
        }
        if ($userAccount->load(post())) {
            $userAccount->user_id   = u()->id;
            $userAccount->realname = clean($userAccount->realname);
            $userAccount->id_card = clean($userAccount->id_card);
            $userAccount->bank_name = clean($userAccount->bank_name);
            $userAccount->bank_address = clean($userAccount->bank_address);
            $userAccount->bank_card = clean($userAccount->bank_card);
            $userAccount->bank_user = $userAccount->realname;
            if ($userAccount->validate()) {
                //判断代理商邀请码是否存在
                $retail = Retail::find()->with(['adminUser'])->where(['code' => $userAccount->coding])->one();
                if (empty($retail)) {
                    return error('此邀请码不存在！');
                }
                if ($userAccount->id) {
                    $userAccount->update();
                } else {
                    $userAccount->insert(false);
                }
                $user              = User::findModel(u()->id);
                $user->apply_state = User::APPLY_STATE_WAIT;
                $user->tem_id      = $retail->adminUser->id;
                $user->update();

                return success('信息提交成功！');
            } else {
                return error($userAccount);
            }
        }
        $retail              = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => u()->admin_id])->one();
        $userAccount->coding = $retail->code;

        return $this->render('be_gener', compact('userAccount'));
    }

    public function actionCaplog()
    {
        $this->view->title = '资金明细';
        $list              = UserWithdraw::find()->where(['user_id' => u()->id])->all();

        return $this->render('caplog', compact('list'));
    }

    public function actionIdea()
    {
        $this->view->title = '意见反馈';

        if ($_POST) {
            $content             = $_POST['content'];
            $userAction          = new  UserFeedback();
            $userAction->user_id = u()->id;
            $userAction->content = $content;
            $userAction->mobile  = u()->mobile;
            $userAction->name    = u()->nickname;
            $userAction->time    = date('Y-m-d H:i:s', time());
            $res                 = $userAction->insert();
            if ($res) {
                return 1;
            } else {
                return 2;
            }
        }

        return $this->render('idea');
    }

    public function actionConnKf()
    {
        $this->view->title = '意见反馈';

        if ($_POST) {
            $content             = $_POST['content'];
            $userAction          = new  UserFeedback();
            $userAction->user_id = u()->id;
            $userAction->content = $content;
            $userAction->mobile  = u()->mobile;
            $userAction->name    = u()->nickname;
            $userAction->time    = date('Y-m-d H:i:s', time());
            $res                 = $userAction->insert();
            if ($res) {
                return 1;
            } else {
                return 2;
            }
        }

        return $this->render('connkf');
    }

    public function actionTopUp()
    {
        $this->view->title = '充值记录';

        return $this->render('topUp');
    }

    public function actionHand()
    {
        $this->view->title = '新手指导';

        return $this->render('hand');
    }

    public function actionTask()
    {
        $this->view->title = '任务中心';

        return $this->render('task');
    }

    public function actionPassword()
    {
        $this->layout      = 'main';
        $this->view->title = '修改密码';

        $model           = User::findOne(u('id'));
        $model->scenario = 'password';

        if ($model->load($_POST)) {
            if ($model->validate()) {
                $model->password = $model->newPassword;
                if ($model->hashPassword()->update()) {
                    return success('修改成功');
                } else {
                    return error($model);
                }
            } else {
                return error($model);
            }
        }

        return $this->render('password', compact('model'));
    }

    public function actionLogout()
    {
        user()->logout(false);

        return $this->redirect('/site/index');
    }

    /**
     * @authname 资讯列表
     */
    public function actionInformation()
    {
        $this->view->title = '资讯列表';
//      $targetIds = UserAction::find()->where(['user_id' => u()->id, 'type' => UserAction::TYPE_NEWS])->select('target_id')->column();  
//      // 已读  
//      $readArticles = Article::find()->where(['state' => Article::STATE_VALID])->andWhere(['in', 'id', $targetIds])->orderBy('created_at DESC');
//      // 未读
//      $notReadArticles = Article::find()->where(['state' => Article::STATE_VALID])->andWhere(['not in', 'id', $targetIds])->orderBy('updated_at DESC'); 
//      // 已读分页
//      $readData = $readArticles->paginate();
//      $pageCount = $readArticles->totalCount / PAGE_SIZE;
//      if (!is_int($pageCount)) {
//          $pageCount = (int)$pageCount + 1;
//      }
//      // 未读分页
//      $notReadData = $notReadArticles->paginate();
//      $notPageCount = $notReadArticles->totalCount / PAGE_SIZE;
//      if (!is_int($notPageCount)) {
//          $notPageCount = (int)$notPageCount + 1;
//      }
//
//      // ajax判断
//      if (req()->isAjax) {
//          if (get('t')) {
//              return $this->renderPartial('_notInformation', compact('notReadData'), $notPageCount);
//          } else {            
//              return $this->renderPartial('_information', compact('readData'), $pageCount);
//          }
//      }

        return $this->render('information', compact('readData', 'pageCount', 'notReadData', 'notPageCount'));
    }

    /**
     * @authname 资讯详情
     */
    public function actionInfDetails()
    {
        $this->view->title = '资讯详情';
        $infDetails        = Article::find()->where(['id' => get('id')])->one();
        $userAction        = UserAction::find()->where(['target_id' => get('id')])->one();
        if (empty($userAction)) {
            $userAction            = new  UserAction;
            $userAction->user_id   = u()->id;
            $userAction->target_id = get('id');
            $userAction->insert();
        }

        return $this->render('infDetails', compact('infDetails'));
    }

    public function actionAbout()
    {
        $this->view->title = '关于我们';

        return $this->render('about');
    }

    public function actionMessage()
    {
        $this->view->title = '信息中心';

        $readnotice   = UserNotice::find()->where(['user_id' => u()->id, 'status' => 1])->orderBy('time desc')->all();
        $unreadnotice = UserNotice::find()->where(['user_id' => u()->id, 'status' => 2])->orderBy('time desc')->all();

        return $this->render('usermessage', compact('readnotice', 'unreadnotice'));
    }

    public function actionReadnotice()
    {
        $id            = $_POST['id'];
        $model         = UserNotice::findOne($id);
        $model->status = 2;
        $model->update();
    }

    public function actionUsertask()
    {
        $this->view->title = '任务中心';

        $userId                    = u()->id;
        $data['points']            = User::find()->where(['id' => $userId])->one()->points;
        $data['isRegPoints']       = UserPoints::isRegPoints($userId);
        $data['isTradePoints']     = UserPoints::isTradePoints($userId);
        $data['isTradeMoniPoints'] = UserPoints::isTradeMoniPoints($userId);
        $data['isRechargePoints']  = UserPoints::isRechargePoints($userId);
        $data['isLoginPoints']     = UserPoints::isTodayLoginPoints($userId);

        $userPoints = UserPoints::find()
            ->where(['user_id' => $userId])
            ->orderBy(['id' => 'desc'])
            ->limit(20)
            ->all();

        return $this->render('usertask', compact('data', 'userPoints'));
    }

    public function actionMobilebank()
    {
        $this->view->title = '银行转账';
        $money             = get('money');

        return $this->render('mobilebank', compact('money'));
    }

    public function actionMobilewx()
    {
        $this->view->title = '微信转账';
        $money             = get('money');

        return $this->render('mobilewx', compact('money'));
    }

    public function actionMobilezfb()
    {
        $this->view->title = '支付宝转账';
        $money             = get('money');

        return $this->render('mobilezfb', compact('money'));
    }

    public function actionUserpayment()
    {
        $type                = $_POST['type'];
        $info                = $_POST['name'];
        $money               = $_POST['money'];
        $userAction          = new  UserPayment();
        $userAction->user_id = u()->id;
        $userAction->type    = $type;
        $userAction->info    = $info;
        $userAction->money   = $money;
        $res                 = $userAction->insert();
        if ($res) {
            return 1;
        } else {
            return 2;
        }
    }
}
