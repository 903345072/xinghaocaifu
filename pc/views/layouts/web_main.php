<?php use common\helpers\Html; ?>
<?php $this->beginPage() ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8"/>
    <title>星浩财富</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="stylesheet" type="text/css" href="/web/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/web/css/css.css"/>
    <script type="text/javascript" src="/web/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="/web/js/jquery.SuperSlide.2.1.1.js"></script>
    <style>
      body {
        background: #F4F4F4 !important;
      }
    </style>
  </head>
  <body>
  <div class="header">
    <div class="wrap clearfix">
      <a href="<?= url(['site/index']) ?>" class="fl logo">
        <img style="width: 45px;" src="/web/images/logo.png" alt="">
      </a>
      <div class="fl menu">
        <a class="class1" href="<?= url(['site/index']) ?>" ..="">首页</a>
        <a class="class2" href="<?= url(['order/deal']) ?>" ..="">交易</a>
<!--        <a class="class3" href="--><?//= url(['order/deal', 'model_type' => 2]) ?><!--" ..="">模拟</a>-->
<!--        <a class="class4" href="--><?//= url(['line/index']) ?><!--">直播</a>-->
        <a class="class5" href="<?= url(['user/newGui']) ?>" ..="">帮助</a>
        <a class="class6" href="<?= url(['line/company']) ?>" ..="">关于</a>
        <a class="class7" href="<?= url(['user/center']) ?>">个人中心</a>
      </div>
      <div class="fr header_r">
          <?php if (user()->isGuest) : ?>
            <span>
						<a href="<?= url(['site/login']) ?>">
							登录
						</a>
					</span>
            <span>
						<a href="<?= url(['site/register']) ?>">
							注册
						</a>
					</span>
          <?php else: ?>
            <span class="user">欢迎您 <?= u()->nickname ?></span>
            <a href="<?= url(['site/logout']) ?>">退出</a>
          <?php endif ?>
        <a style="display: none"
          href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=1013221&configID=71213&jid=8827179158"
          class="kefu" target="_blank">
          <i></i>
          <span> 客服</span>
        </a>
      </div>
    </div>
  </div>
  <script>
    $(function () {
      var title = '<?= Html::encode($this->title) ?>';
      if (title == '首页') {
        $('.class1').addClass('on');
      }
      if (title == '实盘交易' || title == '交易界面') {
        $('.class2').addClass('on');
      }
      if (title == '模拟交易' || title == '模拟交易界面') {
        $('.class3').addClass('on');
      }
      if (title == '直播') {
        $('.class4').addClass('on');
      }
      if (title == '新手指引' || title == '规则') {
        $('.class5').addClass('on');
      }
      if (title == '公司资质' || title == '最新资讯' || title == '系统公告') {
        $('.class6').addClass('on');
      }
      if (title == '个人中心' || title == '提现' || title == '充值' || title == '推广赚钱' || title == '信息中心' || title == '修改密码' || title == '我的积分' || title == '交易记录' || title == '模拟交易列表' || title == '意见反馈') {
        $('.class7').addClass('on');
      }
    })
  </script>


  <?php $this->beginBody() ?>
  <?= $content ?>
  <?php $this->endBody() ?>


  <div class="footer">
      <div style="height: 45px;" class="foot_Logo"></div>
<!--    <img style="width: 45px;" src="/web/images/foot_logo.png" alt="" class="foot_Logo">-->
    <div class="foot_wrap">
      <ul class="ul clearfix">
        <li>
          <h3>快速导航</h3>

          <p>
            <a href="<?= url(['user/promotion']) ?>">◆ 推广赚钱</a>

          </p>

            <p>

                <a href="<?= url(['user/new-gui']) ?>">◆ 新手指引</a>
            </p>
            <p>

                <a href="<?= url(['user/center']) ?>">◆ 会员中心</a>
            </p>




        </li>
        <li>
          <h3>快速导航</h3>
          <p>
            <a href="javascript:;">◆ 公司名称：香港富星环球投资有限公司</a>
          </p>
          <p>
            <a href="javascript:;">◆ 地址：香港九龙皇家大道2至16楼何金钟3楼277室</a>
          </p>
          <p>
            <a href="javascript:;">◆ 电话：00852 30506766</a>
          </p>
          <p>
            <a href="javascript:;">◆ 邮箱：cxyuanma@qq.com</a>
          </p>
          <!--p>
            <a href="javascript:;">◆ 购买源码QQ：3522823534</a>
          </p-->
        </li>
        <li class="wx">
          <div class="clearfix">
            <img src="<?= config('web_url').config('ios_download_code')  ?>" alt="" class="fl">
            <img src="<?= config('web_url').config('android_download_code') ?>" alt="" class="fl">
          </div>
          <p class="gz"></p>
        </li>
      </ul>
    </div>
    <div class="copr">
      <p>Copyright©Hong Kong Rich Star Global Investment Limited.,</p>
      <p>LIMITE. All Rights Reserved. 香港富星环球投资有限公司</p>
      <p>Company address：RM 3,27/F HO KING COMM CTR NO 2-16 FA YUEN ST MONG KOK KLN HONG KONG </p>
    </div>
  </div>
  </body>
  <script type="text/javascript" src="/web/js/js.js"></script>
  <script>
    $(".help_list li").click(function () {
      $(this).addClass('on').siblings().removeClass();
    })
  </script>
  <script language="javascript"
          src="http://chat.livechatvalue.com/chat/chatClient/monitor.js?jid=8827179158&companyID=1013221&configID=71212&codeType=custom"></script>
  </html>
<?php $this->endPage() ?>