<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>
  <div class="hover">
    <h3 class="mx clearfix">※ 修改密码
    </h3>
    <div class="cz_mx_content tx_content">
        <?php $form = self::beginForm(['showLabel' => false, 'class' => 'mui-input-group', 'id' => 'regform']) ?>
      <div style="margin-bottom: 20px;">
        <span class="tg">原密码：</span>
        <input placeholder="密码" class="inpt_money" value="请输入原始密码" name="User[oldPassword]" type="text">
      </div>
      <div style="margin-bottom: 20px;">
        <span class="tg">新密码：</span>
        <input placeholder="新密码" class="inpt_money" name="User[newPassword]" type="password">
      </div>
      <div style="margin-bottom: 20px;">
        <span class="tg">确认新密码：</span>
        <input placeholder="再次输入密码" class="inpt_money" name="User[cfmPassword]" type="password">
      </div>
      <input style="margin-top:51px;" type="button" value="提交" class="tj_cz submit">
        <?php self::endForm() ?>
    </div>
  </div>
</div>

<script type="text/javascript" src="/pc/js/layer.js"></script>
<script>
  $(".help_list li").click(function () {
    $(this).addClass('on').siblings().removeClass();
  })
</script>
<script type="text/javascript">
  $(function () {
    $(".submit").click(function () {
      $.ajax({
        url: '<?= url(['user/modify-password']) ?>',
        type: 'post',
        dataType: "json",
        data: $('#regform').serialize(),
        success: function (msg) {
          // console.log(msg);return;
          if (msg == '1') {
            alert('修改成功');
            window.location.href = '<?= url(['order/buy','id'=>1,'model_type'=>1]) ?>';
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
