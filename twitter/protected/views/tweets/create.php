<?php
$this->breadcrumbs=array(
	'Записи (твиты)'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все записи', 'url'=>array('index')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>