<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>合作机构</title>
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
            <p class="am-text-center col-white">合作机构</p>
        </div>
        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-xs">

        </div>
    </div>
</div>

<div class="am-padding-horizontal-xs am-padding-bottom-sm am-text-sm" id="scrollZone">

    <div style="padding:10px;line-height: 25px;font-size: 14px;background: none">
        <table id="table1" width="100%" border="1" style="border:none">
            <thead style="margin: 0px; padding: 0px;">
            <tr class="firstRow" style="margin: 0px; padding: 0px;">
                <th style="padding: 0px; border-color: rgb(165, 164, 164); margin: 0px; height: 30px;" colspan="2"><p
                            style="text-align:left;"><span style="font-weight: 400"><span style="font-size:12px">
			星浩财富平台是国内首款内外盘期货交易移动端软件，与国内外各大期货交易所合作，100%为交易所实盘交易。投资者仅需在本平台注册即可完成充值、操盘、结算、提现等一系列操作。<br>
			合作伙伴：上海期货交易所、大连商品交易所、郑州商品交易所、纽约商品交易所、纽约商业交易所、芝加哥商品交易所、CME集团、香港交易所。</span></span></p></th>
            </tr>

            </thead>

        </table>
        <table id="table2" width="100%" border="1" style="border:none">
            <thead style="margin: 0px; padding: 0px;">

            <tr style="margin: 0px; padding: 0px;">
                <td height="30" style="padding: 0px; border-color: rgb(165, 164, 164); margin: 0px; text-align: center;"
                    colspan="2"><p style="text-align: left"><span style="color:#FF0000;font-size:12px">
			声明：星浩财富平台作为投资交易工具，将用户交易指令发送至期货交易所撮合成交，自身并不参与用户任何交易行为。投资者进入期市之前，必须了解期货市场客观存在的高风险，了解自身的风险承受能力与投资偏好，坚持理性投资。</span>
                    </p></td>
            </tr>
            </tbody>
        </table>
        <p><br></p></div>

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