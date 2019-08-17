		<div class="main_heads">
      <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
			<h1><span>信息中心</span></h1>

		</div>
		<div class="slideup">
      <ul>
          <?php foreach ($article as $k): ?>
            <li>
              <p>※ <?= $k->title ?>！</p>
              <img src="/wap/img/find_36.jpg">
              <span><?= date('Y-m-d', strtotime($k->publish_time)) ?></span>
            </li>
            <div class="slidedown sw">
					<span>
            <?= strip_tags($k->content) ?>
					</span>
              <p><?= $k->publish_time ?></p>
              <div>收起<img src="/wap/img/find_33.jpg"></div>
            </div>
          <?php endforeach; ?>
      </ul>
		</div>
		<div class="null"></div>
    <?= $this->render('../layouts/_footer') ?>
		<script type="text/javascript" src="/wap/js/jquery.SuperSlide.2.1.js" ></script>
		<script type="text/javascript">
		jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:1});
		</script>
