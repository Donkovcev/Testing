<?php
$this->breadcrumbs=array(
	'System Lists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SystemList', 'url'=>array('index')),
	array('label'=>'Create SystemList', 'url'=>array('create')),
	array('label'=>'Update SystemList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SystemList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SystemList', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type',
		'name',
		'value',
	),
)); ?>
