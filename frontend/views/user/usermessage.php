<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>信息中心</title>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/commonstyle.css">
    <style>
        body{background-color: #f5f5f5}
        .actTab p{color: #dd514c;border-bottom: 1px solid #dd514c}
    </style>
</head>
<body>

<div class="am-padding-sm bg-red">
    <div class="am-g">
        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-left-xs">
          <a href="javascript:history.back()"><p class="am-icon am-icon-angle-left am-icon-sm col-white"></p></a>
        </div>
        <div class="am-u-sm-8 am-u-md-8 am-u-lg-8">
            <p class="am-text-center col-white">信息中心</p>
        </div>
        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-right-xs am-text-right">
<!--            <p class="am-icon am-icon-question-circle-o am-icon-sm col-white"></p>-->
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="am-g am-text-center" id="tabBtns">
        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-0 actTab">
            <p class="am-padding-vertical-sm">未读</p>
        </div>
        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-0">
            <p class="am-padding-vertical-sm">已读</p>
        </div>
    </div>
</div>

<div class="am-padding-top-xs">

    <div class="pageOne bg-white am-padding-bottom-sm am-text-sm">

        <div class="am-panel-group" id="accordion">

            <?php foreach ($readnotice as $k): ?>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd readnotice" flag="<?= $k->id?>">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-<?= $k->id?>'}"><!--这里的id-->
                            <?= $k->title?>
                        </h4>
                    </div>
                    <div id="do-not-say-<?= $k->id?>" class="am-panel-collapse am-collapse"><!--这里的id-->
                        <div class="am-panel-bd">
                            <?= $k->content?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

    </div>

    <div class="pageOne bg-white am-padding-bottom-sm am-text-sm" style="display: none">

        <div class="am-panel-group" id="accordion2">

            <?php foreach ($unreadnotice as $k): ?>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd" flag="<?= $k->id?>">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion2', target: '#do-not-say-1_<?= $k->id?>'}"><!--这里的id-->
                            <?= $k->title?>
                        </h4>
                    </div>
                    <div id="do-not-say-1_<?= $k->id?>" class="am-panel-collapse am-collapse"><!--这里的id-->
                        <div class="am-panel-bd">
                            <?= $k->content?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

    </div>

</div>



<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/amazeui.min.js"></script>
<script type="text/javascript">
    !function () {

        var tabBtns=$('#tabBtns .am-u-sm-6');
        var pages=$('.pageOne');
        tabBtns.on('click',function () {
            var index=$(this).index();
            tabBtns.removeClass('actTab');
            pages.hide();
            tabBtns.eq(index).addClass('actTab');
            pages.eq(index).show();
        })

    }();
    $(function(){
        $('.readnotice').click(function(){
            var id = $(this).attr('flag');
            $.ajax({
                url:'readnotice',
                type:'post',
                data:{id:id}
            })
        })
    })
</script>
</body>
</html>