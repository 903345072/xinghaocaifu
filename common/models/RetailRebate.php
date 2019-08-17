<?php

namespace common\models;

use Yii;

/**
 * 这是表 `retail_rebate` 的模型
 */
class RetailRebate extends \common\components\ARModel
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

    // public function getRelation()
    // {
    //     return $this->hasOne(Class::className(), ['foreign_key' => 'primary_key']);
    // }

    /****************************** 以下为公共显示条件的方法 ******************************/

    public function search()
    {
        $this->setSearchParams();

        return self::find()
            ->filterWhere([
                'retailRebate.id' => $this->id,
                'retailRebate.order_id' => $this->order_id,
                'retailRebate.user_id' => $this->user_id,
                'retailRebate.pid' => $this->pid,
                'retailRebate.amount' => $this->amount,
                'retailRebate.point' => $this->point,
            ])
            ->andFilterWhere(['like', 'retailRebate.created_at', $this->created_at])
            ->andFilterWhere(['like', 'retailRebate.updated_at', $this->updated_at])
            ->andTableSearch()
        ;
    }

    /****************************** 以下为公共操作的方法 ******************************/

    

    /****************************** 以下为字段的映射方法和格式化方法 ******************************/
}
