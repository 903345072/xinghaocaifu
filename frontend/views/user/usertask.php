
	<body style="background: #fff;">
		<div class="header">
			<p>任务中心</p>
      <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
		</div>
		<div class="top_bar">
			<ul>
				<li>新手任务</li>
				<li>每日任务</li>
				<li class="on">我的积分</li>
			</ul>
		</div>
		<div class="fade_in">
			<div class="list_fadein hide">
				<ul>
					<li>
						<p>注册成功</p>
						<div></div>
						<span>送1800积分</span>
						<i>已完成</i>
					</li>
					<li>
						<p>首次充值成功</p>
						<div></div>
						<span>送1800积分</span>
              <?php if ($data['isRechargePoints']): ?>
                <i>已完成</i>
              <?php else: ?>
                <a href="<?= url(['user/recharge']) ?>"><i style="background: #FDE309;">去做任务</i></a>
              <?php endif; ?>
					</li>
					<li>
						<p>首次实盘交易</p>
						<div></div>
						<span>送2800积分</span>
              <?php if ($data['isTradePoints']): ?>
                <i>已完成</i>
              <?php else: ?>
                <a href="<?= url(['order/deal']) ?>"><i style="background: #FDE309;">去做任务</i></a>
              <?php endif; ?>
					</li>
          <li>
            <p>首次模拟交易</p>
            <div></div>
            <span>送500积分</span>
              <?php if ($data['isTradeMoniPoints']): ?>
                <i>已完成</i>
              <?php else: ?>
                <a href="<?= url(['order/deal', 'model_type' => 2]) ?>"><i style="background: #FDE309;">去做任务</i></a>
              <?php endif; ?>
          </li>
				</ul>
			</div>
			<div class="list_fadein hide">
				<ul>
					<li>
						<p>每天登陆</p>
						<div></div>
						<span>送300积分</span>
						<i>已完成</i>
					</li>
				</ul>
			</div>
			<div class="list_fadein">
				<ul>
            <?php foreach ($userPoints as $point): ?>
					<li>
						<p><?= $point->getTypeValue() ?></p>
						<div></div>
						<span><?= $point->points ?>积分</span>
						<em><?= $point->datetime ?></em>
					</li>
            <?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="null"></div>
    <?= $this->render('../layouts/_footer') ?>
