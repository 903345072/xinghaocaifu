<?php

namespace home\controllers;

use common\models\UserPoints;
use home\models\UserNotice;
use Yii;
use home\models\User;
use home\models\UserAccount;
use home\models\UserWithdraw;
use home\models\UserPayment;
use home\models\UserFeedback;
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
use frontend\models\UserCharge as charge;


class UserController extends \home\components\Controller
{
    public function beforeAction($action)
    {
        $this->layout = 'web_main';
//        if (user()->isGuest) {
//            $this->redirect('/site/login');
//
//            return false;
//        }
        if (! parent::beforeAction($action)) {
            return false;
        } else {
            $actions = ['latest-news', 'new-gui', 'notice-list', 'notice-info'];
            if (user()->isGuest && ! in_array($this->action->id, $actions)) {
                $this->redirect(['site/login']);

                return false;
            }

            return true;
        }
    }

    public function actionNoticeList()
    {
        $this->view->title = '系统公告';
        $list              = Article::find()->all();

        return $this->render('noticeList', compact('list'));
    }

    public function actionNoticeInfo()
    {
        $this->view->title = '系统公告';
        $id                = get('notice_id');
        $info              = Article::find()->where(['id' => $id])->one();

        return $this->render('noticeInfo', compact('info'));
    }

    public function actionDeposits()
    {
        $this->view->title = '提现';
        $current_position  = 'deposits';
        $charges = config('charges')*post('UserWithdraw')['amount']/100;
        $page              = get('page', 1);

        if (user()->isGuest) {
            return $this->redirect('site/login');
        }
        $user        = User::findModel(u()->id);
        $userAccount = UserAccount::find()->where(['user_id' => u()->id])->one();
        if (empty($userAccount)) {
            $userAccount = new UserAccount();
        }
        $userAccount->scenario = 'withDraw';
        $userWithdraw          = new UserWithdraw();
        $list                  = UserWithdraw::find()->where(['user_id' => u()->id])->all();
        if ($userAccount->load(post()) || $userWithdraw->load(post())) {
            $userWithdraw->amount = post('UserWithdraw')['amount']-$charges;
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
            $userAccount->user_id   = $userWithdraw->user_id = u()->id;
            $userAccount->bank_user = $userAccount->realname;
            $userAccount->id_card   = 'xxx';

            if (empty(post('UserAccount')['password'])) {
                return error('密码不能为空！');
            }
            if (! Yii::$app->security->validatePassword(post('UserAccount')['password'], $user->password)) {
                return error('密码不正确，请确认！');
            }
            if ($userAccount->id) {
                $userAccount->update();
            } else {
                $userAccount->insert(false);
            }
            $userWithdraw->account_id = $userAccount->id;
            $userWithdraw->charges = $charges;
            $userWithdraw->insert(false);
            //扣除取现金额
            $user->account -= post('UserWithdraw')['amount'];
            $user->save(false);

            return success('取现申请成功！');
        }

        $bankList = Yii::$app->params['bankList'];

        return $this->render('deposits',
            compact('userAccount', 'userWithdraw', 'user', 'list', 'bankList', 'current_position', 'page'));
    }

    public function actionRecharge()
    {
        $this->view->title = '充值';
        $current_position  = 'recharge';

        if ($_POST) {
            $money = post('money');
            $type  = post('type');

            switch ($type) {
                case 1:
                default:
                    return $this->render('mobilewx', compact('money', 'current_position'));
                    break;
                case 2:
                    return $this->render('mobilezfb', compact('money', 'current_position'));
                    break;
                case 3:
                    return $this->render('mobilebank', compact('money', 'current_position'));
                    break;
            }
        }

        $list = UserPayment::find()->where(['user_id' => u()->id])->all();

        return $this->render('recharge', compact('list', 'current_position'));
    }

    public function actionPay()
    {

        $this->view->title = '安全支付';
        $amount =  $money            = post('money',10);
        $current_position  = 'recharge';
        switch (post('type', 3)) {
            case '1':
                $html = charge::ylpay($amount, 'wangyin');//微信扫码支付，翰银支付
                if (! $html) {
                    return $this->redirect(['site/wrong']);
                }
                echo $html;
                break;
            case '2':
                $paytype = 'alipay';
                charge::ourspay($amount,$paytype);//ourspay
                break;
            case '3':
                return $this->render('mobilezfb', compact('money', 'current_position'));
                break;
        }
    }




    public function actionFundList()
    {
        $this->view->title = '充值';
        $current_position  = 'fund_list';

        $list = UserCharge::find()->where(['user_id' => u()->id])->all();

        return $this->render('fundList', compact('list', 'current_position'));
    }

    public function actionLatestNews()
    {
        $this->view->title = '最新资讯';

        return $this->render('latestNews');
    }

    public function actionNewGui()
    {
        $this->view->title = '新手指引';
        $ruleFlag          = get('flag', 'rule-recharge');

        return $this->render('newGui', compact('ruleFlag'));
    }

    public function actionPromotion()
    {
        $this->view->title = '推广赚钱';
        $current_position  = 'promotion';

        //如果是经纪人
        if (u()->is_manager == User::IS_MANAGER_YES) {
            $idArr = User::getUserOfflineId();
            $data  = User::getUserOfflineData($idArr);
            //查询邀请码
            $user   = User::find()->where(['id' => u()->id])->one();
            $retail = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => $user->admin_id])->one();
            $code   = isset($retail) ? $retail->code : '';

            return $this->render('promotion', compact('data', 'idArr', 'code', 'current_position'));
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
        $retail = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => u()->admin_id])->one();
        if($retail){
            $userAccount->coding = $retail->code;
        }else{
            $userAccount->coding = '';
        }
        $code    = '';
        $idArr[] = [];

        return $this->render('invite', compact('userAccount', 'idArr', 'code', 'promotion', 'current_position'));
    }

    public function actionMessages()
    {
        $this->view->title = '信息中心';
        $current_position  = 'messages';

        $list = UserNotice::find()->where([
            'user_id' => u()->id,
        ])->orderBy('time desc')->all();

        return $this->render('message', compact('list', 'current_position'));
    }

    public function actionRead()
    {
        $id            = post('id');
        $model         = UserNotice::findOne($id);
        $model->status = 2;
        $model->update();
    }

    public function actionModifyPassword()
    {
//        echo u()->id;
        $this->view->title = '修改密码';
        $current_position  = 'modify_password';

        $model = User::findOne(u('id'));
//        dump($model);exit;
        $model->scenario = 'password';

        if ($model->load($_POST)) {
            if ($model->validate()) {
                $model->password = $model->newPassword;
                if ($model->hashPassword()->update()) {
//                    return $this->redirect(['loginsucc']);
                    return 1;
                } else {
                    return error($model);
                }
            } else {
                return error($model);
            }
        }

        return $this->render('modifyPassword', compact('current_position'));
    }

    public function actionPoints()
    {
        $this->view->title = '我的积分';
        $current_position  = 'points';

        $userId = u()->id;
        $points = User::find()->where(['id' => $userId])->one()->points;

        $userPoints = UserPoints::find()
            ->where(['user_id' => $userId])
            ->orderBy(['id' => 'desc'])
            ->limit(20)
            ->all();

        return $this->render('points', compact('points', 'userPoints', 'points', 'current_position'));
    }

    public function actionTradeList()
    {
        $this->view->title = '交易记录';
        $current_position  = 'trade_list';

        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $type = get('type', 1);

        $order = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->with('product')->orderBy('created_at DESC')->all();
        foreach ($order as $k => $v) {
            $productPrice                   = ProductPrice::find()->where([
                'product_id' => $v->product_id,
                'hand'       => $v->hand,
            ])->one();
            $order[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order[$k]['stop_loss_price']   = round($v->stop_loss_point * $productPrice->one_profit);
        }
        $query          = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->andFilterWhere(['>', 'profit', '0']);
        $profit_hand    = $query->sum('hand');
        $win_order      = $query->count();
        $position_order = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->count();
        if (count($order) > 0) {
            $win_rate = sprintf('%.2f', $win_order / count($order)) * 100;
        } else {
            $win_rate = 0;
        }
        $top_profit = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id])->max('profit');
        if (! $top_profit) {
            $top_profit = 0;
        }
        $profit_hand = $profit_hand ? $profit_hand : 0;

        return $this->render('tradeList',
            compact('order', 'profit_hand', 'win_rate', 'position_order', 'top_profit', 'type', 'current_position'));
    }

    public function actionSimulateList()
    {
        $type              = get('type', 1);
        $this->view->title = '模拟交易列表';
        $current_position  = 'simulate_list';

        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order_position = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => 2,
        ])->with('product')->orderBy('created_at DESC')->all();
        foreach ($order_position as $k => $v) {
            $productPrice                            = ProductPrice::find()->where([
                'product_id' => $v->product_id,
                'hand'       => $v->hand,
            ])->one();
            $order_position[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_position[$k]['stop_loss_price']   = round($v->stop_loss_point * $productPrice->one_profit);
        }
        $order_throw = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 2,
        ])->with('product')->orderBy('created_at DESC')->all();
        foreach ($order_throw as $k => $v) {
            $productPrice                         = ProductPrice::find()->where([
                'product_id' => $v->product_id,
                'hand'       => $v->hand,
            ])->one();
            $order_throw[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_throw[$k]['stop_loss_price']   = round($v->stop_loss_point * $productPrice->one_profit);
        }

        return $this->render('simulateList', compact('order_position', 'order_throw', 'type', 'current_position'));
    }

    public function actionCenter()
    {
        $this->view->title = '个人中心';
        $current_position  = 'center';

        if (user()->isGuest) {
            return $this->redirect(['site/login']);
        }

        $order_position = Order::find()->where([
            'order_state' => Order::ORDER_POSITION,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->with('product')->orderBy('created_at DESC')->all();
        foreach ($order_position as $k => $v) {
            $productPrice                            = ProductPrice::find()->where([
                'product_id' => $v->product_id,
                'hand'       => $v->hand,
            ])->one();
            $order_position[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_position[$k]['stop_loss_price']   = round($v->stop_loss_point * $productPrice->one_profit);
        }
        $order_throw = Order::find()->where([
            'order_state' => Order::ORDER_THROW,
            'user_id'     => u()->id,
            'model_type'  => 1,
        ])->with('product')->orderBy('created_at DESC')->all();
        foreach ($order_throw as $k => $v) {
            $productPrice                         = ProductPrice::find()->where([
                'product_id' => $v->product_id,
                'hand'       => $v->hand,
            ])->one();
            $order_throw[$k]['stop_profit_price'] = round($v->stop_profit_point * $productPrice->one_profit);
            $order_throw[$k]['stop_loss_price']   = round($v->stop_loss_point * $productPrice->one_profit);
        }

        $article = Article::find()->orderBy('publish_time desc')->one();

        $top_profit = Order::find()->where(['order_state' => Order::ORDER_THROW, 'user_id' => u()->id])->max('profit');
        if (! $top_profit) {
            $top_profit = 0;
        }

        return $this->render('center',
            compact('order_position', 'order_throw', 'current_position', 'article', 'top_profit'));
    }

    public function actionMobilewx()
    {
        $this->layout      = 'web_main';
        $this->view->title = '微信转账';

        return $this->render('mobilewx');
    }

    public function actionMobilezfb()
    {
        $this->layout      = 'web_main';
        $this->view->title = '支付宝转账';

        return $this->render('mobilezfb');
    }

    public function actionMobilebank()
    {
        $this->layout      = 'web_main';
        $this->view->title = '银行卡转账';

        return $this->render('mobilebank');
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

    public function actionFeedback()
    {
        $this->layout      = 'web_main';
        $this->view->title = '意见反馈';
        $current_position  = 'feedback';

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

        return $this->render('feedback', compact('current_position'));
    }

    public function actionPlayfa()
    {
        $this->layout      = 'web_main';
        $this->view->title = '玩法';

        return $this->render('playfa');
    }
}
