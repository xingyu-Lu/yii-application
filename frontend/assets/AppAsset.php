<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/amazeui.min.css?v=0.1',
        'css/app.css',
    ];
    public $js = [
        'js/amazeui.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
