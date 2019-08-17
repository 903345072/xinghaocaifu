<?php common\components\View::regCss('login.css') ?>

<!-- <link rel="stylesheet" type="text/css" href="/css/login.css" /> -->
<?php common\components\View::regCss('iconfont/iconfont.css') ?>
<div class="container">
    <div class="row pad_10 list-bom">
        <div class="col-xs-3">
            <a href="<?= url(['site/index']) ?>" class="back-icon">返回首页</a>
        </div>
        <div class="col-xs-6 back-head">关注我们的公众号</div>
        <div class="col-xs-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center" >
            <img style="margin: 10px auto; display: block;padding:50px 0 15px;" src="/images/wx_code.jpg">
            
        </div>
        <div class="col-xs-12 font_20 text-center" style="color:#fff;">扫描二维码，关注我们</div>
    </div>
</div>
 