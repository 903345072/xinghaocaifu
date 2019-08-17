<style>
    body {
        background: #d4272b url(/images/login-bg.jpg) no-repeat 50% 0/cover
    }
    .mui-content {
        background-color: transparent
    }

    .mui-bar-nav {
        background-color: transparent
    }
</style>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
</header>
<div class="mui-content">
    <div class="mui-content-padded">
        <div class="uk-text-medium mui-text-center">
            <img src="<?=config('web_logo')?>">
        </div>
    </div>
    <div class="mui-input-card">
        <div class="mui-table-view mui-in-input-card">
            <?php $form = self::beginForm(['showLabel' => false, 'id' => 'loginform']) ?>
            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAwFBMVEWZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZkEMgNjAAAAP3RSTlMABQcICQsNEBcYIikqLDQ1Njc7PT9JTE9WXF1lZmpscnR4eXt9gIWHi42vtLa8vb/CxcjO4OHj5+jq7PDx8/SgWpp1AAAAjUlEQVQY02WPxxKCQBAFG0UxY86CqBgwYFjEzP//lYddsCjfpev1HGYGANq713PbIokTDA1jEEzj3hQFgGJgKrFYSq7mSrhumv/CWUtubCU6vqTfVSJ7LwOUHrl47+RiQP6c3EHl2oferapqwwtnGdCc0KsDtYOwdDnRLbE3+Yy031Pa+E1EKhGnKJXjFyUADprqI9SBAAAAAElFTkSuQmCC">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($model, 'username')->textInput(['placeholder' => '手机号码','class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>
            <div class="mui-table-view-cell mui-media">
                <div class="mui-table">
                    <div class="mui-table-cell uk-text-middle uk-width-em-2 mui-text-center">
                        <img class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEWZmZnMzMz///+ZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnMzMzMzMyZmZmZmZmZmZmZmZmZmZnMzMyZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZly+It3AAAAJ3RSTlMAAAAGBwkKDhESKSotMGZnaWpscHGAgK+wsbKztLXFxsvM6fH09fzEdjzcAAAAcklEQVQY03XOyRKCMBBF0ZuHIo6AGiTiCEr+/w/dUF2aKu/yLPo1csD2+n6FNeCEHGz63aKo+5VBqAH2J4OhAFgOBhEA4h/I2zFOje1cqOoyprJLKdR4LN8Y3G8JPB8JeJ/A8ZDA19HqPLPZrhTKw89jH6mnCbvVGj10AAAAAElFTkSuQmCC">
                    </div>
                    <div class="mui-media-body uk-input-blank">
                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => '登录密码','class' => 'uk-input uk-text-medium']) ?>
                    </div>
                </div>
            </div>
            <?php self::endForm() ?>
        </div>
    </div>
    <div class="mui-content-padded mui-text-right uk-text-medium uk-text-contrast">
        <a href="<?= url(['site/forget']) ?>">忘记密码</a>
    </div>
    <div class="mui-content-padded ">
        <button type="button" class="mui-btn mui-btn-warning mui-btn-block ajaxpost_form" formid="loginform" ajaxurl="<?= url('site/login') ?>" ajax-callback="loginset">登入操盘</button>
    </div>
    <div class="mui-content-padded uk-margin-medium-top">
        <a class="mui-btn mui-btn-themewhite mui-btn-block" href="<?=url(['site/register'])?>">立即开户</a>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
    mui.init();

    function loginset(obj, datajson) {
        document.location = "<?= url('site/index') ?>";
    }
</script>