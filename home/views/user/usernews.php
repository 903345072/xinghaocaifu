<style>
    .am-active .text-999{border-bottom: 2px solid red;}
    .am-active .text-999{color:red;}
</style>
<div class="box am-padding-vertical-xs">

    <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
        <li><a href="#">首页</a></li>
        <li><a href="#">发现</a></li>
        <li class="am-active">信息中心</li>
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
                <a href="<?= url(['usernews'])?>"><p class="am-btn am-btn-danger am-btn-block am-btn-lg">信息中心</p></a>
                <a href="<?= url(['userpoint'])?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">我的积分</p></a>
                <a href="<?= url(['userannounce'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">公告</p></a>
                <!--<a href="<?/*= url(['usercharge'])*/?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">资金明细</p></a>-->
                <a href="<?= url(['userrecord'])?>"> <p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
                <a href="<?= url(['userinvite'])?>">    <p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
                <a href="<?= url(['userpassword'])?>">       <p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
                <a href="<?= url(['usersim'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>
                <a href="<?= url(['userfeedback'])?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
                  <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

              </div>

            </div>

            <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                <div class="am-padding-sm am-padding-top-0">


                    <div class="am-tabs" data-am-tabs="{noSwipe: 1}" id="doc-tab-demo-1">
<!--                        <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">-->
<!--                            <li class="am-active"><a class="cursP">未读</a></li>-->
<!--                            <li><a class="cursP">已读</a></li>-->
<!--                        </ul>-->
                        <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify bg-white am-text-center">
                            <li class="am-active actTab">
                                <p class="am-padding-vertical-sm cursP text-999">未读</p>
                            </li>
                            <li>
                                <p class="am-padding-vertical-sm cursP text-999">已读</p>
                            </li>
                        </ul>

                        <div class="am-tabs-bd">
                            <div class="am-tab-panel am-active">
                                <?php foreach ($list_1 as $k => $v):?>
                                <div class="am-panel am-panel-default readnotice" flag="<?= $v->id?>">
                                    <div class="am-panel-hd"><?= $v->title?></div>
                                    <div class="am-panel-bd">
                                        <?= $v->content?>
                                    </div>
                                </div>
                                <?php endforeach;?>

                            </div>
                            <div class="am-tab-panel">

                                <?php foreach ($list_2 as $k => $v):?>
                                    <div class="am-panel am-panel-default">
                                        <div class="am-panel-hd"><?= $v->title?></div>
                                        <div class="am-panel-bd">
                                            <?= $v->content?>
                                        </div>
                                    </div>
                                <?php endforeach;?>

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
    }();
    $(function () {
        $('.readnotice').click(function () {
          var id = $(this).attr('flag');
          $.ajax({
              url:'read',
              type:'post',
              data: {'id':id}
          })
        })
    })
</script>