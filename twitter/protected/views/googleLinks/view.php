<?php
$this->breadcrumbs=array(
	'Google ссылки'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Все ссылки', 'url'=>array('index')),
	array('label'=>'Создать ссылку', 'url'=>array('create')),
	array('label'=>'Update GoogleLinks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GoogleLinks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h2>Просмотр ссылки <?php echo $model->link; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'link',
		'google_search_terms_id',
	),
)); ?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
