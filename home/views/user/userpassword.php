
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
                <a href="<?= url(['userpassword'])?>">       <p class="am-btn am-btn-danger am-btn-block am-btn-lg">修改密码</p></a>
                <a href="<?= url(['usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>
                <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
                  <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

              </div>

            </div>
            <?php $form = self::beginForm(['showLabel' => false, 'class'=>'mui-input-group', 'id'=>'regform']) ?>
            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <div class="wid50 am-padding-sm">

                        <div class="am-g am-padding-vertical-xs">
                            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-top-xs">
                                <p>原密码</p>
                            </div>
                            <div class="am-u-sm-9 am-u-md-9 am-u-lg-9">
                                <input placeholder="密码" class="am-form-field" name="User[oldPassword]" type="password">
                            </div>
                        </div>

                        <div class="am-g am-padding-vertical-xs">
                            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-top-xs">
                                <p>新密码</p>
                            </div>
                            <div class="am-u-sm-9 am-u-md-9 am-u-lg-9">
                                <input placeholder="新密码" class="am-form-field" name="User[newPassword]" type="password">
                            </div>
                        </div>

                        <div class="am-g am-padding-vertical-xs">
                            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-top-xs">
                                <p>确认密码</p>
                            </div>
                            <div class="am-u-sm-9 am-u-md-9 am-u-lg-9">
                                <input placeholder="再次输入密码" class="am-form-field" name="User[cfmPassword]" type="password">
                            </div>
                        </div>

                        <div class="am-padding-top-lg">
                            <div class="am-u-lg-offset-3 am-u-sm-offset-3 am-u-md-offset-3 wid75">
                                <p class="am-btn am-btn-secondary am-btn-block am-btn-lg am-radius registerSubmit">确认</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <?php self::endForm() ?>
        </div>

    </div>


</div>


<script type="text/javascript">
    $(function () {
        $(".registerSubmit").click(function () {
//            $("form").ajaxSubmit($.config('ajaxSubmit', {
//                success: function (msg) {
//                    if (!msg.state) {
//                        return $.alert(msg.info);
//                    } else {
//                        $.alert(msg.info);
//                        window.location.href = "<?//= url(['user/index'])?>//";
//                    }
//                }
//            }));
//            return false;
            $.ajax({
                url:'userpassword',
                type:'post',
                dataType: "json",
                data: $('#regform').serialize(),
                success: function (msg) {
                    // console.log(msg);return;
                    if(msg == '1'){
                        alert('修改成功');
                        window.location.href = 'loginsucc';
                    }else{
                        if(msg['info'] instanceof Array){
                            alert(msg.info[Object.keys(msg.info)[0]])
                        }else{
                            alert(msg['info'])
                        }
                    }
                }
            })
        });
    });
    !function () {
        var copyBtn = $('#copyBtn');
        var shareLink = $('#shareLink');
        copyBtn.on('click', function () {
            shareLink.select();
            try {
                var successful = document.execCommand('copy');
                var msg = successful ? '成功复制到剪贴板' : '该浏览器不支持点击复制到剪贴板';
                alert(msg);
            } catch (err) {
                alert('该浏览器不支持点击复制到剪贴板');
            }
        });
    }()
</script>