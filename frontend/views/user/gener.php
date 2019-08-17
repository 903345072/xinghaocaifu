
	<body>
		<div class="header">
			<p>推广赚钱</p>
      <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
		</div>
		<div class="nulls"></div>
		<div class="nul_pad">
			<ul>
				<li>
					<p>我的邀请</p>
					<span><?= count($idArr[0]) ?></span>
				</li>
				<li>
					<p>佣金</p>
					<span><?= u()->total_fee?></span>
				</li>
				<li>
					<p>佣金比例</p>
					<span><?= u()->point ?>%</span>
				</li>
			</ul>
			<div class="v_bor">
				<h1>如何推广</h1>
				<p>第一步：发送推广链接给朋友</p>
				<div class="copys">
					<div class="copy_left" id="shareLink"><?= url(['site/register', 'pid'=>u()->id], true) ?></div>
					<a href="javascript:;" id="copyBtn">复制</a>
				</div>
				<div style="clear: both;"></div>
				<p>第二步：点击链接注册成为您邀请的用户</p>
				<p>第三步：您的邀请用户开始交易</p>
				<p>第四步：开启赚钱模式</p>
			</div>
		</div>
		<div class="null"></div>
  <?= $this->render('../layouts/_footer') ?>
    <script type="text/javascript" charset="utf-8">mui.init();</script>
    <script type="text/javascript" src="/js/clipboard-polyfill.js"></script>
    <script>
      !function () {
        var copyBtn = $('#copyBtn');
        var shareLink = $('#shareLink');
        copyBtn.on('click', function () {
          shareLink.select();
          clipboard.writeText(shareLink.html());
          alert('成功复制到剪贴板');
        });
      }()
    </script>
