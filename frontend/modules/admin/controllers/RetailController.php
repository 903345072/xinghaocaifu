<?php

namespace admin\controllers;

use Yii;
use admin\models\Retail;
use admin\models\AdminUser;
use admin\models\AdminWithdraw;
use admin\models\AdminAccount;
use admin\models\ExuserWithdraw;
use admin\models\AdminLeader;
use common\helpers\Hui;
use common\helpers\Html;
use common\helpers\StringHelper;

class RetailController extends \admin\components\Controller
{
    /**
     * @authname 代理商列表
     */
    public function actionList()
    {
        $query = (new Retail)->search()->retail();

        $html = $query->getTable([
            'id',
            'account' => ['header' => '代理商账号', 'search' => true],
            'company_name' => ['type' => 'text', 'search' => true],
            'realname' => ['type' => 'text', 'search' => true],
            'tel' => ['type' => 'text', 'search' => true],
            'qq' => ['type' => 'text', 'search' => true],
            'point' => ['type' => 'text'],
            'total_fee',
            'deposit' => ['type' => 'text'],
            'id_card' => function ($row) {
                if (!$row->id_card) {
                    return '';
                }
                return Hui::primaryBtn('查看', null, ['class' => 'viewFace']) .
                       Html::a('', $row->id_card, ['class' => 'img-fancybox hidden', 'title' => $row->label('id_card'), 'rel' => 'id_card' . $row->id]);
            },
            'paper' => function ($row) {
                if (!$row->paper) {
                    return '';
                }
                return Hui::primaryBtn('查看', null, ['class' => 'viewFace']) .
                       Html::a('', $row->paper, ['class' => 'img-fancybox hidden', 'title' => $row->label('paper'), 'rel' => 'paper' . $row->id]);
            },
            'paper2' => function ($row) {
                if (!$row->paper2) {
                    return '';
                }
                return Hui::primaryBtn('查看', null, ['class' => 'viewFace']) .
                       Html::a('', $row->paper2, ['class' => 'img-fancybox hidden', 'title' => $row->label('paper2'), 'rel' => 'paper2' . $row->id]);
            },
            'paper3' => function ($row) {
                if (!$row->paper3) {
                    return '';
                }
                return Hui::primaryBtn('查看', null, ['class' => 'viewFace']) .
                       Html::a('', $row->paper3, ['class' => 'img-fancybox hidden', 'title' => $row->label('paper3'), 'rel' => 'paper3' . $row->id]);
            },
            'code',
            'created_at',
        ], [
            'addBtn' => ['saveRetail' => '添加代理商']
        ]);

        return $this->render('list', compact('html'));
    }

    /**
     * @authname 添加/编辑会员单位
     */
    public function actionSaveRetail($id = 0)
    {
        $model = Retail::findModel($id);

        if ($model->load()) {
            $model->code = StringHelper::random(6, 'n');
            if ($model->validate()) {
                if ($model->file1) {
                    $model->file1->move();
                    $model->id_card = $model->file1->filePath;
                }
                if ($model->file2) {
                    $model->file2->move();
                    $model->paper = $model->file2->filePath;
                }
                if ($model->file3) {
                    $model->file3->move();
                    $model->paper2 = $model->file3->filePath;
                }
                if ($model->file4) {
                    $model->file4->move();
                    $model->paper3 = $model->file4->filePath;
                }
                $model->save(false);
                $admin = new AdminUser;
                $admin->username = $model->account;
                $admin->password = $model->pass;
                $admin->realname = $model->realname;
                if ($admin->saveAdmin()) {
                    $auth = Yii::$app->authManager;
                    $role = $auth->getRole('代理商管理');
                    $auth->assign($role, $admin->id);
                } else {
                    $model->delete();
                    return error($admin);
                }
                return success();
            } else {
                return error($model);
            }
        }

        return $this->render('saveRetail', compact('model'));
    }
    /**
     * @authname 添加/编辑代理商出金
     */
    public function actionSaveWithdraw()
    {
        $model = new AdminWithdraw(['scenario' => 'withdraw']);

        $retail = Retail::find()->with('adminUser')->where(['id' => u()->id])->one();
        if (empty($retail)) {
            return error('超管不能申请出金！');
        }
        // dump($retail);die();
        $adminAccount = AdminAccount::findOne($retail->id);
        if (empty($adminAccount)) {
            $adminAccount = new AdminAccount();
        }

        if ($model->load() || $adminAccount->load()) {
            if ($model->amount < 0 || $model->amount > $retail->total_fee) {
                return error('取现金额不能超过您的可用余额(非法参数)！');
            }
            $model->admin_id = $adminAccount->admin_id = $retail->id;
            if ($model->validate()) {
                $adminAccount->attributes = post('AdminAccount');

                $adminAccount->id_card = 'xx';
                $adminAccount->realname = $adminAccount->bank_user;
                if ($adminAccount->validate()) {
                    $retail->total_fee = sprintf('%.2f', $retail->total_fee - $model->amount);
                    $retail->update();
                    $model->save(false);
                    $adminAccount->save(false);
                    return success();
                } else {
                   return error($adminAccount); 
                }
            } else {
                return error($model);
            }
        }

        return $this->render('saveWithdraw', compact('model', 'retail', 'adminAccount'));
    }

    /**
     * @authname 代理商出金操作
     */
    public function actionVerifyWithdraw($id)
    {

        $model = AdminWithdraw::find()->with(['retail.adminAccount'])->where(['id' => $id])->one();
         // var_dump($model);
        // exit;

        if (req()->isPost) {
            $model->op_state = post('state');
            if ($model->update()) {
                if ($model->op_state == AdminWithdraw::OP_STATE_DENY) {
                    $model->retail->total_fee += $model->amount;
                    $model->retail->update();    
                }
                return success();
            } else {
                return error($model);
            }
        }
        return $this->render('verifyWithdraw', compact('model'));
    }

    /**
     * @authname 代理商出金列表
     */
    public function actionWithdrawList()
    {
        $query = (new AdminWithdraw)->listQuery()->orderBy('adminWithdraw.created_at DESC');
        $countQuery = (new AdminWithdraw)->listQuery()->andWhere(['op_state' => AdminWithdraw::OP_STATE_PASS]);

        $count = $countQuery->select('SUM(amount) amount')->one()->amount ?: 0;

        $html = $query->getTable([
            'admin_id',
            'retail.account',
            'retail.total_fee' => '账户余额',
            'retail.tel',
            'amount' => '出金金额',
            'created_at',
            'op_state' => ['search' => 'select'],
            u()->power < AdminUser::POWER_ADMIN?:['header' => '操作', 'width' => '70px', 'value' => function ($row) {
                if ($row['op_state'] == AdminWithdraw::OP_STATE_WAIT) {
                    return Hui::primaryBtn('会员出金', ['retail/verifyWithdraw', 'id' => $row['id']], ['class' => 'layer.iframe']);
                } else {
                    return Html::successSpan('已审核');
                }
            }]
        ], [
            'searchColumns' => [
                'admin_id',
                'retail.account',
                // 'time' => ['header' => '审核时间', 'type' => 'dateRange']
            ],
            'ajaxReturn' => [
                'count' => $count
            ],
            'addBtn' => u()->power >= AdminUser::POWER_ADMIN?'':['saveWithdraw' => '代理商申请出金']
        ]);
        

        return $this->render('withdrawList', compact('html', 'count'));
    }
}
