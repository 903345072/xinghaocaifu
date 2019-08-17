<div class="about_banner">
  <a href="javascript:;" class="on">最新资讯</a>
  <a href="<?= url(['user/notice-list']) ?>">系统公告</a>
  <a href="<?= url(['line/company']) ?>">公司资质</a>
</div>
<div class="mianbao_nav wrap1 about_nav">
  <a href="javascript:;">当前位置：</a>
  <a href="javascript:;">首页</a>
  <a href="javascript:;">></a>
  <a href="javascript:;">关于</a>
  <a href="javascript:;">></a>
  <a href="javascript:;">最新资讯</a>
</div>
<div class="content_about wrap1">
  <h3 class="clearfix top_header">
    <img src="/web/images/drafts.png" alt="" class="fl">
    <span class="fl">最新资讯</span>
  </h3>
  <div class="about_detail">
    <iframe src="http://130161.com/Home/index/news/device/app.html" frameborder="0" scrolling="auto" style="width: 100%; height: 607px;" id="framid"></iframe>
  </div>
</div>

<script>
  $(".help_list li").click(function (){
    $(this).addClass('on').siblings().removeClass();
  })
</script>

