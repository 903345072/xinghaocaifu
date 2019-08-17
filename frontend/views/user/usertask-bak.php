<!DOCTYPE html>
<html lang="zh-cn">
<header class="mui-bar mui-bar-nav">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <title>任务中心</title>
  <link rel="stylesheet" href="/css/amazeui.min.css">
  <link rel="stylesheet" href="/css/commonstyle.css">
  <style>
    body {
      background-color: #f5f5f5
    }

    .actTab p {
      color: #dd514c;
      border-bottom: 1px solid #dd514c
    }
  </style>
  <a class="mui-icon mui-icon-left-nav mui-pull-left" href="<?= url(['discover/discovery']) ?>"></a>
  <h1 class="mui-title">任务中心</h1>
</header>

<body>

<div class="am-padding-sm bg-red">
  <div class="am-g">
    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-left-xs">
      <p class="am-icon am-icon-angle-left am-icon-sm col-white"></p>
    </div>
    <div class="am-u-sm-8 am-u-md-8 am-u-lg-8">
      <p class="am-text-center col-white">任务中心</p>
    </div>
    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-right-xs am-text-right">
      <!--            <p class="am-icon am-icon-question-circle-o am-icon-sm col-white"></p>-->
    </div>
  </div>
</div>

<div class="bg-white">
  <div class="am-g am-text-center" id="tabBtns">
    <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0 actTab">
      <p class="am-padding-vertical-sm">新手任务</p>
    </div>
    <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
      <p class="am-padding-vertical-sm">每日任务</p>
    </div>
    <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
      <a href="<?= url(['user/integral']) ?>"><p class="am-padding-vertical-sm">我的积分</p></a>
    </div>
  </div>
</div>

<div class="am-padding-top-xs">

  <div class="pageOne bg-white am-padding-bottom-sm am-text-sm">

    <div class="am-padding-horizontal-sm am-padding-top-sm">
      <div class="am-g am-alert-danger am-padding-vertical-xs am-radius">
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-padding-top-xs">注册成功</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
          <p class="am-padding-top-xs">送1800积分</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-btn am-btn-default am-btn-sm am-radius">已完成</p>
        </div>
      </div>
    </div>

    <div class="am-padding-horizontal-sm am-padding-top-sm">
      <div class="am-g am-alert-danger am-padding-vertical-xs am-radius">
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-padding-top-xs">首次成功充值</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
          <p class="am-padding-top-xs">送1800积分</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
            <?php if ($data['isRechargePoints']): ?>
              <p class="am-btn am-btn-default am-btn-sm am-radius">已完成</p>
            <?php else: ?>
              <a href="<?= url(['user/recharge']) ?>"><p class="am-btn am-btn-warning am-btn-sm am-radius">去做任务</p></a>
            <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="am-padding-horizontal-sm am-padding-top-sm">
      <div class="am-g am-alert-danger am-padding-vertical-xs am-radius">
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-padding-top-xs">首次模拟交易</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
          <p class="am-padding-top-xs">送500积分</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
            <?php if ($data['isTradeMoniPoints']): ?>
              <p class="am-btn am-btn-default am-btn-sm am-radius">已完成</p>
            <?php else: ?>
              <a href="<?= url(['order/deal', 'model_type' => 2]) ?>"><p
                  class="am-btn am-btn-warning am-btn-sm am-radius">去做任务</p></a>
            <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="am-padding-horizontal-sm am-padding-top-sm">
      <div class="am-g am-alert-danger am-padding-vertical-xs am-radius">
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-padding-top-xs">首次实盘交易</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
          <p class="am-padding-top-xs">送2800积分</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
            <?php if ($data['isTradePoints']): ?>
              <p class="am-btn am-btn-default am-btn-sm am-radius">已完成</p>
            <?php else: ?>
              <a href="<?= url(['order/deal']) ?>"><p class="am-btn am-btn-warning am-btn-sm am-radius">去做任务</p></a>
            <?php endif; ?>
        </div>
      </div>
    </div>


  </div>

  <div class="pageOne bg-white am-padding-bottom-sm am-text-sm" style="display: none">

    <div class="am-padding-horizontal-sm am-padding-top-sm">
      <div class="am-g am-alert-danger am-padding-vertical-xs am-radius">
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-padding-top-xs">每天登陆</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
          <p class="am-padding-top-xs">送300积分</p>
        </div>
        <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
          <p class="am-btn am-btn-default am-btn-sm am-radius">已完成</p>
        </div>
      </div>
    </div>

  </div>

  <div class="pageOne bg-white am-padding-bottom-sm am-text-sm" style="display: none">

      <?php foreach ($userPoints as $point): ?>
        <div class="am-padding-horizontal-sm am-padding-top-sm">
          <div class="am-g am-alert-danger am-padding-vertical-xs am-radius">
            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
              <p class="am-padding-top-xs"><?= $point->getTypeValue() ?></p>
            </div>
            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 am-padding-0">
              <p class="am-padding-top-xs"><?= $point->points ?>积分</p>
            </div>
            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
              <p class="am-btn am-btn-default am-btn-sm am-radius">已完成</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

  </div>

</div>


<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  !function () {

    var tabBtns = $('#tabBtns .am-u-sm-4');
    var pages = $('.pageOne');
    tabBtns.on('click', function () {
      var index = $(this).index();
      tabBtns.removeClass('actTab');
      pages.hide();
      tabBtns.eq(index).addClass('actTab');
      pages.eq(index).show();
    })


  }()
</script>
</body>
</html>