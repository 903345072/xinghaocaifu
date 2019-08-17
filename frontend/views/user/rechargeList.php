<div class="header">
  <p>充值记录</p>
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
</div>
<div class="tables">
  <div class="tab_top">
    <ul>
      <li>充值类型</li>
      <li>充值金额（元）</li>
      <li>账号信息</li>
      <li>状态</li>
    </ul>
  </div>
  <div class="tab_bot">
    <ul>
        <?php foreach ($list as $k => $v) : ?>
          <li>
            <p><?= $v->getTypeValue() ?></p>
            <span><?= $v->money ?></span>
            <em><?= $v->info ?></em>
            <div><?= $v->getStatusValue() ?></div>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
</div>
<div class="null"></div>
<?= $this->render('../layouts/_footer') ?>

