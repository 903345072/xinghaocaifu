<style>
    .alipay {
        display: none;
    }

    .transfer {
        display: none;
    }
</style>
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
                                        class="am-btn am-btn-danger am-btn-xs am-padding-horizontal-lg rad500">充值</p>
                            </a>
                        </div>

                    </div>

                </div>

                <div>
                    <a href="<?= url(['usernews']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">信息中心</p>
                    </a>
                    <a href="<?= url(['userpoint']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">我的积分</p>
                    </a>
                    <a href="<?= url(['userannounce']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">
                            公告</p></a>
                    <a href="<?= url(['usercharge']) ?>"><p class="am-btn am-btn-danger am-btn-block am-btn-lg">资金明细</p>
                    </a>
                    <a href="<?= url(['userrecord']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">
                            交易记录</p></a>
                    <a href="<?= url(['userinvite']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">
                            推广赚钱</p></a>
                    <a href="<?= url(['userpassword']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">
                            修改密码</p></a>
                    <a href="<?= url(['usersim']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p>
                    </a>
                    <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
                    <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

                </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <p class="am-padding-sm bb-1 b-red">账户余额(元)： <span
                                class="am-text-danger">￥<?= u()->account - u()->blocked_account ?></span></p>

                    <div id="page1">
                        <p class="am-padding-sm">余额：
                            <span class="am-text-danger"><?= u()->account - u()->blocked_account ?></span> 元
                            <span class="cursP am-align-right am-margin-0" id="page2Btn">充值记录</span>
                        </p>

                        <div class="am-padding-sm bg-white">
                            <div class="am-g am-padding-bott
                            om-xs">
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
                            <a href="<?= url(['user/playfa']) ?>"" class="am-text-danger">【新手入金方式】</a>
                        </p>

                        <div class="bg-white">

                            <div class="am-btn-group am-btn-group-justify" id="swBtns">
                                <p class="am-btn am-btn-default am-btn-danger" id="wechat"
                                   style="width: 33%;float:left;">微信</p>
                                <p class="am-btn am-btn-default" id="alipay"
                                   style="width: 33%;float:left;">支付宝</p>
                                <p class="am-btn am-btn-default" id="transfer"
                                   style="width: 33%;float:left;">转账</p>
                            </div>

                            <div class="am-padding-sm payWayOne cursP wechat">
                                <div class="am-g">
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                        <p class="am-text-sm">HX-微信扫码-1</p>
                                        <p class="am-text-xs text-999">扫码额度:10-20000元,敬请备注手机号码,方可及时到账!</p>
                                    </div>
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                        <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                        <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="am-padding-sm payWayOne cursP wechat">
                                <div class="am-g">
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                        <p class="am-text-sm">XY-微信扫码支付</p>
                                        <p class="am-text-xs text-999">扫码额度:10-5000元,敬请备注会员账号手机号码方可及时到账!</p>
                                    </div>
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                        <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                        <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                    </div>
                                </div>
                            </div>

                            <!--                            <div class="am-padding-sm payWayOne cursP alipay">-->
                            <!--                                <div class="am-g">-->
                            <!--                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">-->
                            <!--                                        <p class="am-text-sm">AB-支付宝-2 [无需扫码,直接支付]</p>-->
                            <!--                                        <p class="am-text-xs text-999">单笔额度:10-10000元,(自动打开支付宝客户端支付)。</p>-->
                            <!--                                    </div>-->
                            <!--                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">-->
                            <!--                                        <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>-->
                            <!--                                        <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="am-padding-sm payWayOne cursP alipay">
                                <div class="am-g">
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                        <p class="am-text-sm">HX-支付宝扫码-1</p>
                                        <p class="am-text-xs text-999">扫码额度:10-20000元,敬请备注手机号码,方可及时到账!</p>
                                    </div>
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                        <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                        <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="am-padding-sm payWayOne cursP alipay">
                                <div class="am-g">
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                        <p class="am-text-sm">XY-支付宝扫码支付</p>
                                        <p class="am-text-xs text-999">扫码额度:10-5000元,敬请备注会员账号手机号码方可及时到账!</p>
                                    </div>
                                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                        <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                        <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                    </div>
                                </div>
                            </div>

                            <a href="<?= url(['mobilewx']) ?>">
                                <div class="am-padding-sm payWayOne cursP transfer">
                                    <div class="am-g">
                                        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                            <p class="am-text-sm">微信转账</p>
                                            <p class="am-text-xs text-999">单笔额度:10-5000元(识别二维码付款)。</p>
                                        </div>
                                        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                            <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                            <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?= url(['mobilezfb']) ?>">
                                <div class="am-padding-sm payWayOne cursP transfer">
                                    <div class="am-g">
                                        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                            <p class="am-text-sm">支付宝转账</p>
                                            <p class="am-text-xs text-999">单笔额度:10-5000元(识别二维码付款)。</p>
                                        </div>
                                        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                            <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                            <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?= url(['mobilebank']) ?>">
                                <div class="am-padding-sm payWayOne cursP transfer">
                                    <div class="am-g">
                                        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                            <p class="am-text-sm">银行卡转账</p>
                                            <p class="am-text-xs text-999">单笔额度:10-5000元(请按指定信息付款)。</p>
                                        </div>
                                        <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right am-padding-top-xs">
                                            <p class="am-icon am-icon-circle-thin am-icon-sm text-999 noCheck"></p>
                                            <p class="am-icon am-icon-check-circle am-icon-sm am-text-danger Check"></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
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

                    <script>
                        $(function () {
                            $('#wechat').click(function () {
                                $('#swBtns .am-btn').removeClass('am-btn-danger');
                                $(this).addClass('am-btn-danger');
                                $('.wechat').show();
                                $('.alipay').hide();
                                $('.transfer').hide();
                            });
                            $('#alipay').click(function () {
                                $('#swBtns .am-btn').removeClass('am-btn-danger');
                                $(this).addClass('am-btn-danger');
                                $('.alipay').show();
                                $('.wechat').hide();
                                $('.transfer').hide();
                            });
                            $('#transfer').click(function () {
                                $('#swBtns .am-btn').removeClass('am-btn-danger');
                                $(this).addClass('am-btn-danger');
                                $('.transfer').show();
                                $('.alipay').hide();
                                $('.wechat').hide();
                            });
                        })
                    </script>

                    <div id="page2" style="display: none">

                        <p class="am-alert-danger am-padding-sm am-text-center">
                            充值记录
                            <span class="am-btn am-btn-default am-btn-xs am-align-right am-margin-0 am-radius"
                                  id="backBtn">返回</span>
                        </p>
                        <?php foreach ($list as $k => $v) : ?>
                            <div class="am-padding-sm bg-white bb-1">
                                <div class="am-g">
                                    <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 am-padding-top-sm am-text-center">
                                        <i class="am-icon am-icon-cny am-icon-sm am-text-primary am-padding-top-sm"></i>
                                    </div>
                                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-text-sm">
                                        <p class="am-text-default">￥<?= $v->amount ?></p>
                                        <p>订单号：<?= $v->trade_no ?></p>
                                        <p>充值时间：<?= $v->created_at ?></p>
                                    </div>
                                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                        <p class="am-btn am-btn-default am-btn-block am-radius">
                                            <?php if ($v->charge_state == 1) : ?>
                                                代付款
                                            <?php elseif ($v->charge_state == 2) : ?>
                                                成功
                                            <?php else: ?>
                                                失败
                                            <?php endif ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

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
            var _this = $(this);
            payWayOne.find('.noCheck').show();
            payWayOne.find('.Check').hide();
            _this.find('.Check').show();
            _this.find('.noCheck').hide();
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