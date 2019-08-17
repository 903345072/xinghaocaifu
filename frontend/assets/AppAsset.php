<?php

namespace frontend\assets;

/**
 * frontend 基础静态资源
 */
class AppAsset extends \common\components\AssetBundle
{
//    public $jsOptions = [
//        'position' => \yii\web\View::POS_HEAD
//    ];
    public $js = [
//        'js/jquery.min.js',
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
        'common\assets\JqueryFormAsset'
    ];
}
