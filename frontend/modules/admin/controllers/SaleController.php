<?php

namespace admin\controllers;

use Yii;
use admin\models\User;
use admin\models\Retail;
use admin\models\UserRebate;
use common\helpers\Hui;
use common\helpers\Html;

class SaleController extends \admin\components\Controller
{
    /**
     * @authname 经纪人列表
     */
    public function actionManagerList()
    {
        $query = (new User)->managerQuery()->orderBy('total_fee DESC')->manager();

        $html = $query->getTable([
            'id' => ['search' => true],
            'nickname' => ['search' => true],
            'mobile' => ['search' => true],
             'pid' => ['header' => '推荐人', 'value' => function ($row) {
                 return $row->getParentLink();
             }],
            'admin.username' => ['header' => '代理商账户'],
            'point' => ['header' => '返点(%)'],
            'total_fee',
            'account',
            'login_time',
            ['header' => '操作', 'width' => '80px', 'value' => function ($row) {
                return Hui::primaryBtn('修改返点', ['editPoint', 'id' => $row->id], ['class' => 'editBtn']);
            }]
        ]);

        return $this->render('managerList', compact('html'));
    }

    /**
     * @authname 修改经纪人返点%
     */
    public function actionEditPoint() 
    {
        $user = User::findModel(get('id'));
        $retail = Retail::find()->where(['account' => u()->username])->one();
        if (empty($retail)) {
            $retail = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => $user->admin_id])->one();
        }
        $user->point = post('point');
        if (($user->point + $retail->point) > intval(config('web_point', 80)) || is_int($user->point) || $user->point < 0) {
            return error('您自己的返点和经纪人的返点总额不能超过'.config('web_point', 80).'%(设置返点为正整数)');
        }
        if ($user->validate()) {
            $user->update(false);
            return success();
        } else {
            return error($user);
        }
    }

    /**
     * @authname 代理商返点报表
     */
    public function actionManagerRebateList()
    {
        $query = (new UserRebate)->managerListQuery()->orderBy('userRebate.created_at DESC');
        // test($query->sql);
        $count = $query->sum('amount') ?: 0;

        $html = $query->getTable([
            'id',
            'admin.username' => ['header' => '代理商账号'],
            'user.nickname' => ['header' => '会员昵称（手机号）', 'value' => function ($row) {
                return Html::a($row->user->nickname . "({$row->user->mobile})", ['', 'search[user.id]' => $row->user->id], ['class' => 'parentLink']);
            }],
            'amount',
            'point' => function ($row) {
                return $row->point . '%';
            },
            'created_at' => '返点时间'
        ], [
            'searchColumns' => [
                'admin.username' => ['header' => '代理商账号'],
                'user.id' => ['header' => '会员ID'],
                'user.mobile' => ['header' => '会员手机'],
                'time' => 'timeRange'
            ],
            'ajaxReturn' => [
                'count' => $count
            ]
        ]);

        return $this->render('managerRebateList', compact('html', 'count'));
    }
}
