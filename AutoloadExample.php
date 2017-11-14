<?php

namespace uraankhay\cytoscape;

use uraankhay\cytoscape\assets\CytoscapeAsset;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
	public $model;

	public function init() {
	    parent::init();
	    CytoscapeAsset::register( $this->getView() );
	}

    public function run()
    {
	    $elements = [];
	    $index = 0;
	    $row = 0;
	    foreach ($this->model as $key => $item) {
	    	$elements[] = [
	    		'data' => ['id' => $item->name],
	    		'position' => ['x' => 10*$index, 'y' => 50*$row],
	    	];
	    	if(!empty($item->parent_id)){
	    		$edge_label = ($item->show_for_option_id == null) ? 'Any' : $item->showforoption->value;
	    		$elements[] = [
	    			'data' => [
	    				'id' => $item->id . '-' . $item->parent_id, 
	    				'label' => $edge_label, 
	    				'source' => $item->parent->name, 
	    				'target' => $item->name
	    			]
	    		];
	    		$row++;
	    		$index = 0;
	    	}
	    	$index++;
	    }

        return $this->render('index',[
        	'elements' => $elements,
        ]);
    }
}
