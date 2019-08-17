<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>
  <div class="hover">
    <h3 class="mx">※ 信息中心</h3>
    <ul class="inforcenter">
        <?php foreach ($list as $k => $v): ?>
          <li class="inforce_bot">
            <h3 class="clearfix title1"><?= $v->title ?>
              <?php if ($v->status == 1): ?>
              <i data-id="<?= $v->id ?>" class="biaoji fr no">未读</i>
              <?php else:?>
                <i class="biaoji fr yes">已读</i>
              <?php endif;?>
            </h3>
            <div class="inforc_con">
              <p>尊敬的客户：</p>
              <p class="ticle"><?= $v->content ?></p>
              <p class="yearm"><?= $v->time ?></p>
            </div>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
</div>

<script type="text/javascript" src="/pc/js/layer.js"></script>
<script>
  $(".clearfix .no").click(function () {
    var msgId = $(this).attr('data-id');
    var _this = $(this);
    $.ajax({
      url: '<?= url(['site/ajax-reade-message']) ?>',
      type: 'post',
      data: {msg_id: msgId},
      success: function (data) {
        if (data == 1) {
          _this.text('已读').removeClass('no').addClass('yes');
        }
      }
    })
  })


</script>
