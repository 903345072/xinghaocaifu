<?php

namespace home\models;

use Yii;
use common\helpers\FileHelper;
use frontend\models\UserCharge as fruc;
class UserCharge extends \common\models\UserCharge
{
    public static function hypay($amount, $pay_type = 'wangyin')
    {
        $amount = sprintf("%.2f", $amount);
        $user = User::findModel(u()->id);
        //保存充值记录
        $userCharge = new UserCharge();
        $userCharge->user_id = $user->id;
        $userCharge->trade_no = $user->id . date("YmdHis") . rand(1000, 9999);;
        $userCharge->amount = $amount;
        $userCharge->charge_type = 3;
        if ($pay_type == 'alipay') {
            $userCharge->charge_type = self::CHARGE_TYPE_ALIPAY;
        }
        $userCharge->charge_state = self::CHARGE_STATE_WAIT;
        if (!$userCharge->save()) {
            return false;
        }
        $url = 'http://www.hanppay.com/apisubmit';
        $data['version'] = '1.0'; //版本号
        $data['customerid'] = 12036; //商户id
        $data['sdorderno'] = $userCharge->trade_no;
        $data['total_fee'] = $amount;
        $data['paytype'] = $pay_type;
        $data['notifyurl'] =  url(['site/hynotify'], true); //异步回调地址
        $data['returnurl'] = url(['order/buy','id'=>1,'model_type'=>1], true);
        $string = 'version='.$data['version'].'&customerid='.$data['customerid'].'&total_fee='.$data['total_fee'].'&sdorderno='.$data['sdorderno'].'&notifyurl='.$data['notifyurl'].'&returnurl='.$data['returnurl'].'&7a68ac64e17a0ba4e1e8c859f6df022399701710';
        $data['sign'] = md5($string);//验证签名    sign    必填，sign = MD5(merchant_no+total_fee+today+key)；
        $res = httpRequest($url, $data);
        echo $res;
        return false;
    }

    public static function ylpay($amount, $pay_type = 'wangyin')     //亿联支付
    {
        return(fruc::ylpay($amount,$pay_type));

    }

}