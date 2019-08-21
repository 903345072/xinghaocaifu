<header class="mui-bar mui-bar-nav" style="background-color: #000c17">
    <a class="mui-icon mui-icon-left-nav mui-pull-left"  href="<?=url(['user/index'])?>"></a>
    <h1 class="mui-title">提现</h1>
    <!--<a class="mui-btn mui-btn-link mui-pull-right" href="">提现记录</a>-->
</header>

<div class="mui-content">
    <div class="mui-input-card">
        <div class="mui-table-view">
            <div class="mui-table-view-cell">
                <div class="uk-text-medium">余额：<b class="uk-text-xlarge uk-text-theme"><?=u()->account-u()->blocked_account?></b> 元</div>
            </div>
        </div>
    </div>

    <?php $form = self::beginForm(['showLabel' => false]) ?>
        <input type="hidden" name="info[type]" value="0">
        <div class="mui-input-card">
            <div class="mui-table-view mui-in-input-card">
                <div class="mui-table-view-cell mui-media">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6">
                            提现金额
                        </div>
                        <div class="mui-media-body uk-input-blank">
                            <?= $form->field($userWithdraw, 'amount')->textInput(['placeholder' => '请输入提现金额', 'class' => 'uk-input']) ?>
                        </div>
                    </div>
                </div>
                <div class="mui-table-view-cell mui-media">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6">
                            持卡人姓名
                        </div>
                        <div class="mui-media-body uk-input-blank">
                            <?= $form->field($userAccount, 'realname')->textInput(['placeholder' => '请输入持卡人姓名', 'class' => 'uk-input']) ?>
                        </div>
                    </div>
                </div>
                <div class="mui-table-view-cell mui-media ">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6 ">
                            提现卡号
                        </div>
                        <div class="mui-media-body uk-input-blank">
<!--                        <div class="mui-media-body uk-input-blank uk-input-blank-select ">-->
<!--                            <select class="uk-input" name="bankid" id="bankid " onchange="getBankInfo(this.value) ">-->
<!--                                <option value="0 " selected=" ">添加新卡</option>-->
<!--                            </select>-->
                            <?= $form->field($userAccount, 'bank_card')->textInput(['placeholder' => '请输入卡号', 'class' => 'uk-input']) ?>
                        </div>
                    </div>
                </div>
                <div class="mui-table-view-cell mui-media bankinfo ">
                    <div class="mui-table ">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6 ">
                            银行开户行
                        </div>
                        <div class="mui-media-body uk-input-blank ">
                            <select class="uk-input " name="UserAccount[bank_name] " id="bankname " style="color:red ">
                                <option value="">请选择开户行</option>
                                  <?php foreach ($bankList as $key=>$name): ?>
                                    <option <?php if($userAccount['bank_name'] == $name): ?>selected<?php endif; ?> value="<?= $name ?>"><?= $name ?></option>
                                  <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mui-table-view-cell mui-media bankinfo ">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6 ">
                            网点支行
                        </div>
                        <div class="mui-media-body uk-input-blank ">
                            <?= $form->field($userAccount, 'bank_address')->textInput(['placeholder' => '请输入开卡行地址', 'class' => 'uk-input']) ?>
                        </div>
                    </div>
                </div>


                <div  class="mui-table-view-cell mui-media">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6 ">
                            登陆密码
                        </div>
                        <div class="mui-media-body uk-input-blank">
                            <input type="password" name="password" id="mobile_show" value=""  class="uk-input " placeholder="登陆密码 ">
                        </div>
                    </div>
                </div>

                <div style="display: none" class="mui-table-view-cell mui-media">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-6 ">
                            手机号
                        </div>
                        <div class="mui-media-body uk-input-blank">
                            <input type="text" name="mobile" id="mobile_show" value="<?=u()->mobile?>" readonly class="uk-input " placeholder="手机号 ">
                        </div>
                    </div>
                </div>

                <div style="display: none" class="mui-table-view-cell mui-media">
                    <div class="mui-table">
                        <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEWZmZnMzMz///+ZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZnMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZly+It3AAAAJ3RSTlMAAAAGBwkKDhESKSotMGZnaWpscHGAgK+wsbKztLXFxsvM6fH09fzEdjzcAAAAcklEQVQY03XOyRKCMBBF0ZuHIo6AGiTiCEr+/w/dUF2aKu/yLPo1csD2+n6FNeCEHGz63aKo+5VBqAH2J4OhAFgOBhEA4h/I2zFOje1cqOoyprJLKdR4LN8Y3G8JPB8JeJ/A8ZDA19HqPLPZrhTKw89jH6mnCbvVGj10AAAAAElFTkSuQmCC" class="" width="16" height="16">
                        </div>
                        <div class="mui-media-body uk-input-blank">
                            <?= $form->field($userAccount, 'verifyCode')->textInput(['placeholder' => '请输入手机验证码', 'class' => 'uk-input uk-text-medium'])  ?>
                        </div>
                        <div class="mui-table-cell uk-text-middle uk-width-em-8 mui-text-right">

                            <input type="button" class="code fr" value="获取手机验证码"  id="verifyCodeBtn" data-action="<?= url(['site/verifyCode']) ?>">
                        </div>
                    </div>
                </div>
                <?= $form->field($userAccount, 'bank_mobile')->textInput(['type' => 'hidden', 'value' => u()->mobile]) ?>
            </div>
    </div>
    <?php self::endForm() ?>
    <div style="margin:12px 12px;color: #c09853">提现手续费<?= config('charges') ?>%</div>
    <div class="mui-content-padded uk-margin-xmedium-top ">
        <button type="button" class="mui-btn mui-btn-warning mui-btn-block registerSubmit">提交申请</button>
    </div>
</div>

<script type="text/javascript ">
mui.init();
</script>
<script type="text/javascript">
    countdown=60;
    // 验证码
    $("#verifyCodeBtn").click(function () {
        var mobile = $('#mobile_show').val();
        var url = $(this).data('action');
        if (mobile.length != 11) {
            layer.msg('您输入的不是一个手机号！');
            return false;
        }
        var obj = $('.fr')
        settime(obj);
        $.post(url, {mobile: mobile}, function(msg) {
            layer.msg(msg.info);
        }, 'json');
    });
    $(function () {
        $(".registerSubmit").click(function () {

            $("form").ajaxSubmit($.config('ajaxSubmit', {
                success: function (msg) {
                    if (!msg.state) {
                        return $.alert(msg.info);
                    } else {
                        $.alert(msg.info);
                        window.location.href = "<?= url(['user/index'])?>";
                    }
                }
            }));
            return false;
        });
    });

    function settime(obj) { //发送验证码倒计时
        if (countdown == 0) {
            obj.attr('disabled',false);
            //obj.removeattr("disabled");
            obj.val("获取手机验证码");
            countdown = 60;
            return;
        } else {
            obj.attr('disabled',true);
            obj.val(countdown);
            countdown--;
        }
        setTimeout(function() {
                settime(obj) }
            ,1000)
    }
</script>