<div class="about_banner">
  <a href="<?= url(['user/latest-news']) ?>">最新资讯</a>
  <a href="<?= url(['user/notice-list']) ?>" class="on">系统公告</a>
  <a href="<?= url(['line/company']) ?>">公司资质</a>
</div>
<div class="mianbao_nav wrap1 about_nav">
  <a href="javascript:;">当前位置：</a>
  <a href="javascript:;">首页</a>
  <a href="javascript:;">></a>
  <a href="javascript:;">关于</a>
  <a href="javascript:;">></a>
  <a href="<?= url(['user/notice-list']) ?>">系统公告</a>
</div>
<div class="content_about wrap1">
  <h3 class="clearfix top_header">
    <img src="/web/images/vo.png" alt="" class="fl">
    <span class="fl">系统公告</span>
  </h3>
  <div class="about_detail">
    <h3 class="about_detail_title"><?= $info->title ?></h3>
    <p><?= $info->content ?></p>
    <span class="fb_date"><?= $info->publish_time ?></span>
  </div>
</div>

<script>
  $(".help_list li").click(function () {
    $(this).addClass('on').siblings().removeClass();
  })
</script>

