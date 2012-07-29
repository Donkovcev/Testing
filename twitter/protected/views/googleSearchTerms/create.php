<?php
$this->breadcrumbs=array(
	'Поисковые запросы'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Все запросы', 'url'=>array('index')),
	array('label'=>'Управление запросами', 'url'=>array('admin')),
);
?>

<h2>Создание запроса</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>