<?php
$this->breadcrumbs=array(
	'Теги'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Все теги', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>