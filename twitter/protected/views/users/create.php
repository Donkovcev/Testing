<?php
$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Управление пользователями', 'url'=>array('admin')),
);
?>

<h2>Создать пользователя</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>