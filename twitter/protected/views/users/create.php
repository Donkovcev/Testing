<?php
$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все пользователи', 'url'=>array('index')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>