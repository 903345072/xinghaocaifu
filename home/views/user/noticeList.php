<div class="about_banner">
  <a href="<?= url(['user/latest-news']) ?>">最新资讯</a>
  <a href="javascript:;" class="on">系统公告</a>
  <a href="<?= url(['line/company']) ?>">公司资质</a>
</div>
<div class="mianbao_nav wrap1 about_nav">
  <a href="javascript:;">当前位置：</a>
  <a href="javascript:;">首页</a>
  <a href="javascript:;">></a>
  <a href="javascript:;">关于</a>
  <a href="javascript:;">></a>
  <a href="javascript:;">系统公告</a>
</div>
<div class="content_about wrap1">
  <h3 class="clearfix top_header">
    <img src="/web/images/vo.png" alt="" class="fl">
    <span class="fl">系统公告</span>
  </h3>
  <div class="about_detail_list">
    <ul>
        <?php foreach ($list as $item): ?>
          <li>
            <a class="fl" href="<?= url(['user/notice-info', 'notice_id' => $item->id]) ?>"><?= $item->title ?></a>
            <a href="<?= url(['user/notice-info', 'notice_id' => $item->id]) ?>" class="fr">></a>
            <span class="fr"><?= date('Y-m-d', strtotime($item->publish_time)) ?></span>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
</div>

<script>
  $(".help_list li").click(function () {
    $(this).addClass('on').siblings().removeClass();
  })
</script>

