<?php
$this->breadcrumbs=array(
	'Поисковые запросы'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все запросы', 'url'=>array('index')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>