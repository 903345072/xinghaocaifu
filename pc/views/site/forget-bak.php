<style>
    body {
        background: url(/images/login-bg.jpg) no-repeat 50% 0/cover;
    }

    .mui-content {
        background-color: transparent
    }

    .mui-bar-nav {
        background-color: transparent
    }
</style>

<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
</header>
<div class="mui-content">
    <div class="mui-content-padded">
        <div class="uk-text-medium mui-text-center">
            <img src="<?=config('web_logo')?>" width="84" height="84">
        </div>
    </div>
    <div class="mui-input-card">
        <div class="mui-table-view mui-in-input-card">
            <?php $form = self::beginForm(['showLabel' => false]) ?>
            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="/images/user.png" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($model, 'mobile')->textInput(['placeholder' => '手机号码', 'class' => 'uk-input uk-text-medium'])  ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="/images/close.png" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => '请输入6~12位密码', 'class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="/images/close.png" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($model, 'cfmPassword')->passwordInput(['placeholder' => '确认密码', 'class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>

            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEWZmZnMzMz///+ZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZnMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZly+It3AAAAJ3RSTlMAAAAGBwkKDhESKSotMGZnaWpscHGAgK+wsbKztLXFxsvM6fH09fzEdjzcAAAAcklEQVQY03XOyRKCMBBF0ZuHIo6AGiTiCEr+/w/dUF2aKu/yLPo1csD2+n6FNeCEHGz63aKo+5VBqAH2J4OhAFgOBhEA4h/I2zFOje1cqOoyprJLKdR4LN8Y3G8JPB8JeJ/A8ZDA19HqPLPZrhTKw89jH6mnCbvVGj10AAAAAElFTkSuQmCC" class="" width="16" height="16">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($model, 'verifyCode')->textInput(['placeholder' => '请输入手机验证码', 'class' => 'uk-input uk-text-medium'])  ?>
                    </div>
                    <div class="mui-table-cell uk-text-middle uk-width-em-8 mui-text-right">

                        <input type="button" class="code fr" value="获取手机验证码"  id="verifyCodeBtn" data-action="<?= url(['site/verifyCode']) ?>">
                    </div>
                </div>
            </div>

            <?php self::endForm() ?>
        </div>
    </div>
    <div class="mui-content-padded ">
        <button type="button" class="mui-btn mui-btn-warning mui-btn-block forgetSubmit">提交</button>
    </div>
</div>
<script type="text/javascript">
    // 验证码
    $("#verifyCodeBtn").click(function () {
        var mobile = $('#user-mobile').val();
        var url = $(this).data('action');
        if (mobile.length != 11) {
            layer.msg('您输入的不是一个手机号！');
            return false;
        }
        $.post(url, {mobile: mobile}, function(msg) {
            layer.msg(msg.info);
        }, 'json');
    });
    $(function () {
        $(".forgetSubmit").click(function () {

            $("form").ajaxSubmit($.config('ajaxSubmit', {
                success: function (msg) {
                    if (!msg.state) {
                        return $.alert(msg.info);
                    } else {
                        window.location.href = msg.info;
                    }
                }
            }));
            return false;
        });
    });
</script>

