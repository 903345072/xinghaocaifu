<link href="/css/weixin.css" rel="stylesheet">
<link href="/css/layui.css" rel="stylesheet">
<script type="text/javascript" src="/js/layui.js"></script>
<style>
    .uk-text-mini{font-size:10px}
    .mui-btn.mui-btn-outlined{font-size:12px;padding-left:6px;padding-right:6px}
</style>
<header class="mui-bar mui-bar-nav">
    <a class="mui-icon mui-icon-left-nav mui-pull-left"  href="<?=url(['user/index'])?>"></a>
    <h1 class="mui-title">持仓列表</h1>
</header>

<div class="mui-content">
    <div class="mui-segmented-control tm-tab">
        <a class="mui-control-item tm-tab-item mui-active posit" href="#tab-item-1">
            <span class="uk-text-gray uk-text-middle">持仓</span>
        </a>
        <a class="mui-control-item tm-tab-item accouts" href="#tab-item-2">
            <span class="uk-text-gray uk-text-middle">结算</span>
        </a>
    </div>

    <div class="uk-margin-top">
        <div class="mui-control-content mui-active" id="tab-item-1">
            <div class="">
                <?php foreach($order_position as $k => $v): ?>
                    <div class="mui-table-view mui-in-zero uk-margin" id="position_<?=$v->id?>">
                        <div class="mui-table-view-divider ">
                            <div class="mui-table">
                                <div class="mui-table-cell ">
                                    <div class="mui-ellipsis">
                                        <span class=""><?=$v->product->name?>(<?=$v->product->identify?>)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mui-table-view-cell">
                            <div class="uk-text-mini uk-text-gray">
                                <div class="mui-table">
                                    <div class="mui-table-cell mui-col-xs-3">
                                        <div class="mui-ellipsis">
                                            <span class="uk-text-theme">
                                                <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                                    <font color="red">买涨<?=$v->hand?>手</font>
                                                <?php else: ?>
                                                    <font color="green">买跌<?=$v->hand?>手</font>
                                                <?php endif ?>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="mui-table-cell mui-col-xs-5 mui-text-center">
                                        <div class="mui-ellipsis profit_<?=$v->id?>">

                                        </div>
                                    </div>
                                    <div class="mui-table-cell mui-col-xs-4  mui-text-right">
                                        <div class="mui-ellipsis">
                                            <span class="uk-text-muted" style="display:none">14:04:33</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mui-table">
                                    <div class="mui-table-cell mui-col-xs-4 uk-text-middle">
                                        <div class="mui-ellipsis">

                                            <span class=" ">止盈 + <?=$v->stop_profit_price ?></span>
                                        </div>
                                        <div class="mui-ellipsis">
                                            <span class=" ">止损 - <?=$v->stop_loss_price?></span>
                                        </div>
                                    </div>
                                    <div class="mui-table-cell mui-col-xs-5 uk-text-middle mui-text-center">
                                        <div class="mui-ellipsis">
                                            <span class=" ">开仓价 <?=$v->price?></span>
                                        </div>
                                        <div class="mui-ellipsis">
                                            <span class=" " id="price_<?=$v->id?>">当前价 计算中...</span>
                                        </div>
                                    </div>
                                    <div class="mui-table-cell mui-col-xs-4 uk-text-middle mui-text-right">
                                        <a class="mui-btn mui-btn-theme tm-square-btn" href="Javascript:sellOrder(<?=$v->id?>);">
                                            <div class="tm-square-btn-table">
                                                <div class="tm-square-btn-table-cell">
                                                    平仓
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div>单号：<span>JY1000<?= $v->id ?></span></div>
                                    <div>成交时间：<span><?=$v->created_at?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="mui-control-content" id="tab-item-2">
            <div class="" style="position: relative;z-index: 100">
                <div class="mui-table-view" data-uk-sticky="{top:0}">
                    <div class="tm-padded">
                        <!--                        <div class="uk-grid uk-grid-small uk-flex-middle">-->
                        <!--                            <div class="uk-width-2-5">-->
                        <!--                                <div class="">-->
                        <!--                                    <input class="uk-input uk-form-xsmall" id="starttime" type="date" value="2018-05-02" style="margin:0">-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="uk-width-2-5">-->
                        <!--                                <div class="">-->
                        <!--                                    <input class="uk-input uk-form-xsmall" id="endtime" type="date" value="2018-05-02" style="margin:0">-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="uk-width-1-5 uk-text-right">-->
                        <!--                                <button class="mui-btn mui-btn-theme mui-btn-xsmall uk-width-1-1" type="button" onclick="load_nextpage();">查询</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="" id="jiesuanlist">
                <div id="jiesuancontent">
                    <?php foreach($order_throw as $k => $v): ?>
                        <div class="mui-table-view mui-in-zero uk-margin">
                            <div class="mui-table-view-divider ">
                                <div class="mui-table">
                                    <div class="mui-table-cell ">
                                        <div class="mui-ellipsis">
                                            <span class=" "><?=$v->product->name?>(<?=$v->product->identify?>)</span>
                                        </div>
                                    </div>
                                    <div class="mui-table-cell mui-text-right">
                                        <div class="uk-text-mini">单号：<span>JY1000<?= $v->id ?></span></div>
                                    </div>
                                </div>

                            </div>
                            <div class="mui-table-view-cell">
                                <div class="uk-text-mini uk-text-gray">
                                    <div class="mui-table">
                                        <div class="mui-table-cell mui-col-xs-3">
                                            <div class="mui-ellipsis">
                                            <span class="uk-text-theme">
                                                <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                                    <font color="red">买涨<?=$v->hand?>手</font>
                                                <?php else: ?>
                                                    <font color="green">买跌<?=$v->hand?>手</font>
                                                <?php endif ?>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="mui-table-cell mui-col-xs-6 mui-text-center">
                                            <div class="mui-ellipsis">

                                                <?php if($v->profit >= 0):?>
                                                    <span class="uk-text-danger"><?=$v->profit?>元</span>
                                                <?php else: ?>
                                                    <span class="uk-text-green"><?=$v->profit?>元</span>
                                                <?php endif ?>

                                            </div>
                                        </div>
                                        <div class="mui-table-cell mui-col-xs-3  mui-text-right">
                                            <div class="mui-ellipsis">
                                                <!--                                            止损卖出-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mui-table">
                                        <div class="mui-table-cell mui-col-xs-4 uk-text-middle">
                                            <div class="mui-ellipsis">
                                                <span class=" ">止盈 + <?=$v->stop_profit_price;?>元</span>
                                            </div>
                                            <div class="mui-ellipsis">
                                                <span class=" ">止损 - <?=$v->stop_loss_price;?>元</span>
                                            </div>
                                        </div>
                                        <div class="mui-table-cell mui-col-xs-5 uk-text-middle mui-text-center">
                                            <div class="mui-ellipsis">
                                                <span class=" ">买入<?=$v->price?></span>
                                            </div>
                                            <div class="mui-ellipsis">
                                                <span class=" ">卖出<?=$v->sell_price?></span>
                                            </div>
                                        </div>
                                        <div class="mui-table-cell mui-col-xs-3 uk-text-middle  mui-text-right">
                                            <div class="mui-btn mui-btn-grey mui-btn-outlined">结算成功</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>结算时间：<span><?=$v->updated_at?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="layui-flow-more">没有更多了</div>
            </div>
        </div>
    </div>
</div>
<input id="types" type="hidden" value="<?=$type?>">
<script type="text/javascript">
    mui.init();
    mui(".mui-segmented-control").on("click",".mui-control-item",function(){
//				alert(1)
        $(this).addClass("mui-active").siblings().removeClass("mui-active");
        $(".mui-control-content").eq($(this).index()).addClass("mui-active").siblings().removeClass("mui-active");
    });
</script>
<script>
    $(function() {
        //持仓数据跳动
        function updateOrder(){
            <?php
            $o_id = '';
            foreach($order_position as $v){
                $o_id .= $v->id.',';
            }
            $order_id = trim($o_id, ',');
            ?>
            $.post("<?= url('order/ajaxUpdateOrder')?>", {o_id:"<?=$order_id?>"}, function(msg) {
                if (msg.state) {
                    var obj = msg.info;

                    for(var key in obj){
                        $("#price_"+key).html("当前价"  + obj[key]['price']);
                        if(obj[key]['profit'] >= 0){
                            $(".profit_"+key).html("<span class=\"uk-text-danger\"> " + obj[key]['profit'] + "( "+ obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元</span>");
                        }else{
                            $(".profit_"+key).html("<span class=\"uk-text-green\"> " + obj[key]['profit'] + "( "+ obj[key]['currency_symbol']  + obj[key]['currency_profit'] + ")元 </span>");
                        }
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

        var types = $('#types').val();
        if(types == 1){
            $('.posit').addClass("mui-active");
            $("#tab-item-1").addClass("mui-active");
            $('.accouts').removeClass("mui-active");
            $("#tab-item-2").removeClass("mui-active");
        }else{
            $('.accouts').addClass("mui-active");
            $("#tab-item-2").addClass("mui-active");
            $('.posit').removeClass("mui-active");
            $("#tab-item-1").removeClass("mui-active");
        }

    });

    function sellOrder(order_id)
    {
        $.post("<?= self::createUrl('order/ajaxSellOrder')?>", {id:order_id}, function(msg) {
            if (msg.state == 1) {
                layer.alert(msg.info);
                window.location.reload();
            } else {
                layer.alert(msg.info);
            }
        }, 'json');
    }
</script>
