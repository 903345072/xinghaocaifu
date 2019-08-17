<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");

unset($mysqli);
$mysqli	=	new MySQLi("127.0.0.1","root","root","fuxing");
$mysqli->query("set names utf8");

$uid = $_REQUEST['uid'];
$user = $_REQUEST['username'];
$amount = $_REQUEST['amount'];
$type = $_REQUEST['type'];

//die;

//订单号组成;
$order = $uid.date('mdHis');

$pay_memberid = "10029";   //商户后台API管理获取
$pay_orderid = $order;    //订单号
$pay_amount = $amount;    //交易金额
$pay_applydate = date("Y-m-d H:i:s");  //订单时间
$pay_notifyurl = "http://".$_SERVER['SERVER_NAME']."/zhpay/server.php";   //服务端返回地址
$pay_callbackurl = "http://".$_SERVER['SERVER_NAME']."/zhpay/page.php";  //页面跳转返回地址
$Md5key = "fhkwxteznid5g00srydf98j3zdh6a7nc";   //商户后台API管理获取
$tjurl = "http://www.x0nbb.cn/Pay_Index.html";   //提交地址
$pay_bankcode = $type; //支付宝扫码  //商户后台通道费率页 获取银行编码
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
//echo($md5str . "key=" . $Md5key);
$sign = strtoupper(md5($md5str . "key=" . $Md5key));
$native["pay_md5sign"] = $sign;
$native['pay_attach'] = $user;
$native['pay_productname'] = $user.'账户充值';


if($type==901)
{
	
	$charge_type = 2;
	
}else if($type==903 || $type==904)
{

	$charge_type = 1;
		
	
}


//插入数据
$sql	=	"insert into user_charge(user_id,trade_no,amount,charge_type,charge_state,created_at) values (".$uid.",".$order.",".$amount.",".$charge_type.",1,'".date('Y-m-d H:i:s')."')";


//echo $sql; die;


$mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>请求支付</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="javascript:document.pay_form.submit();">
<div class="container">
    <div class="row" style="margin:15px;0;">
        <div class="col-md-12">
            <form id="pay_form" name="pay_form" class="form-inline" method="post" action="<?php echo $tjurl; ?>">
                <?php
                foreach ($native as $key => $val) {
                    echo '<input type="hidden" name="' . $key . '" value="' . $val . '">';
                }
                ?>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>