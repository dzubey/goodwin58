<?php

namespace app\assets;
use yii\web\AssetBundle;
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/css.css',
        'css/media.css',
		'js/puzzle/jquery.fancybox.css',
		
    ];
    public $js = [
		'js/jssor.slider.min.js',
		'js/puzzle/jquery.fancybox.js',
		'js/jssor.slider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
