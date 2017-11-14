<?php

namespace uraankhay\cytoscape;

use uraankhay\cytoscape\assets\CytoscapeAsset;

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
