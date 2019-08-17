<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>玩法</title>
    <link rel="stylesheet" href="/css/amazeui.min.css">
    <link rel="stylesheet" href="/css/commonstyle.css">
    <style>
        body {
            background-color: #f5f5f5
        }
    </style>
</head>
<body>

<div class="am-padding-horizontal-sm bg-red fixTop" id="topZone">
    <div class="am-g am-padding-vertical-sm">
        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-left-xs">
            <p class="am-icon am-icon-angle-left am-icon-sm col-white" id="backBtn"></p>
        </div>
        <div class="am-u-sm-8 am-u-md-8 am-u-lg-8">
            <p class="am-text-center col-white">玩法</p>
        </div>
        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-xs">

        </div>
    </div>
</div>

<div class="am-padding-horizontal-xs am-padding-bottom-sm am-text-sm" id="scrollZone">

    <div style="padding:10px;line-height: 25px;font-size: 14px;background: none">
        <p><strong style="white-space: normal;">相关玩法及规则请<span style="color: rgb(255, 0, 0);">返回</span>【<span
                style="color: rgb(255, 0, 0);">首页</span>】→选择【<span style="color: rgb(255, 0, 0);">新手指导</span>】进行浏览。祝您交易愉快！</strong>
        </p>

        <div class="am-padding-top-xs">
            <img src="/images/play_rule.png" class="am-block wid100">
        </div>

</div>


<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script>
    !function () {

        var topZone = $('#topZone');
        var scrollZone = $('#scrollZone');
        var h = topZone.height();
        console.log(h)
        scrollZone.css({'padding-top': h})

        $('#backBtn').on('click', function () {
            window.history.go(-1)
        })
    }()
</script>
</body>
</html>