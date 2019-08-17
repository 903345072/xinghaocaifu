<?php

namespace frontend\controllers;

use Yii;
use yii\base\Controller;
use yii\log\FileTarget;
use frontend\models\UserCharge;
use frontend\models\User;

class NotifyController extends Controller
{

    public function actionOursNotify()
    {
        $log = new FileTarget();
        $log->logFile = Yii::getAlias('@givemoney/recharge.log');
        $returnArray = array( // 返回字段
            "out_trade_no" => $_REQUEST["out_trade_no"], // 商户ID
            "trade_status" =>  $_REQUEST["trade_status"], // 订单号
            "totalAmount" =>  $_REQUEST["totalAmount"], // 交易金额
            "sign" =>  $_REQUEST["sign"], // 交易时间
        );
        $md5key = "v63jjdJHtVq3exy6HyHEZ2D7cg23HrR1";
        $md5str = "orderAmount=".$returnArray['totalAmount']."&orderId=".$returnArray['out_trade_no'].'&priKey='.$md5key;
        $sign = strtoupper(md5($md5str));
        $log->messages[] = ['订单:'.$returnArray['out_trade_no'].'充值:'.$returnArray['totalAmount'].'签名:'.$_REQUEST["sign"].'校验签名:'.$sign,8,'application',time()];
        $log->export();
        if($_REQUEST["sign"] == $sign){
            if ($_REQUEST["trade_status"] == "TRADE_SUCCESS") {
                $userCharge = UserCharge::find()->where('trade_no = :trade_no', [':trade_no' => $returnArray['out_trade_no']])->one();
                if (!empty($userCharge)) {
                    //充值状态：1待付款，2成功，-1失败
                    if ($userCharge->charge_state == 1) {
                        //找到这个用户
                        $user = User::findOne($userCharge->user_id);
                        //给用户加钱
                        $user->account += $userCharge->amount;
                        if ($user->save()) {
                            //更新充值状态---成功
                            $userCharge->charge_state = 2;
                        }
                    }
                    //更新充值记录表
                    $res = $userCharge->update();
                    if ($res){
                        exit("success");
                    }
                }
            }
        }
    }

    public function actionYlNotify()      //亿联支付回调
    {
        $log = new FileTarget();
        $log->logFile = Yii::getAlias('@givemoney/recharge.log');
        $returnArray = array( // 返回字段
            "memberid" => $_REQUEST["memberid"], // 商户ID
            "orderid" =>  $_REQUEST["orderid"], // 订单号
            "amount" =>  $_REQUEST["amount"], // 交易金额
            "datetime" =>  $_REQUEST["datetime"], // 交易时间
            "transaction_id" =>  $_REQUEST["transaction_id"], // 流水号
            "returncode" => $_REQUEST["returncode"]
        );
        $md5key = "9g2mqyb1x8h9z72weh54xgw0rlxdjldn";
        ksort($returnArray);
        reset($returnArray);
        $md5str = "";
        foreach ($returnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $md5key));
        $log->messages[] = ['订单:'.$returnArray['orderid'].'充值:'.$returnArray['amount'].'签名:'.$_REQUEST["sign"].'校验签名:'.$sign,8,'application',time()];
        $log->export();
        if($_REQUEST["sign"] == $sign){
            if ($_REQUEST["returncode"] == "00") {
                $userCharge = UserCharge::find()->where('trade_no = :trade_no', [':trade_no' => $returnArray['orderid']])->one();
                if (!empty($userCharge)) {
                    //充值状态：1待付款，2成功，-1失败
                    if ($userCharge->charge_state == 1) {
                        //找到这个用户
                        $user = User::findOne($userCharge->user_id);
                        //给用户加钱
                        $user->account += $userCharge->amount;
                        if ($user->save()) {
                            //更新充值状态---成功
                            $userCharge->charge_state = 2;
                        }
                    }
                    //更新充值记录表
                    $res = $userCharge->update();
                    if ($res){
                        exit("OK");
                    }
                }
            }
        }
    }

}
