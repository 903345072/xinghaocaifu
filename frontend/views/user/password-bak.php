<header class="mui-bar mui-bar-nav">
    <a class="mui-icon mui-icon-left-nav mui-pull-left"  href="<?=url(['user/index'])?>"></a>
    <h1 class="mui-title">修改密码</h1>
</header>

<div class="mui-content">
    <?php $form = self::beginForm(['showLabel' => false, 'class'=>'mui-input-group', 'id'=>'regform']) ?>
        <div class="mui-input-row">
            <label>原密码</label>
            <input placeholder="密码" name="User[oldPassword]" type="password">
        </div>
        <div class="mui-input-row">
            <label>新密码</label>
            <input placeholder="密码" name="User[newPassword]" type="password">
        </div>
        <div class="mui-input-row">
            <label>确认新密码</label>
            <input placeholder="再次输入密码" name="User[cfmPassword]" type="password">
        </div>
        <div class="mui-button-row">
            <button class="mui-btn mui-btn-primary registerSubmit" type="button">
            确认
            </button>
        </div>
        <?php self::endForm() ?>
</div>

<script type="text/javascript" charset="utf-8">
//    mui.init();
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
</script>
