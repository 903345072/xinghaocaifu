<style>
    .layui-layer{
        top:250px!important;
    }
</style>
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">模拟交易列表</li>
    </ol>

    <div class="bg-fa am-padding-sm">

        <div class="am-g">

            <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-0">

                <div class="bg-white am-padding-sm border-1">

                    <div class="am-padding-top-lg am-text-center">
                        <img src="/pc/images/defhead.png" class="wid45">
                        <p class="text-999"><?= u()->username ?></p>
                    </div>

                    <div class="am-text-center am-padding-top-lg am-text-danger">
                        <p class="">账户余额(元)：￥<?= u()->account - u()->blocked_account ?></p>
                        <p class="am-padding-top-xs">模拟账户余额(元)：￥<?= u()->moni_acount - u()->blocked_moni ?></p>
                        <p class="am-padding-top-sm">可用积分：<?= u()->point ?></p>
                    </div>

                    <div class="am-text-center am-padding-vertical-sm">
                        <div class="am-btn-group">
                            <a href="<?= url(['usercash']) ?>">
                                <p class="am-btn am-btn-default am-btn-xs am-padding-horizontal-lg rad500">
                                    提现</p>
                            </a>
                            <a href="<?= url(['usercharge']) ?>"><p
                                        class="am-btn am-btn-danger am-btn-xs am-padding-horizontal-lg rad500">充值</p></a>
                        </div>
                    </div>

                </div>

              <div>
                <a href="<?= url(['usernews'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">信息中心</p></a>
                <a href="<?= url(['userpoint'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">我的积分</p></a>
                <a href="<?= url(['userannounce'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">公告</p></a>
                <!--<a href="<?/*= url(['usercharge'])*/?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">资金明细</p></a>-->
                <a href="<?= url(['userrecord'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
                <a href="<?= url(['userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                <a href="<?= url(['userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                <a href="<?= url(['usersim'])?>">  <p class="am-btn am-btn-danger am-btn-block am-btn-lg">模拟交易列表</p></a>
                <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
                  <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

              </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
                        <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">

                            <li class="am-active"><a class="cursP">持仓
                                <span class="am-badge-danger am-badge am-round"><?= count($order_position) ?></span></a>
                            </li>

                            <li><a class="cursP">结算(模拟交易记录)</a></li>
                        </ul>

                        <div class="am-tabs-bd">
                            <div class="am-tab-panel am-active">

                                <?php foreach($order_position as $k => $v): ?>
                                <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                                    <p class="am-padding-vertical-sm bb-1"><?=$v->product->name?>(<?=$v->product->identify?>)
                                        <span class="am-align-right am-margin-0">单号：JY1000<?= $v->id ?></span>
                                    </p>

                                    <div class="am-g am-padding-vertical-xs">
                                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                            <p class="am-text-danger">
                                                <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                                    <font color="red">买涨<?=$v->hand?>手</font>
                                                <?php else: ?>
                                                    <font color="green">买跌<?=$v->hand?>手</font>
                                                <?php endif ?>
                                            </p>
                                            <p>止盈+<?php echo $v->one_profit*$v->stop_profit_point;?>元</p>
                                            <p>止损-<?php echo $v->one_profit*$v->stop_loss_point;?></p>
                                        </div>
                                        <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                            <p class="am-text-danger">
                                                <?php if($v->profit >= 0):?>
                                                    <span class="uk-text-danger profit_<?=$v->id?>"><?=$v->profit?>元</span>
                                                <?php else: ?>
                                                    <span class="uk-text-green profit_<?=$v->id?>"><?=$v->profit?>元</span>
                                                <?php endif ?>
                                            </p>
                                            <p>买入<?=$v->price?></p>
                                            <p class="sellPrice_<?=$v->id?>">卖出<?=$v->sell_price?></p>
                                        </div>
                                        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                            <p class="am-padding-top-lg">结算时间：<?=$v->created_at?></p>
                                        </div>
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                            <div class="am-btn am-btn-danger am-radius">
                                                <p class="am-padding-vertical-sm pingcang" flag="<?=$v->id?>">平仓</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <?php endforeach; ?>

<!--                                <div class="am-padding-vertical-xl am-text-center">-->
<!--                                    <i class="am-icon-edit"></i>-->
<!--                                    <p>暂无数据</p>-->
<!--                                </div>-->


                            </div>
                            <div class="am-tab-panel">

<!--                                <div class="bg-white">-->
<!--                                    <div class="am-g">-->
<!--                                        <div class="am-u-sm-5">-->
<!--                                            <p id="my-start" class="am-form-field">开始日期</p>-->
<!--                                            <!--<button type="button" class="am-btn am-btn-default am-margin-right"-->
<!--                                                    id="my-start">开始日期-->
<!--                                            </button>-->
<!--                                            <span id="my-startDate">2018-01-01</span>-->
<!--                                        </div>-->
<!--                                        <div class="am-u-sm-5">-->
<!--                                            <p id="my-end" class="am-form-field">结束日期</p>-->
<!--                                            <!--<button type="button" class="am-btn am-btn-default am-margin-right" id="my-end">-->
<!--                                                结束日期-->
<!--                                            </button>-->
<!--                                            <span id="my-endDate">2018-01-02</span>-->
<!--                                        </div>-->
<!--                                        <div class="am-u-sm-2">-->
<!--                                            <p class="am-btn am-btn-danger am-btn-block am-radius">查询</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="am-padding-top-xs" style="min-height: 450px;">
                                    <?php foreach($order_throw as $k => $v): ?>
                                    <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                                        <p class="am-padding-vertical-sm bb-1"><?=$v->product->name?>(<?=$v->product->identify?>)
                                            <span class="am-align-right am-margin-0">单号：JY1000<?= $v->id ?></span>
                                        </p>

                                        <div class="am-g am-padding-vertical-xs">
                                            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                                <p class="am-text-danger">  <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                                        <font color="red">买涨<?=$v->hand?>手</font>
                                                    <?php else: ?>
                                                        <font color="green">买跌<?=$v->hand?>手</font>
                                                    <?php endif ?></p>
                                                <p>止盈+<?php echo $v->one_profit*$v->stop_profit_point;?>元</p>
                                                <p>止损-<?php echo $v->one_profit*$v->stop_loss_point;?></p>
                                            </div>
                                            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                                <p class="am-text-danger"<?php if($v->profit >= 0):?>
                                                    <span class="uk-text-danger"><?=$v->profit?>元</span>
                                                <?php else: ?>
                                                <span class="uk-text-green"><?=$v->profit?>元</span>
                                                <?php endif ?></p>
                                                <p>买入<?=$v->price?></p>
                                                <p>卖出<?=$v->sell_price?></p>
                                            </div>
                                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                                <p class="am-padding-top-lg">结算时间：<?=$v->updated_at?></p>
                                            </div>
                                            <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                                <div class="am-btn am-btn-default am-radius">
                                                    <p class="am-padding-vertical-sm">结算成功</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endforeach; ?>
<!--                                    <div class="am-padding-vertical-xl am-text-center">-->
<!--                                        <i class="am-icon-edit"></i>-->
<!--                                        <p>暂无数据</p>-->
<!--                                    </div>-->

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</div>


<script type="text/javascript">
    !function () {
        var tab = $('.am-tabs .am-tab-panel');
        var clickTab = $('.am-tabs-nav li');

        clickTab.on('click', function () {
            var index = $(this).index();
            clickTab.removeClass('am-active');
            clickTab.eq(index).addClass('am-active');
            tab.removeClass('am-active');
            tab.eq(index).addClass('am-active');

        });

        var startDate = new Date(2018, 1, 1);
        var endDate = new Date(2018, 1, 2);
        $('#my-start').datepicker().on('changeDate.datepicker.amui', function (event) {
            startDate = new Date(event.date);
            $('#my-start').text($('#my-start').data('date'));
            $(this).datepicker('close');
        });

        $('#my-end').datepicker().on('changeDate.datepicker.amui', function (event) {
            endDate = new Date(event.date);
            $('#my-end').text($('#my-end').data('date'));
            $(this).datepicker('close');
        });

        $('.pingcang').on('click', function () {
            var flag = $(this).attr('flag');
            layer.alert('hello');
            layer.confirm('确认要平仓吗？', {
                btn: ['确定', '取消'],//按钮
            }, function (index) {
                $.post("/order/ajax-sell-order", {id:flag , model_type: 2}, function (msg) {
                    if (msg.state) {
                        layer.alert('已平仓');
                        layer.close(index);
                        window.location.reload();
                    } else {
                        layer.alert(msg.info);
                    }
                }, 'json');
            });
        });
    }()

    function updateOrder(){
        $.post("<?= url('order/ajaxUpdateOrder')?>", {}, function(msg) {
            if (msg.state) {
                var obj = msg.info;

                for(var key in obj){
                    $("#price_"+key).html("当前价"  + obj[key]['price']);
                    if(obj[key]['profit'] >= 0){
                        $(".profit_"+key).html("<span class=\"uk-text-danger\"> " + obj[key]['profit'] + "( "+ obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元</span>");
                    }else{
                        $(".profit_"+key).html("<span class=\"uk-text-green\"> " + obj[key]['profit'] + "( "+ obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元 </span>");
                    }
                    $(".sellPrice_"+key).html("<span> " + obj[key]['profit'] + "( "+ obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元 </span>");
                }
                var oobj = msg.data;
                console.log(oobj);
                for(var key_ in oobj){
                    console.log("#position_"+key_);
                    $("#position_"+key_).css("display", "none");
                }

            }
        }, 'json');
    }
    setInterval(updateOrder, 1000);
</script>