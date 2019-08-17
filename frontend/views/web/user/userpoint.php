
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">我的积分</li>
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
                    <a href="<?= url(['/web/userpoint'])?>"><p class="am-btn am-btn-danger am-btn-block am-btn-lg">我的积分</p></a>
                    <a href="<?= url(['/web/userannounce'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">公告</p></a>
                    <a href="<?= url(['/web/usercharge'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">资金明细</p></a>
                    <a href="<?= url(['/web/userrecord'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
                    <a href="<?= url(['/web/userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                    <a href="<?= url(['/web/userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                    <a href="<?= url(['/web/usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>

                </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                <div class="am-padding-sm am-padding-top-0">

                    <div class="am-text-center am-padding-vertical-sm bg-white">
                        <p class="am-text-danger am-text-lg">2700</p>
                        <p>可用积分</p>
                    </div>

                    <div style="min-height: 600px;">

                        <div class="bt-1 am-padding-sm bg-white">
                            <div class="am-g">
                                <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                    <p><i class="am-icon-pie-chart am-icon-sm am-text-primary am-text-middle"></i> 登录积分</p>
                                </div>
                                <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right">
                                    <p class="am-text-danger">300积分</p>
                                    <p class="am-text-sm">2018-5-15 8:55</p>
                                </div>
                            </div>
                        </div>

                        <div class="bt-1 am-padding-sm bg-white">
                            <div class="am-g">
                                <div class="am-u-sm-6 am-u-md-6 am-u-lg-6">
                                    <p><i class="am-icon-pie-chart am-icon-sm am-text-primary am-text-middle"></i> 登录积分</p>
                                </div>
                                <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-text-right">
                                    <p class="am-text-danger">300积分</p>
                                    <p class="am-text-sm">2018-5-15 8:55</p>
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

</script>