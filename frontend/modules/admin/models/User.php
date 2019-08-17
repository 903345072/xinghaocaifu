<?php

namespace admin\models;

use Yii;
use common\helpers\Html;

class User extends \common\models\User
{
    public $out_account;
    public $start_time;
    public $end_time;

    public function rules()
    {
        return array_merge(parent::rules(), [
            ['account', 'number', 'min' => '0', 'tooSmall' => '余额不足以出金！'],
            [['out_account'], 'safe'],
        ]);
    }

    public function scenarios()
    {
        return array_merge(parent::scenarios(), [
            // 'scenario' => ['field1', 'field2'],
        ]);
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'state' => '状态',
            // 'field2' => 'description2',
        ]);
    }

    public function getParentLink($name = 'id')
    {
        if ($this->pid) {
            return Html::a($this->parent->nickname, ['', 'search[' . $name . ']' => $this->pid], ['class' => 'parentLink']) . '(' . $this->pid . ')';
        } else {
            return '无';
        }
    }

    public function listQuery()
    {
        return $this->search()
            ->joinWith(['parent', 'admin'])
            ->andFilterWhere(['>=', 'user.created_at', $this->start_time])
            ->andFilterWhere(['<=', 'user.created_at', $this->end_time]);
    }

    public function managerQuery()
    {
        return $this->search()
            ->with(['parent', 'admin'])
            ->andWhere(['is_manager' => User::IS_MANAGER_YES]);
    }


}
