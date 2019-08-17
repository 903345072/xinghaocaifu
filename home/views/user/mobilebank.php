
		
		<div class="wrap1 clearfix houtai_content">
        <?= $this->render('../layouts/menu', compact('current_position')) ?>

			<div class="hover">
				<h3 class="mx clearfix">※ 银行卡充值
				</h3>
				<div class="pays">
					<p class="bank">银行卡充值</p>
					<div class="hao">
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
					<span class="spans">【使用银行卡转账到上方收款账户成功后，填写下方姓名提交】</span>
					<div class="insp">
            <img src="/web/images/user_wx_07.jpg"/>
						<input type="text" id="name" placeholder="填写银行卡账号，方便财务审核，快速入账" />
					</div>
          <input type="hidden" id="money" value="<?= $money ?>">
					<a href="javascript:;" id="submission"><div class="user_btn1">提 交</div></a>
					<span class="disp">请在充值后再提交姓名！</span>
				</div>
			</div>
    </div>
    <script type="text/javascript">
      $(function(){
        $('#submission').click(function(){
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
                window.location.href = 'center';
              }else{
                alert('提交失败')
              }
            }
          })
        })
      })
    </script>

