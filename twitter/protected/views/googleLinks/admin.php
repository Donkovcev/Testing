<?php
$this->breadcrumbs=array(
	'Google ссылки'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Все ссылки', 'url'=>array('index')),
	array('label'=>'Создать ссылку', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('google-links-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Управление ссылками</h2>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'google-links-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'link',
		'google_search_terms_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
