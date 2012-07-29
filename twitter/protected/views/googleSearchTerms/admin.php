<?php
$this->breadcrumbs=array(
	'Поисковые запросы'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Все запросы', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('google-search-terms-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Google Search Terms</h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'google-search-terms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'term',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
