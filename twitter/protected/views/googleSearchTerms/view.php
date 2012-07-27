<?php
$this->breadcrumbs=array(
	'Google Search Terms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GoogleSearchTerms', 'url'=>array('index')),
	array('label'=>'Create GoogleSearchTerms', 'url'=>array('create')),
	array('label'=>'Update GoogleSearchTerms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GoogleSearchTerms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoogleSearchTerms', 'url'=>array('admin')),
);
?>

<h1>View GoogleSearchTerms #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'term',
	),
)); ?>
