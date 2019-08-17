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

    </style>
  </head>
  <body>

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



  </body>
  <script type="text/javascript" src="/web/js/js.js"></script>
  <script>
    $(".help_list li").click(function () {
      $(this).addClass('on').siblings().removeClass();
    })
  </script>

  </html>
<?php $this->endPage() ?>