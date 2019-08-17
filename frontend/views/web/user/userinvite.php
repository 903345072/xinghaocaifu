
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">个人中心</a></li>
        <li class="am-active">推广赚钱</li>
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
                    <a href="<?= url(['/web/userrecord'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
                    <a href="<?= url(['/web/userinvite'])?>">    <p class="am-btn am-btn-danger am-btn-block am-btn-lg">推广赚钱</p></a>
                    <a href="<?= url(['/web/userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                    <a href="<?= url(['/web/usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>

                </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
                <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

                    <div class="am-padding-vertical-xs bb-1 b-red">
                        <div class="am-g am-text-center">
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                <p class="am-text-danger">00</p>
                                <p><span class="am-text-middle">佣金</span> <span class="am-btn am-btn-xs am-btn-danger">提现</span>
                                </p>
                            </div>
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                <p class="am-text-danger am-text-lg">5%</p>
                                <p>佣金比例</p>
                            </div>
                            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
                                <p class="am-text-danger am-text-lg">0</p>
                                <p>我的邀请</p>
                            </div>
                        </div>
                    </div>

                    <p class="am-padding-vertical-xs">
                        <i class="am-icon-credit-card am-text-danger am-icon-sm"></i>
                        <span>我的邀请码：</span>
                    </p>
                    <p class="am-padding-vertical-xs">
                        <i class="am-icon-cny am-text-danger am-icon-sm"></i>
                        <span>我要赚钱</span>
                        <a href="" class="am-text-danger">查看如何赚钱？</a>
                    </p>

                    <div class="am-padding-sm bt-1">
                        <div class="am-g">
                            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-top-xs">
                                <span class="am-text-danger">第一步：</span>
                                <span>发送推广链接给朋友</span>
                            </div>
                            <div class="am-u-sm-8 am-u-md-8 am-u-lg-8 am-padding-right-0">
                                <input type="text" id="shareLink" class="am-form-field" value="11111">
                            </div>
                            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 am-padding-left-0">
                                <p class="am-btn am-btn-danger am-btn-block am-radius" id="copyBtn">复制</p>
                            </div>
                        </div>
                    </div>

                    <div class="am-padding-sm bt-1">
                        <p>
                            <span class="am-text-danger">第二步：</span>
                            <span>点击链接注册成为您邀请的用户</span>
                        </p>
                    </div>

                    <div class="am-padding-sm bt-1">
                        <p>
                            <span class="am-text-danger">第三步：</span>
                            <span>您的邀请用户开始交易</span>
                        </p>
                    </div>

                    <div class="am-padding-sm bt-1 bb-1">
                        <p>
                            <span class="am-text-danger">第四步：</span>
                            <span>开启赚钱模式</span>
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>


</div>


<script type="text/javascript">
    !function () {
        var copyBtn = $('#copyBtn');
        var shareLink = $('#shareLink');
        copyBtn.on('click', function () {
            shareLink.select();
            try {
                var successful = document.execCommand('copy');
                var msg = successful ? '成功复制到剪贴板' : '该浏览器不支持点击复制到剪贴板';
                alert(msg);
            } catch (err) {
                alert('该浏览器不支持点击复制到剪贴板');
            }
        });
    }()
</script>