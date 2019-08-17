<?php

namespace common\assets;

/**
 * 引入公共js
 *
 * @author ChisWill
 */
class MuiAsset extends \common\components\AssetBundle
{
    public $sourcePath = 'web';
    public $js = [
        'js/mui.min.js',
    ];
    public $css = [
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
