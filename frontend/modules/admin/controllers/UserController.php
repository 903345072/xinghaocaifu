<?php

namespace admin\controllers;

use common\models\UserPoints;
use Yii;
use admin\models\User;
use admin\models\Order;
use admin\models\Product;
use admin\models\AdminUser;
use admin\models\UserCoupon;
use admin\models\UserCharge;
use admin\models\UserRebate;
use admin\models\UserNotice;
use admin\models\UserFeedback;
use admin\models\UserPayment;
use admin\models\UserWithdraw;
use common\helpers\Hui;
use common\helpers\Html;

class UserController extends \admin\components\Controller
{
    /**
     * @authname 会员列表
     */
    public function actionList()
    {

        $query = (new User)->listQuery()->manager();

        $html = $query->getTable([
            ['type' => 'checkbox'],
            'id',
            'nickname'       => ['type' => 'text'],
            'mobile',
            'pid'            => [
                'header' => '推荐人',
                'value'  => function ($row) {
                    return $row->getParentLink();
                },
            ],
            'admin.username' => ['header' => '代理商账号'],
			
            'account',
            'profit_account',
            'loss_account',
            'created_at',
            'login_time',
            'state'          => ['search' => 'select'],
            [
                'header' => '操作',
                'width'  => '120px',
                'value'  => function ($row) {
                    if ($row['state'] == User::STATE_VALID) {
                        $deleteBtn = Hui::dangerBtn('冻结', ['deleteUser', 'id' => $row->id], ['class' => 'deleteBtn']);
                    } else {
                        $deleteBtn = Hui::successBtn('恢复', ['deleteUser', 'id' => $row->id], ['class' => 'deleteBtn']);
                    }

                    return implode(str_repeat('&nbsp;', 2), [
                        Hui::primaryBtn('修改密码', ['editUserPass', 'id' => $row->id], ['class' => 'editBtn']),
                        Hui::primaryBtn('发送战略信息', ['addnotice', 'id' => $row->id], ['class' => 'addBtn']),
                        $deleteBtn,
                    ]);
                },
            ],
        ], [
            'searchColumns' => [
                'id',
                'nickname',
                'mobile',
                'admin.username' => ['header' => '代理商账号'],
                'time'           => ['header' => '注册时间', 'type' => 'dateRange'],
            ],
        ]);

        // 会员总数，总手数，总余额
        $count  = User::find()->manager()->count();
        $hand   = Order::find()->joinWith(['user'])->manager()->select('SUM(hand) hand')->one()->hand ?: 0;
        $amount = User::find()->manager()->select('SUM(account) account')->one()->account ?: 0;

        return $this->render('list', compact('html', 'count', 'hand', 'amount'));
    }

    /**
     * @authname 添加/编辑资讯
     */
    public function actionAddnotice($id = 0)
    {

        $model          = UserNotice::findModel(0);
        $model->user_id = $id;
        if ($model->load(post())) {
            if ($model->save()) {
                return success();
            } else {
                return error($model);
            }
        }

        return $this->render('addnotice', compact('model'));
    }

    /**
     * @authname 修改会员密码
     */
    public function actionEditUserPass()
    {
        $user           = User::findModel(get('id'));
        $user->password = post('password');
        if ($user->validate()) {
            $user->hashPassword()->update(false);

            return success();
        } else {
            return error($user);
        }
    }

    /**
     * @authname 发信
     */
    public function actionEditUserNotice()
    {
        $user           = User::findModel(get('id'));
        $user->password = post('password');
        if ($user->validate()) {
            $user->hashPassword()->update(false);

            return success();
        } else {
            return error($user);
        }
    }

    /**
     * @authname 冻结/恢复用户
     */
    public function actionDeleteUser()
    {
        $user = User::find()->where(['id' => get('id')])->one();

        if ($user->toggle('state')) {
            return success('冻结成功！');
        } else {
            return success('账号恢复成功！');
        }
    }

    /**
     * @authname 赠送优惠券
     */
    public function actionSendCoupon()
    {
        $ids = post('ids');

        // 送给所有人
        if (! $ids) {
            $ids = User::find()->map('id', 'id');
        }
        UserCoupon::sendCoupon($ids, post('coupon_id'), post('number') ?: 1);

        return success('赠送成功');
    }

    /**
     * @authname 会员持仓列表
     */
    public function actionPositionList()
    {
        $query = (new User)->listQuery()->andWhere(['user.state' => User::STATE_VALID])->manager();

        $order = [];
        $html  = $query->getTable([
            'id',
            'nickname' => ['type' => 'text'],
            'mobile',
            [
                'header' => '盈亏',
                'value'  => function ($row) use (&$order) {
                    $order = Order::find()->where([
                        'user_id'     => $row['id'],
                        'order_state' => Order::ORDER_POSITION,
                    ])->select(['SUM(hand) hand', 'SUM(profit) profit'])->one();
                    if ($order->profit == null) {
                        return '无持仓';
                    } elseif ($order->profit >= 0) {
                        return Html::redSpan($order->profit);
                    } else {
                        return Html::greenSpan($order->profit);
                    }
                },
            ],
            [
                'header' => '持仓手数',
                'value'  => function ($row) use (&$order) {
                    if ($order->hand == null) {
                        return '无持仓';
                    } else {
                        return $order->hand;
                    }
                },
            ],
            'account',
            'state',
        ], [
            'searchColumns' => [
                'nickname',
                'mobile',
                'created_at' => ['type' => 'date'],
            ],
        ]);

        return $this->render('positionList', compact('html'));
    }

    /**
     * @authname 会员赠金
     */
    public function actionGiveList()
    {
        if (req()->isPost) {
            $user = User::findModel(get('id'));
            if (get('model_type', 1) == 1) {
                $user->account        += post('amount');
                $charge               = new UserCharge();
                $charge->amount       = post('amount');
                $charge->user_id      = get('id');
                $charge->trade_no     = get('id') . date('YmdHis') . rand(1000, 9999);
                $charge->charge_state = 2;
                $charge->charge_type  = 4;//转账
                $charge->insert();
            } else {
                $user->moni_acount += post('amount');
            }

            if ($user->update()) {
                return success();
            } else {
                return error($user);
            }
        }

        $query = (new User)->listQuery()->andWhere(['user.state' => User::STATE_VALID]);

        $html = $query->getTable([
            'id',
            'nickname',
            'mobile',
            'account',
            'moni_acount',
            [
                'header' => '操作',
                'width'  => '40px',
                'value'  => function ($row) {
                    $btn = Hui::primaryBtn('模拟充值', ['', 'id' => $row['id'], 'model_type' => 2], ['class' => 'giveBtn']);
                    $btn .= Hui::primaryBtn('充值', ['', 'id' => $row['id'], 'model_type' => 1], ['class' => 'giveBtn']);

                    return $btn;
                },
            ],
        ], [
            'searchColumns' => [
                'nickname',
                'mobile',
            ],
        ]);

        return $this->render('giveList', compact('html'));
    }

    /**
     * @authname 会员出金管理
     */
    public function actionWithdrawList()
    {
        $query      = (new UserWithdraw)->listQuery()->joinWith([
            'user.parent',
            'user.admin',
        ])->andWhere(['user.state' => User::STATE_VALID])->orderBy('op_state');
        $countQuery = (new UserWithdraw)->listQuery()->joinWith(['user.admin'])->andWhere(['user.state' => User::STATE_VALID])->andWhere(['op_state' => UserWithdraw::OP_STATE_PASS]);
        $count      = $countQuery->select('SUM(amount) amount')->one()->amount ?: 0;
        $newCount   = (new UserWithdraw)->search()->where(['op_state' => 1])->andFilterWhere([
            '>',
            'user_id',
            10000,
        ])->count();

        $html = $query->getTable([
            'user.id',
            'user.nickname',
            'user.mobile',
            'user.account',
            'charges'=>'提现手续费',
            'amount'         => '出金金额',
            [
                'header' => '推荐人(ID)',
                'value'  => function ($row) {
                    return $row->user->getParentLink('user.id');
                },
            ],
            'admin.username' => ['header' => '代理商账号'],
            'updated_at',
            'op_state'       => ['search' => 'select'],
            [
                'header' => '操作',
                'width'  => '70px',
                'value'  => function ($row) {
                    if ($row['op_state'] == UserWithdraw::OP_STATE_WAIT) {
                        $string = Hui::primaryBtn('会员出金', ['user/verifyWithdraw', 'id' => $row['id']],
                            ['class' => 'layer.iframe']);
                    } else {
                        $string = Html::successSpan('已审核');
                    }

                    return $string .= Hui::primaryBtn('查看详细', ['user/readWithdraw', 'id' => $row['id']],
                        ['class' => 'layer.iframe']);
                },
            ],
        ], [
            'searchColumns' => [
                'user.id',
                'admin.username' => ['header' => '代理商账号'],
                // 'parent.nickname' => ['header' => '推荐人'],
                'user.pid'       => ['header' => '推荐人ID'],
                'user.nickname',
                'user.mobile',
                'time'           => ['header' => '审核时间', 'type' => 'dateRange'],
            ],
            'ajaxReturn'    => [
                'count'    => $count,
                'newCount' => $newCount,
            ],
        ]);

        return $this->render('withdrawList', compact('html', 'count', 'newCount'));
    }

    /**
     * @authname 会员出金操作
     */
    public function actionVerifyWithdraw($id)
    {
        $model = UserWithdraw::find()->with('user.userAccount')->where(['id' => $id])->one();

        if (req()->isPost) {
            $model->op_state = post('state');
            if ($model->update()) {
                if ($model->op_state == UserWithdraw::OP_STATE_DENY) {
                    $model->user->account += $model->amount;
                    $model->user->update();
                }
                return success();
            } else {
                return error($model);
            }
        }

        return $this->render('verifyWithdraw', compact('model'));
    }

    /**
     * @authname 查看会员出金详细
     */
    public function actionReadWithdraw($id)
    {
        $model = UserWithdraw::find()->with('user.userAccount')->where(['id' => $id])->one();

        return $this->render('readWithdraw', compact('model'));
    }

    /**
     * @authname 会员充值记录
     */
    public function actionChargeRecordList()
    {
        $query      = (new UserCharge)->listQuery()->joinWith([
            'user.parent',
            'user.admin',
        ])->manager()->orderBy('userCharge.id DESC');
        $countQuery = (new UserCharge)->listQuery()->joinWith(['user.admin'])->manager();
        $count      = $countQuery->select('SUM(amount) amount')->one()->amount ?: 0;

        $html = $query->getTable([
            'user.id',
            'user.nickname'  => '充值人',
            'user.mobile',
            'amount',
            [
                'header' => '推荐人(ID)',
                'value'  => function ($row) {

                        return $row->user->getParentLink('user.id');
                },
            ],
            'admin.username' => ['header' => '代理商账号'],
            'user.account',
            'charge_type',
            'created_at',
        ], [
            'searchColumns' => [
                'user.id',
                'admin.username' => ['header' => '代理商账号'],
                'user.pid'       => ['header' => '推荐人ID'],
                'user.nickname',
                'user.mobile',
                'time'           => ['header' => '充值时间', 'type' => 'dateRange'],
            ],
            'ajaxReturn'    => [
                'count' => $count,
            ],
        ]);

        return $this->render('chargeRecordList', compact('html', 'count'));
    }

    /**
     * @authname 审核经纪人
     */

    public function actionTest(){
        dump((new User)->listQuery());
    }
    public function actionVerifyManager()
    {
        if (req()->isPost) {
            $model              = User::findModel(get('id'));
            $model->apply_state = get('apply_state');
            if ($model->apply_state == User::APPLY_STATE_PASS) {
                $model->is_manager = User::IS_MANAGER_YES;
                $model->admin_id   = $model->tem_id;
            }
            if ($model->update()) {
                return success();
            } else {
                return error($model);
            }
        }
        $query = (new User)->listQuery()->joinWith([
            'userAccount',
            'adminUser',
        ])->andWhere(['user.apply_state' => User::APPLY_STATE_WAIT, 'user.state' => User::STATE_VALID]);

        if (u()->power < AdminUser::POWER_SUPER) {
            $query = $query->andWhere(['user.tem_id' => u()->id]);
        }

        $html = $query->getTable([
            'id',
            'nickname',
            'mobile',
            // 'pid' => ['header' => '推荐人', 'value' => function ($row) {
            //     return $row->getParentLink();
            // }],
            'adminUser.username' => ['header' => '代理商账户'],
            'userAccount.realname',
            'userAccount.id_card',
            'userAccount.bank_name',
            'userAccount.bank_card',
            'userAccount.bank_user',
            'userAccount.bank_mobile',
            'userAccount.bank_address',
            'userAccount.address',
            'created_at',
            [
                'type'  => [],
                'value' => function ($row) {
                    return implode(str_repeat('&nbsp;', 2), [
                        Hui::primaryBtn('审核通过', ['', 'id' => $row->id, 'apply_state' => User::APPLY_STATE_PASS],
                            ['class' => 'verifyBtn']),
                        Hui::dangerBtn('不通过', ['', 'id' => $row->id, 'apply_state' => User::APPLY_STATE_DENY],
                            ['class' => 'verifyBtn']),
                    ]);
                },
            ],
        ], [
            'searchColumns' => [
                'id',
                'nickname',
                'mobile',
            ],
        ]);

        return $this->render('verifyManager', compact('html'));
    }

    /**
     * @authname 返点记录列表
     */
    public function actionRebateList()
    {
        $query = (new UserRebate)->listQuery()->orderBy('userRebate.created_at DESC');
        $count = $query->sum('amount') ?: 0;

        $html = $query->getTable([
            'id',
            'pid'           => [
                'header' => '获得返点用户',
                'value'  => function ($row) {
                    if (isset($row->parent)) {
                        return '经纪人：' . $row->parent->nickname . "({$row->parent->mobile})";
                    } else {
                        return '代理商：' . $row->admin->username;
                    }
                },
            ],
            'user.nickname' => [
                'header' => '会员昵称（手机号）',
                'value'  => function ($row) {
                    return Html::a($row->user->nickname . "({$row->user->mobile})",
                        ['', 'search[user.id]' => $row->user->id], ['class' => 'parentLink']);
                },
            ],
            'amount',
            'point'         => function ($row) {
                return $row->point . '%';
            },
            'created_at'    => '返点时间',
        ], [
            'searchColumns' => [
                'admin.username' => ['header' => '代理商账户'],
                'parent.mobile'  => ['header' => '经纪人手机号'],
                'user.id'        => ['header' => '会员ID'],
                'user.mobile'    => ['header' => '会员手机'],
                'time'           => 'timeRange',
            ],
            'ajaxReturn'    => [
                'count' => $count,
            ],
        ]);

        return $this->render('rebateList', compact('html', 'count'));
    }

    //转账明细
    public function actionTransfer()
    {
        $query      = (new UserPayment)->listQuery()->orderBy('userPayment.id DESC');
        $countQuery = (new UserPayment)->search()->andWhere(['status' => 1]);
        $count      = $countQuery->count();

        $html = $query->getTable([
            'id',
            'type'   => ['header' => '转账类型'],
            'info',
            'money',
            'status' => ['header' => '审核状态'],
            'user.mobile',
            'user.nickname',
            [
                'type'  => [],
                'value' => function ($row) {
                    if ($row['status'] == UserPayment::APPLY_STATE_WAIT) {
                        return implode(str_repeat('&nbsp;', 2), [
                            Hui::primaryBtn('审核通过',
                                ['verifyPay', 'id' => $row->id, 'apply_state' => UserPayment::APPLY_STATE_PASS],
                                ['class' => 'verifyBtn']),
                            Hui::dangerBtn('不通过',
                                ['verifyPay', 'id' => $row->id, 'apply_state' => UserPayment::APPLY_STATE_FAIL],
                                ['class' => 'verifyBtn']),
                        ]);
                    } else {
                        return Html::successSpan('已审核');
                    }
                },
            ],
        ], [
            'searchColumns' => [
                'id',
                'user.nickname',
                'user.mobile',
            ],
            'ajaxReturn'    => [
                'count' => $count,
            ],
        ]);

        return $this->render('transfer', compact('html', 'count'));
    }

    public function actionVerifyPay()
    {
        $userPayment         = UserPayment::find()->where(['id' => get('id')])->one();
        $userPayment->status = get('apply_state');

        if ($userPayment->status == UserPayment::APPLY_STATE_PASS) {
            UserPoints::getPoints($userPayment->user_id, UserPoints::TYPE_GET_RECHARGE);
        }

        if ($userPayment->save()) {
            return success('操作成功！');
        } else {
            return success('操作失败！');
        }
    }

    public function actionFeedback()
    {
        $query = UserFeedback::find()->orderBy('id DESC');
        $html = $query->getTable([
            'name',
            'mobile',
            'content'=>function($row){ return \yii\helpers\Html::encode($row->content); },
            'time',
        ]);
        return $this->render('feedback', compact('html'));
    }
}
