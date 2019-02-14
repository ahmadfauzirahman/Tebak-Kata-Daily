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
        'lib/bootstrap/css/bootstrap.min.css',
        'lib/font-awesome/css/font-awesome.min.css',
        'lib/animate/animate.min.css',
        'lib/ionicons/css/ionicons.min.css',
        'lib/owlcarousel/assets/owl.carousel.min.css',
        'lib/magnific-popup/magnific-popup.css',
        'lib/ionicons/css/ionicons.min.css',
        'css/style.css',
        'css/site.css',

    ];
    public $js = [
       'lib/jquery/jquery.min.js',
//        'lib/jquery/jquery-migrate.min.js',
        'lib/bootstrap/js/bootstrap.bundle.min.js',
        'lib/easing/easing.min.js',
        'lib/superfish/hoverIntent.js',
        'lib/superfish/superfish.min.js',
        'lib/wow/wow.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'lib/magnific-popup/magnific-popup.min.js',
        'lib/sticky/sticky.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
