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

        var autoheight = 303;
        var seHeight = 400;
        var st;
        var data = {};
        var recMin = (new Date()).getMinutes();
        var $reporting = $("#report");
        var _chart = null;
        //动态获取高度
        $('.table-container').css('height', seHeight + 'px');

        Highcharts.setOptions({
            global: {
                useUTC: false
            },
            colors: ['#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec']
        });

        $.get($("#getStockDataUrl").val(), {id: $("#productId").val()},function(msg) {
            var data=[];
            data[-1] = window.transDatas(msg);
            getAreaStock(data);
        });

        function chartAddPlotLine(chart) {
            var timer = setTimeout(function() {
                var closeprice = $(".curPrice1").html();
                if($(".curPrice1").hasClass("lgreen")) {
                    var color = "#1EB83F";
                } else {
                    var color = "#E63234";
                }
                chart.yAxis.removePlotLine('plot-line');
                chart.yAxis.addPlotLine({
                    dashStyle: 'dash',
                    value: closeprice,
                    width: 2,
                    color: color,
                    id: 'plot-line'
                });
                clearTimeout(timer);
                timer = null;
            }, 100)

        }

        function chartAddPlotLine1() {
            if(_chart == null) {
                return false;
            }
            var timer = setTimeout(function() {
                var closeprice = $(".curPrice1").html();
                if($(".curPrice1").hasClass("lgreen")) {
                    var color = "#1EB83F";
                } else {
                    var color = "#E63234";
                }
                _chart.yAxis.removePlotLine('plot-line1');
                _chart.yAxis.addPlotLine({
                    dashStyle: 'dash',
                    value: closeprice,
                    width: 2,
                    color: color,
                    id: 'plot-line1'
                });
                clearTimeout(timer);
                timer = null;
            }, 100)

        }
        // 获取最新数据
        var flag = 0;
        var getPrice = function(chart, count) {
            //是否属于期货
            if($('.curPrice').attr('data-value') == -1) {
                return false;
            }
            var mydate = new Date();
            $.get('/site/ajax-all-product', function(newData) {
                var data;
                console.log(newData)
                var nowProduct = $("#tableName").val(),
                    price = parseFloat(newData.info[nowProduct].price),
                    date = new Date(),
                    minute = (new Date()).getMinutes(),
                    x = Date.parse(date.Format('yyyy/MM/dd hh:' + minute + ':00')),
                    charts =  chart.data,
                    length =charts.length;

                /**********************************/
                if(length > 0) {
                    if(minute == recMin) {

                        //获取当前坐标中的最大和最小值
                        var minVal = chart.yAxis.min;
                        var maxVal = chart.yAxis.max;
                        if(price > maxVal) {
                            price = maxVal;
                        } else if(price < minVal) {
                            price = minVal;
                        }
                        chartAddPlotLine(chart);
                        chartAddPlotLine1();
                        chart.data[length - 1].y = price;
                        chart.redraw();
                    } else {

                        //获取当前坐标中的最大和最小值
                        var minVal = chart.yAxis.min;
                        var maxVal = chart.yAxis.max;
                        if(price > maxVal) {
                            price = maxVal;
                        } else if(price < minVal) {
                            price = minVal;
                        }
                        chartAddPlotLine(chart);
                        chartAddPlotLine1();
                        chart.addPoint([x, price], true, true);
                        recMin = minute;
                    }
                }

            }, 'json');
        }

        getAreaStock = function(data,unit) {
            var length = data[-1].length;
            if(length > 60) {
                data = data[-1].slice(length - 60);
            } else {
                data = data[-1];
            }
            var _data = [];
            for(var key in data) {
                _data.push([data[key][0], (data[key][4] - data[10][1])]);
            }
            $('#areaContainer').highcharts('StockChart', {
                chart: {
                    resetZoomButton: false,
                    events: {
                        load: function() {
                            var series = this.series;

                            chartAddPlotLine(series[0]);

                            st = setInterval(function() {
                                getPrice(series[0]);
                            }, 1500);

                        }
                    },
                    backgroundColor: '#19191A',
                    panning: false, //禁用放大
                    pinchType: false, //禁用手势操作
                    zoomType: "null",
                    panning: false,
                    panKey: "shift"
                },
                title: {
                    text: ''
                },
                rangeSelector: {
                    enabled: false
                },
                plotOptions: {
                    column: {
                        cursor: 'pointer',
                        pointPadding: 0,
                        borderWidth: 0,
                        pointWidth: 8,
                        // maxPointWidth: 100, // 设置最大宽度
                        pointPadding: 0,
                        // 如果x轴一个点有两个柱，则这个属性设置的是这两个柱的间距。
                        groupPadding: 0

                    }
                },
                xAxis: {
                    reversed: true, //是否可以反转
                    lineWidth: 0,
                    tickWidth: 0,
                    labels: {
                        y: -100, //x轴刻度往下移动20px
                        // style: {
                        //     color: '#ffffff',//颜色
                        //     fontSize:'8px'  //字体
                        // }
                    },
                    reversed: false
                },
                tooltip: {
                    split: true
                },
                /*******************************/
                yAxis: [{
                    title: {
                        text: ''
                    },
                    labels: {
                        align: 'right', //哪一部分是固定的
                        x: -3 //x轴的偏移量
                    },
                    opposite: true, //是否显示正常的轴面
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }],
                    height: '70%',
                    lineWidth: 0,
                    gridLineWidth: 1,
                    // minorGridLineWidth: 1,
                    // minorTickInterval: 5,
                    gridLineColor: '#292929',
                    offset: 40, //y轴偏移绘图区域距离
                }, {
                    title: {
                        text: ''
                    },
                    labels: {
                        align: 'right',
                        x: -3
                    },
                    title: {
                        text: ''
                    },
                    top: '80%',
                    height: '25%',
                    offset: 0,
                    lineWidth: 0,
                    opposite: true, //是否显示正常的轴面
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }],
                    gridLineWidth: 1,
                    // minorGridLineWidth: 1,
                    // minorTickInterval: 5,
                    offset: 40, //y轴偏移绘图区域距离
                    gridLineColor: 'transparent',
                }],
                legend: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                tooltip: {
                    formatter: function() {
                        return '<b>' + Highcharts.dateFormat('%H:%M:%S', this.x) + '</b><br/><b>价格：</b>' + Highcharts.numberFormat(this.y, 2);
                    },
                    followPointer: true,
                    followTouchMove: true
                },
                credits: {
                    enabled: false
                },
                scrollbar: {
                    enabled: false
                },
                navigator: {
                    enabled: false
                },
                series: [{
                    name: 'price',
                    type: 'area',
                    data: data,
                    lineWidth: 2,
                    lineColor: '#D2C01E',
                    tooltip: {
                        valueDecimals: 2
                    },
                    dataGrouping: {
                        enabled: false
                    },
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 1,
                            y2: 1
                        },
                        stops: [
                            [0, "#39341A"],
                            [1, "rgba(57,52,26,0.2)"]
                        ]
                    },
                    threshold: null
                }, {
                    type: 'column',
                    name: '',
                    data: _data,
                    yAxis: 1,
                    color: '#1FC662',
                    // pointWidth:200
                }]
            });
        }

       window.transDatas=function(data) {
            var arr = [];
            for(var i in data) {
                arr.push([
                    parseFloat(data[i]['time']), // the date
                    parseFloat(data[i]['open']), // open
                    parseFloat(data[i]['high']), // high
                    parseFloat(data[i]['low']), // low
                    parseFloat(data[i]['close']) // close
                ]);
            }
            return arr;
        }
    });