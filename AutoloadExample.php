<?php

use uraankhay\cytoscape\assets\CytoscapeAsset;

namespace uraankhay\cytoscape;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
	public function init() {
	    parent::init();
	    CytoscapeAsset::register( $this->getView() );
	}

    public function run()
    {
        return $this->render('index',[

        ]);
    }
}
