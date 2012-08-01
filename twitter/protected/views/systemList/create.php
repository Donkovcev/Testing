<?php
$this->breadcrumbs=array(
	'System Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SystemList', 'url'=>array('index')),
	array('label'=>'Manage SystemList', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>