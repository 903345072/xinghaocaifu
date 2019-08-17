<?php

namespace common\models;

use Yii;

/**
 * 这是表 `article` 的模型
 */
class UserPayment extends \common\components\ARModel
{
    const APPLY_STATE_WAIT = 1;
    const APPLY_STATE_PASS = 2;
    const APPLY_STATE_FAIL = 3;

    public function rules()
    {
        return [
            [['type', 'info', 'money'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '支付方式 1微信 2支付宝 3银行卡',
            'info' => '账号或银行卡',
            'money' => '金额',
            'status' => '状态 1未审核 2审核通过 3审核失败',
            'user_id' => '用户id',
        ];
    }

    /****************************** 以下为设置关联模型的方法 ******************************/

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /****************************** 以下为公共显示条件的方法 ******************************/

    public function search()
    {
        $this->setSearchParams();

        return self::find()
            ->filterWhere([
                'userPayment.id' => $this->id,
                'userPayment.user_id' => $this->user_id,
                'userPayment.status' => $this->status,
                'userPayment.type' => $this->type,
            ])
            ->andFilterWhere(['like', 'userPayment.info', $this->info])
            ->andTableSearch();
    }


    /****************************** 以下为公共操作的方法 ******************************/


    /****************************** 以下为字段的映射方法和格式化方法 ******************************/
    // Map method of field `status`
    public static function getStatusMap($prepend = false)
    {
        $map = [
            self::APPLY_STATE_WAIT => '<font color="#ff8c00">待审核</font>',
            self::APPLY_STATE_PASS => '<font color="green">审核通过</font>',
            self::APPLY_STATE_FAIL => '<font color="red">未通过</font>'
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `status`
    public function getStatusValue($value = null)
    {
        return $this->resetValue($value);
    }

    // Map method of field `type`
    public static function getTypeMap($prepend = false)
    {
        $map = [
            1 => '微信',
            2 => '支付宝',
            3 => '银行卡',
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `charge_type`
    public function getTypeValue($value = null)
    {
        return $this->resetValue($value);
    }


}