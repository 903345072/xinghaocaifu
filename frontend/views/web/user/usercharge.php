
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">充值</li>
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
                    <a href="<?= url(['/web/usercharge'])?>">  <p class="am-btn am-btn-danger am-btn-block am-btn-lg">资金明细</p></a>
                    <a href="<?= url(['/web/userrecord'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
                    <a href="<?= url(['/web/userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                    <a href="<?= url(['/web/userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                    <a href="<?= url(['/web/usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>

                </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <p class="am-padding-sm bb-1 b-red">账户余额(元)： <span class="am-text-danger">￥0.00</span></p>

                    <div id="page1">
                        <p class="am-padding-sm">余额：
                            <span class="am-text-danger">0.00</span> 元
                            <span class="cursP am-align-right am-margin-0" id="page2Btn">充值记录</span>
                        </p>

                        <div class="am-padding-sm bg-white">
                            <div class="am-g am-padding-bottom-xs">
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                    <p class="am-padding-top-xs">请输入充值金额：</p>
                                </div>
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5">
                                    <input type="text" name="" id="inpMoney" class="am-form-field"
                                           placeholder="请输入10元以上充值金额">
                                </div>
                                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5">
                                    <p class="am-padding-top-xs">元</p>
                                </div>
                            </div>

                            <div class="am-padding-top-xs bt-1">
                                <div class="am-g" id="priceBtn">
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">1000元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">2000元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">3000元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">5000元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">10000元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">14999元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">20000元</p>
                                    </div>
                                    <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-bottom-xs">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">30000元</p>
                                    </div>
                                </div>
                            </div>
                            <p class="am-text-sm am-text-danger">
                                欢迎您选择【星浩财富】请实时关注我司最新版本App以便体验。下载地址：
                                <a href="#">地址</a>
                            </p>

                        </div>

                        <p class="am-padding-sm">请选择充值方式
                            <a href="#" class="am-text-danger">【新手入金方式】</a>
                        </p>

                        <div class="bg-white">

                            <p class="am-padding-sm bb-1 am-text-center b-red">支付宝</p>

                            <div class="am-padding-sm payWayOne cursP">
                                <div class="am-g">
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                        <p class="am-text-sm">AB9-支付宝入金通道 [无需扫码,直接支付]</p>
                                        <p class="am-text-xs text-999">单笔额度:10-10000元,(自动打开支付宝客户端支付)。</p>
                                    </div>
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                        <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                        <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="am-padding-top-lg">
                            <p class="am-btn am-btn-danger am-btn-block am-radius">下一步</p>
                        </div>

                        <div class="am-padding-top-lg">
                            <p class="am-text-center am-text-sm">
                                如遇到入金问题，请自行切换支付通道或
                                <a href="#" class="am-text-danger">联系客服</a>
                            </p>
                        </div>
                    </div>

                    <div id="page2" style="display: none">

                        <p class="am-alert-danger am-padding-sm am-text-center">
                            充值记录
                            <span class="am-btn am-btn-default am-btn-xs am-align-right am-margin-0 am-radius"
                                  id="backBtn">返回</span>
                        </p>

                        <div class="am-padding-sm bg-white bb-1">
                            <div class="am-g">
                                <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 am-padding-top-sm am-text-center">
                                    <i class="am-icon am-icon-cny am-icon-sm am-text-primary am-padding-top-sm"></i>
                                </div>
                                <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-text-sm">
                                    <p class="am-text-default">￥10.0</p>
                                    <p>订单号：20180808088808</p>
                                    <p>充值时间：2018-08-08 08:08:08</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-btn-block am-radius">未充值</p>
                                </div>
                            </div>
                        </div>

                        <div class="am-padding-sm bg-white bb-1">
                            <div class="am-g">
                                <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 am-padding-top-sm am-text-center">
                                    <i class="am-icon am-icon-cny am-icon-sm am-text-primary am-padding-top-sm"></i>
                                </div>
                                <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-text-sm">
                                    <p class="am-text-default">￥10.0</p>
                                    <p>订单号：20180808088808</p>
                                    <p>充值时间：2018-08-08 08:08:08</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-btn-block am-radius">未充值</p>
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
        var priceBtn = $('#priceBtn .am-u-sm-3');
        var inpMoney = $('#inpMoney');
        priceBtn.on('click', function () {
            var index = $(this).index();
            priceBtn.find('.am-btn').removeClass('am-btn-danger');
            var now = priceBtn.eq(index).find('.am-btn');
            now.addClass('am-btn-danger');
            var num = now.text().split('元');
            inpMoney.val(num[0]);
        });

        var payWayOne = $('.payWayOne');
        payWayOne.find('.noCheck').show();
        payWayOne.find('.Check').hide();
        payWayOne.on('click', function () {
            var index = $(this).index() - 1;
            payWayOne.find('.noCheck').show();
            payWayOne.find('.Check').hide();
            payWayOne.eq(index).find('.noCheck').hide();
            payWayOne.eq(index).find('.Check').show();
        });

        var page2Btn = $('#page2Btn');
        var page1 = $('#page1');
        var page2 = $('#page2');
        var backBtn = $('#backBtn');
        page2Btn.on('click', function () {
            page1.hide();
            page2.show();
        });

        backBtn.on('click', function () {
            page2.hide();
            page1.show();
        });

    }()
</script>