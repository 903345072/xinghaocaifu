
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="<?= url(['/web/index'])?>">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">交易记录</li>
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
                <a href="<?= url(['userrecord'])?>"> <p class="am-btn am-btn-danger am-btn-block am-btn-lg">交易记录</p></a>
                <a href="<?= url(['userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                <a href="<?= url(['userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                <a href="<?= url(['usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>
                <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
                  <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

              </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <div class="am-alert-danger am-text-center">
                        <p class="am-padding-sm bb-1"><?= u()->profit_account ?> 元(盈利)</p>
                        <div class="am-g">
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-vertical-xs br-1">
                                <p> <?=count($order)?></p>
                                <p>成交(手)</p>
                            </div>
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-vertical-xs br-1">
                                <p> <?=$profit_hand?></p>
                                <p>盈利(手)</p>
                            </div>
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-vertical-xs">
                                <p><?=$win_rate?>%</p>
                                <p>胜率</p>
                            </div>
                        </div>
                    </div>

                    <div class="am-text-sm">
                        <p><a href="<?= url(['user/userposition']) ?>" class="text-333">当前持仓：(<?=$position_order?>)</a></p>
                        <p>最佳战绩：(￥ <?=$top_profit?>)</p>
                        <p><a href="" class="text-333">历史交易：(<?=count($order)?>)</a></p>
                    </div>

                    <div class="am-padding-top-xs">
                        <?php foreach($order as $k => $v): ?>
                        <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                            <p class="am-padding-vertical-sm bb-1"><?=$v->product->name?> (<?=$v->product->identify?>)
                                <span class="am-align-right am-margin-0">单号：<span>JY1000<?= $v->id ?></span></span>
                            </p>

                            <div class="am-g am-padding-vertical-xs">
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-danger">
                                        <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                            <font color="red">买涨<?=$v->hand?>手</font>
                                        <?php else: ?>
                                            <font color="green">买跌<?=$v->hand?>手</font>
                                        <?php endif ?></p>
                                   <p> 止盈+<?php echo $v->one_profit*$v->stop_profit_point;?>元</p>
                                    <p>止损-<?php echo $v->one_profit*$v->stop_loss_point;?>元</p>
                                </div>
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-danger">
                                        <?php if($v->profit >= 0):?>
                                            <span class="uk-text-danger"><?=$v->profit?>元</span>
                                        <?php else: ?>
                                            <span class="uk-text-green"><?=$v->profit?>元</span>
                                        <?php endif ?>
                                    </p>
                                    <p>买入<?=$v->price?></p>
                                    <p>卖出<?=$v->sell_price?></p>
                                </div>
                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                    <p class="am-padding-top-lg">结算时间：<?=$v->updated_at?></p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-radius">结算<br>成功</p>
                                </div>
                            </div>

                        </div>
                        <?php endforeach ?>

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

        })
    }()
</script>