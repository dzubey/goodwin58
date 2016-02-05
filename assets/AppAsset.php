<?php

namespace app\assets;
use yii\web\AssetBundle;
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/css.css',
        'css/media.css',
		'js/mozaik/mozaik.css',
		'js/mozaik/jquery.fancybox-1.3.7.min.css',
		
    ];
    public $js = [
		'js/jssor.slider.min.js',
		'js/jssor.slider.js',
		'js/mozaik/jquery.min.js',
		'js/mozaik/funcy.js',
		'js/mozaik/jquery.fancybox-1.3.7.min.js',
		'js/mozaik/jquery.fancybox-1.3.7.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
