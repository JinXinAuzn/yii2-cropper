<?php

namespace coldlook\cropper;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author coldlook <jilikun@gmail.com>
 */
class CropperBeginAsset extends AssetBundle
{
    public $sourcePath = '@coldlook/cropper/assets';
    public $jsOptions = ['position' => View::POS_BEGIN];
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}