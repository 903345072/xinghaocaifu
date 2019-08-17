<?php

namespace common\models;

use Yii;

/**
 * 这是表 `user_action` 的模型
 */
class UserAction extends \common\components\ARModel
{
    // 常量
    const TYPE_NEWS = 1;

    public function rules()
    {
        return [
            [['user_id', 'target_id'], 'required'],
            [['user_id', 'target_id', 'type'], 'integer'],
            [['created_at'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'target_id' => '目标ID',
            'type' => '类型：1资讯',
            'created_at' => '发生时间',
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
                'userAction.id' => $this->id,
                'userAction.user_id' => $this->user_id,
                'userAction.target_id' => $this->target_id,
                'userAction.type' => $this->type,
            ])
            ->andFilterWhere(['like', 'userAction.created_at', $this->created_at])
            ->andTableSearch()
        ;
    }

    /****************************** 以下为公共操作的方法 ******************************/

    

    /****************************** 以下为字段的映射方法和格式化方法 ******************************/
}
