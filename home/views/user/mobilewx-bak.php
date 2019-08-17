<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>微信转账</title>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/commonstyle.css">
</head>
<body>

<div class="am-padding-lg" style="width: 20%;left: 40%;">
    <img src="/images/wechat.jpg" style="width: 100%;">
</div>

<div class="am-padding-sm" style="width: 20%;left: 40%;">
    <p class="bl-red">识别二维码后再填写转账金额提交</p>
</div>

<div class="am-padding-sm am-padding-top-0" style="width: 20%;left: 40%;">

    <p class="am-padding-vertical-xs am-text-danger">账户*</p>
    <div>
        <input type="text" name="" id="name" class="am-form-field" placeholder="填写微信账号，方便财务审核，快速入账">
    </div>

    <p class="am-padding-vertical-xs am-text-danger">存款金额*</p>
    <div>
        <input type="text" name="" id="money" class="am-form-field" placeholder="请填写转账的金额 (1-20W)">
    </div>

    <div class="am-padding-horizontal-lg">
        <p class="am-btn am-btn-danger am-btn-block am-radio"id="submission">提交</p>
    </div>

</div>

<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $('#submission').click(function(){
        var name = $('#name').val();
        var money = $('#money').val();
        if(!name || !money){
            alert('请填写完整信息');return;
        }
        $.ajax({
            url:'userpayment',
            type:'post',
            data:{type:1,name:name,money:money},
            success:function(data){
                if(data == 1){
                    alert('提交成功');
                    window.location.href = 'loginsucc';
                }else{
                    alert('提交失败')
                }
            }
        })
    })
</script>
</body>
</html>