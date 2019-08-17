<?php

namespace common\models;

use Yii;

/**
 * 这是表 `user_points` 的模型
 */
class UserPoints extends \common\components\ARModel
{
    // 积分使用
    const TYPE_USE = 1;

    // 首次注册赠送
    const TYPE_GET_REGISTER = 2;

    // 首次充值赠送
    const TYPE_GET_RECHARGE = 3;

    // 首次模拟交易赠送
    const TYPE_GET_TRADE_MONI = 4;

    // 首次实盘交易赠送
    const TYPE_GET_TRADE = 5;

    // 每日登陆赠送
    const TYPE_GET_LOGIN = 6;

    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'user_id'       => '用户ID',
            'type'          => '积分操作类别(1-使用积分，2-注册成功赠送，3-首次充值成功赠送，4-首次模拟交易赠送，5-首次实盘交易赠送）',
            'points'        => '积分',
            'points_amount' => '积分余额',
            'datetime'      => '操作时间',
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
                'userPoints.id'      => $this->id,
                'userPoints.user_id' => $this->user_id,
                'userPoints.type'    => $this->amount,
            ])
            ->andFilterWhere(['like', 'userPoints.datetime', $this->datetime])
            ->andTableSearch();
    }

    /****************************** 以下为公共操作的方法 ******************************/

    public static function getPoints($userId, $type, $points = null)
    {
        switch ($type) {
            case self::TYPE_USE:
                break;
            case self::TYPE_GET_REGISTER;
                $points = empty($points) ? 1800 : $points;
                if (! self::isRegPoints($userId)) {
                    self::addPoints($userId, $points, $type);
                }
                break;
            case self::TYPE_GET_RECHARGE;
                $points = empty($points) ? 1800 : $points;
                if (! self::isRechargePoints($userId)) {
                    self::addPoints($userId, $points, $type);
                }
                break;
            case self::TYPE_GET_TRADE_MONI;
                $points = empty($points) ? 500 : $points;
                if (! self::isTradeMoniPoints($userId)) {
                    self::addPoints($userId, $points, $type);
                }
                break;
            case self::TYPE_GET_TRADE;
                $points = empty($points) ? 2800 : $points;
                if (! self::isTradePoints($userId)) {
                    self::addPoints($userId, $points, $type);
                }
                break;
            case self::TYPE_GET_LOGIN;
                $points = empty($points) ? 300 : $points;
                if (! self::isTodayLoginPoints($userId)) {
                    self::addPoints($userId, $points, $type);
                }
                break;
            default:
        }
    }

    public static function addPoints($userId, $points, $type)
    {
        $user = User::find()->where(['id' => $userId])->one();
        if ($user) {
            $pointsAmount              = $points + $user->points;
            $userPoints                = new UserPoints();
            $userPoints->user_id       = $userId;
            $userPoints->type          = $type;
            $userPoints->points        = $points;
            $userPoints->points_amount = $pointsAmount;
            $userPoints->save();

            $user->points = $pointsAmount;
            $user->save();

            return true;
        }
    }

    public static function usePoints($userId, $points, $type = self::TYPE_USE)
    {
        $user = User::find()->where(['id' => $userId])->one();
        if ($user) {
            $pointsAmount = $user->points - $points;
            if ($pointsAmount >= 0) {
                $userPoints                = new UserPoints();
                $userPoints->user_id       = $userId;
                $userPoints->type          = $type;
                $userPoints->points        = $points;
                $userPoints->points_amount = $pointsAmount;
                $userPoints->save();

                $user->points = $pointsAmount;
                $user->save();

                return true;
            }
        }
    }

    public static function isRegPoints($userId)
    {
        return (bool) self::find()
            ->where(['user_id' => $userId, 'type' => self::TYPE_GET_REGISTER])
            ->count();
    }

    public static function isRechargePoints($userId)
    {
        return (bool) self::find()
            ->where(['user_id' => $userId, 'type' => self::TYPE_GET_RECHARGE])
            ->count();
    }

    public static function isTradeMoniPoints($userId)
    {
        return (bool) self::find()
            ->where(['user_id' => $userId, 'type' => self::TYPE_GET_TRADE_MONI])
            ->count();
    }

    public static function isTradePoints($userId)
    {
        return (bool) self::find()
            ->where(['user_id' => $userId,'type' => self::TYPE_GET_TRADE])
            ->count();
    }

    public static function isTodayLoginPoints($userId)
    {
        return (bool) self::find()
            ->where(['user_id' => $userId, 'type' => self::TYPE_GET_LOGIN])
            ->andFilterWhere(['like', 'datetime', date('Y-m-d')])
            ->count();
    }


    /****************************** 以下为字段的映射方法和格式化方法 ******************************/

    // Map method of field `charge_type`
    public static function getTypeMap($prepend = false)
    {
        $map = [
            self::TYPE_USE            => '抵扣使用',
            self::TYPE_GET_REGISTER   => '注册赠送',
            self::TYPE_GET_RECHARGE   => '首次充值赠送',
            self::TYPE_GET_TRADE_MONI => '首次模拟交易赠送',
            self::TYPE_GET_TRADE      => '首次实盘交易赠送',
            self::TYPE_GET_LOGIN      => '每天首次登陆赠送',
        ];

        return self::resetMap($map, $prepend);
    }

    // Format method of field `charge_type`
    public function getTypeValue($value = null)
    {
        return $this->resetValue($value);
    }
}
