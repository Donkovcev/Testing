<?php
$this->breadcrumbs=array(
	'Теги'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все теги', 'url'=>array('index')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>