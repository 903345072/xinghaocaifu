<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>

  <div class="hover">
    <h3 class="mx clearfix">※ 微信扫码充值
    </h3>
    <div class="wxs">
      <h2>微信扫码充值</h2>
      <img src="http://wap.6ff7.com<?= config('wx_qrcode') ?>" class="ewm"/>
      <p class="opens">【打开微信手机app，扫描上方二维码充值】</p>
      <div class="insp">
        <img src="/web/images/user_wx_07.jpg"/>
        <input id="name" type="text" placeholder="填写微信账号，方便财务审核，快速入账" />
      </div>
      <a href="javascript:;" id="submission"><div class="user_btn">提 交</div></a>
      <span>请在充值后再提交昵称！</span>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function(){
    $('#submission').click(function(){
      var name = $('#name').val();
      var money = '<?= $money ?>';

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
            window.location.href = 'center';
          }else{
            alert('提交失败')
          }
        }
      })
    })
  })
</script>
