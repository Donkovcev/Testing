<?php
$this->breadcrumbs=array(
	'System Lists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SystemList', 'url'=>array('index')),
	array('label'=>'Create SystemList', 'url'=>array('create')),
	array('label'=>'View SystemList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SystemList', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>