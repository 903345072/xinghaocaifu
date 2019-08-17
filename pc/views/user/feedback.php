<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>
  <div class="hover">
    <h3 class="mx">※ 意见反馈</h3>
    <div class="fankui">
      <textarea placeholder="尊敬的会员您好！欢迎您向我司领导提出您宝贵的意见与建议谢谢！再次祝愿您生活愉快！" id="content"></textarea>
      <input type="button" value="提交" class="fk submit">
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $(function () {
    $('.submit').click(function () {
      var content = $('#content').val();
      if (!content) {
        alert('内容不能为空');
        return;
      }
      $.ajax({
        url: '<?= url(['user/feedback']) ?>',
        type: 'post',
        data: {content: content},
        success: function (data) {
          if (data == 1) {
            alert('提交成功');
            window.location.href = '<?= url(['user/center']) ?>';
          } else {
            alert('提交失败');
          }
        }
      })
    })
  });
</script>
