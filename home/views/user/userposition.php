<style>
    .layui-layer {
        top: 130px !important;
    }
</style>
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">持仓列表</a></li>
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
                        <p class="">账户余额(元)：<?= u()->account - u()->blocked_account ?></p>
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
                <a href="<?= url(['userrecord'])?>"> <p class="am-btn am-btn-danger am-btn-block am-btn-lg">交易记录</p></a>
                <a href="<?= url(['userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                <a href="<?= url(['userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                <a href="<?= url(['usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>
                <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
                  <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

              </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                <div class="am-padding-sm am-padding-top-0">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="bb-1 am-padding-vertical-xs am-btn-group am-btn-group-justify">
                            <p class="am-btn am-btn-default am-btn-danger" id="deal" style='width: 50%;float:left;'>持仓</p>
                            <p class="am-btn am-btn-default" id="asettlement" style='width: 50%;float:left;'>结算</p>
                        </div>
                        <div class="scrollAble deal" style="height: 456px;">
                            <div>
                                <?php foreach ($order_position as $v): ?>
                                    <div class="am-padding-horizontal-sm bg-white bt-1 bb-1">
                                        <p class="am-padding-vertical-xs am-text-sm"><?=$v->product->name?>(<?=$v->product->identify?>)
                                            <span class="am-align-right am-margin-0">单号：JY1000<?= $v->id ?></span>
                                        </p>

                                        <div>
                                            <div class="bt-1 am-padding-horizontal-sm">
                                                <div class="am-g am-padding-top-xs am-text-xs">
                                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-0">
                                                        <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                                            <p class="am-text-danger">买涨<?=$v->hand?>手</p>
                                                        <?php else: ?>
                                                            <p class="am-text-danger">买跌<?=$v->hand?>手</p>
                                                        <?php endif ?>

                                                        <p>止盈 +<?=$v->stop_profit_price ?></p>
                                                        <p>止损 -<?=$v->stop_loss_price ?></p>
                                                    </div>
                                                    <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-horizontal-xs am-text-right">
                                                        <?php if($v->profit >= 0):?>
                                                            <p class="am-text-danger profit_<?=$v->id?>"><?=$v->profit?>元</p>
                                                        <?php else: ?>
                                                            <p class="am-text-success profit_<?=$v->id?>"><?=$v->profit?>元</p>
                                                        <?php endif ?>

                                                        <p>买入 <?=$v->price?></p>
                                                        <p class="sellPrice_<?=$v->id?>">卖出 <?=$v->sell_price?></p>
                                                    </div>
                                                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                                        <div class="am-btn am-btn-danger am-btn-sm am-radius sellOneBtn" flag="<?=$v->id?>">平仓</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="am-text-xs">成交时间：<?=$v->created_at?></p>
                                        </div>

                                    </div>
                                <?php endforeach ?>
                            </div>
                            <!--                            <div class="scrollAble" style="height: 456px;">-->
                            <!--                                <div class="am-padding-top-xl">-->
                            <!--                                    <div class="am-text-center am-padding-top-xl">-->
                            <!--                                        <i class="am-icon am-icon-exclamation-circle am-icon-sm"></i><br>-->
                            <!--                                        <p>暂无</p>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        </div>

                        <div class="scrollAble asettlement" style="height: 456px;display:none;">
                            <div>
                                <?php foreach ($order_throw as $v): ?>
                                    <div class="am-padding-horizontal-sm bg-white bt-1 bb-1">
                                        <p class="am-padding-vertical-xs am-text-sm"><?=$v->product->name?>(<?=$v->product->identify?>)
                                            <span class="am-align-right am-margin-0">单号：JY1000<?= $v->id ?></span>
                                        </p>

                                        <div>
                                            <div class="bt-1 am-padding-horizontal-sm">
                                                <div class="am-g am-padding-top-xs am-text-xs">
                                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-0   am-padding-right-0">
                                                        <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                                            <p class="am-text-danger">买涨<?=$v->hand?>手</p>
                                                        <?php else: ?>
                                                            <p class="am-text-danger">买跌<?=$v->hand?>手</p>
                                                        <?php endif ?>

                                                        <p>止盈 +<?php echo $v->one_profit*$v->stop_profit_point;?>元</p>
                                                        <p>止损 -<?php echo $v->one_profit*$v->stop_loss_point;?>元</p>
                                                    </div>
                                                    <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-horizontal-xs am-text-right">
                                                        <?php if($v->profit >= 0):?>
                                                            <p class="am-text-danger"><?=$v->profit?>元</p>
                                                        <?php else: ?>
                                                            <p class="am-text-danger"><?=$v->profit?>元</p>
                                                        <?php endif ?>

                                                        <p>买入 <?=$v->price?></p>
                                                        <p>卖出 <?=$v->sell_price?></p>
                                                    </div>
                                                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                                        <div class="am-btn am-btn-danger am-btn-sm am-radius" style="background-color: gray;border: 1px solid gray;">结算成功</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="am-text-xs">结算时间：<?=$v->updated_at?></p>
                                        </div>

                                    </div>
                                <?php endforeach ?>
                            </div>

                        </div>
                    </div>





                </div>
            </div>

        </div>

    </div>


</div>


<script type="text/javascript">
    $(function(){
        $('#deal').click(function(){
            $('#deal').addClass('am-btn-danger');
            $('#asettlement').removeClass('am-btn-danger');
            $('.deal').show();
            $('.asettlement').hide();
        });
        $('#asettlement').click(function(){
            $('#asettlement').addClass('am-btn-danger');
            $('#deal').removeClass('am-btn-danger');
            $('.asettlement').show();
            $('.deal').hide();
        });

        $('.sellOneBtn').on('click', function () {
            var flag = $(this).attr('flag');
            layer.alert('hello');
            layer.confirm('确认要平仓吗？', {
                btn: ['确定', '取消']//按钮
            }, function (index) {
                $.post("/order/ajax-sell-order", {id:flag , model_type: 1}, function (msg) {
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
    });
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