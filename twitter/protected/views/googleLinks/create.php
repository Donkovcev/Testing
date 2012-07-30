<?php
$this->breadcrumbs=array(
	'Google ссылки'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все ссылки', 'url'=>array('index')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>