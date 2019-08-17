

<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa">
        <li><a href="#">首页</a></li>
        <li class="am-active">交易</li>
    </ol>

    <div class="bt-1 am-padding-sm bg-fa">

        <div class="am-padding-sm bg-ed">

            <div class="bg-white">
                <div class="bb-1 br-1">
                    <div class="am-g switchTab">
                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                            <p class="am-text-danger"><?=$products -> name ?> <?=$products -> identify ?></p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                            <p class="am-text-success cursP">分时</p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                            <p class="cursP">日分时</p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                            <p class="cursP">1分钟</p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                            <p class="cursP">5分钟</p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                            <p class="cursP">30分钟</p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
                            <p class="cursP">日K线</p>
                        </div>
                        <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 br-1">
                            <p class="cursP">盘口</p>
                        </div>
                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
<!--                            <p class="am-text-danger am-text-center">标题标题标题标题</p>-->
                        </div>
                    </div>
                </div>

                <div class="bb-1">
                    <div class="am-g">
                        <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 br-1">
                            <div id="switchPages">

                                <div class="pageOne">
                                    <div id="page1" style="height: 400px;"></div>
                                </div>

                                <div class="pageOne">
                                    <div id="page2" style="height: 400px;"></div>
                                </div>

                                <div class="pageOne">
                                    <div id="page3" style="height: 400px;"></div>
                                </div>

                                <div class="pageOne">
                                    <div id="page4" style="height: 400px;"></div>
                                </div>

                                <div class="pageOne">
                                    <div id="page5" style="height: 400px;"></div>
                                </div>

                                <div class="pageOne">
                                    <div id="page6" style="height: 400px;"></div>
                                </div>

                                <div class="pageOne" style="height: 400px;">
                                    <div class="am-g am-padding-top-sm">
                                        <div class="am-u-sm-6 am-u-lg-6 am-u-md-6 am-padding-right-0">

                                            <p class="am-padding-xs bt-1 bl-1 br-1 bb-1">
                                                <span>涨跌</span>
                                                <span class="am-align-right am-margin-0 am-text-danger"><?=$products -> dataAll -> diff ?></span>
                                            </p>

                                            <p class="am-padding-xs bl-1 br-1 bb-1">
                                                <span>最高</span>
                                                <span class="am-align-right am-margin-0 am-text-danger"><?=$products -> dataAll -> high ?></span>
                                            </p>

                                            <p class="am-padding-xs bl-1 br-1 bb-1">
                                                <span>开盘</span>
                                                <span class="am-align-right am-margin-0 am-text-danger"><?=$products -> dataAll -> open ?></span>
                                            </p>

                                        </div>
                                        <div class="am-u-sm-6 am-u-lg-6 am-u-md-6 am-padding-left-0">

                                            <p class="am-padding-xs bt-1 bl-1 br-1 bb-1">
                                                <span>涨幅</span>
                                                <span class="am-align-right am-margin-0 am-text-danger"><?=$products -> dataAll -> diff_rate ?></span>
                                            </p>

                                            <p class="am-padding-xs bl-1 br-1 bb-1">
                                                <span>最低</span>
                                                <span class="am-align-right am-margin-0 am-text-danger"><?=$products -> dataAll -> low ?></span>
                                            </p>

                                            <p class="am-padding-xs bl-1 br-1 bb-1">
                                                <span>昨收</span>
                                                <span class="am-align-right am-margin-0 am-text-danger"><?=$products -> dataAll -> close ?></span>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div>
                                <div class="bb-1 bt-1 am-padding-vertical-xs">
                                    <p class="am-btn am-btn-xs am-radius am-btn-warning" id="domestic">国内期货</p>
                                    <p class="am-btn am-btn-xs am-radius am-btn-default" id="abroad">国际期货</p>
                                </div>
                            </div>

                            <div class="am-padding-vertical-xs am-text-sm">
                                <div class="am-g domestic">
                                    <?php foreach ($domestic as $k): ?>
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-bottom-xs">
                                            <p class="am-text-warning cursP"><a href="<?= url(['tradebuy','id'=>$k->id]) ?>"><?= $k->name ?></a></p>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="am-g abroad" style="display:none;">
                                    <?php foreach ($abroad as $k): ?>
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-bottom-xs">
                                            <p class="am-text-warning cursP"><a href="<?= url(['tradebuy','id'=>$k->id]) ?>"><?= $k->name ?></a></p>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                            <div class="bb-1 am-padding-vertical-xs am-btn-group am-btn-group-justify">
                                <p class="am-btn am-btn-danger" style='width: 50%;float:left;'>持仓</p>
                                <p class="am-btn am-btn-default" style='width: 50%;float:left;'>结算</p>
                            </div>
                            <div class="am-padding-top-xl">
                                <div class="am-text-center am-padding-top-xl">
                                    <i class="am-icon am-icon-exclamation-circle am-icon-sm"></i><br>
                                    <p>暂无</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(function(){
                        $('#domestic').click(function(){
                            $('.domestic').show();
                            $('.abroad').hide();
                            $('#domestic').addClass('am-btn-warning');
                            $('#domestic').removeClass('am-btn-default');
                            $('#abroad').addClass('am-btn-default');
                            $('#abroad').removeClass('am-btn-warning');
                        });
                        $('#abroad').click(function(){
                            $('.domestic').hide();
                            $('.abroad').show();
                            $('#domestic').removeClass('am-btn-warning');
                            $('#domestic').addClass('am-btn-default');
                            $('#abroad').removeClass('am-btn-default');
                            $('#abroad').addClass('am-btn-warning');
                        });
                    })
                </script>

                <div class="am-padding-vertical-xs bb-1">
                    <div class="am-g">
                        <div class="am-u-sm-5 am-u-md-5 am-u-lg-5">
                            <p class="">
                                <span class="text-999">帐户实盘资金：</span>
                                <span><?=u() -> account - u() -> blocked_account ?></span>

                                <a href="<?= url(['user/usercharge']) ?>" style="color:red;">充值</a>
                            </p>
                        </div>
                        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 br-1">
                            <p class="tm-text-right">当前浮动盈亏 0</p>
                        </div>
                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-text-center">
<!--                            <p>本时段持仓时间至 <span class="am-text-danger">4:25</span></p>-->
                        </div>
                    </div>
                </div>

                <div class="am-padding-vertical-xs">
                    <div class="am-g bb-1">
                        <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 br-1">

                            <div class="am-g">
                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-top-sm">
                                    <p class="am-text-danger am-text-center">
                                        <span class="am-text-xl"><?=$products -> dataAll -> price ?></span>
                                        <span class="am-text-sm am-margin-horizontal-lg"><?=$products -> dataAll -> diff ?></span>
                                        <span class="am-text-sm"><?=$products -> dataAll -> diff_rate ?></span>
                                    </p>
                                </div>

<!--                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">-->

<!--                                    <div class="am-g">-->
<!--                                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">-->
<!--                                            <p>买量</p>-->
<!--                                        </div>-->
<!--                                        <div class="am-u-sm-9 am-u-md-9 am-u-lg-9">-->
<!--                                            <div class="am-progress am-margin-0">-->
<!--                                                <div class="am-progress-bar am-progress-bar-success" style="width: 40%">-->
<!--                                                    40%-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="am-g">-->
<!--                                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">-->
<!--                                            <p>卖量</p>-->
<!--                                        </div>-->
<!--                                        <div class="am-u-sm-9 am-u-md-9 am-u-lg-9">-->
<!--                                            <div class="am-progress am-margin-0">-->
<!--                                                <div class="am-progress-bar  am-progress-bar-danger" style="width: 33%">-->
<!--                                                    33%-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                </div>-->

                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                    <p class="am-padding-top-sm am-text-center" style="color:red;"><?=$products -> name ?> <?=$products -> identify ?></p>
                                </div>
                            </div>

                        </div>
                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-text-sm">

                            <div class="am-g bb-1 am-padding-bottom-xs">
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                                    <p class="am-text-danger">保证金冻结</p>
                                </div>
                                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                                    <p id="frozen">0</p>
                                </div>
                            </div>

                            <div class="am-g am-padding-vertical-xs">
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                                    <p class="am-text-danger">交易手续费</p>
                                </div>
                                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                                    <p id="charge">0</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="am-padding-bottom-xs bb-1">
                    <div class="am-g">
                        <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 br-1">

                            <div class="am-g">
                                <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-padding-top-sm">
                                    <p class="am-btn am-btn-danger am-radius am-btn-block am-btn-lg">
                                        <?=$products -> dataAll -> price ?> <br>
                                        买涨
                                    </p>
                                </div>
                                <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-padding-top-sm">
                                    <p class="am-btn am-btn-success am-radius am-btn-block am-btn-lg">
                                        <?=$products -> dataAll -> price ?> <br>
                                        买跌
                                    </p>
                                </div>
                                <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-padding-top-sm">
                                    <p class="am-btn am-btn-warning am-radius am-btn-block am-btn-lg">
                                        全部 <br>
                                        平仓
                                    </p>
                                </div>
                                <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-text-sm">

                                    <div class="am-g am-padding-bottom-xs">
                                        <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-0">
                                            <p class="am-text-danger">购买手数</p>
                                        </div>
                                        <div class="am-u-sm-7 am-u-md-7 am-u-lg-7 am-padding-left-0">
                                            <select name="" id="a1" class="am-block wid100 am-alert-secondary">
<!--                                                <option class="changehand" value="">请选择</option>-->
                                                <?php foreach($productInfo->priceExtend as $k => $v): ?>
                                                    <option class="changehand" value="<?=$v->hand?>"
                                                            nums="<?=$v->hand?>"
                                                            data-deposit="<?=$v->deposit ?>"
                                                            data-fee="<?=$v->fee ?>"
                                                            data-stop_profit_price="<?=$v->stop_profit_price?>"
                                                            data-stop_loss_price="<?=$v->stop_loss_price?>"
                                                            data-point_unit="<?=$v->point_unit?>"
                                                    >
                                                        <?=$v->hand?>手
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="am-g am-padding-bottom-xs">
                                        <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-0">
                                            <p class="am-text-danger">触发止损金额</p>
                                        </div>
                                        <div class="am-u-sm-7 am-u-md-7 am-u-lg-7 am-padding-left-0">
                                            <select name="" id="a2" class="am-block wid100 am-alert-secondary">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="am-g">
                                        <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-0">
                                            <p class="am-text-danger">触发止盈金额</p>
                                        </div>
                                        <div class="am-u-sm-7 am-u-md-7 am-u-lg-7 am-padding-left-0">
                                            <select name="" id="a3" class="am-block wid100 am-alert-secondary">
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <script>
                            $(function(){
                                var frozen = $("#a1  option:selected").data('deposit') * $("#a1  option:selected").val();
                                var charge = $("#a1  option:selected").data('fee');
                                $('#frozen').html(frozen);
                                $('#charge').html(charge);
                                $('#total').html(Number(frozen) + Number(charge));

                                var profit = $("#a1  option:selected").data('stop_profit_price');
                                var profit = profit.split(',');
                                for(var i=0;i<profit.length;i++){
                                    $('#a3').append('<option value="'+profit[i]+'">'+profit[i]+'</option>');
                                }

                                var loss = $("#a1  option:selected").data('stop_loss_price');
                                var loss = loss.split(',');
                                for(var i=0;i<loss.length;i++){
                                    $('#a2').append('<option value="'+loss[i]+'">-'+loss[i]+'</option>');
                                }

                                $('#a1').change(function(){
                                    $('#a2').html('');
                                    $('#a3').html('');
                                    $('#frozen').html('0');
                                    $('#charge').html('0');
                                    $('#total').html('0');

                                    if($(this).val()){
                                        var frozen = $(this).find("option:selected").data('deposit') * $(this).val();
                                        var charge = $(this).find("option:selected").data('fee');
                                        $('#frozen').html(frozen);
                                        $('#charge').html(charge);
                                        $('#total').html(Number(frozen) + Number(charge));

                                        var profit = $(this).find("option:selected").data('stop_profit_price');
                                        profit = profit.split(',');
                                        var profitoption = '';
                                        for(var i=0;i<profit.length;i++){
                                            profitoption='<option value="'+profit[i]+'">'+profit[i]+'</option>';
                                            $('#a3').append(profitoption);
                                        }

                                        var loss = $(this).find("option:selected").data('stop_loss_price');
                                        loss = loss.split(',');
                                        var lossoption = '';
                                        for(var i=0;i<loss.length;i++){
                                            lossoption='<option value="'+loss[i]+'">-'+loss[i]+'</option>';
                                            $('#a2').append(lossoption);
                                        }
                                    }
                                });
                            })
                        </script>

                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-text-sm">
                            <div class="am-g bb-1 am-padding-bottom-xs">
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                                    <p class="am-text-danger">汇率</p>
                                </div>
                                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                                    <p>暂无</p>
                                </div>
                            </div>
                            <div class="am-g bb-1 am-padding-bottom-xs">
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                                    <p class="am-text-danger">合计</p>
                                </div>
                                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                                    <p id="total">0</p>
                                </div>
                            </div>
                            <div class="am-g am-padding-top-xs">
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                                    <p class="am-text-danger"></p>
                                </div>
                                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</div>

<script>
    !function () {
        var tabs = $('.switchTab .am-u-sm-1');
        var pageOne = $('#switchPages .pageOne');
        pageOne.eq(0).show();
        tabs.on('click', function () {
            var index = $(this).index() - 1;
            var indexsw = $(this).index();
            tabs.find('p').removeClass('am-text-success');
            tabs.eq(index).find('p').addClass('am-text-success');
            pageOne.hide();
            pageOne.eq(index).show();

            switch (indexsw) {
                case 1:
                    page1.setOptions()
                    break;
                case 2:

                    var page2 = echarts.init(document.getElementById('page2'));
                    setTimeout(function () {
                        page2.setOption(optionPage2);
                    }, 500);

                    break;
                case 3:

                    var page3 = echarts.init(document.getElementById('page3'));
                    setTimeout(function () {
                        page3.setOption(optionPage3);
                    }, 500);

                    break;
                case 4:

                    var page4 = echarts.init(document.getElementById('page4'));
                    setTimeout(function () {
                        page4.setOption(optionPage4);
                    }, 500);

                    break;
                case 5:

                    var page5 = echarts.init(document.getElementById('page5'));
                    setTimeout(function () {
                        page5.setOption(optionPage5);
                    }, 500);

                    break;
                case 6:

                    var page6 = echarts.init(document.getElementById('page6'));
                    setTimeout(function () {
                        page6.setOption(optionPage6);
                    }, 500);

                    break;
                default:
                    break;
            }
        })
    }()
</script>
<script type="text/javascript">

    var data='';

    $.ajax({
        url:'get-data',
        type:'post',
        dataType: "json",
        data:{id:<?=$products -> id ?>},
        success:function(data){
            console.log(data);
            data=data;
        }
    });

    var page1 = echarts.init(document.getElementById('page1'));

    //数据
    var data = [100, 20, 80, 20, 70];
    //时间
    var date = ['07:00', '07:10', '07:20', '07:30', '07:40'];
    //标题
    var title = '自定义标题';

    var option = {
        tooltip: {
            trigger: 'axis',
            position: function (pt) {
                return [pt[0], '10%'];
            }
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: date
        },
        yAxis: {
            type: 'value',
            boundaryGap: [0, '100%']
        },
        dataZoom: [{
            type: 'inside',
            start: 0,
            end: 100
        }, {
            show: false,
            start: 0,
            end: 100,
            handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
            handleSize: '80%',
            handleStyle: {
                color: '#fff',
                shadowBlur: 3,
                shadowColor: 'rgba(0, 0, 0, 0.6)',
                shadowOffsetX: 2,
                shadowOffsetY: 2
            }
        }],
        series: [
            {
                name: title,
                type: 'line',
                smooth: true,
                symbol: 'none',
                sampling: 'average',
                itemStyle: {
                    normal: {
                        color: 'rgb(103,140,203)'
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: 'rgb(232,248,255)'
                        }, {
                            offset: 1,
                            color: 'rgb(255,255,255)'
                        }])
                    }
                },
                data: data
            }
        ]
    };

    page1.setOption(option);

</script>
<script>

    //数据
    var dataPage2 = [888, 20, 999, 20, 70];
    //时间
    var datePage2 = ['07:00', '07:10', '07:20', '07:30', '07:40'];
    //标题
    var titlePage2 = '自定义标题';

    var optionPage2 = {
        tooltip: {
            trigger: 'axis',
            position: function (pt) {
                return [pt[0], '10%'];
            }
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: datePage2
        },
        yAxis: {
            type: 'value',
            boundaryGap: [0, '100%']
        },
        dataZoom: [{
            type: 'inside',
            start: 0,
            end: 100
        }, {
            show: false,
            start: 0,
            end: 100,
            handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
            handleSize: '80%',
            handleStyle: {
                color: '#fff',
                shadowBlur: 3,
                shadowColor: 'rgba(0, 0, 0, 0.6)',
                shadowOffsetX: 2,
                shadowOffsetY: 2
            }
        }],
        series: [
            {
                name: titlePage2,
                type: 'line',
                smooth: true,
                symbol: 'none',
                sampling: 'average',
                itemStyle: {
                    normal: {
                        color: 'rgb(103,140,203)'
                    }
                },
                areaStyle: {
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: 'rgb(232,248,255)'
                        }, {
                            offset: 1,
                            color: 'rgb(255,255,255)'
                        }])
                    }
                },
                data: dataPage2
            }
        ]
    };

</script>
<script>

    var upColor = '#ec0000';
    var upBorderColor = '#8A0000';
    var downColor = '#00da3c';
    var downBorderColor = '#008F28';

    // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
    var datapage3 = splitData([
        ['2013/1/24', 2320.26, 2320.26, 2287.3, 2362.94],
        ['2013/1/25', 2300, 2291.3, 2288.26, 2308.38],
        ['2013/1/28', 2295.35, 2346.5, 2295.35, 2346.92],
        ['2013/1/29', 2347.22, 2358.98, 2337.35, 2363.8],
        ['2013/1/30', 2360.75, 2382.48, 2347.89, 2383.76],
        ['2013/1/31', 2383.43, 2385.42, 2371.23, 2391.82],
        ['2013/2/1', 2377.41, 2419.02, 2369.57, 2421.15],
        ['2013/2/4', 2425.92, 2428.15, 2417.58, 2440.38],
        ['2013/2/5', 2411, 2433.13, 2403.3, 2437.42],
        ['2013/2/6', 2432.68, 2434.48, 2427.7, 2441.73],
        ['2013/2/7', 2430.69, 2418.53, 2394.22, 2433.89],
        ['2013/2/8', 2416.62, 2432.4, 2414.4, 2443.03],
        ['2013/2/18', 2441.91, 2421.56, 2415.43, 2444.8],
        ['2013/2/19', 2420.26, 2382.91, 2373.53, 2427.07],
        ['2013/2/20', 2383.49, 2397.18, 2370.61, 2397.94],
        ['2013/2/21', 2378.82, 2325.95, 2309.17, 2378.82],
        ['2013/2/22', 2322.94, 2314.16, 2308.76, 2330.88],
        ['2013/2/25', 2320.62, 2325.82, 2315.01, 2338.78],
        ['2013/2/26', 2313.74, 2293.34, 2289.89, 2340.71],
        ['2013/2/27', 2297.77, 2313.22, 2292.03, 2324.63],
        ['2013/2/28', 2322.32, 2365.59, 2308.92, 2366.16],
        ['2013/3/1', 2364.54, 2359.51, 2330.86, 2369.65],
        ['2013/3/4', 2332.08, 2273.4, 2259.25, 2333.54],
        ['2013/3/5', 2274.81, 2326.31, 2270.1, 2328.14],
        ['2013/3/6', 2333.61, 2347.18, 2321.6, 2351.44],
        ['2013/3/7', 2340.44, 2324.29, 2304.27, 2352.02],
        ['2013/3/8', 2326.42, 2318.61, 2314.59, 2333.67],
        ['2013/3/11', 2314.68, 2310.59, 2296.58, 2320.96],
        ['2013/3/12', 2309.16, 2286.6, 2264.83, 2333.29],
        ['2013/3/13', 2282.17, 2263.97, 2253.25, 2286.33],
        ['2013/3/14', 2255.77, 2270.28, 2253.31, 2276.22],
        ['2013/3/15', 2269.31, 2278.4, 2250, 2312.08],
        ['2013/3/18', 2267.29, 2240.02, 2239.21, 2276.05],
        ['2013/3/19', 2244.26, 2257.43, 2232.02, 2261.31],
        ['2013/3/20', 2257.74, 2317.37, 2257.42, 2317.86],
        ['2013/3/21', 2318.21, 2324.24, 2311.6, 2330.81],
        ['2013/3/22', 2321.4, 2328.28, 2314.97, 2332],
        ['2013/3/25', 2334.74, 2326.72, 2319.91, 2344.89],
        ['2013/3/26', 2318.58, 2297.67, 2281.12, 2319.99],
        ['2013/3/27', 2299.38, 2301.26, 2289, 2323.48],
        ['2013/3/28', 2273.55, 2236.3, 2232.91, 2273.55],
        ['2013/3/29', 2238.49, 2236.62, 2228.81, 2246.87],
        ['2013/4/1', 2229.46, 2234.4, 2227.31, 2243.95],
        ['2013/4/2', 2234.9, 2227.74, 2220.44, 2253.42],
        ['2013/4/3', 2232.69, 2225.29, 2217.25, 2241.34],
        ['2013/4/8', 2196.24, 2211.59, 2180.67, 2212.59],
        ['2013/4/9', 2215.47, 2225.77, 2215.47, 2234.73],
        ['2013/4/10', 2224.93, 2226.13, 2212.56, 2233.04],
        ['2013/4/11', 2236.98, 2219.55, 2217.26, 2242.48],
        ['2013/4/12', 2218.09, 2206.78, 2204.44, 2226.26],
        ['2013/4/15', 2199.91, 2181.94, 2177.39, 2204.99],
        ['2013/4/16', 2169.63, 2194.85, 2165.78, 2196.43],
        ['2013/4/17', 2195.03, 2193.8, 2178.47, 2197.51],
        ['2013/4/18', 2181.82, 2197.6, 2175.44, 2206.03],
        ['2013/4/19', 2201.12, 2244.64, 2200.58, 2250.11],
        ['2013/4/22', 2236.4, 2242.17, 2232.26, 2245.12],
        ['2013/4/23', 2242.62, 2184.54, 2182.81, 2242.62],
        ['2013/4/24', 2187.35, 2218.32, 2184.11, 2226.12],
        ['2013/4/25', 2213.19, 2199.31, 2191.85, 2224.63],
        ['2013/4/26', 2203.89, 2177.91, 2173.86, 2210.58],
        ['2013/5/2', 2170.78, 2174.12, 2161.14, 2179.65],
        ['2013/5/3', 2179.05, 2205.5, 2179.05, 2222.81],
        ['2013/5/6', 2212.5, 2231.17, 2212.5, 2236.07],
        ['2013/5/7', 2227.86, 2235.57, 2219.44, 2240.26],
        ['2013/5/8', 2242.39, 2246.3, 2235.42, 2255.21],
        ['2013/5/9', 2246.96, 2232.97, 2221.38, 2247.86],
        ['2013/5/10', 2228.82, 2246.83, 2225.81, 2247.67],
        ['2013/5/13', 2247.68, 2241.92, 2231.36, 2250.85],
        ['2013/5/14', 2238.9, 2217.01, 2205.87, 2239.93],
        ['2013/5/15', 2217.09, 2224.8, 2213.58, 2225.19],
        ['2013/5/16', 2221.34, 2251.81, 2210.77, 2252.87],
        ['2013/5/17', 2249.81, 2282.87, 2248.41, 2288.09],
        ['2013/5/20', 2286.33, 2299.99, 2281.9, 2309.39],
        ['2013/5/21', 2297.11, 2305.11, 2290.12, 2305.3],
        ['2013/5/22', 2303.75, 2302.4, 2292.43, 2314.18],
        ['2013/5/23', 2293.81, 2275.67, 2274.1, 2304.95],
        ['2013/5/24', 2281.45, 2288.53, 2270.25, 2292.59],
        ['2013/5/27', 2286.66, 2293.08, 2283.94, 2301.7],
        ['2013/5/28', 2293.4, 2321.32, 2281.47, 2322.1],
        ['2013/5/29', 2323.54, 2324.02, 2321.17, 2334.33],
        ['2013/5/30', 2316.25, 2317.75, 2310.49, 2325.72],
        ['2013/5/31', 2320.74, 2300.59, 2299.37, 2325.53],
        ['2013/6/3', 2300.21, 2299.25, 2294.11, 2313.43],
        ['2013/6/4', 2297.1, 2272.42, 2264.76, 2297.1],
        ['2013/6/5', 2270.71, 2270.93, 2260.87, 2276.86],
        ['2013/6/6', 2264.43, 2242.11, 2240.07, 2266.69],
        ['2013/6/7', 2242.26, 2210.9, 2205.07, 2250.63],
        ['2013/6/13', 2190.1, 2148.35, 2126.22, 2190.1]
    ]);

    function splitData(rawData) {
        var categoryData = [];
        var values = []
        for (var i = 0; i < rawData.length; i++) {
            categoryData.push(rawData[i].splice(0, 1)[0]);
            values.push(rawData[i])
        }
        return {
            categoryData: categoryData,
            values: values
        };
    }

    function calculateMA(dayCount) {
        var result = [];
        for (var i = 0, len = datapage3.values.length; i < len; i++) {
            if (i < dayCount) {
                result.push('-');
                continue;
            }
            var sum = 0;
            for (var j = 0; j < dayCount; j++) {
                sum += datapage3.values[i - j][1];
            }
            result.push(sum / dayCount);
        }
        return result;
    }

    var optionPage3 = {
        tooltip: {               //提示框，鼠标悬浮交互时的信息提示。
            trigger: "axis",
//触发类型，默认值为item 可选值为 item，axis  为item只会显示改点的数据，为axis时会显示该列下所有坐标轴对应的数据

            formatter: function (params) { //内容格式器：{string}（Template） | {Function}，支持异步回调见表格下方
                var res = params[0].name;
                res += '<br>开盘:' + params[0].value[0] + "<br>最高:" + params[0].value[3];
                res += '<br>收盘:' + params[0].value[1] + "<br>最低:" + params[0].value[2];
                return res;
            }

        },

        grid: {
            left: '10%',
            right: '10%',
            bottom: '15%'
        },
        xAxis: {
            type: 'category',
            data: datapage3.categoryData,
            scale: true,
            boundaryGap: true,
            axisLine: {onZero: true},
            splitLine: {show: true},
            splitNumber: 20,
            min: 'dataMin',
            max: 'dataMax'
        },
        yAxis: {
            scale: true,
            splitArea: {
                show: true
            }
        },
        dataZoom: [
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                type: 'slider',
                y: '90%',
                start: 50,
                end: 100
            }
        ],
        series: [
            {
                name: '日K',
                type: 'candlestick',
                data: datapage3.values,
                itemStyle: {
                    normal: {
                        color: upColor,
                        color0: downColor,
                        borderColor: upBorderColor,
                        borderColor0: downBorderColor
                    }
                },
            },
            {
                name: 'MA5',
                type: 'line',
                data: calculateMA(5),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA10',
                type: 'line',
                data: calculateMA(10),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA20',
                type: 'line',
                data: calculateMA(20),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA30',
                type: 'line',
                data: calculateMA(30),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },

        ]
    };

</script>
<script>

    var upColor = '#ec0000';
    var upBorderColor = '#8A0000';
    var downColor = '#00da3c';
    var downBorderColor = '#008F28';

    // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
    var datapage4 = splitData([
        ['2013/1/24', 2320.26, 2320.26, 2287.3, 2362.94],
        ['2013/1/25', 2300, 2291.3, 2288.26, 2308.38],
        ['2013/1/28', 2295.35, 2346.5, 2295.35, 2346.92],
        ['2013/1/29', 2347.22, 2358.98, 2337.35, 2363.8],
        ['2013/1/30', 2360.75, 2382.48, 2347.89, 2383.76],
        ['2013/1/31', 2383.43, 2385.42, 2371.23, 2391.82],
        ['2013/2/1', 2377.41, 2419.02, 2369.57, 2421.15],
        ['2013/2/4', 2425.92, 2428.15, 2417.58, 2440.38],
        ['2013/2/5', 2411, 2433.13, 2403.3, 2437.42],
        ['2013/2/6', 2432.68, 2434.48, 2427.7, 2441.73],
        ['2013/2/7', 2430.69, 2418.53, 2394.22, 2433.89],
        ['2013/2/8', 2416.62, 2432.4, 2414.4, 2443.03],
        ['2013/2/18', 2441.91, 2421.56, 2415.43, 2444.8],
        ['2013/2/19', 2420.26, 2382.91, 2373.53, 2427.07],
        ['2013/2/20', 2383.49, 2397.18, 2370.61, 2397.94],
        ['2013/2/21', 2378.82, 2325.95, 2309.17, 2378.82],
        ['2013/2/22', 2322.94, 2314.16, 2308.76, 2330.88],
        ['2013/2/25', 2320.62, 2325.82, 2315.01, 2338.78],
        ['2013/2/26', 2313.74, 2293.34, 2289.89, 2340.71],
        ['2013/2/27', 2297.77, 2313.22, 2292.03, 2324.63],
        ['2013/2/28', 2322.32, 2365.59, 2308.92, 2366.16],
        ['2013/3/1', 2364.54, 2359.51, 2330.86, 2369.65],
        ['2013/3/4', 2332.08, 2273.4, 2259.25, 2333.54],
        ['2013/3/5', 2274.81, 2326.31, 2270.1, 2328.14],
        ['2013/3/6', 2333.61, 2347.18, 2321.6, 2351.44],
        ['2013/3/7', 2340.44, 2324.29, 2304.27, 2352.02],
        ['2013/3/8', 2326.42, 2318.61, 2314.59, 2333.67],
        ['2013/3/11', 2314.68, 2310.59, 2296.58, 2320.96],
        ['2013/3/12', 2309.16, 2286.6, 2264.83, 2333.29],
        ['2013/3/13', 2282.17, 2263.97, 2253.25, 2286.33],
        ['2013/3/14', 2255.77, 2270.28, 2253.31, 2276.22],
        ['2013/3/15', 2269.31, 2278.4, 2250, 2312.08],
        ['2013/3/18', 2267.29, 2240.02, 2239.21, 2276.05],
        ['2013/3/19', 2244.26, 2257.43, 2232.02, 2261.31],
        ['2013/3/20', 2257.74, 2317.37, 2257.42, 2317.86],
        ['2013/3/21', 2318.21, 2324.24, 2311.6, 2330.81],
        ['2013/3/22', 2321.4, 2328.28, 2314.97, 2332],
        ['2013/3/25', 2334.74, 2326.72, 2319.91, 2344.89],
        ['2013/3/26', 2318.58, 2297.67, 2281.12, 2319.99],
        ['2013/3/27', 2299.38, 2301.26, 2289, 2323.48],
        ['2013/3/28', 2273.55, 2236.3, 2232.91, 2273.55],
        ['2013/3/29', 2238.49, 2236.62, 2228.81, 2246.87],
        ['2013/4/1', 2229.46, 2234.4, 2227.31, 2243.95],
        ['2013/4/2', 2234.9, 2227.74, 2220.44, 2253.42],
        ['2013/4/3', 2232.69, 2225.29, 2217.25, 2241.34],
        ['2013/4/8', 2196.24, 2211.59, 2180.67, 2212.59],
        ['2013/4/9', 2215.47, 2225.77, 2215.47, 2234.73],
        ['2013/4/10', 2224.93, 2226.13, 2212.56, 2233.04],
        ['2013/4/11', 2236.98, 2219.55, 2217.26, 2242.48],
        ['2013/4/12', 2218.09, 2206.78, 2204.44, 2226.26],
        ['2013/4/15', 2199.91, 2181.94, 2177.39, 2204.99],
        ['2013/4/16', 2169.63, 2194.85, 2165.78, 2196.43],
        ['2013/4/17', 2195.03, 2193.8, 2178.47, 2197.51],
        ['2013/4/18', 2181.82, 2197.6, 2175.44, 2206.03],
        ['2013/4/19', 2201.12, 2244.64, 2200.58, 2250.11],
        ['2013/4/22', 2236.4, 2242.17, 2232.26, 2245.12],
        ['2013/4/23', 2242.62, 2184.54, 2182.81, 2242.62],
        ['2013/4/24', 2187.35, 2218.32, 2184.11, 2226.12],
        ['2013/4/25', 2213.19, 2199.31, 2191.85, 2224.63],
        ['2013/4/26', 2203.89, 2177.91, 2173.86, 2210.58],
        ['2013/5/2', 2170.78, 2174.12, 2161.14, 2179.65],
        ['2013/5/3', 2179.05, 2205.5, 2179.05, 2222.81],
        ['2013/5/6', 2212.5, 2231.17, 2212.5, 2236.07],
        ['2013/5/7', 2227.86, 2235.57, 2219.44, 2240.26],
        ['2013/5/8', 2242.39, 2246.3, 2235.42, 2255.21],
        ['2013/5/9', 2246.96, 2232.97, 2221.38, 2247.86],
        ['2013/5/10', 2228.82, 2246.83, 2225.81, 2247.67],
        ['2013/5/13', 2247.68, 2241.92, 2231.36, 2250.85],
        ['2013/5/14', 2238.9, 2217.01, 2205.87, 2239.93],
        ['2013/5/15', 2217.09, 2224.8, 2213.58, 2225.19],
        ['2013/5/16', 2221.34, 2251.81, 2210.77, 2252.87],
        ['2013/5/17', 2249.81, 2282.87, 2248.41, 2288.09],
        ['2013/5/20', 2286.33, 2299.99, 2281.9, 2309.39],
        ['2013/5/21', 2297.11, 2305.11, 2290.12, 2305.3],
        ['2013/5/22', 2303.75, 2302.4, 2292.43, 2314.18],
        ['2013/5/23', 2293.81, 2275.67, 2274.1, 2304.95],
        ['2013/5/24', 2281.45, 2288.53, 2270.25, 2292.59],
        ['2013/5/27', 2286.66, 2293.08, 2283.94, 2301.7],
        ['2013/5/28', 2293.4, 2321.32, 2281.47, 2322.1],
        ['2013/5/29', 2323.54, 2324.02, 2321.17, 2334.33],
        ['2013/5/30', 2316.25, 2317.75, 2310.49, 2325.72],
        ['2013/5/31', 2320.74, 2300.59, 2299.37, 2325.53],
        ['2013/6/3', 2300.21, 2299.25, 2294.11, 2313.43],
        ['2013/6/4', 2297.1, 2272.42, 2264.76, 2297.1],
        ['2013/6/5', 2270.71, 2270.93, 2260.87, 2276.86],
        ['2013/6/6', 2264.43, 2242.11, 2240.07, 2266.69],
        ['2013/6/7', 2242.26, 2210.9, 2205.07, 2250.63],
        ['2013/6/13', 2190.1, 2148.35, 2126.22, 2190.1]
    ]);

    function splitData(rawData) {
        var categoryData = [];
        var values = []
        for (var i = 0; i < rawData.length; i++) {
            categoryData.push(rawData[i].splice(0, 1)[0]);
            values.push(rawData[i])
        }
        return {
            categoryData: categoryData,
            values: values
        };
    }

    function calculateMA(dayCount) {
        var result = [];
        for (var i = 0, len = datapage4.values.length; i < len; i++) {
            if (i < dayCount) {
                result.push('-');
                continue;
            }
            var sum = 0;
            for (var j = 0; j < dayCount; j++) {
                sum += datapage4.values[i - j][1];
            }
            result.push(sum / dayCount);
        }
        return result;
    }

    var optionPage4 = {
        tooltip: {               //提示框，鼠标悬浮交互时的信息提示。
            trigger: "axis",
//触发类型，默认值为item 可选值为 item，axis  为item只会显示改点的数据，为axis时会显示该列下所有坐标轴对应的数据

            formatter: function (params) { //内容格式器：{string}（Template） | {Function}，支持异步回调见表格下方
                var res = params[0].name;
                res += '<br>开盘:' + params[0].value[0] + "<br>最高:" + params[0].value[3];
                res += '<br>收盘:' + params[0].value[1] + "<br>最低:" + params[0].value[2];
                return res;
            }

        },

        grid: {
            left: '10%',
            right: '10%',
            bottom: '15%'
        },
        xAxis: {
            type: 'category',
            data: datapage4.categoryData,
            scale: true,
            boundaryGap: true,
            axisLine: {onZero: true},
            splitLine: {show: true},
            splitNumber: 20,
            min: 'dataMin',
            max: 'dataMax'
        },
        yAxis: {
            scale: true,
            splitArea: {
                show: true
            }
        },
        dataZoom: [
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                type: 'slider',
                y: '90%',
                start: 50,
                end: 100
            }
        ],
        series: [
            {
                name: '日K',
                type: 'candlestick',
                data: datapage4.values,
                itemStyle: {
                    normal: {
                        color: upColor,
                        color0: downColor,
                        borderColor: upBorderColor,
                        borderColor0: downBorderColor
                    }
                },
            },
            {
                name: 'MA5',
                type: 'line',
                data: calculateMA(5),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA10',
                type: 'line',
                data: calculateMA(10),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA20',
                type: 'line',
                data: calculateMA(20),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA30',
                type: 'line',
                data: calculateMA(30),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },

        ]
    };

</script>
<script>

    var upColor = '#ec0000';
    var upBorderColor = '#8A0000';
    var downColor = '#00da3c';
    var downBorderColor = '#008F28';

    // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
    var datapage5 = splitData([
        ['2013/1/24', 2320.26, 2320.26, 2287.3, 2362.94],
        ['2013/1/25', 2300, 2291.3, 2288.26, 2308.38],
        ['2013/1/28', 2295.35, 2346.5, 2295.35, 2346.92],
        ['2013/1/29', 2347.22, 2358.98, 2337.35, 2363.8],
        ['2013/1/30', 2360.75, 2382.48, 2347.89, 2383.76],
        ['2013/1/31', 2383.43, 2385.42, 2371.23, 2391.82],
        ['2013/2/1', 2377.41, 2419.02, 2369.57, 2421.15],
        ['2013/2/4', 2425.92, 2428.15, 2417.58, 2440.38],
        ['2013/2/5', 2411, 2433.13, 2403.3, 2437.42],
        ['2013/2/6', 2432.68, 2434.48, 2427.7, 2441.73],
        ['2013/2/7', 2430.69, 2418.53, 2394.22, 2433.89],
        ['2013/2/8', 2416.62, 2432.4, 2414.4, 2443.03],
        ['2013/2/18', 2441.91, 2421.56, 2415.43, 2444.8],
        ['2013/2/19', 2420.26, 2382.91, 2373.53, 2427.07],
        ['2013/2/20', 2383.49, 2397.18, 2370.61, 2397.94],
        ['2013/2/21', 2378.82, 2325.95, 2309.17, 2378.82],
        ['2013/2/22', 2322.94, 2314.16, 2308.76, 2330.88],
        ['2013/2/25', 2320.62, 2325.82, 2315.01, 2338.78],
        ['2013/2/26', 2313.74, 2293.34, 2289.89, 2340.71],
        ['2013/2/27', 2297.77, 2313.22, 2292.03, 2324.63],
        ['2013/2/28', 2322.32, 2365.59, 2308.92, 2366.16],
        ['2013/3/1', 2364.54, 2359.51, 2330.86, 2369.65],
        ['2013/3/4', 2332.08, 2273.4, 2259.25, 2333.54],
        ['2013/3/5', 2274.81, 2326.31, 2270.1, 2328.14],
        ['2013/3/6', 2333.61, 2347.18, 2321.6, 2351.44],
        ['2013/3/7', 2340.44, 2324.29, 2304.27, 2352.02],
        ['2013/3/8', 2326.42, 2318.61, 2314.59, 2333.67],
        ['2013/3/11', 2314.68, 2310.59, 2296.58, 2320.96],
        ['2013/3/12', 2309.16, 2286.6, 2264.83, 2333.29],
        ['2013/3/13', 2282.17, 2263.97, 2253.25, 2286.33],
        ['2013/3/14', 2255.77, 2270.28, 2253.31, 2276.22],
        ['2013/3/15', 2269.31, 2278.4, 2250, 2312.08],
        ['2013/3/18', 2267.29, 2240.02, 2239.21, 2276.05],
        ['2013/3/19', 2244.26, 2257.43, 2232.02, 2261.31],
        ['2013/3/20', 2257.74, 2317.37, 2257.42, 2317.86],
        ['2013/3/21', 2318.21, 2324.24, 2311.6, 2330.81],
        ['2013/3/22', 2321.4, 2328.28, 2314.97, 2332],
        ['2013/3/25', 2334.74, 2326.72, 2319.91, 2344.89],
        ['2013/3/26', 2318.58, 2297.67, 2281.12, 2319.99],
        ['2013/3/27', 2299.38, 2301.26, 2289, 2323.48],
        ['2013/3/28', 2273.55, 2236.3, 2232.91, 2273.55],
        ['2013/3/29', 2238.49, 2236.62, 2228.81, 2246.87],
        ['2013/4/1', 2229.46, 2234.4, 2227.31, 2243.95],
        ['2013/4/2', 2234.9, 2227.74, 2220.44, 2253.42],
        ['2013/4/3', 2232.69, 2225.29, 2217.25, 2241.34],
        ['2013/4/8', 2196.24, 2211.59, 2180.67, 2212.59],
        ['2013/4/9', 2215.47, 2225.77, 2215.47, 2234.73],
        ['2013/4/10', 2224.93, 2226.13, 2212.56, 2233.04],
        ['2013/4/11', 2236.98, 2219.55, 2217.26, 2242.48],
        ['2013/4/12', 2218.09, 2206.78, 2204.44, 2226.26],
        ['2013/4/15', 2199.91, 2181.94, 2177.39, 2204.99],
        ['2013/4/16', 2169.63, 2194.85, 2165.78, 2196.43],
        ['2013/4/17', 2195.03, 2193.8, 2178.47, 2197.51],
        ['2013/4/18', 2181.82, 2197.6, 2175.44, 2206.03],
        ['2013/4/19', 2201.12, 2244.64, 2200.58, 2250.11],
        ['2013/4/22', 2236.4, 2242.17, 2232.26, 2245.12],
        ['2013/4/23', 2242.62, 2184.54, 2182.81, 2242.62],
        ['2013/4/24', 2187.35, 2218.32, 2184.11, 2226.12],
        ['2013/4/25', 2213.19, 2199.31, 2191.85, 2224.63],
        ['2013/4/26', 2203.89, 2177.91, 2173.86, 2210.58],
        ['2013/5/2', 2170.78, 2174.12, 2161.14, 2179.65],
        ['2013/5/3', 2179.05, 2205.5, 2179.05, 2222.81],
        ['2013/5/6', 2212.5, 2231.17, 2212.5, 2236.07],
        ['2013/5/7', 2227.86, 2235.57, 2219.44, 2240.26],
        ['2013/5/8', 2242.39, 2246.3, 2235.42, 2255.21],
        ['2013/5/9', 2246.96, 2232.97, 2221.38, 2247.86],
        ['2013/5/10', 2228.82, 2246.83, 2225.81, 2247.67],
        ['2013/5/13', 2247.68, 2241.92, 2231.36, 2250.85],
        ['2013/5/14', 2238.9, 2217.01, 2205.87, 2239.93],
        ['2013/5/15', 2217.09, 2224.8, 2213.58, 2225.19],
        ['2013/5/16', 2221.34, 2251.81, 2210.77, 2252.87],
        ['2013/5/17', 2249.81, 2282.87, 2248.41, 2288.09],
        ['2013/5/20', 2286.33, 2299.99, 2281.9, 2309.39],
        ['2013/5/21', 2297.11, 2305.11, 2290.12, 2305.3],
        ['2013/5/22', 2303.75, 2302.4, 2292.43, 2314.18],
        ['2013/5/23', 2293.81, 2275.67, 2274.1, 2304.95],
        ['2013/5/24', 2281.45, 2288.53, 2270.25, 2292.59],
        ['2013/5/27', 2286.66, 2293.08, 2283.94, 2301.7],
        ['2013/5/28', 2293.4, 2321.32, 2281.47, 2322.1],
        ['2013/5/29', 2323.54, 2324.02, 2321.17, 2334.33],
        ['2013/5/30', 2316.25, 2317.75, 2310.49, 2325.72],
        ['2013/5/31', 2320.74, 2300.59, 2299.37, 2325.53],
        ['2013/6/3', 2300.21, 2299.25, 2294.11, 2313.43],
        ['2013/6/4', 2297.1, 2272.42, 2264.76, 2297.1],
        ['2013/6/5', 2270.71, 2270.93, 2260.87, 2276.86],
        ['2013/6/6', 2264.43, 2242.11, 2240.07, 2266.69],
        ['2013/6/7', 2242.26, 2210.9, 2205.07, 2250.63],
        ['2013/6/13', 2190.1, 2148.35, 2126.22, 2190.1]
    ]);

    function splitData(rawData) {
        var categoryData = [];
        var values = []
        for (var i = 0; i < rawData.length; i++) {
            categoryData.push(rawData[i].splice(0, 1)[0]);
            values.push(rawData[i])
        }
        return {
            categoryData: categoryData,
            values: values
        };
    }

    function calculateMA(dayCount) {
        var result = [];
        for (var i = 0, len = datapage5.values.length; i < len; i++) {
            if (i < dayCount) {
                result.push('-');
                continue;
            }
            var sum = 0;
            for (var j = 0; j < dayCount; j++) {
                sum += datapage5.values[i - j][1];
            }
            result.push(sum / dayCount);
        }
        return result;
    }

    var optionPage5 = {
        tooltip: {               //提示框，鼠标悬浮交互时的信息提示。
            trigger: "axis",
//触发类型，默认值为item 可选值为 item，axis  为item只会显示改点的数据，为axis时会显示该列下所有坐标轴对应的数据

            formatter: function (params) { //内容格式器：{string}（Template） | {Function}，支持异步回调见表格下方
                var res = params[0].name;
                res += '<br>开盘:' + params[0].value[0] + "<br>最高:" + params[0].value[3];
                res += '<br>收盘:' + params[0].value[1] + "<br>最低:" + params[0].value[2];
                return res;
            }

        },
        grid: {
            left: '10%',
            right: '10%',
            bottom: '15%'
        },
        xAxis: {
            type: 'category',
            data: datapage5.categoryData,
            scale: true,
            boundaryGap: true,
            axisLine: {onZero: true},
            splitLine: {show: true},
            splitNumber: 20,
            min: 'dataMin',
            max: 'dataMax'
        },
        yAxis: {
            scale: true,
            splitArea: {
                show: true
            }
        },
        dataZoom: [
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                type: 'slider',
                y: '90%',
                start: 50,
                end: 100
            }
        ],
        series: [
            {
                name: '日K',
                type: 'candlestick',
                data: datapage5.values,
                itemStyle: {
                    normal: {
                        color: upColor,
                        color0: downColor,
                        borderColor: upBorderColor,
                        borderColor0: downBorderColor
                    }
                },
            },
            {
                name: 'MA5',
                type: 'line',
                data: calculateMA(5),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA10',
                type: 'line',
                data: calculateMA(10),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA20',
                type: 'line',
                data: calculateMA(20),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA30',
                type: 'line',
                data: calculateMA(30),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },

        ]
    };

</script>
<script>

    var upColor = '#ec0000';
    var upBorderColor = '#8A0000';
    var downColor = '#00da3c';
    var downBorderColor = '#008F28';

    // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
    var datapage6 = splitData([
        ['2013/1/24', 2320.26, 2320.26, 2287.3, 2362.94],
        ['2013/1/25', 2300, 2291.3, 2288.26, 2308.38],
        ['2013/1/28', 2295.35, 2346.5, 2295.35, 2346.92],
        ['2013/1/29', 2347.22, 2358.98, 2337.35, 2363.8],
        ['2013/1/30', 2360.75, 2382.48, 2347.89, 2383.76],
        ['2013/1/31', 2383.43, 2385.42, 2371.23, 2391.82],
        ['2013/2/1', 2377.41, 2419.02, 2369.57, 2421.15],
        ['2013/2/4', 2425.92, 2428.15, 2417.58, 2440.38],
        ['2013/2/5', 2411, 2433.13, 2403.3, 2437.42],
        ['2013/2/6', 2432.68, 2434.48, 2427.7, 2441.73],
        ['2013/2/7', 2430.69, 2418.53, 2394.22, 2433.89],
        ['2013/2/8', 2416.62, 2432.4, 2414.4, 2443.03],
        ['2013/2/18', 2441.91, 2421.56, 2415.43, 2444.8],
        ['2013/2/19', 2420.26, 2382.91, 2373.53, 2427.07],
        ['2013/2/20', 2383.49, 2397.18, 2370.61, 2397.94],
        ['2013/2/21', 2378.82, 2325.95, 2309.17, 2378.82],
        ['2013/2/22', 2322.94, 2314.16, 2308.76, 2330.88],
        ['2013/2/25', 2320.62, 2325.82, 2315.01, 2338.78],
        ['2013/2/26', 2313.74, 2293.34, 2289.89, 2340.71],
        ['2013/2/27', 2297.77, 2313.22, 2292.03, 2324.63],
        ['2013/2/28', 2322.32, 2365.59, 2308.92, 2366.16],
        ['2013/3/1', 2364.54, 2359.51, 2330.86, 2369.65],
        ['2013/3/4', 2332.08, 2273.4, 2259.25, 2333.54],
        ['2013/3/5', 2274.81, 2326.31, 2270.1, 2328.14],
        ['2013/3/6', 2333.61, 2347.18, 2321.6, 2351.44],
        ['2013/3/7', 2340.44, 2324.29, 2304.27, 2352.02],
        ['2013/3/8', 2326.42, 2318.61, 2314.59, 2333.67],
        ['2013/3/11', 2314.68, 2310.59, 2296.58, 2320.96],
        ['2013/3/12', 2309.16, 2286.6, 2264.83, 2333.29],
        ['2013/3/13', 2282.17, 2263.97, 2253.25, 2286.33],
        ['2013/3/14', 2255.77, 2270.28, 2253.31, 2276.22],
        ['2013/3/15', 2269.31, 2278.4, 2250, 2312.08],
        ['2013/3/18', 2267.29, 2240.02, 2239.21, 2276.05],
        ['2013/3/19', 2244.26, 2257.43, 2232.02, 2261.31],
        ['2013/3/20', 2257.74, 2317.37, 2257.42, 2317.86],
        ['2013/3/21', 2318.21, 2324.24, 2311.6, 2330.81],
        ['2013/3/22', 2321.4, 2328.28, 2314.97, 2332],
        ['2013/3/25', 2334.74, 2326.72, 2319.91, 2344.89],
        ['2013/3/26', 2318.58, 2297.67, 2281.12, 2319.99],
        ['2013/3/27', 2299.38, 2301.26, 2289, 2323.48],
        ['2013/3/28', 2273.55, 2236.3, 2232.91, 2273.55],
        ['2013/3/29', 2238.49, 2236.62, 2228.81, 2246.87],
        ['2013/4/1', 2229.46, 2234.4, 2227.31, 2243.95],
        ['2013/4/2', 2234.9, 2227.74, 2220.44, 2253.42],
        ['2013/4/3', 2232.69, 2225.29, 2217.25, 2241.34],
        ['2013/4/8', 2196.24, 2211.59, 2180.67, 2212.59],
        ['2013/4/9', 2215.47, 2225.77, 2215.47, 2234.73],
        ['2013/4/10', 2224.93, 2226.13, 2212.56, 2233.04],
        ['2013/4/11', 2236.98, 2219.55, 2217.26, 2242.48],
        ['2013/4/12', 2218.09, 2206.78, 2204.44, 2226.26],
        ['2013/4/15', 2199.91, 2181.94, 2177.39, 2204.99],
        ['2013/4/16', 2169.63, 2194.85, 2165.78, 2196.43],
        ['2013/4/17', 2195.03, 2193.8, 2178.47, 2197.51],
        ['2013/4/18', 2181.82, 2197.6, 2175.44, 2206.03],
        ['2013/4/19', 2201.12, 2244.64, 2200.58, 2250.11],
        ['2013/4/22', 2236.4, 2242.17, 2232.26, 2245.12],
        ['2013/4/23', 2242.62, 2184.54, 2182.81, 2242.62],
        ['2013/4/24', 2187.35, 2218.32, 2184.11, 2226.12],
        ['2013/4/25', 2213.19, 2199.31, 2191.85, 2224.63],
        ['2013/4/26', 2203.89, 2177.91, 2173.86, 2210.58],
        ['2013/5/2', 2170.78, 2174.12, 2161.14, 2179.65],
        ['2013/5/3', 2179.05, 2205.5, 2179.05, 2222.81],
        ['2013/5/6', 2212.5, 2231.17, 2212.5, 2236.07],
        ['2013/5/7', 2227.86, 2235.57, 2219.44, 2240.26],
        ['2013/5/8', 2242.39, 2246.3, 2235.42, 2255.21],
        ['2013/5/9', 2246.96, 2232.97, 2221.38, 2247.86],
        ['2013/5/10', 2228.82, 2246.83, 2225.81, 2247.67],
        ['2013/5/13', 2247.68, 2241.92, 2231.36, 2250.85],
        ['2013/5/14', 2238.9, 2217.01, 2205.87, 2239.93],
        ['2013/5/15', 2217.09, 2224.8, 2213.58, 2225.19],
        ['2013/5/16', 2221.34, 2251.81, 2210.77, 2252.87],
        ['2013/5/17', 2249.81, 2282.87, 2248.41, 2288.09],
        ['2013/5/20', 2286.33, 2299.99, 2281.9, 2309.39],
        ['2013/5/21', 2297.11, 2305.11, 2290.12, 2305.3],
        ['2013/5/22', 2303.75, 2302.4, 2292.43, 2314.18],
        ['2013/5/23', 2293.81, 2275.67, 2274.1, 2304.95],
        ['2013/5/24', 2281.45, 2288.53, 2270.25, 2292.59],
        ['2013/5/27', 2286.66, 2293.08, 2283.94, 2301.7],
        ['2013/5/28', 2293.4, 2321.32, 2281.47, 2322.1],
        ['2013/5/29', 2323.54, 2324.02, 2321.17, 2334.33],
        ['2013/5/30', 2316.25, 2317.75, 2310.49, 2325.72],
        ['2013/5/31', 2320.74, 2300.59, 2299.37, 2325.53],
        ['2013/6/3', 2300.21, 2299.25, 2294.11, 2313.43],
        ['2013/6/4', 2297.1, 2272.42, 2264.76, 2297.1],
        ['2013/6/5', 2270.71, 2270.93, 2260.87, 2276.86],
        ['2013/6/6', 2264.43, 2242.11, 2240.07, 2266.69],
        ['2013/6/7', 2242.26, 2210.9, 2205.07, 2250.63],
        ['2013/6/13', 2190.1, 2148.35, 2126.22, 2190.1]
    ]);

    function splitData(rawData) {
        var categoryData = [];
        var values = []
        for (var i = 0; i < rawData.length; i++) {
            categoryData.push(rawData[i].splice(0, 1)[0]);
            values.push(rawData[i])
        }
        return {
            categoryData: categoryData,
            values: values
        };
    }

    function calculateMA(dayCount) {
        var result = [];
        for (var i = 0, len = datapage6.values.length; i < len; i++) {
            if (i < dayCount) {
                result.push('-');
                continue;
            }
            var sum = 0;
            for (var j = 0; j < dayCount; j++) {
                sum += datapage6.values[i - j][1];
            }
            result.push(sum / dayCount);
        }
        return result;
    }

    var optionPage6 = {
        tooltip: {               //提示框，鼠标悬浮交互时的信息提示。
            trigger: "axis",
//触发类型，默认值为item 可选值为 item，axis  为item只会显示改点的数据，为axis时会显示该列下所有坐标轴对应的数据

            formatter: function (params) { //内容格式器：{string}（Template） | {Function}，支持异步回调见表格下方
                var res = params[0].name;
                res += '<br>开盘:' + params[0].value[0] + "<br>最高:" + params[0].value[3];
                res += '<br>收盘:' + params[0].value[1] + "<br>最低:" + params[0].value[2];
                return res;
            }

        },

        grid: {
            left: '10%',
            right: '10%',
            bottom: '15%'
        },
        xAxis: {
            type: 'category',
            data: datapage6.categoryData,
            scale: true,
            boundaryGap: true,
            axisLine: {onZero: true},
            splitLine: {show: true},
            splitNumber: 20,
            min: 'dataMin',
            max: 'dataMax'
        },
        yAxis: {
            scale: true,
            splitArea: {
                show: true
            }
        },
        dataZoom: [
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                type: 'slider',
                y: '90%',
                start: 50,
                end: 100
            }
        ],
        series: [
            {
                name: '日K',
                type: 'candlestick',
                data: datapage6.values,
                itemStyle: {
                    normal: {
                        color: upColor,
                        color0: downColor,
                        borderColor: upBorderColor,
                        borderColor0: downBorderColor
                    }
                },
            },
            {
                name: 'MA5',
                type: 'line',
                data: calculateMA(5),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA10',
                type: 'line',
                data: calculateMA(10),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA20',
                type: 'line',
                data: calculateMA(20),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },
            {
                name: 'MA30',
                type: 'line',
                data: calculateMA(30),
                smooth: true,
                lineStyle: {
                    normal: {opacity: 0.5}
                }
            },

        ]
    };

</script>