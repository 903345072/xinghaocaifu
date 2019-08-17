<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>

  <div class="hover">
    <h3 class="mx">※ 推广赚钱</h3>
    <div class="tuiguang">
      <ul class="clearfix caozuo_list">
        <li>
          <p class="dq">我的邀请</p>
          <p><?= count($idArr[0]) ?></p>
        </li>
        <li>
          <p class="dq">佣金</p>
          <p><?= u()->total_fee ?></p>
        </li>
        <li>
          <p class="dq">佣金比例</p>
          <p><?= u()->point ?>%</p>
        </li>
      </ul>
      <div class="how">
        <h3>如何推广</h3>
        <ul class="tg_list">
          <li>
            <span>第一步：发送推广链接给朋友</span>
            <input class="value" id="shareLink" type="text" value="<?= url(['site/register', 'pid' => u()->id], true) ?>">
            <input type="submit" id="copyBtn" value="复制" class="fuzhi">
          </li>
          <li>
            <p>第二步：点击链接注册成为您邀请的用户</p>
          </li>
          <li>
            <p>第三步：您的邀请用户开始交易</p>
          </li>
          <li>
            <p>第四步：开启赚钱模式</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="/js/clipboard-polyfill.js"></script>
<script>
  !function () {
    var copyBtn = $('#copyBtn');
    var shareLink = $('#shareLink');
    copyBtn.on('click', function () {
      shareLink.select();
      clipboard.writeText(shareLink.val());
      alert('成功复制到剪贴板');
    });
  }()
</script>
