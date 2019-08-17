<?php use yii\helpers\Html; ?>
<body style="background: #F7F7F7;">
<div class="main_heads">
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
  <h1><span>发现</span></h1>
</div>
<div class="pro_banner"><img src="/wap/img/find_02.jpg"/></div>
<div class="pro_bar">
  <ul>

    <a href="<?= url(['discover/index']) ?>">
      <li>
        <img src="/wap/img/find2.png"/>
        <p>最新资讯</p>
      </li>
    </a>


    <a href="<?= url(['user/about']) ?>">
      <li>
        <img src="/wap/img/find5.png"/>
        <p>公司简介</p>
      </li>
    </a>
    <a href="<?= url(['user/gener']) ?>">
      <li>
        <img src="/wap/img/find6.png"/>
        <p>推广赚钱</p>
      </li>
    </a>
  </ul>
</div>
<div class="gg">
  <div class="gg_s">
    <img src="/wap/img/find_29.jpg"/>
    <div class="gg_right">
      <div class="txtScroll-top">
        <div class="hd">
        </div>
        <div class="bd">
          <ul class="infoList">
            <li>系统公告</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
