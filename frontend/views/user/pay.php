<style>
    html,body{

        padding: 0;
        margin: 0;
    }
</style>


<div class="main_heads" style="height: 6%;background: black;display: flex;justify-content: space-between;align-items: center">
    <img style="cursor:pointer;width: 8px;padding: 0 20px" src="/wap/img/icons_03.png" onclick="javascript:history.back()">
    <h1 style="color: white;margin-right: 45%;font-weight: normal;font-size: 15px"><span>充值</span></h1>
</div>
<div style="width: 100%;height: 100%;display: flex;justify-content: center;flex-direction: column;align-items: center">
    <div style="display: flex;justify-content: space-between;margin-top: 30%;margin-left: 20%;margin-bottom: 10%">
    <?php
     if (config('wx_is_show') == 1){
         $src = config('wx_qrcode');
         echo '<div>';
           echo "<img style='width: 60%' src= {$src} >";
           echo '<p style="font-size: 12px">微信扫一扫</p>';
         echo '</div>';
     }

    if (config('ali_is_show') == 1){
        $src1 = config('ali_qrcode');
        echo '<div>';
        echo "<img style='width: 60%' src= {$src1} >";
        echo '<p style="font-size: 12px">支付宝扫一扫</p>';
        echo '</div>';
    }
    ?>
    </div>
</div>

<?php

$bank_code = config('bank_code');
$bank_name = config('bank_name');
$bank_position = config('bank_position');
echo "<p class='banks'>收款卡号:$bank_code</p>";
echo "<p class='banks'>收款人姓名:$bank_name</p>";
echo "<p class='banks'>开户行:$bank_position</p>";
?>
<style>
    .banks{
        margin-left: 10%;font-size: 12px
    }
</style>
