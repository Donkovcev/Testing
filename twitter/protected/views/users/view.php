<?php
$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Все пользователи', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'link',
		'google_search_terms_id',
	),
)); ?>
