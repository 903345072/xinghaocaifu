<?php

namespace common\models;

use Yii;

/**
 * 这是表 `user_rebate` 的模型
 */
class UserRebate extends \common\components\ARModel
{
    public function rules()
    {
        return [
            [['order_id', 'user_id', 'pid', 'point'], 'integer'],
            [['user_id', 'pid', 'amount', 'point'], 'required'],
            [['amount'], 'number'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => '订单id',
            'user_id' => '返点用户ID',
            'pid' => '经纪人用户id',
            'amount' => '返点金额',
            'point' => '返点百分比%',
            'created_at' => '申请时间',
            'updated_at' => '审核时间',
        ];
    }

    /****************************** 以下为设置关联模型的方法 ******************************/

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getParent()
    {
        return $this->hasOne(User::className(), ['id' => 'pid']);
    }

    public function getAdmin()
    {
        return $this->hasOne(AdminUser::className(), ['id' => 'pid']);
    }

    /****************************** 以下为公共显示条件的方法 ******************************/

    public function search()
    {
        $this->setSearchParams();

        return self::find()
            ->filterWhere([
                'userRebate.id' => $this->id,
                'userRebate.order_id' => $this->order_id,
                'userRebate.user_id' => $this->user_id,
                'userRebate.pid' => $this->pid,
                'userRebate.amount' => $this->amount,
                'userRebate.point' => $this->point,
            ])
            ->andFilterWhere(['like', 'userRebate.created_at', $this->created_at])
            ->andFilterWhere(['like', 'userRebate.updated_at', $this->updated_at])
            ->andTableSearch()
        ;
    }

    /****************************** 以下为公共操作的方法 ******************************/

    //是否给用户返点
    public static function isUserRebate($amount = 0, $order_id = 0)
    {
        //用户经纪人返点
        if (u()->pid > 0) {
            $pUser = User::findOne(u()->pid);
            if (!empty($pUser)) {
                //这个人是上级经纪人
                if ($pUser->is_manager == User::IS_MANAGER_YES) {
                    //经纪人账户表
                    $sale = $amount * $pUser->point / 100;
                    $pUser->account += $sale;
                    $pUser->total_fee += $sale;
                    $pUser->update();

                    $userRebate = new UserRebate();
                    $userRebate->user_id = u()->id;
                    $userRebate->order_id = $order_id;
                    $userRebate->pid = $pUser->id;
                    $userRebate->amount = $sale;
                    $userRebate->point = $pUser->point;
                    $userRebate->insert();
                }
            }
        }
        //用户代理商返点
        if (u()->admin_id > 0) {
            $retail = Retail::find()->joinWith(['adminUser'])->where(['adminUser.id' => u()->admin_id])->one();
            if (!empty($retail)) {
                $sale = $amount * $retail->point / 100;
                $retail->total_fee += $sale;
                $retail->update(false);

                $userRebate = new UserRebate();
                $userRebate->user_id = u()->id;
                $userRebate->order_id = $order_id;
                $userRebate->pid = $retail->adminUser->id;
                $userRebate->amount = $sale;
                $userRebate->point = $retail->point;
                $userRebate->insert();
            }
        }
    }
    

    /****************************** 以下为字段的映射方法和格式化方法 ******************************/
}
