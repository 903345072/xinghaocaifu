
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">提现</li>
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

                    <div id="page1">
                        <p class="am-padding-sm bb-1 b-red">
                            提现
                            <span class="cursP am-align-right am-margin-0 am-text-sm" id="page2Btn">提现记录</span>
                        </p>

                        <p class="am-padding-sm bg-white">余额： <span class="am-text-danger">0.00</span>元</p>

                        <div class="am-padding-top-xs">
                            <div class="bg-white am-padding-horizontal-xs">
                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">提现金额</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <input type="number" name="" class="am-form-field" placeholder="提现金额最低100元">
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">持卡人姓名</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <input type="text" name="" class="am-form-field" placeholder="持卡人姓名">
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">银行卡</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <select name="" class="am-form-field">
                                                <option value="">请选择银行卡</option>
                                                <option value="1">卡1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">银行开户行</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <select name="" class="am-form-field am-text-danger">
                                                <option value="">请选择银行开户行</option>
                                                <option value="1">银行1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">网点支行</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <input type="text" name="" class="am-form-field" placeholder="网点支行">
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">提现卡号</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <input type="number" name="" class="am-form-field" placeholder="提现卡号">
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs bb-1">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">手机号</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <input type="text" name="" class="am-form-field" placeholder="手机号"
                                                   maxlength="11">
                                        </div>
                                    </div>
                                </div>

                                <div class="am-padding-vertical-xs">
                                    <div class="am-g">
                                        <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                                            <p class="am-padding-top-xs am-text-right">登录密码</p>
                                        </div>

                                        <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                                            <input type="password" name="" class="am-form-field" placeholder="请输入登录密码">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="am-padding-top-lg">
                            <p class="am-btn am-btn-warning am-btn-block am-radius">提交申请</p>
                        </div>
                    </div>

                    <div id="page2" style="display: none">

                        <p class="am-alert-danger am-padding-sm am-text-center">
                            提现记录
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
                                    <p>提现时间：2018-08-08 08:08:08</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-btn-block am-radius">待审核</p>
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
                                    <p>提现时间：2018-08-08 08:08:08</p>
                                </div>
                                <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                                    <p class="am-btn am-btn-default am-btn-block am-radius">待审核</p>
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