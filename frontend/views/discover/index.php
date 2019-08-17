<div class="main_heads">
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
  <h1><span>最新资讯</span></h1>
</div>
<div class="mui-content">
    <div>
        <iframe src="http://130161.com/Home/index/news/device/app.html" frameborder="0" scrolling="auto" style="width: 100%; height: 607px;" id="framid"></iframe>
    </div>
</div>
<?= $this->render('../layouts/_footer') ?>
<script type="text/javascript" src="/wap/js/js.js" ></script>
<script type="text/javascript">
    mui.init();
    var wheight=$(window).height();
    $('#framid').height(wheight-60);
</script>

		
<!--<script type="text/javascript" charset="utf-8">-->
<!--    mui.init();-->
<!--    var gallery = mui('#slider');-->
<!--    gallery.slider({-->
<!--        interval: 5000-->
<!--    });-->
<!--</script>-->
<!--<script type="text/javascript" charset="utf-8">-->
<!--//			$(".tm-notice-view .mui-table-view-cell.mui-collapse:first").addClass("mui-active");-->
<!--</script>-->

