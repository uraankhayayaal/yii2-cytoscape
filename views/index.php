<?php

use yii\helpers\JSON;

?>

<div class="row">
	<div class="col-xs-12">
		<div id="cy"></div>
	</div>
</div>


<?php 
$elements = JSON::encode($elements);
$this->registerJs(<<<JS
var myElements = $elements;
var cy = cytoscape({

  container: document.getElementById('cy'), // container to render in

  elements: myElements,

  style: [ // the stylesheet for the graph
    {
      selector: 'node',
      style: {
        'background-color': '#666',
        'label': 'data(id)'
      }
    },

    {
      selector: 'edge',
      style: {
        'width': 3,
        'line-color': '#ccc',
        'target-arrow-color': '#ccc',
        'target-arrow-shape': 'triangle',
        'label': 'data(label)'
      }
    }
  ],

  layout: {
    name: 'breadthfirst',
    //rows: 2
  }

});
JS
);
?>