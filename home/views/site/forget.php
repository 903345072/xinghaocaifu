
		<div class="denglu_box">
			<h3>星浩财富找回密码</h3>
        <?php $form = self::beginForm(['showLabel' => false, 'id' => 'forget']) ?>
			<ul>
				<li>
					<input type="text" id="user-mobile" name="User[mobile]" placeholder="请输入手机号码">
				</li>
				<li>
					<input type="password" name="User[password]" placeholder="设置新登录密码">
				</li>
				<li>
					<input type="password" name="User[cfmPassword]" placeholder="确认新登录密码">
				</li>
				<li>
					<input type="text" name="User[verifyCode]" placeholder="短信验证码">
					<a href="javascript:;" id="verifyCodeBtn" class="get_code">点击获取验证码</a>
				</li>
				<input type="button" value="找回密码" class="login_btn" id="forgetSubmit">
			</ul>
        <?php self::endForm() ?>
		</div>
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
