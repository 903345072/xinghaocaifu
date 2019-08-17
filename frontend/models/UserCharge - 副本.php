<?php

namespace frontend\models;

use Yii;
use common\helpers\FileHelper;

class UserCharge extends \common\models\UserCharge
{




//中南支付
    public static function znpay($amount, $pay_type = 'wxpay')
    {
        $amount = sprintf("%.2f", $amount);
        $user = User::findModel(u()->id);
        //保存充值记录
        $userCharge = new UserCharge();
        $userCharge->user_id = $user->id;
        $userCharge->trade_no = $user->id . date("YmdHis") . rand(1000, 9999);;
        $userCharge->amount = $amount;
        $userCharge->charge_type = self::CHARGE_TYPE_ZFWECHART;
        if ($pay_type == 'alipay') {
            $userCharge->charge_type = self::CHARGE_TYPE_ALIPAY;
        }
        $userCharge->charge_state = self::CHARGE_STATE_WAIT;
        if (!$userCharge->save()) {
            return false;
        }
        $url = 'http://api.zhongnanpay.com:3022/hmpay/online/createWxOrder.do';
        $data['merchant_no'] = ZNPAY_ID; //商户id
        // $data['total_fee'] = $amount * 100;
        $data['total_fee'] = '1';
        $data['pay_num'] = $userCharge->trade_no;
        $data['notifyurl'] =  url(['site/znnotify'], true); //异步回调地址  融智付异步商户url
        $string = $data['merchant_no'] . $data['total_fee'] . date("Ymd") . ZNPAY_KEY;
        $data['sign'] = md5($string);//验证签名    sign    必填，sign = MD5(merchant_no+total_fee+today+key)；
        $data['pay_type'] = $pay_type;
        // $data['return_url'] = url(['site/index'], true);
        // tes($string, $data);
        $result = httpRequest($url, $data);
        $object = json_decode($result);
        // test($object);
        if (isset($object->return_code) && $object->return_code == '10000') {
            //生成二维码
            require Yii::getAlias('@vendor/phpqrcode/phpqrcode.php');
            $codeUrl = $object->code_url; //二维码内容
            $errorCorrectionLevel = 'L';//容错级别   
            $matrixPointSize = 6;//生成图片大小   
            $filePath = Yii::getAlias('@webroot/' . config('uploadPath') . '/znpay/');
            FileHelper::mkdir($filePath);
            $src = $filePath . $pay_type . $user->id . '.png';
            //生成二维码图片   
            \QRcode::png($codeUrl, $src, $errorCorrectionLevel, $matrixPointSize, 2);
            return config('uploadPath') . '/znpay/' . $pay_type . $user->id . '.png';  
        }
        return false;
    }

//翰银支付
    public static function hypay($amount, $pay_type = 'wangyin')
    {
        $amount = sprintf("%.2f", $amount);
        $user = User::findModel(u()->id);
        //保存充值记录
        $userCharge = new UserCharge();
        $userCharge->user_id = $user->id;
        $userCharge->trade_no = $user->id . date("YmdHis") . rand(1000, 9999);;
        $userCharge->amount = $amount;
        $userCharge->charge_type = self::CHARGE_TYPE_ZFWECHART;
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
        $data['returnurl'] = url(['site/index'], true);
        $string = 'version='.$data['version'].'&customerid='.$data['customerid'].'&total_fee='.$data['total_fee'].'&sdorderno='.$data['sdorderno'].'&notifyurl='.$data['notifyurl'].'&returnurl='.$data['returnurl'].'&7a68ac64e17a0ba4e1e8c859f6df022399701710';
        $data['sign'] = md5($string);//验证签名    sign    必填，sign = MD5(merchant_no+total_fee+today+key)；



        $result = httpRequest($url, $data);
        dump($result);die;
        $object = json_decode($result);
        // test($object);
        if (isset($object->return_code) && $object->return_code == '10000') {
            //生成二维码
            require Yii::getAlias('@vendor/phpqrcode/phpqrcode.php');
            $codeUrl = $object->code_url; //二维码内容
            $errorCorrectionLevel = 'L';//容错级别
            $matrixPointSize = 6;//生成图片大小
            $filePath = Yii::getAlias('@webroot/' . config('uploadPath') . '/znpay/');
            FileHelper::mkdir($filePath);
            $src = $filePath . $pay_type . $user->id . '.png';
            //生成二维码图片
            \QRcode::png($codeUrl, $src, $errorCorrectionLevel, $matrixPointSize, 2);
            return config('uploadPath') . '/znpay/' . $pay_type . $user->id . '.png';
        }
        return false;
    }


     //第三方支付
    public static function payExtend($amount)
    {
        //保存充值记录
        $userCharge = new UserCharge();
        $userCharge->user_id = u()->id;
        $userCharge->trade_no = u()->id . date("YmdHis");
        $userCharge->amount = $amount;
        $userCharge->charge_state = UserCharge::CHARGE_STATE_WAIT;
        if (!$userCharge->save()) {
            return false;
        }
        $params = [
            'bank_code' => '',
            'client_ip' => '',
            'extend_param' => '',
            'extra_return_param' => '',
            'input_charset' => 'UTF-8',
            'interface_version' => 'V3.0',
            'merchant_code' => ZF_ID,
            'notify_url' => url(['site/notify'], true),
            'order_amount' => $amount,
            'order_no' => $userCharge->trade_no,
            'order_time' => self::$time,
            'pay_type' => '',
            'product_code' => '',
            'product_desc' => '',
            'product_name' => config('web_name') . '_用户充值',
            'product_num' => '',
            'redo_flag' => '',
            'return_url' => '',
            'service_type' => 'direct_pay',
            'show_url' => '',
            'sign_type' => 'RSA-S',
        ];
        $signStr = $d = '';
        foreach ($params as $key => $value) {
            if ($key != 'sign_type' && $value) {
                $signStr .= $d . "{$key}={$value}";
                $d = '&';
            }
        }

        $merchantPrivateKey = openssl_get_privatekey(MERCHANT_PRIVATE_KEY);
    
        openssl_sign($signStr, $signInfo, $merchantPrivateKey, OPENSSL_ALGO_MD5);
    
        $params['sign'] = base64_encode($signInfo);
        return $params;
    }
}
