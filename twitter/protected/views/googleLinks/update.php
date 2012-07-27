<?php
$this->breadcrumbs=array(
	'Google ссылки'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Все ссылки', 'url'=>array('index')),
	array('label'=>'Создать ссылку', 'url'=>array('create')),
	array('label'=>'Просмотреть ссылку', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h2>Редактирование ссылки <?php echo $model->link; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>