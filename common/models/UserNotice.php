<?php

namespace common\models;

use Yii;

/**
 * 这是表 `article` 的模型
 */
class UserNotice extends \common\components\ARModel
{
    public function rules()
    {
        return [
            [['title', 'content', 'time'], 'required'],
            [['content'], 'default', 'value' => ''],
            [['time'], 'safe'],
            [['title'], 'string', 'max' => 50]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'time' => '发布时间',
            'status' => '状态1未看2已看',
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
                'userNotice.id' => $this->id,
                'userNotice.user_id' => $this->user_id,
                'userNotice.status' => $this->status,
            ])
            ->andFilterWhere(['like', 'userNotice.title', $this->title])
            ->andFilterWhere(['like', 'userNotice.content', $this->content])
            ->andFilterWhere(['like', 'userNotice.time', $this->time])
            ->andTableSearch();
    }

    /****************************** 以下为公共操作的方法 ******************************/


    /****************************** 以下为字段的映射方法和格式化方法 ******************************/
}
