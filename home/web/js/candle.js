$(function () {
    var data = {};
    var dayUnit = 3;
    // 绑定tab栏事件
    $("#feature-tab li").click(function () {
        var $li = $(this),
            $a = $li.find('a'),
            unit = $a.data('unit');
        $li.addClass('active').siblings().removeClass('active');
        if (unit == -1) {
            getAreaStock(data);
        } else {
            getKlineStock(data, unit);
        }
    });
    Highcharts.setOptions({
        global: {
            useUTC: false
        },
        colors: ['#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec', '#7cb5ec']
    });
    
    $.get($("#getStockDataUrl").val(), {id: $("#productId").val()}, function (msg) {
        data[-1] = transData(msg);
        getAreaStock(data);
        $.get($("#getStockDataUrl").val(), {id: $("#productId").val(), unit: 'day'}, function (msg) {
            data[dayUnit] = transData(msg);
        });
    });


    function chartAddPlotLine(chart){
        var timer = setTimeout(function(){
            var closeprice = $(".curPrice1").html();
            if($(".curPrice1").hasClass("lgreen")){
                var color = "#1EB83F";
            }else{
                var color = "#E63234";
            }
            chart.yAxis.removePlotLine('plot-line');
            chart.yAxis.addPlotLine({dashStyle:'dash',value:closeprice,width:2,color: color,id: 'plot-line'});
            clearTimeout(timer);
            timer = null;
        },100)
        
    }

    function chartAddPlotLine1(){
        if(_chart == null){
            return false;
        }
        var timer = setTimeout(function(){
            var closeprice = $(".curPrice1").html();
            if($(".curPrice1").hasClass("lgreen")){
                var color = "#1EB83F";
            }else{
                var color = "#E63234";
            }
            _chart.yAxis.removePlotLine('plot-line1');
            _chart.yAxis.addPlotLine({dashStyle:'dash',value:closeprice,width:2,color: color,id: 'plot-line1'});
            clearTimeout(timer);
            timer = null;
        },100)
        
    }

    //产品的切换
    $('.selectProduct').on('change', function() {
        var id = $(this).val();
        $.post("/site/ajax-product-config", {id: id}, function(msg) {
            if (msg.state) {
                clearInterval(st);
                var info = msg.info;
                $('#productId').val(id);
                $('.selectUnit').html(info.list + '<i class="icon glyphicon glyphicon-chevron-down"></i>');
                // $('p.ts').html('交易时间：周一至周五，' + info.time);
                $('p.ts').html(info.time);
                if (info.isTime == 1) {
                    $('.riseFall').removeClass('gray');
                    $('.curPrice').attr('data-value', 1);
                    // $('.curPrice').data('value',1);
                    
                } else {
                    $('.riseFall').addClass('gray');
                    $('.curPrice').attr('data-value', -1);
                    // $('.curPrice').data('value',-1);
                }
                $('.curPrice').html(info.price);
                //负值涨跌参数
                var data = msg.data;
                var rate = (parseFloat(data[0].one_profit) + 100),
                    html = '回报率：' + rate + '%';
                $('.riseRate').html(html);
                $('.fallRate').html(html);
                $('#fallRate').val(rate);
                $('.buyContent1 .orderProfit').html(rate * parseFloat($('.orderBuy').val()) / 100);
                $.get($("#getStockDataUrl").val(), {id: $("#productId").val()}, function (msg) {
                    data[-1] = transData(msg);
                    $("#areaContainer").css({
                        'opacity':1
                    });
                    $("#kContainer").hide();
                    $("#report").hide();
                    $("#feature-tab").find("li").removeClass("active");
                    $("#feature-tab").find("li").eq(0).addClass("active");
                    getAreaStock(data);
                //    var sumrow = $("#feature-tab").find(".active a").data("unit");
                //    if(sumrow != -1){
                //        getKlineStock(data,sumrow);
                //    }
                    $.get($("#getStockDataUrl").val(), {id: $("#productId").val(), unit: 'day'}, function (msg) {
                        data[dayUnit] = transData(msg);
                    });
                });
            } else {
                $.alert(msg.info);
            }
        }, 'json');
    });

    // 获取最新数据
    var flag = 0;
    var getPrice = function(chart, count) {
        //是否属于期货
        if ($('.curPrice').attr('data-value') == -1) {
            return false;
        }
        var mydate = new Date();
        //交易时间：周一至周五，上午10:00至次日凌晨02:00 mydate.getHours(); //获取当前小时数(0-23)
        // if (mydate.getDay() == 0 || mydate.getDay() == 6) {
        //     return $('.curPrice').html('休市');
        // } else {
            $.get('/price.json?' + Math.random(), function(newData) {
                var nowProduct = $("#tableName").val(),
                    price = parseFloat(newData[nowProduct]),
                    date = new Date(),
                    minute = (new Date()).getMinutes(),
                    x = Date.parse(date.format('yyyy/MM/dd hh:' + minute + ':00')),
                    length = chart.data.length;

                    /**********************************/
                    if (length > 0) {
                        if (minute == recMin) {

                            //获取当前坐标中的最大和最小值
                            var minVal = chart.yAxis.min;
                            var maxVal = chart.yAxis.max;
                            if(price > maxVal){
                                price = maxVal;
                            }else if(price < minVal){
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
                            if(price > maxVal){
                                price = maxVal;
                            }else if(price < minVal){
                                price = minVal;
                            }
                            chartAddPlotLine(chart);
                            chartAddPlotLine1();
                            chart.addPoint([x, price], true, true);
                            recMin = minute;
                        }
                    }

                /**********************************/
                var lastPrice = $('.curPrice').html();
                //价格箭头跳动
                if (newData[nowProduct] != lastPrice) {
                    $('.curArrow img').remove();
                    $('.curArrow .curPrice').removeClass('lred');
                    $('.price-info .curPrice1').removeClass('lred');
                    $('.curArrow .curPrice').removeClass('lgreen');
                    $('.price-info .curPrice1').removeClass('lgreen');
                }

                if (newData[nowProduct] > lastPrice) {
                    $('.curArrow .curPrice').addClass('lred');
                    $('.price-info .curPrice1').addClass('lred');
                    $('.curArrow').append('<img src="/images/arrow-top.png" style="width: 13px;vertical-align: top;margin-left:8px;">');
                } else if (newData[nowProduct] < lastPrice) {
                    $('.curArrow .curPrice').addClass('lgreen');
                    $('.price-info .curPrice1').addClass('lgreen');
                    $('.curArrow').append('<img src="/images/arrow-down.png" style="width: 13px;vertical-align: top;margin-left:8px;">');
                }
                // tes(newData[nowProduct]);
                $('.curPrice').html(newData[nowProduct]);
                $('.curPrice1').html(newData[nowProduct]);
            }, 'json');
        // }
    }

    function getAreaStock(data) {
        var length = data[-1].length;
        if (length > 60) {
            data = data[-1].slice(length - 60);
        } else {
            data = data[-1];
        }
        var _data = [];
        for(var key in data){
            _data.push([data[key][0] , (data[key][4] - data[10][1]) ]);
        }
        $('#container').highcharts('StockChart', {
            chart: {
                resetZoomButton: false,
                events: {
                    load: function () {
                        var series = this.series;

                        chartAddPlotLine(series[0]);

                        st = setInterval(function () {
                            getPrice(series[0]);
                        }, 1500);

                    }
                },
                backgroundColor:'#19191A',
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
                    pointPadding : 0 ,
                    // 如果x轴一个点有两个柱，则这个属性设置的是这两个柱的间距。 
                    groupPadding : 0

                 }
            },
            xAxis: {
                reversed: true,  //是否可以反转
                lineWidth: 0,
                tickWidth: 0,
                labels: {
                    y: -130, //x轴刻度往下移动20px
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
                opposite:true, //是否显示正常的轴面
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
                opposite:true, //是否显示正常的轴面
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
            // 图例
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
                followPointer:true,
                followTouchMove:true
            },
            credits:{
                enabled: false
            },
            scrollbar: {
                enabled: false
            },
            navigator: {
                enabled: false
            },
            series : [{
                name : 'price',
                type: 'area',
                data : data,
                lineWidth : 2,
                lineColor:'#D2C01E',
                tooltip: {
                    valueDecimals: 2
                },
                dataGrouping: {
                    enabled: false
                },
                fillColor : {
                    linearGradient : {
                        x1: 0,
                        y1: 0,
                        x2: 1,
                        y2: 1
                    },
                    stops : [
                        [0, "#39341A"],
                        [1, "rgba(57,52,26,0.2)"]
                    ]
                },
                threshold: null
            },{
            type: 'column',
            name: '',
            data: _data,
            yAxis: 1,
            color:'#1FC662',
            // pointWidth:200
        }]
        });
    }

    function getKlineStock(data, unit) {
        var _data = [];
        for(var key in data[-1]){
            _data.push([data[-1][key][0] , (data[-1][key][4] - data[-1][key][1]) / (data[-1][key][4] )]);
        }
        var circle;
        switch (unit) {
            case 0:
                circle = 1;
                break;
            case 1:
                circle = 5;
                break;
            case 2:
                circle = 15;
                break;
            case 3:
                circle = 30;
                break;
            case 4:
                circle = 60;
                break;
            case dayUnit:
                circle = 60 * 24;
                break;
        }
        if (!data[unit]) {
            data[unit] = [];
            var diff = 60 * 1000 * circle;
            var start = data[-1][0][0],
                end = 0,
                sub = [0, 0, 0, 999999, 0];
            for (var key in data[-1]) {
                end = data[-1][key][0];
                if (end - start >= diff) {
                    sub[4] = data[-1][key - 1][4];
                    data[unit].push(sub);
                    start = data[-1][key][0];
                    sub = [0, 0, 0, 999999, 0];
                }
                if (end == start) {
                    sub[0] = data[-1][key][0];
                    sub[1] = data[-1][key][1];
                }
                if (sub[2] < data[-1][key][2]) {
                    sub[2] = data[-1][key][2];
                }
                if (sub[3] > data[-1][key][3]) {
                    sub[3] = data[-1][key][3];
                }
            }
        }
        function exma(num,unit){
            var i,arr = []; 
            for (i = 0; i <data[unit].length; i++) {
                var dateUTC = data[unit][i][0];
                if(i>=num){
                    var ma5=0.00;
                    for( var j=0;j<num;j++){
                        ma5+=parseFloat(data[unit][i-j][4]);
                    }
                    arr.push([
                        parseInt(dateUTC), // the date
                        parseFloat(ma5/num)
                    ]);
                }
            }    
            return arr;
        }

        $('#container').highcharts('StockChart', {
            title: {
                text: ''
            },
            chart: {
                resetZoomButton: false,
                backgroundColor: 'rgba(0,0,0,0)',
                border: 1,
                borderColor: '#C7CBD4',
                borderRadius: 0,
                panning: false, //禁用放大
                pinchType: "null", //禁用手势操作
                zoomType: "x",
                panning: false,
                panKey: "shift",
            },
            rangeSelector: {
                buttons: [{
                    type: 'minute',
                    count: 30,
                }, {
                    type: 'hour',
                    count: 2,
                }, {
                    type: 'hour',
                    count: 20,
                }, {
                    type: 'hour',
                    count: 40,
                }, {
                    type: 'hour',
                    count: 60,
                }, {
                    type: 'day',
                    count: 7,
                }],
                buttonTheme: {
                    style: {
                        display: 'none'
                    },
                },
                inputStyle: {
                    display: 'none'
                },
                labelStyle: {
                    display: 'none'
                },
                selected: unit,
            },
            scrollbar: {
                enabled: false
            },
            navigator: {
                enabled: false
            },
            credits:{
                enabled: false
            },
            tooltip: {
                formatter: function() {
                    var date, hour, minute;
                    var fix = function (num) {
                        if (num < 10) {
                            return '0' + num;
                        } else {
                            return num;
                        }
                    }
                    if (unit == dayUnit) {
                        date = Highcharts.dateFormat('%m-%d', this.x);
                    } else if (circle == 1) {
                        date = Highcharts.dateFormat('%m-%d', this.x)+"  "+Highcharts.dateFormat('%H:%M', this.x);
                    } else {
                        minute = parseFloat(Highcharts.dateFormat('%M', this.x));
                        minute = Math.round(minute / 5) * 5;
                        if (minute == 60) {
                            hour = parseFloat(Highcharts.dateFormat('%H', this.x)) + 1;
                            date = fix(hour) + ':00';
                        } else {
                            date = Highcharts.dateFormat('%H:', this.x) + fix(minute);
                        }
                        date = Highcharts.dateFormat('%m-%d', this.x)+"  "+date;
                    }
                    if(this.points.length == 2){
                        console.log(this.points)
                        MMA1 =this.points[1].y.toFixed(2);
                        // MMA5 =this.points[2].y.toFixed(2);
                        // MMA15 =this.points[3].y.toFixed(2);
                        $reporting.html(
                            '  <br/><b style="color:#00FF00;width:33%;padding-left:10px">MA1:</b> '+ MMA1
                            // +'  <b style="color: #3300FF;width:33%;padding-left:20px">MMA5:</b> '+ MMA5
                            // +'  <b style="color:#FF0000;width:33%;padding-left:20px">MMA15:</b> '+ MMA15
                        );
                    }else if(this.points.length == 3){
                        console.log(this.points)
                        MMA1 =this.points[1].y.toFixed(2);
                        MMA5 =this.points[2].y.toFixed(2);
                        // MMA15 =this.points[3].y.toFixed(2);
                        $reporting.html(
                            '  <br/><b style="color:#00FF00;width:33%;padding-left:10px">MA1:</b> '+ MMA1
                                +'  <b style="color: #3300FF;width:33%;padding-left:20px">MA5:</b> '+ MMA5
                            // +'  <b style="color:#FF0000;width:33%;padding-left:20px">MMA15:</b> '+ MMA15
                        );
                    }else if(this.points.length == 4){
                        console.log(this.points)
                        MMA1 =this.points[1].y.toFixed(3);
                        MMA5 =this.points[2].y.toFixed(3);
                        MMA15 =this.points[3].y.toFixed(3);
                        $reporting.html(
                            '  <br/><b style="color:#00FF00;width:33%;padding-left:10px">MA1:</b> '+ MMA1
                                +'  <b style="color: #3300FF;width:33%;padding-left:10px">MA5:</b> '+ MMA5
                            +'  <b style="color:yellow;width:33%;padding-left:10px">MA15:</b> '+ MMA15
                        );
                    }else {
                         $reporting.html(
                           ""
                        );
                    }
                    return '<b>' + date + '</b><br/>' + 
                           '<b>开盘价：</b>' + /*Highcharts.numberFormat(*/this.points[0]['point']['open']/*, 5)*/ + '<br/>' + 
                           '<b>最高价：</b>' + /*Highcharts.numberFormat(*/this.points[0]['point']['high']/*, 5)*/ + '<br/>' + 
                           '<b>最低价：</b>' + /*Highcharts.numberFormat(*/this.points[0]['point']['low']/*, 5)*/ + '<br/>' + 
                           '<b>收盘价：</b>' + /*Highcharts.numberFormat(*/this.points[0]['point']['close']/*, 5)*/+'<br/>'
                    
                },
                followPointer:true,
                followTouchMove:true,
            },
            plotOptions: {
                candlestick: {
                    upColor: '#transparent',        // 涨 颜色
                    upLineColor: '#C23531',    // 涨 线条颜色
                    color: '#13E9EC',        // 跌 颜色
                    lineColor: '#13E9EC'     // 跌 线条颜色
                },
                column: {
                    cursor: 'pointer',
                    pointPadding: 0,
                    borderWidth: 0,
                    // pointWidth: 300,
                    maxPointWidth: 100, // 设置最大宽度
                    pointPadding : 0.08 ,
                    // 如果x轴一个点有两个柱，则这个属性设置的是这两个柱的间距。 
                    groupPadding : 0.08
                }
            },
            xAxis: {
                labels: {
                    formatter: function () {
                        return Highcharts.dateFormat(unit == dayUnit ? '%m-%d' : '%H:%M', this.value);
                    },
                },
                lineWidth: 0,
                tickWidth: 0,
                labels: {
                    y: -130, //x轴刻度往下移动20px
                    // style: {
                    //     color: '#ffffff',//颜色
                    //     fontSize:'8px'  //字体
                    // }
                }
            },
            yAxis: [{
                labels: {
                    align: 'right',
                    x: -3
                }, 
                lineWidth: 0,
                height: '70%',
                lineWidth: 0,
                gridLineWidth: 1,
                // minorGridLineWidth: 1,
                // minorTickInterval: 5,
                gridLineColor: '#292929',
                offset: 40, //y轴偏移绘图区域距离
                top: '-5%',
                height: '70%',
            },{
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
                opposite:true, //是否显示正常的轴面
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
            series: [{
                type: 'candlestick',
                name: $("#futuresName").val(),
                data: data[unit],
                dataGrouping: {
                    enabled: false
                },
                tooltip: {
                    valueDecimals: 2
                }
            },
            {
                type: 'spline',
                name: 'MMA1',
                color:'#00FF00',
                data: exma(1, unit),
                lineWidth:1,
                dataGrouping: {
                    enabled: false
                }
            },
            {
                type: 'spline',
                name: 'MMA5',
                data: exma(5, unit),
                color:'#fff',
                threshold: null, 
                lineWidth:1,
                dataGrouping: {
                    enabled: false
                }
            },
            {
                type: 'spline',
                name: 'MMA15',
                data: exma(15, unit),
                color:'yellow',
                threshold: null, 
                lineWidth:1,
                dataGrouping: {
                    enabled: false
                }
            },
            {
                type: 'column',
                name: 'Volume',
                data: _data,
                yAxis: 1,
                color:'#1FC662'
            }
            ]

        },function(chart){
            _chart = chart.series[0];
            chartAddPlotLine();
        });
    }

    var transData = function (data) {
        var arr = [];
        for (var i in data) {
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
