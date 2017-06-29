<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TemplateBootstrapAsset extends AssetBundle
{
    public $css = [
        'css/template/bootstrap-template.min.css',
    ];
    public $js = [
        'js/template/bootstrap-template.min.js',
    ];
    public $depends = [
        'frontend\assets\AppAsset',
    ];
}
