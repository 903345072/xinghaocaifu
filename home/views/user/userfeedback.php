
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">修改密码</li>
    </ol>

    <div class="bg-fa am-padding-sm">

        <div class="am-g">

            <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-0">

                <div class="bg-white am-padding-sm border-1">

                    <div class="am-padding-top-lg am-text-center">
                        <img src="/pc/images/defhead.png" class="wid45">
                        <p class="text-999"><?= u()->username ?></p>
                    </div>

                    <div class="am-text-center am-padding-top-lg am-text-danger">
                        <p class="">账户余额(元)：￥<?= u()->account - u()->blocked_account ?></p>
                        <p class="am-padding-top-xs">模拟账户余额(元)：￥<?= u()->moni_acount - u()->blocked_moni ?></p>
                        <p class="am-padding-top-sm">可用积分：<?= u()->point ?></p>
                    </div>

                    <div class="am-text-center am-padding-vertical-sm">
                        <div class="am-btn-group">
                            <a href="<?= url(['usercash']) ?>">
                                <p class="am-btn am-btn-default am-btn-xs am-padding-horizontal-lg rad500">
                                    提现</p>
                            </a>
                            <a href="<?= url(['usercharge']) ?>"><p
                                        class="am-btn am-btn-danger am-btn-xs am-padding-horizontal-lg rad500">充值</p></a>
                        </div>

                    </div>

                </div>

              <div>
                <a href="<?= url(['usernews'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">信息中心</p></a>
                <a href="<?= url(['userpoint'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">我的积分</p></a>
                <a href="<?= url(['userannounce'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">公告</p></a>
                <!--<a href="<?/*= url(['usercharge'])*/?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">资金明细</p></a>-->
                <a href="<?= url(['userrecord'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
                <a href="<?= url(['userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                <a href="<?= url(['userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                <a href="<?= url(['usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>
                <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-danger am-btn-block am-btn-lg">意见反馈</p></a>
                  <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

              </div>

            </div>
            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <div class="wid100 am-padding-sm">

                        <div class="am-g am-padding-vertical-xs">
                            <textarea id="content" cols="30" rows="10" style="width: 100%;" placeholder="尊敬的会员您好！欢迎您向我司领导提出您宝贵的意见与建议谢谢！在此祝您生活愉快！"></textarea>
                        </div>

                        <div class="am-padding-top-lg">
                            <div class="wid100">
                                <p class="am-btn am-btn-secondary am-btn-block am-btn-lg am-radius registerSubmit">确认</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>


</div>


<script type="text/javascript">
    $(function () {
        $('.registerSubmit').click(function(){
            var content = $('#content').val();
            if(!content){
                alert('内容不能为空');return;
            }
            $.ajax({
                url:'feedback',
                type:'post',
                data:{content:content},
                success:function(data){
                    if(data == 1){
                        alert('提交成功');
                        window.location.href = 'loginsucc';
                    }else{
                        alert('提交失败');
                    }
                }
            })
        })
    });
</script>