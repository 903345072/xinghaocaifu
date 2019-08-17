<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>资金安全</title>
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
            <p class="am-text-center col-white">资金安全</p>
        </div>
        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-xs">

        </div>
    </div>
</div>

<div class="am-padding-horizontal-xs am-padding-bottom-sm am-text-sm" id="scrollZone">

    <div class="am-padding-sm">
        <img src="/images/safety.jpg" class="am-block wid100">
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