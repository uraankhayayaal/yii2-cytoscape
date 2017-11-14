<?php

namespace uraankhay\cytoscape\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CytoscapeAsset extends AssetBundle
{
    public $sourcePath = '@uraankhay/cytoscape/src/';

    public $css = [
        'css/style.css',
    ];
    public $js = [
        'cytoscape/dist/cytoscape.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
