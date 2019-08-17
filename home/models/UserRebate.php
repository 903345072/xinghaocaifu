<?php

namespace home\models;

use Yii;

class UserRebate extends \common\models\UserRebate
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            // [['field1', 'field2'], 'required', 'message' => '{attribute} is required'],
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
            // 'field1' => 'description1',
            // 'field2' => 'description2',
        ]);
    }

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

    //老版本是否给用户返点
    public static function isOldUserRebate($fee = 0, $order_id = 0)
    {
        //返点用户有上级
        if (u()->pid > 0 || u()->admin_id > 0) {
            if (u()->admin_id > 0) {
                //代理商返点
                $retail = Retail::findOne(u()->admin_id);
                if (!empty($retail)) {
                    //一级给他返点
                    $sale = $fee * $retail->point / 100;
                    $retail->total_fee += $sale;
                    $retail->update();
                    $retailRebate = new RetailRebate();
                    $retailRebate->user_id = u()->id;
                    $retailRebate->order_id = $order_id;
                    $retailRebate->pid = $retail->id;
                    $retailRebate->amount = $sale;
                    $retailRebate->point = $retail->point;
                    $retailRebate->insert();
                }
            } else {
                //一级返点
                $pUser = User::findOne(u()->pid);
                if (!empty($pUser)) {
                    //这个人是上级经纪人
                    if ($pUser->is_manager == User::IS_MANAGER_YES) {
                        //给他返点
                        $sale = $fee * config('sale_lv1', 0) / 100;
                        $pUser->account += $sale;
                        $pUser->total_fee += $sale;
                        $pUser->update();
                        $userRebate = new UserRebate();
                        $userRebate->user_id = u()->id;
                        $userRebate->order_id = $order_id;
                        $userRebate->pid = $pUser->id;
                        $userRebate->amount = $sale;
                        $userRebate->point = config('sale_lv1', 0);
                        $userRebate->insert();
                    }
                    //二级返点
                    if ($pUser->pid > 0) {
                        $gUser = User::findOne($pUser->pid);
                        if (!empty($gUser)) {
                            if ($gUser->is_manager == User::IS_MANAGER_YES) {
                                //给他返点
                                $sale = $fee * config('sale_lv2', 0) / 100;
                                $gUser->account += $sale;
                                $gUser->total_fee += $sale;
                                $gUser->update();
                                $userRebate = new UserRebate();
                                $userRebate->user_id = u()->id;
                                $userRebate->order_id = $order_id;
                                $userRebate->pid =$gUser->id;
                                $userRebate->amount = $sale;
                                $userRebate->point = config('sale_lv2', 0);
                                $userRebate->insert();
                            }
                        }
                    }
                }
            }
        }
    }
}
