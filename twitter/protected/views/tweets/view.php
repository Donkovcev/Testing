<?php
$this->breadcrumbs=array(
	'Tweets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tweets', 'url'=>array('index')),
	array('label'=>'Create Tweets', 'url'=>array('create')),
	array('label'=>'Update Tweets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tweets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tweets', 'url'=>array('admin')),
);
?>

<h1>View Tweets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
		'users_id',
	),
)); ?>
