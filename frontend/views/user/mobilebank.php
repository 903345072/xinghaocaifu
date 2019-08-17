		<div class="header">
			<p>微信充值</p>
			<img src="/wap/img/icons_03.png" onclick="javascript:location.href='/user/recharge';">
<!--			<a href="#">充值记录</a>-->
		</div>
		<div class="countser1">
			<div class="padds">
				<ul>
					<li>
						<p>银行卡号：</p>
						<span><?= config('bank_code') ?></span>
					</li>
					<li>
						<p>户       名：</p>
						<span><?= config('bank_name') ?></span>
					</li>
					<li>
						<p>开 户 行：</p>
						<span><?= config('bank_position') ?></span>
					</li>
				</ul>
			</div>
			<p class="texts">【使用银行卡转账到上方收款账户成功后，填写下方姓名提交】</p>
			<div class="lableson">
				<img src="/wap/img/wxs_07.jpg"/>
				<input type="text" name="" id="name" value="" placeholder="填写持卡人姓名，方便财务审核，快速入账"/>
			</div>
      <input type="hidden" id="money" value="<?= $money ?>">
			<input type="button" value="提 交" id="tij" style="margin-top: 1.14rem;">
			<p class="ops">【使用银行卡转账到上方收款账户成功后，填写下方姓名提交】</p>
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
            data:{type:3,name:name,money:money},
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
