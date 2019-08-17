
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
                        <p class="am-padding-top-sm">可用积分：<?= u()->point ?></p>
                    </div>

                    <div class="am-text-center am-padding-vertical-sm">
                        <a href="<?= url(['/web/usercash'])?>">
                            <p class="am-btn am-btn-default am-btn-xs am-padding-horizontal-lg am-margin-right-sm rad500">
                                提现</p>
                        </a>
                        <a href="<?= url(['/web/usercharge'])?>">  <p class="am-btn am-btn-danger am-btn-xs am-padding-horizontal-lg rad500">充值</p>  </a>

                    </div>

                </div>

                <div>
                    <a href="<?= url(['/web/usernews'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">信息中心</p></a>
                    <a href="<?= url(['/web/userpoint'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">我的积分</p></a>
                    <a href="<?= url(['/web/userannounce'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">公告</p></a>
                    <a href="<?= url(['/web/usercharge'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">资金明细</p></a>
                    <a href="<?= url(['/web/userrecord'])?>"> <p class="am-btn am-btn-danger am-btn-block am-btn-lg">交易记录</p></a>
                    <a href="<?= url(['/web/userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                    <a href="<?= url(['/web/userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                    <a href="<?= url(['/web/usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>

                </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <div class="am-alert-danger am-text-center">
                        <p class="am-padding-sm bb-1"><?= u()->profit_account ?> 元(盈利)</p>
                        <div class="am-g">
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-vertical-xs br-1">
                                <p>0</p>
                                <p>成交(手)</p>
                            </div>
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-vertical-xs br-1">
                                <p>0</p>
                                <p>盈利(手)</p>
                            </div>
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-vertical-xs">
                                <p>0%</p>
                                <p>胜率</p>
                            </div>
                        </div>
                    </div>

                    <div class="am-text-sm">
                        <p><a href="" class="text-333">当前持仓：(0)</a></p>
                        <p>最佳战绩：(￥ 0)</p>
                        <p><a href="" class="text-333">历史交易：(0)</a></p>
                    </div>

                    <div class="am-padding-top-xs">

                        <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                            <p class="am-padding-vertical-sm bb-1">美原油abc
                                <span class="am-align-right am-margin-0">单号：JY123123</span>
                            </p>

                            <div class="am-g am-padding-vertical-xs">
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-danger">买涨0手</p>
                                    <p>止盈 +718.28元</p>
                                    <p>止损 -0元</p>
                                </div>
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-danger">0.00元</p>
                                    <p>买入 1.42</p>
                                    <p>卖出 1.40</p>
                                </div>
                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                    <p class="am-padding-top-lg">结算时间：2018-05-05 18:18:18</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-radius">结算<br>成功</p>
                                </div>
                            </div>

                        </div>

                        <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                            <p class="am-padding-vertical-sm bb-1">美原油abc
                                <span class="am-align-right am-margin-0">单号：JY123123</span>
                            </p>

                            <div class="am-g am-padding-vertical-xs">
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-danger">买涨0手</p>
                                    <p>止盈 +718.28元</p>
                                    <p>止损 -0元</p>
                                </div>
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-success">-220.00元</p>
                                    <p>买入 1.42</p>
                                    <p>卖出 1.40</p>
                                </div>
                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                    <p class="am-padding-top-lg">结算时间：2018-05-05 18:18:18</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-radius">结算<br>成功</p>
                                </div>
                            </div>

                        </div>

                        <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                            <p class="am-padding-vertical-sm bb-1">美原油abc
                                <span class="am-align-right am-margin-0">单号：JY123123</span>
                            </p>

                            <div class="am-g am-padding-vertical-xs">
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-success">买跌0手</p>
                                    <p>止盈 +718.28元</p>
                                    <p>止损 -0元</p>
                                </div>
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-success">-220.00元</p>
                                    <p>买入 1.42</p>
                                    <p>卖出 1.40</p>
                                </div>
                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                    <p class="am-padding-top-lg">结算时间：2018-05-05 18:18:18</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-radius">结算<br>成功</p>
                                </div>
                            </div>

                        </div>

                        <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 am-margin-bottom-xs">
                            <p class="am-padding-vertical-sm bb-1">美原油abc
                                <span class="am-align-right am-margin-0">单号：JY123123</span>
                            </p>

                            <div class="am-g am-padding-vertical-xs">
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-success">买跌0手</p>
                                    <p>止盈 +718.28元</p>
                                    <p>止损 -0元</p>
                                </div>
                                <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
                                    <p class="am-text-danger">220.00元</p>
                                    <p>买入 1.42</p>
                                    <p>卖出 1.40</p>
                                </div>
                                <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                    <p class="am-padding-top-lg">结算时间：2018-05-05 18:18:18</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-right am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-radius">结算<br>成功</p>
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

        })
    }()
</script>