<?php
$this->breadcrumbs=array(
	'Google ссылки'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все ссылки', 'url'=>array('index')),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h2>Создать ссылку</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>