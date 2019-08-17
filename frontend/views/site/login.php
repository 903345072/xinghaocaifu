
	<body style="background: #21212B;">
		<div class="header">
			<p>星浩财富</p>
      <a href="javascript:history.back()"><img src="/wap/img/icons_03.png"/></a>
		</div>
		
		<div class="banner">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide"><a href="<?= url(['site/register']) ?>"><img src="/wap/img/index_icon_02.jpg"/></a></div>
		    </div>
    		<div class="swiper-pagination"></div>
  		</div>
		</div>
		
		<div class="contents">
        <?php $form = self::beginForm(['showLabel' => false, 'id' => 'loginform']) ?>
				<div class="lable">
					<p>+86</p>
          <input type="text" placeholder="请输入手机号码" name="User[username]" autocomplete="off">
					<img src="/wap/img/icons_07.jpg" class="c1"/>

				</div>
				<div class="lable">
					<p>密码</p>
          <input type="password" placeholder="请输入登录密码" name="User[password]" autocomplete="off">
					<img src="/wap/img/icons_11.jpg" class="c2"/>
				</div>
      <div class="clear" >
        <a style="color: #E3E3E3;" href="<?= url(['site/forget']) ?>" >忘记密码？</a>
        <a style="color: #E3E3E3" href="<?= url(['site/register']) ?>" >立即注册</a>
      </div>
				<input type="button" formid="loginform" ajaxurl="<?= url('site/login') ?>" value="确认登录" class="btn11 login_btn"/>
        <?php self::endForm() ?>
		</div>
		<script type="text/javascript" src="/wap/js/js.js" ></script>
    <script type="text/javascript">

      $(function () {
        $(".login_btn").click(function () {
          $.ajax({
            url: '<?= url(['site/login']) ?>',
            type: 'post',
            dataType: "json",
            data: $('#loginform').serialize(),
            success: function (msg) {
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
      });

    </script>
  </body>
