<?php
$this->breadcrumbs=array(
	'Google ссылки',
);

$this->menu=array(
	array('label'=>'Создать ссылку', 'url'=>array('create')),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h2>Google ссылки</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
