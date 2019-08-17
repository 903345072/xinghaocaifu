
		<div class="header">
			<p>微信充值</p>
			<img src="/wap/img/icons_03.png" onclick="javascript:location.href='/user/recharge';">
<!--			<a href="#">充值记录</a>-->
		</div>
		<div class="countser">
			<img src="<?= config('wx_qrcode') ?>" class="eww"/>
			<p class="es">【截屏保存图片，然后打开微信扫码充值】</p>
			<div class="lableson">
				<img src="/wap/img/wxs_07.jpg"/>
				<input type="text" name="" id="name" value="" placeholder="填写微信昵称，方便财务审核，快速入账"/>
			</div>
      <input type="hidden" id="money" value="<?= $money ?>">
			<input type="button" value="提 交" id="tij">
			<p class="ops">请在充值后再提交昵称！</p>
		</div>
		<div class="null"></div>
    <?= $this->render('../layouts/_footer') ?>
    <script type="text/javascript">
      $(function(){
        $('#tij').click(function(){
          var name = $('#name').val();
          var money = $('#money').val();
          if(!name || !money){
            alert('请填写完整信息');return;
          }
          $.ajax({
            url:'<?= url(['user/userpayment']) ?>',
            type:'post',
            data:{type:1,name:name,money:money},
            success:function(data){
              if(data == 1) {
                alert('提交成功');
                window.location.href = 'index';
              }else{
                alert('提交失败')
              }
            }
          })
        })
      })
    </script>

