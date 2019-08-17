<body style="background-color: #ffffff">
		<div class="header">
			<p>意见反馈</p>
      <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
		</div>
		<div class="kul"></div>
    <form method="post" action="http://130161.com/Member/index/fankui.html" id="formid">
		<div class="textares">
			<textarea id="content" name="" placeholder="尊敬的会员您好！欢迎您向我司领导提出您宝贵的意见与建议谢谢！再次祝愿您生活愉快！"></textarea>
		</div>
		<div class="btn_tj submit" ajaxurl="/Member/index/fankui.html" formid="formid" ajax-callback="suc_back">提交</div>
    </form>
    <?= $this->render('../layouts/_footer') ?>
    <script type="text/javascript">
      $(function () {
        $('.submit').click(function () {
          var content = $('#content').val();
          if (!content) {
            alert('内容不能为空');
            return;
          }
          $.ajax({
            url: '<?= url(['user/idea']) ?>',
            type: 'post',
            data: {content: content},
            success: function (data) {
              if (data == 1) {
                alert('提交成功');
                window.location.href = '<?= url(['user/index']) ?>';
              } else {
                alert('提交失败');
              }
            }
          })
        })
      });
    </script>
</body>
