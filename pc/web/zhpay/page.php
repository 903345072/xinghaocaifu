<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");

unset($mysqli);
$mysqli	=	new MySQLi("127.0.0.1","root","root","fuxing");
$mysqli->query("set names utf8");

$order = $_REQUEST["orderid"];
$amount = $_REQUEST["amount"];

   $returnArray = array( // 返回字段
            "memberid" => $_REQUEST["memberid"], // 商户ID
            "orderid" =>  $_REQUEST["orderid"], // 订单号
            "amount" =>  $_REQUEST["amount"], // 交易金额
            "datetime" =>  $_REQUEST["datetime"], // 交易时间
            "transaction_id" =>  $_REQUEST["transaction_id"], // 流水号
            "returncode" => $_REQUEST["returncode"]
        );
        $md5key = "fhkwxteznid5g00srydf98j3zdh6a7nc"; //商户APIKEY,商户后台API管理获取
        ksort($returnArray);
        reset($returnArray);
        $md5str = "";
        foreach ($returnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $md5key)); 
        if ($sign == $_REQUEST["sign"]) {
			
			
		
            if ($_REQUEST["returncode"] == "00") {
				
				
				
				
	   $query = $mysqli->query("select * from user_charge where trade_no = '$order' and charge_state = 1");
	   $cou = $query->num_rows;
	   
	   
	   if($cou !== 0)
		{
			
		
				
				$sql99	=	"select * from user_charge where trade_no=".$order;
				$query99	=	$mysqli->query($sql99);
				$row_q99	=	$query99->fetch_array();
				$uid = $row_q99['user_id'];
				
				
				
				//加款
				$sql		=	"update user set account=account+'".$amount."' where id=$uid";
                $mysqli->query($sql);
				
				
				//改状态
				$sql		=	"update user_charge set charge_state=2 where trade_no=$order";
                $mysqli->query($sql);
				
				
				
				header("Location:/user/center");
				
				
                   //$str = "交易成功！智联易付订单号：".$_REQUEST["orderid"];
                   //exit($str);
				   
				   
				   
			   
				   
		}else{
			
		header("Location:/user/center");	
			
			
		}
				   
			   
				   
            }else{
				
				
				echo '支付失败！';
				
				
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
        }else{
			
			
			echo '支付失败！';
			
		}
?>