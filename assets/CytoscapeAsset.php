<?php

namespace uraankhay\cytoscape\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CytoscapeAsset extends AssetBundle
{
    public $basePath = '../';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/script.js',
        'cytoscape/src/dist/cytoscape.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
