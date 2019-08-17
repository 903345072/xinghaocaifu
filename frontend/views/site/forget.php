<body style="background: #21212B;">
<div class="header">
  <p>密码找回</p>
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
</div>
<div class="contents">
    <?php $form = self::beginForm(['showLabel' => false, 'id' => 'forget']) ?>
  <div class="lable">
    <p>+86</p>
    <input type="text" name="User[mobile]" id="user-mobile" value="" placeholder="请输入手机号码"/>
    <img src="/wap/img/icons_07.jpg" class="c1 c"/>
  </div>
  <div class="lable">
    <p>密码</p>
    <input type="password" name="User[password]" id="" value="" placeholder="请输入新登录密码"/>
    <img src="/wap/img/icons_11.jpg" class="c2 c"/>
  </div>
  <div class="lable">
    <p>确认密码</p>
    <input type="password" name="User[cfmPassword]" id="" value="" placeholder="请确认登录密码"/>
    <img src="/wap/img/icons_11.jpg" class="c2 c"/>
  </div>
  <div class="lable">
    <p>验证码</p>
    <input type="password" name="User[verifyCode]" id="" value="" placeholder="请输入手机验证码"/>
    <a href="javascript:;" id="verifyCodeBtn">
      <div class="hq">获取</div>
    </a>
  </div>
  <input type="button" value="提交" class="btn11" id="forgetSubmit" style="margin-top: .47rem;">
    <?php self::endForm() ?>
</div>
<script type="text/javascript" src="/wap/js/js.js"></script>
<script type="text/javascript" src="/js/layer.js"></script>
<script type="text/javascript">
  // 验证码
  $("#verifyCodeBtn").click(function () {
    var mobile = $('#user-mobile').val();
    var url = '<?= url(['site/verifyCode']) ?>';
    if (mobile.length != 11) {
      layer.msg('您输入的不是一个手机号！');
      return false;
    }
    $.post(url, {mobile: mobile}, function (msg) {
      layer.msg(msg.info);
    }, 'json');
  });

  $("#forgetSubmit").click(function () {
    $.ajax({
      url: '<?= url(['site/forget']) ?>',
      type: 'post',
      dataType: "json",
      data: $('#forget').serialize(),
      success: function (msg) {
//                        console.log(msg.info[Object.keys(msg.info)[0]]);return;
        if (msg['state']) {
          window.location.href = msg['info'];
        } else {
          if (msg['info'] instanceof Object) {
            alert(msg.info[Object.keys(msg.info)[0]])
          } else {
            alert(msg['info'])
          }
        }
      }
    });
    return false;
  });
</script>
</body>
