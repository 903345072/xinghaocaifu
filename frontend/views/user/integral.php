
	<body style="background: #fff;">
		<div class="header">
			<p>积分明细</p>
      <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
		</div>
		<div class="fade_in">
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
