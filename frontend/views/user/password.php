<div class="header">
    <p>修改密码</p>
    <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
</div>

<div class="kul"></div>
<div class="passworld">
    <?php $form = self::beginForm(['showLabel' => false, 'class'=>'mui-input-group', 'id'=>'regform']) ?>
    <ul>
        <li>
            <p>原密码</p>
            <input value="请填写原密码"  placeholder="原密码" name="User[oldPassword]" type="text">
        </li>
        <li>
            <p>新密码</p>
            <input placeholder="密码" name="User[newPassword]" type="password">
        </li>
        <li>
            <p>确认新密码</p>
            <input placeholder="再次输入密码" name="User[cfmPassword]" type="password">
        </li>
    </ul>
    <?php self::endForm() ?>
    <div class="tj submit">提交</div>
</div>
<?= $this->render('../layouts/_footer') ?>
<script type="text/javascript">
    $(function () {
        $(".submit").click(function () {
            $.ajax({
                url: '<?= url(['user/password']) ?>',
                type: 'post',
                dataType: "json",
                data: $('#regform').serialize(),
                success: function (msg) {
                    // console.log(msg);return;
                    if (msg.state === true) {
                        alert('修改成功');
                        window.location.href = '<?= url(['user/index']) ?>';
                    } else {
                        if (msg['info'] instanceof Array) {
                            alert(msg.info[Object.keys(msg.info)[0]])
                        } else {
                            alert(msg.info[Object.keys(msg.info)[0]])
                            //alert(msg['info'])
                        }
                    }
                }
            })
        });
    });
</script>
