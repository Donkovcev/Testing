<?php
$this->breadcrumbs=array(
	'Поисковые запросы'=>array('index'),
	$model->term,
);

$this->menu=array(
	array('label'=>'Все запросы', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'term',
	),
)); ?>
