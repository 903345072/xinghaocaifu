<link rel="stylesheet" href="/css/weixin.css" id="layui_layer_skinlayercss" style="">
<script type="text/javascript" src="/js/highstock.js"></script>
<script type="text/javascript" src="/js/echarts-all-3.js"></script>
<script type="text/javascript" src="/js/line.js"></script>

<style>.kx-segmented-control .kx-control-item {
        display: inline-block;
        padding: 0 2px;
        margin: 0 6px;
        line-height: 32px;
        vertical-align: top;
        color: #333;
        border-bottom: 3px solid #f5f5f5;
    }

    .mui-content {
        background-color: transparent
    }

    .tm-trading-total~.mui-content {
        padding-bottom: 220px
    }

    .fix-kx-control~.mui-content {
        padding-top: 35px
    }

    .fix-kx-control {
        position: fixed;
        top: 50px;
        left: 0;
        right: 0;
        z-index: 100
    }

    .uk-text-smini {
        font-size: 10px
    }

    .mui-btn-small {
        font-size: 10px
    }

    .mui-table-view-inverted {
        background: #fff
    }

    .mui-table-view-inverted .mui-table-view-cell:after {
        background: #eee
    }

    .uk-text-muted {
        color: #000!important
    }

    .mui-table-view-inverted:before {
        background: #eee
    }

    .mui-table-view-inverted:after {
        background: #eee
    }

    .mui-btn-outlined.mui-btn-warning,
    .mui-btn-outlined.mui-btn-yellow {
        color: #628ab5
    }

    .mui-btn-warning,
    .mui-btn-yellow {
        border: 1px solid #628ab5
    }

    .lred {
        color: red !important;
    }

    .lgreen {
        color: green !important;
    }

    .pk-list {
        list-style: none;
        margin: 0;
        padding: 0;
        color: #000;
        width: 100%;
        table-layout: fixed
    }

    .pk-list tbody td {
        border: 1px solid #eee;
        padding: 5px 10px;
        font-size: 12px
    }</style>


<header class="mui-bar mui-bar-nav">
    <a class="mui-icon mui-icon-left-nav mui-pull-left" href="<?=url(['site/index'])?>"></a>
    <h1 class="mui-title">
                <span style="font-size:12px;">
                    <?php if($model_type == 1) :?>
                        实盘交易
                    <?php else :?>
                        模拟盘交易
                    <?php endif ?>

                </span>【<?=$products -> name ?>】</h1>
    <a class="mui-btn mui-btn-link mui-pull-right" href="<?=url(['rule/rule'.$products -> id])?>">
        规则说明
    </a>
</header>

<div class="tm-trading-total">
    <div class="mui-table-view mui-table-view-inverted uk-text-mini mui-in-zero">
        <div class="mui-table-view-cell mui-table-view-cell-small">
            <div class="mui-table uk-text-muted">
                <div class="mui-table-cell uk-text-middle mui-col-xs-6">
                    <div class="">
                        <span class="uk-text-large"><?=$products -> name ?></span>
                        <span><?=$products -> identify ?></span>
                    </div>
                </div>
                <div class="mui-table-cell uk-text-middle mui-col-xs-6 mui-text-right">
                    <div class="">
                        <!--								本时段持仓时间至 <span class="uk-text-danger">04:58</span>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="mui-table-view-cell mui-table-view-cell-small">
            <div class="mui-table">
                <div class="mui-table-cell uk-text-middle mui-col-xs-8">
                    <div style="font-size:14px;">
                        <span><span class="uk-text-muted">帐户实盘资金：</span> <font id="myamount" style="color:red"><?=u()->account - u()->blocked_account ?></font> </span>
								<span class="uk-margin-mini-left uk-margin-mini-right">
								<a class="mui-icon mui-icon-reload uk-text-xxlarge uk-text-contrast" href="javascript:window.location.reload()"></a> </span>
                    </div>
                </div>
                <div class="mui-table-cell uk-text-middle mui-text-right mui-col-xs-4">
                    <div style="font-size:14px;">
                        <span class="uk-text-muted">浮动盈亏 <em class="uk-text-danger"><font id="totalprice" style="color:#FF0000">0.00</font></em></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mui-table-view-cell mui-table-view-cell-small">
            <div class="mui-table price-info">
                <div class="mui-table-cell mui-col-xs-4 uk-text-middle  price-info">
                    <div class="uk-text-danger uk-text-xxxlarge curPrice1" id="lastprice">
                        <?=$products -> dataAll -> price ?>
                    </div>
                </div>
                <div class="mui-table-cell mui-col-xs-3 uk-text-middle">
                    <div class="uk-text-danger line-height-normal">
                        <div id="zhangfu">
                            <?=$products -> dataAll -> diff ?>
                        </div>
                        <div id="zfper">
                            <?=$products -> dataAll -> diff_rate ?>
                        </div>
                    </div>
                </div>
                <div class="mui-table-cell mui-col-xs-5 uk-text-middle">
                    <!--div class="mui-table">
                        <div class="mui-table-cell mui-col-xs-5 uk-text-middle line-height-normal">
                            <div class=" ">
                                <em class="uk-text-muted">买量</em><span class="uk-margin-mini-left" id="buys" style="color:red"></span>
                            </div>
                            <div class=" ">
                                <em class="uk-text-muted">卖量</em><span class="uk-margin-mini-left" id="sales" style="color:green"></span>
                            </div>
                        </div>
                        <div class="mui-table-cell mui-col-xs-7 uk-text-middle tm-panel-padded-0-10">
                            <div class="uk-margin-small uk-margin-small-top">
                                <div class="mui-progressbar mui-progressbar-medium mui-progressbar-red" data-progress="" id="buyper">

                                </div>
                            </div>
                            <div class="uk-margin-small">
                                <div class="mui-progressbar mui-progressbar-medium mui-progressbar-green" data-progress="" id="saleper"></div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <div class="mui-table-view mui-table-view-inverted uk-text-smini mui-in-zero">
        <div class="mui-table-view-cell mui-table-view-cell-small">
            <div class="mui-table line-height-normal mui-text-center">
                <div class="mui-table-cell uk-text-middle">
                    <a class="mui-btn mui-btn-warning mui-btn-outlined mui-btn-small all-reset-tral" href="" style="border:none;display: none">
                        极速
                        <br>
                        下单
                    </a>
                </div>
                <div class="mui-table-cell uk-text-middle" style="display: none">
                    <div class="mui-switch this-switch" id="mySwitch">
                        <div class="mui-switch-handle"></div>
                    </div>
                </div>
                <div class="mui-table-cell uk-text-middle" style="color:#000"></div>
                <div class="mui-table-cell uk-text-middle" style="color:#000"></div>
                <div class="mui-table-cell uk-text-middle">
                    <a class="mui-btn mui-btn-warning mui-btn-outlined mui-btn-small all-reset" href="Javascript:sellAllBtn();">
                        一键
                        <br>
                        全平
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mui-table buttom-buttons">
        <a class="mui-btn mui-btn-balck mui-table-cell mui-col-xs-3" href="<?=url(['order/position', 'type'=>1, 'model_type' => $model_type])?>">
            <span class="tm-badge-icon"> 持仓<em class="mui-badge" id="chicangnums" style="display: none;">0</em> </span>
        </a>
        <a class="mui-btn mui-btn-balck mui-table-cell mui-col-xs-3" href="<?=url(['order/position',  'type'=>2, 'model_type' => $model_type])?>">
            <span class="tm-badge-icon"> 结算 </span>
        </a>
        <a class="mui-btn mui-btn-red mui-table-cell mui-col-xs-3 check_jiaoyi" href='javascript:riseBy("<?=url(['order/buy', 'rise_fall' => 1, 'product_id' => $products->id, 'model_type' => $model_type])?>");'>
            <div id="buyprice">
                <?=$products -> dataAll -> price ?>
            </div>
            <div>
                买涨
            </div>
        </a>
        <a class="mui-btn mui-btn-green mui-table-cell mui-col-xs-3 check_jiaoyi" href='javascript:riseBy("<?=url(['order/buy', 'rise_fall' => 2, 'product_id' => $products->id, 'model_type' => $model_type])?>");'>
            <div id="saleprice">
                <?=$products -> dataAll -> price ?>
            </div>
            <div>
                买跌
            </div>
        </a>
    </div>
</div>
<div class="fix-kx-control">
    <div class="kx-segmented-control">
        <a class="kx-control-item bqtab mui-active" data-unit="-1" tab="" href="Javascript:">
            分时
        </a>
        <a class="kx-control-item bqtab" data-unit="0" tab="" href="Javascript:">
            日分时
        </a>
        <a class="kx-control-item bqtab" data-unit="1440" tab="" href="Javascript:">
            日线
        </a>
        <a class="kx-control-item bqtab" data-unit="1" tab="" href="Javascript:">
            1分钟
        </a>
        <a class="kx-control-item bqtab" data-unit="5" tab="" href="Javascript:">
            5分钟
        </a>
        <a class="kx-control-item bqtab" data-unit="30" tab="" href="Javascript:">
            30分钟
        </a>
        <a class="kx-control-item bqtab tape" data-unit="6" tab="" href="Javascript:">
            盘口
        </a>
    </div>
</div>
<div class="mui-content" style="margin-top:50px;">
    <div class="table-container" style="min-height: 303px;position:relative;background:#000">
        <div id="areaContainer" style="width: 100%;min-height: 303px;">

        </div>
        <div id="kContainer" style="width: 100%;min-height: 303px;display: none !important;">

        </div>
        <div id="report" style="position: absolute;top:0;left:0;z-index:50;display: none;color:#fff;width:100%;font-size:12px">

        </div>
        <div class="uk-margin-xmedium-bottom table" style="display: none;">
            <table class="pk-list" style="margin-top:20px;">
                <tbody>
                <tr>
                    <td><span class="mui-pull-right"><em class="" id="zhangfu1"><?=$products -> dataAll -> diff ?></em></span><span>涨跌</span></td>
                    <td><span class="mui-pull-right"><em class="" id="zfper1"><?=$products -> dataAll -> diff_rate ?></em></span><span>涨幅</span></td>
                </tr>
                <tr>
                    <td><span class="mui-pull-right"><em class="uk-text-danger" id="heightPrice"><?=$products -> dataAll -> high ?></em></span><span>最高</span></td>
                    <td><span class="mui-pull-right"><em class="uk-text-success" id="lowerPrice"><?=$products -> dataAll -> low ?></em></span><span>最低</span></td>
                </tr>
                <tr>
                    <td><span class="mui-pull-right"><em class="uk-text-danger" id="openPrice"><?=$products -> dataAll -> open ?></em></span><span>开盘</span></td>
                    <td><span class="mui-pull-right"><em id="preClosePrice"><?=$products -> dataAll -> close ?></em></span><span>昨收</span></td>
                </tr>
                <!--							<tr style="display:">-->
                <!--								<td><span class="mui-pull-right"><em class="uk-text-danger" id="chicang"></em></span><span>持仓</span></td>-->
                <!--								<td><span class="mui-pull-right"><em class="" id="prejiesuan"></em></span><span>昨结</span></td>-->
                <!--							</tr>-->
                <!--							<tr style="display:none">-->
                <!--								<td><span class="mui-pull-right"><em class="uk-text-danger" id="jiesuan"></em></span><span>今结</span></td>-->
                <!--								<td><span class="mui-pull-right"><em id="prechichang"></em></span><span>昨持仓</span></td>-->
                <!--							</tr>-->
                <!--							<tr style="display:none">-->
                <!--								<td><span class="mui-pull-right"><em class="uk-text-danger" id="volume"></em></span><span>总手</span></td>-->
                <!--								<td><span class="mui-pull-right"><em class="" id="amount">0</em></span><span>金额</span></td>-->
                <!--							</tr>-->
                <!--							<tr>-->
                <!--								<td><span class="mui-pull-right"><em class="uk-text-danger" id="zhangting"></em></span><span>涨停</span></td>-->
                <!--								<td><span class="mui-pull-right"><em class="" id="dieting"></em></span><span>跌停</span></td>-->
                <!--							</tr>-->
                </tbody>
            </table>

        </div>
    </div>

</div>
<div style="width:0%;padding-right:15px;display:none;">
    <p class="font_14" style="color:#fff;display:none;">
        当前价格
    </p>
    <p class="font_20 co_cd curArrow" style="width:120%;display:none;">
        <span class="curPrice lred" data-value="1"><?=$products -> dataAll -> price ?></span>
        <img src="/images/arrow-top.png" style="width: 13px;vertical-align: top;margin-left:8px;">
    </p>
</div>

<input type="hidden" id="productId" value="<?=$products -> id ?>">
<input type="hidden" id="tableName" value="<?=$products -> table_name ?>">
<!--<input type="hidden" id="fallRate" value="200">-->

<script type="text/javascript">

    $(function() {

        //获取当地时间
        Date.prototype.Format = function(fmt) {
            var o = {
                "M+": this.getMonth() + 1, //月份
                "d+": this.getDate(), //日
                "h+": this.getHours(), //小时
                "m+": this.getMinutes(), //分
                "s+": this.getSeconds(), //秒
                "q+": Math.floor((this.getMonth() + 3) / 3), //季度
                "S": this.getMilliseconds() //毫秒
            };
            if(/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
            for(var k in o)
                if(new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
            return fmt;
        }
        var current = (new Date()).getMinutes();
        var seHeight = $(window).height() - 300;
        $('#areaContainer').css('height', seHeight + 'px');
        $('#kContainer').css('height', seHeight + 'px');
        // 绑定tab栏事件
        $(".bqtab").click(function() {
            var unit = $(this).data('unit');
            $(this).addClass("mui-active").siblings().removeClass("mui-active");
            if(unit == -1 || unit == 0) {
                $("#areaContainer").show(); //更改
                $("#kContainer").css('display','none');
                $("#report").hide();
                $(".table").hide();
                $.get($("#getStockDataUrl").val(), {id: $("#productId").val()}, function(msg) {
                    var data = [];
                    data[-1] =  window.transDatas(msg);
                    getAreaStock(data);
                });

                return false;
            }else if(unit == 6) {
                $("#areaContainer").hide(); //更改
                $("#kContainer").hide();
                $(".table").show();
                $(".table").css({
                    "background": "#fff",
                    "height": seHeight + "px"
                });
            } else {
                $("#areaContainer").hide(); //更改
                $(".table").hide();
                $("#kContainer").show();
                $.get($("#getStockDataUrl").val(), {
                    id: $("#productId").val()
                }, function(msg) {
                    data = transData(msg);
                    getKLine(data, unit);
                }, "json");

            }

        });


        var getPrice = function() {
            //是否属于期货
            if($('.curPrice').attr('data-value') == -1) {
                return false;
            }
            var mydate = new Date();
            $.get('/site/ajax-all-product', function(newData) {
                //			console.log(newData);
                var nowProduct = $("#tableName").val(),
                    price = parseFloat(newData.info[nowProduct].price),
                    date = new Date(),
                    minute = (new Date()).getMinutes(),
                    x = new Date(parseInt(minute)).Format('hh:mm');
                //				x = Date.parse(date.Format('yyyy/MM/dd hh:' + minute + ':00')),
                var msg = [];
                var newDatas = newData.info[nowProduct];
                var time = newDatas.time;
                var open = newDatas.open;
                var high = newDatas.high;
                var low = newDatas.low;
                var close = newDatas.close;
                msg.push([time, open, high, low, close]);
//			data = transData(msg)
                //				splitData(rawData, unit)
                if(length > 0) {
                    if(minute == current) {
                        length = data.length;
                        data.push([x, data[current]])
                        console.log(data)
                    }
                }
                /**********************************/
                var lastPrice = $('.curPrice').text();
                //价格箭头跳动
                if(newData.info[nowProduct].price != lastPrice) {
                    $('.curArrow img').remove();
                    $('.curArrow .curPrice').removeClass('lred');
                    $('.price-info .curPrice1').removeClass('lred');
                    $('.curArrow .curPrice').removeClass('lgreen');
                    $('.price-info .curPrice1').removeClass('lgreen');
                    $("#zhangfu").removeClass('lgreen');
                    $("#zfper").removeClass('lgreen');
                    $("#zhangfu").removeClass('lred');
                    $("#zfper").removeClass('lred');
                    $("#zhangfu1").removeClass('lgreen');
                    $("#zfper1").removeClass('lgreen');
                    $("#zhangfu1").removeClass('lred');
                    $("#zfper1").removeClass('lred');
                }
                if(newData.info[nowProduct].price >= lastPrice) {
                    $('.curArrow .curPrice').addClass('lred');
                    $('.price-info .curPrice1').addClass('lred');
                    $("#zhangfu").addClass('lred');
                    $("#zfper").addClass('lred');
                    $("#zhangfu1").addClass('lred');
                    $("#zfper1").addClass('lred');
                    $('.curArrow').append('<img src="/images/arrow-top.png" style="width: 13px;vertical-align: top;margin-left:8px;">');
                } else if(newData.info[nowProduct].price < lastPrice) {
                    $('.curArrow .curPrice').addClass('lgreen');
                    $('.price-info .curPrice1').addClass('lgreen');
                    $("#zhangfu").addClass('lgreen');
                    $("#zfper").addClass('lgreen');
                    $("#zhangfu1").addClass('lgreen');
                    $("#zfper1").addClass('lgreen');
                    $('.curArrow').append('<img src="/images/arrow-down.png" style="width: 13px;vertical-align: top;margin-left:8px;">');
                }
                $("#zhangfu").text(newData.info[nowProduct].diff);
                $("#zfper").text(newData.info[nowProduct].diff_rate);
                $("#zhangfu1").text(newData.info[nowProduct].diff);
                $("#zfper1").text(newData.info[nowProduct].diff_rate);
                $('.curPrice').html(newData.info[nowProduct].price);
                $('.curPrice1').html(newData.info[nowProduct].price);
            }, 'json');
            // }
        }

        var st = setInterval(function() {
            getPrice();
            //		getKLine(data);
        }, 1000);

//    var _newsData = function(news){
//        var _data = [];
//        for(var i in news) {
//            _data.push([new Date(parseInt(news[i].time)).Format('hh:mm'),
//                parseFloat(news[i].open),
//            ]);
//        }
//        return _data;
//    }
        var transData = function(msg) {
            var arr = [];
            for(var i in msg) {
                arr.push([new Date(parseInt(msg[i].time)).Format('hh:mm'),
                    parseFloat(msg[i].open),
                    parseFloat(msg[i].high),
                    parseFloat(msg[i].low),
                    parseFloat(msg[i].close)
                ]);
            }
            return arr;
        }
    })

    function getKLine(data, unit) {

        var data0 = splitData(data, unit)
        var  myChart = echarts.init(document.getElementById('kContainer'));

        var  option = {
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    label: {
                        show: true,
                        precision: '2',
                    }
                },
                backgroundColor: 'rgba(245, 245, 245, 0.8)',
                borderWidth: 1,
                borderColor: '#ccc',
                padding: 10,
                textStyle: {
                    color: '#000'
                },
                position: function(pos, params, el, elRect, size) {
                    var obj = {
                        top: 10
                    };
                    obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
                    return obj;
                },
                label: {
                    backgroundColor: '#000',
                },
                formatter: function(param) {
                    openprice = parseFloat(param[0].data[1]);
                    closeprice = parseFloat(param[0].data[2]);
                    lowprice = parseFloat(param[0].data[3]);
                    highprice = parseFloat(param[0].data[4]);
                    return ['时间: <font style="font-size:12px;">' + param[0].name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + highprice.toFixed(2) + '<br/>'].join('');
                },
                extraCssText: 'width: 200px'
            },
            grid: {
                borderColor: '#ccc',
                left: '5%',
                right: '5%',
                top: '5%',
                bottom: '10%',
            },
            xAxis: {
                type: 'category',
                data: data0.categoryData,
                scale: true,
                boundaryGap: false,
                axisLine: {
                    onZero: false
                },
                axisTick: {
                    length: 10
                },
                splitLine: {
                    lineStyle: {
                        color: ['#000', '#000'],
                        opacity: 0.5
                    }
                },
                axisPointer: {
                    label: {
                        formatter: function(params) {
                            var seriesValue = (params.seriesData[0] || {}).value;
                            return params.value + (seriesValue != null ? '\n' + echarts.format.addCommas(seriesValue) : '');
                        },
                        backgroundColor: '#000',
                    }
                },
                nameGap: 0,
                boundaryGap: false,
                axisTick: {
                    show: false,
                },
                axisLine: {
                    show: true,
                    length: 0,
                    lineStyle: {
                        color: '#000',
                    }
                },
                axisLabel: {
                    show: true,
                    interval: function(index, value) {
                        if(index % 15 == 0) return true;
                        return false;
                    },
                    textStyle: {
                        color: '#999'
                    },
                    margin: 4
                },
                min: 'dataMin',
                max: 'dataMax'
            },
            yAxis: {
                scale: true,
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: ['#eeeeee'],
                        type: 'dotted',
                    }
                },
                axisLabel: {
                    show: false,
                    textStyle: {
                        color: '#FF0000',
                        baseline: 'bottom',
                    },
                    margin: 8,
                },
                splitNumber: 6,
                axisLine: {
                    show: false,
                },
                axisTick: {
                    show: false,
                },
            },
            dataZoom: [{
                type: 'inside',
                xAxisIndex: [0],
                start: 45,
                end: 100
            }],
            series: [{
                name: 'K线',
                type: 'candlestick',
                data: data0.values,
                itemStyle: {
                    normal: {
                        color: '#ff4c52',
                        color0: '#1aaa0f',
                        borderColor: '#ff4c52',
                        borderColor0: '#1aaa0f'
                    }
                },
                tooltip: {
                    formatter: function(param) {
                        openprice = param.data[0];
                        closeprice = param.data[1];
                        lowprice = param.data[2];
                        highprice = param.data[3];
                        return ['时间: <font style="font-size:12px;">' + param.name + '</font><br/>',
                            '开盘价: ' + openprice.toFixed(2) + '<br/>',
                            '收盘价: ' + closeprice.toFixed(2) + '<br/>',
                            '最低价: ' + lowprice.toFixed(2) + '<br/>',
                            '最高价: ' + highprice.toFixed(2) + '<br/>'
                        ].join('');
                    }
                }
            }, {
                name: 'MA5',
                type: 'line',
                data: calculateMA(1, data0),
                smooth: true,
                lineStyle: {
                    normal: {
                        color: '#f2cfa9'
                    }
                }
            }, {
                name: 'MA10',
                type: 'line',
                data: calculateMA(5, data0),
                smooth: true,
                lineStyle: {
                    normal: {
                        color: '#687cd5'
                    }
                }
            }, {
                name: 'MA20',
                type: 'line',
                data: calculateMA(10, data0),
                smooth: true,
                lineStyle: {
                    normal: {
                        color: '#e9837e'
                    }
                }
            }]
        };
        myChart.clear();
        myChart.setOption(option);
    }
    function splitData(data, unit) {

        var categoryData = [];
        var values = [];
        var xax;
        switch (unit) {
            case 1:
                xax = 100;
                break;
            case 5:
                xax = 500;
                break;
            case 30:
                xax = 3000;
                break;
            case 1440:
                xax = 100;
                break;
//        case -1:
//            xax = 20;
//            break;
//        case 0:
//            xax = 40;
//            break;
        }
        var length = data.length;

        if (length > xax) {
            data = data.slice(length - xax);
        }

        if (unit == 1440) {
            for (var i = 0; i < data.length; i++) {
                var myDate = new Date();
//            var now = [myDate.getFullYear(), myDate.getMonth() + 1, myDate.getDate()].join("-")
                categoryData.push(data[i].splice(0, 1)[0]);
                values.push(data[i]);

            }
            return {
                categoryData: categoryData,
                values: values
            };
        } else if (unit == 30) {
            for (var i = 0; i < data.length;) {
                categoryData.push(data[i].splice(0, 1)[0]);
                values.push(data[i]);
                i += 30;
            }
            return {
                categoryData: categoryData,
                values: values
            };
        } else if (unit == 5) {
            for (var i = 0; i < data.length;) {
                categoryData.push(data[i].splice(0, 1)[0]);
                values.push(data[i]);
                i += 5;
            }
            return {
                categoryData: categoryData,
                values: values
            };
        } else if (unit == 1) {
            for (var i = 0; i < data.length; i++) {
                categoryData.push(data[i].splice(0, 1)[0]);
                values.push(data[i]);
            }
            return {
                categoryData: categoryData,
                values: values
            };
        }
        for(var i = 0; i < data.length;i++) {
            categoryData.push(data[i].splice(0, 1)[0]);
            values.push(data[i]);
        }
        return {
            categoryData: categoryData,
            values: values
        };
    }
    function calculateMA(dayCount, data0) {
        var result = [];
        for(var i = 0, len = data0.values.length; i < len; i++) {
            if(i < dayCount) {
                result.push('-');
                continue;
            }
            var sum = 0;
            for(var j = 0; j < dayCount; j++) {
                sum += parseFloat(data0.values[i - j][1]);
            }
            result.push(sum / dayCount);
        }
        return result;
    }
</script>
<script>
    function sellAllBtn()
    {
        layer.confirm('确认要一键平仓吗？', {
            btn : [ '确定', '取消' ]//按钮
        }, function(index) {
            $.post("<?= url('order/ajaxSellOrder')?>",{ product_id:<?=$products->id?>, type:2, model_type:<?=$model_type?>}, function(msg) {
                if(msg.state) {
                    layer.alert('已平仓');
                    layer.close(index);
                    window.location.reload();
                }else{
                    layer.alert(msg.info);
                }
            }, 'json');
        });
    }
    function riseBy(url)
    {
        if(<?=$week?> == 1){
//        layer.alert('系统提示:周末休市');return ;
        }
        if(<?=$is_trade?> == 1){
            layer.alert('系统提示:非交易时间禁止下单');return ;
        }
        window.location.href = url;

    }


</script>

