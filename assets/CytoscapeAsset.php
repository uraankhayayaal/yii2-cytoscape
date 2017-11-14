<?php

namespace uraankhay\cytoscape\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CytoscapeAsset extends AssetBundle
{
    public $basePath = '../cytoscape/src';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
