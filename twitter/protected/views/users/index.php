<?php
$this->breadcrumbs=array(
	'Пользователи',
);

$this->menu=array(
	array('label'=>'Создать пользователя', 'url'=>array('create')),
	array('label'=>'Управление пользователями', 'url'=>array('admin')),
);
?>

<h2>Пользователи</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
