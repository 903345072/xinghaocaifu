<?php

namespace frontend\models;

use Yii;
use common\helpers\FileHelper;

class UserCharge extends \common\models\UserCharge
{
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
        $data['returnurl'] = url(['site/index'], true);
        $string = 'version='.$data['version'].'&customerid='.$data['customerid'].'&total_fee='.$data['total_fee'].'&sdorderno='.$data['sdorderno'].'&notifyurl='.$data['notifyurl'].'&returnurl='.$data['returnurl'].'&7a68ac64e17a0ba4e1e8c859f6df022399701710';
        $data['sign'] = md5($string);//验证签名    sign    必填，sign = MD5(merchant_no+total_fee+today+key)；
        $res = httpRequest($url, $data);
        echo $res;
        return false;
    }

    public static function ylpay($amount,$pay_type)     //亿联支付
    {
        error_reporting(0);
        header("Content-type: text/html; charset=utf-8");
        $amount = sprintf("%.2f", $amount);
        $user = User::findModel(u()->id);
        $userCharge = new self();
        $userCharge->user_id = $user->id;
        $userCharge->trade_no = $user->id . date("YmdHis") . rand(1000, 9999);
        $userCharge->amount = $amount;
        $userCharge->charge_type = 3;
        if ($pay_type == 'alipay') {
            $userCharge->charge_type = self::CHARGE_TYPE_ALIPAY;
        }
        $userCharge->charge_state = self::CHARGE_STATE_WAIT;
        if (!$userCharge->save(0)) {
            return false;
        }
        $pay_memberid = "197795080";   //商户ID
        $pay_orderid = $userCharge->trade_no;    //订单号
        $pay_amount = $amount;    //交易金额
        $pay_applydate = date("Y-m-d H:i:s");  //订单时间
        $pay_notifyurl = LY_NOTIFY;   //服务端返回地址
        $pay_callbackurl = url(['site/index'],1);  //页面跳转返回地址
        $Md5key = "9g2mqyb1x8h9z72weh54xgw0rlxdjldn";   //密钥
        $tjurl = "https://www.db295.com/Pay_Index.html";   //提交地址
        $pay_bankcode = "10012";   //银行编码
//扫码
        $native = array(
            "pay_memberid" => $pay_memberid,
            "pay_orderid" => $pay_orderid,
            "pay_amount" => $pay_amount,
            "pay_applydate" => $pay_applydate,
            "pay_bankcode" => $pay_bankcode,
            "pay_notifyurl" => $pay_notifyurl,
            "pay_callbackurl" => $pay_callbackurl,
        );
        ksort($native);
        $md5str = "";
        foreach ($native as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }

        $sign = strtoupper(md5($md5str . "key=" . $Md5key));
        $native["pay_md5sign"] = $sign;
        $native['pay_attach'] = "1234|456";
        $native['pay_productname'] ='VIP基础服务';
        $str = '<form id="Form1" name="Form1" method="post" action="' . $tjurl . '">';
        foreach ($native as $key => $val) {
            $str = $str . '<input type="hidden" name="' . $key . '" value="' . $val . '">';
        }
        $str = $str . '<input type="submit" value="订单提交中">';
        $str = $str . '</form>';
        $str = $str . '<script>';
        $str = $str . 'document.Form1.submit();';
        $str = $str . '</script>';
        return $str;
    }

    public static function ourspay($amount,$pay_type)
    {
        header("Content-type: application/json; charset=utf-8");
        $amount = sprintf("%.2f", $amount);
        $user = User::findModel(u()->id);
        $userCharge = new self();
        $userCharge->user_id = $user->id;
        $userCharge->trade_no = $user->id . date("YmdHis") . rand(1000, 9999);
        $userCharge->amount = $amount;
        $userCharge->charge_type = 3;
        if ($pay_type == 'alipay') {
            $userCharge->charge_type = self::CHARGE_TYPE_ALIPAY;
        }
        $userCharge->charge_state = self::CHARGE_STATE_WAIT;
        if (!$userCharge->save(0)) {
            return false;
        }
        $payType = "Wap";   //收银方式
        $merchantId = 'S0497';    //商户号
        $orderId = $userCharge->trade_no;    //订单号
        $productName = '在线充值';  //商品名称
        $orderAmount = $amount;   //金额
        $version = '1.0';  //版本
        $signType = "MD5";   //密钥
        $payMethod = "22";   //提交地址
        $notifyUrl = OURS_NOTIFY;   //银行编码
        $native = array(
            "merchantId" => $merchantId,
            "orderAmount" => $orderAmount,
            "orderId" => $orderId,
            "payMethod"=>$payMethod,
            "payType" => $payType,
            "signType" => $signType,
            "version" => $version,
        );
        $md5str = "";
        $Md5key = "v63jjdJHtVq3exy6HyHEZ2D7cg23HrR1";
        foreach ($native as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }

        $sign = strtoupper(md5($md5str . "priKey=" . $Md5key));
        $native["sign"] = $sign;
        $native['notifyUrl'] = $notifyUrl;
        $native['productName'] = $productName;
        $url = 'http://www.longxilllllj.xyz/api/v1/create';
        $ret=self::postman($url, json_encode($native));
        $result= json_decode($ret, true);
        header(sprintf('Location: %s', $result['data']['qr_code']));
        die();
        $html= sprintf("<form name=\"myform\" id=\"myform\" action=\"%s\" method=\"POST\">\r\n", $url);
        foreach ($native as $name=>$value)
        {
            if ($name== 'orderAmount')
                $value= sprintf("%.2f", floatval($value));

            $html.= sprintf("<input type=\"hidden\" name=\"%s\" value=\"%s\">\r\n", $name, $value);
        }
        $html.= sprintf("<input type='submit' ></form><script>var form= document.forms['myform']; console.log(form);</script>");
        $html = $html . '<script>';
        $html = $html . 'document.myform.submit();';
        $html = $html . '</script>';
        echo $html;
        die;
    }

    public static function postman($url, $data) {
        $headers[]  =  "Content-Type:application/json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    public static function requestPost($url,$data)
    {

    $ch = curl_init();
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded;charset=UTF-8'));
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json;charset=UTF-8','Content-Length: ' . strlen($data)));
    curl_setopt($ch,CURLOPT_TIMEOUT,10);
    // POST数据
    curl_setopt($ch, CURLOPT_POST, 1);
    // 把post的变量加上
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    //执行并获取url地址的内容
    $output = curl_exec($ch);
    $header = curl_getinfo($ch);
    $http_code = $header['http_code'];
    //释放curl句柄
    curl_close($ch);
    if(200 != $http_code) {
        $log['output'] = $output;
        $log['requestData'] = $data;
        $log['curl_header'] = $header;
        return null;
    }
return $output;
}


}

