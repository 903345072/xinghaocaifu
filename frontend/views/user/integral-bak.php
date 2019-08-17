



<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">我的积分</h1>
</header>
<div class="mui-content">
    <div>
        <div class="mui-table-view">
            <div class="mui-table mui-text-center">
                <div class="mui-table-cell mui-col-xs-12 uk-text-middle">
                    <div class="mui-table-view-cell">
                        <div class="uk-text-theme" id="jifen"><?= $points ?></div>
                        <div class="uk-text-muted">可用积分</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mui-control-content mui-active">
            <ul class="mui-table-view mui-in-zero ">
                <?php foreach ($userPoints as $point): ?>
                <li class="mui-table-view-cell mui-media">
                    <img class="mui-pull-left uk-margin-right" src="/images/26x26xmgnav-05.png.pagespeed.ic.5xahqavEea.png" width="26" height="26" data-pagespeed-url-hash="155561861" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="mui-media-body">
                        <div class="mui-table uk-text-top">
                            <div class="mui-table-cell mui-col-xs-6">
                                <div class="mui-ellipsis"><?= $point->getTypeValue() ?></div>
                                <div class="mui-h6"></div>
                            </div>
                            <div class="mui-table-cell mui-col-xs-6 mui-text-right">
                                <div class="mui-ellipsis uk-text-theme"><?= $point->points ?>积分</div>
                                <div class="mui-h6"><?= $point->datetime ?></div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
    mui.init();
</script>