<?php
$this->breadcrumbs=array(
	'System Lists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SystemList', 'url'=>array('index')),
	array('label'=>'Create SystemList', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('system-list-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'system-list-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'type',
		'name',
		'value',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
