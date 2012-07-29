<?php
$this->breadcrumbs=array(
	'Google Search Terms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Все запросы', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Подробней', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h2>Редактирование</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>