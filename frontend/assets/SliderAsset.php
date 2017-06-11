<?php

namespace frontend\assets;
use yii\web\AssetBundle;

/**
 * @author anna
 */
class SliderAsset extends AssetBundle
{
    public $css = [
        'css/gallery/nivo-slider.css',
    ];
    public $js = [
        'js/nivo/jquery.nivo.slider.pack.js',
    ];
        public $depends = [
        'yii\web\JqueryAsset',
    ];
}
