<div class="header">
  <p>提现记录</p>
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
</div>
<div class="tables">
  <div class="tab_top">
    <ul>
      <li>订单号</li>
      <li>充值金额（元）</li>
      <li>提现时间</li>
      <li>提现状态</li>
    </ul>
  </div>
  <div class="tab_bot">
    <ul>
        <?php foreach ($list as $k => $v) : ?>
          <li>
            <p>10000<?= $v->id ?></p>
            <span><?= $v->amount ?></span>
            <em><?= date('Y-m-d H:i', strtotime($v->created_at)) ?></em>
              <?php if ($v->op_state == 1): ?>
                <div>待审核</div>
              <?php elseif ($v->op_state == 2): ?>
                <div>已成功</div>
              <?php else: ?>
                <div class="on">未成功</div>
              <?php endif ?>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
</div>
<div class="null"></div>
<?= $this->render('../layouts/_footer') ?>

