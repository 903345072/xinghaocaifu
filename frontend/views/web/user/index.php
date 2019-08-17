<?php $this->regCss('iconfont/iconfont.css') ?>
<?php $this->regCss('mine.css') ?>
<style type="text/css">body{background:#fff;}</style>
<!--头部导航-->
<div class="container bg_r">
    <div class="row ">
        <div class="col-xs-12">
            <div class="media">
                <div class="media-left media-middle">
                    <p class=" mine-pic">
                        <img src="<?= u()->face ?>" width="73" height="73">
                    </p>
                </div>
                <div class="media-body">
                    <p></p>
                    <p>个人资产(元)&nbsp;&nbsp;<?= $user->account - $user->blocked_account ?></p>
                    <p>持仓资金(元)&nbsp;&nbsp;<?= $user->blocked_account ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--中间内容-->
<div class="container" style="padding-bottom:80px;">
    <div class="row">
        <ul class="mine-list">
            <li>
                <a href="<?= url('withDraw') ?>">
                    <p class="pad_t5"><img src="/images/main_9.png" width="18" height="22"></p>
                    <p class="mar_b0 pad_t5">提现</p>
                </a>
            </li>
            <li>
                <a class="globalLogin" data-url="<?= url(['user/recharge']) ?>" data-guest="<?= user()->isGuest ?>">
                    <p class="pad_t5"><img src="/images/main_1.png" width="18" height="22"></p>
                    <p class="mar_b0 pad_t5">充值</p>
                </a>
            </li>
            <li>
                <a href="<?= url('user/balancePayDetail') ?>">
                    <p class="pad_t5"><img src="/images/main_8.png" width="18" height="22"></p>
                    <p class="mar_b0 pad_t5">收支明细</p>
                </a>
            </li>
        </ul>
        <ul class="mine-list">
            <li>
                <a href="<?= url('user/transDetail') ?>">
                    <p class="pad_t5"><img src="/images/main_4.png" width="18" height="22"></p>
                    <p class="mar_b0 pad_t5">交易明细</p>
                </a>
            </li>
            <li>
                <a href="<?= url('user/experience') ?>">
                    <p class="pad_t8"><img src="/images/main_13.png" width="28" height="20"></p>
                    <p class="mar_b0 pad_t5">体验劵</p>
                </a>
            </li>
            <li>
                <a href="<?= url('user/manager') ?>">
                    <p class="pad_t5"><img src="/images/main_5.png" width="24" height="24"></p>
                    <p class="mar_b0 pad_t5"><?= $manager ?></p>
                </a>
            </li>
        </ul>
        <ul class="mine-list">
            <li>
                <a href="<?= url('user/password') ?>">
                    <p class="pad_t5"><img src="/images/main_7.png" width="24" height="24"></p>
                    <p class="mar_b0 pad_t5">修改密码</p>
                </a>
            </li>
<!--             <li>
              <a href="#">
                <p class="pad_t5"><img src="/images/main_6.png" width="24" height="24"></p>
                <p class="mar_b0 pad_t5">资讯</p>
              </a>
            </li> -->
            <li>
                <a href="<?= url('user/logout') ?>">
                    <p class="pad_t5"><img src="/images/main_3.png" width="24" height="24"></p>
                    <p class="mar_b0 pad_t5">退出</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="bottom-infor">客服QQ: 3505186890</div>
<!--底部导航 begin-->
<div class="nav navbar-fixed-bottom clearfix">
    <ul class="footer_nav" style="margin-bottom:-10px;">
        <li>
            <a href="<?= url('site/index') ?>" class="img-foot">
                <img src="/images/mine_1.png" width="20" height="22" class="img1">
                <img src="/images/index_1.png" width="20" height="22" class="img2" style="display:none;">
                <p>分析</p>
            </a>
        </li>
        <li>
            <a href="<?= url('order/position') ?>" class="img-foot">
                <img src="/images/mine_2.png" width="18" height="22" class="img1">
                <img src="/images/cqd_4.png" width="18" height="22" class="img2" style="display:none;">
                <p>持仓单</p>
            </a>
        </li>
        <li>
            <a href="<?= url('user/share') ?>" class="img-foot">
                <img src="/images/mine_3.png" width="22" height="22" class="img1">
                <img src="/images/mian_15.png" width="22" height="22" class="img2" style="display:none;">
                <p>邀请</p>
            </a>
        </li>
        <li>
            <a class="img-foot loginBtn" data-user="<?= user()->isGuest ?>">
                <img src="/images/cqd_5.png" width="19" height="22" class="img1" style="display:none;">
                <img src="/images/main_11.png" width="19" height="22" class="img2">
                <p style="color:#e6262e;">个人中心</p>
            </a>
        </li>
    </ul>
</div>
<!--底部导航结束-->