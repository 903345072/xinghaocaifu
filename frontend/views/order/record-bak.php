<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?=url(['user'])?>"></a>
    <h1 class="mui-title">交易记录</h1>
</header>

<div class="mui-content">
    <div class="member-header mui-text-center">
        <div class="member-totals uk-text-small">
            <div class="member-totals-header">
                <div>
                    <span class="uk-text-yellow"></span><span class="uk-text-muted-2"><?=u()->profit_account?>元(盈利)</span>
                </div>
                <div class="member-date-sc"></div>
            </div>
            <div class="member-total-body">
                <div class="mui-table">
                    <div class="mui-table-cell mui-col-xs-4">
                        <div class="member-total-item">
                            <div class="nums">
                                <?=count($order)?>
                            </div>
                            <div class="txt uk-text-muted-2">
                                成交(手)
                            </div>
                        </div>
                    </div>
                    <div class="mui-table-cell mui-col-xs-4">
                        <div class="member-total-item">
                            <div class="nums">
                                <?=$profit_hand?>
                            </div>
                            <div class="txt uk-text-muted-2">
                                盈利(手)
                            </div>
                        </div>
                    </div>
                    <div class="mui-table-cell mui-col-xs-4">
                        <div class="member-total-item">
                            <div class="nums uk-text-yellow">
                                <?=$win_rate?>%
                            </div>
                            <div class="txt uk-text-muted-2">
                                胜率
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-margin-bottom">
        <div class="tm-padded">
            <div class="uk-margin">
                <span>
                <a href="<?=url(['order/position'])?>">
                    当前持仓(<?=$position_order?>)
                </a></span>
            </div>
            <div class="uk-margin">
                <span>最佳战绩(￥<?=$top_profit?>)</span>
            </div>
            <div class="uk-margin-top">
                <span>
                <a href="<?=url(['order/selledRecord'])?>">
                    历史交易(<?=count($order)?>)
                </a></span>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <?php foreach($order as $k => $v): ?>
        <div class="uk-margin-small">
            <div class="mui-table-view uk-text-small">
                <div class="mui-table-view-cell">
                    <div class="mui-table">
                        <div class="mui-table-cell">
                            <div class="mui-ellipsis">
                                <span class=""><?=$v->product->name?> (<?=$v->product->identify?>)</span>
                            </div>
                        </div>
                        <div class="mui-table-cell mui-text-right">
                            <div class="uk-text-xmini">
                                单号：<span>JY1000<?= $v->id ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mui-table-view-cell">
                    <div class="uk-text-gray">
                        <div class="mui-table">
                            <div class="mui-table-cell mui-col-xs-4">
                                <div class="mui-ellipsis uk-text-medium">
                                    <span class="uk-text-theme">
                                        <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                                            <font color="red">买涨<?=$v->hand?>手</font>
                                        <?php else: ?>
                                            <font color="green">买跌<?=$v->hand?>手</font>
                                        <?php endif ?>
                                    </span>
                                </div>
                            </div>
                            <div class="mui-table-cell mui-col-xs-5">
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
<!--                                    到时中止-->
                                </div>
                            </div>
                        </div>
                        <div class="mui-table">
                            <div class="mui-table-cell mui-col-xs-5 uk-text-middle">
                                <div class="mui-ellipsis">
                                    <span class=" ">止盈+<?php echo $v->one_profit*$v->stop_profit_point;?>元</span>
                                </div>
                                <div class="mui-ellipsis">
                                    <span class=" ">止损-<?php echo $v->one_profit*$v->stop_loss_point;?>元</span>
                                </div>
                            </div>
                            <div class="mui-table-cell mui-col-xs-4 uk-text-middle ">
                                <div class="mui-ellipsis">
                                    <span class=" ">买入<?=$v->price?></span>
                                </div>
                                <div class="mui-ellipsis">
                                    <span class=" ">卖出<?=$v->sell_price?></span>
                                </div>
                            </div>
                            <div class="mui-table-cell mui-col-xs-3 uk-text-middle  mui-text-right">
                                <div class="mui-btn mui-btn-grey tm-square-btn">
                                    <div class="tm-square-btn-table">
                                        <div class="tm-square-btn-table-cell">
                                            结算成功
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                结算时间：<span><?=$v->updated_at?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach ?>

    </div>
</div>
<script type="text/javascript">mui.init();</script>