<?php

namespace common\models;

use Yii;

/**
 * 这是表 `article` 的模型
 */
class UserFeedback extends \common\components\ARModel
{
    public function rules()
    {
        return [
            [['content'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mobile' => '手机号',
            'name' => '反馈用户',
            'time' => '反馈时间',
            'content' => '反馈内容',
            'user_id' => '用户id',
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
                'userFreeback.id' => $this->id,
                'userFreeback.user_id' => $this->user_id,
                'userFreeback.time' => $this->time,
            ])
            ->andFilterWhere(['like', 'userFreeback.content', $this->content])
            ->andFilterWhere(['like', 'userFreeback.mobile', $this->mobile])
            ->andFilterWhere(['like', 'userFreeback.name', $this->name])
            ->andTableSearch();
    }

    /****************************** 以下为公共操作的方法 ******************************/


    /****************************** 以下为字段的映射方法和格式化方法 ******************************/
}
