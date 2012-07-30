<?php
$this->breadcrumbs=array(
	'Записи (твиты)'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Все записи', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<h1>View Tweets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'text',
		'users_id',
	),
)); ?>
