    <div>
        <iframe src="http://www.jinshishujuwang.com/z/" frameborder="0" scrolling="auto" style="width: 100%; height: 607px;" id="framid"></iframe>
    
        <!--iframe src="http://39.104.73.98/m/index.php?rid=1" frameborder="0" scrolling="auto" style="width: 100%; height: 607px;" id="framid"></iframe-->
    </div>
<?= $this->render('../layouts/_footer') ?>
<script type="text/javascript">
    mui.init();
    var wheight=$(window).height();
    $('#framid').height(wheight-68);
</script>
