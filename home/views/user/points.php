<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>

  <div class="hover">
    <h3 class="mx">※ 我的积分</h3>
    <div class="zj_mx_content">
      <div class="jfs">
        <h3 class="h31">可用积分</h3>
        <h3 class="h32"><?= $points ?></h3>
      </div>
      <table class="table_mx">
        <thead>
        <th>获取方式</th>
        <th>积分</th>
        <th>获取时间</th>
        </thead>
          <?php foreach ($userPoints as $point): ?>
        <tr>
          <td><?= $point->getTypeValue() ?></td>
          <td><?= $point->points ?>积分</td>
          <td><?= $point->datetime ?></td>
        </tr>
          <?php endforeach; ?>
        </tr>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript" src="/pc/js/layer.js"></script>
<script>
  $(".help_list li").click(function () {
    $(this).addClass('on').siblings().removeClass();
  })
</script>
