<?php

namespace frontend\assets;

/**
 * 会员中心基础静态资源
 */
class UserAsset extends \common\components\AssetBundle
{
    public $js = [
        'js/jquery.liMarquee.js',
        'js/layer.js',
        'js/common.js',

    ];
    public $css = [
        'css/layer.css',
        'css/mui.min.css',

    ];
    public $depends = [
        'common\assets\CommonAsset',
        'common\assets\MuiAsset',
        'common\assets\JqueryFormAsset',
    ];
}
