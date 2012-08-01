<?php
$this->breadcrumbs=array(
	'System Lists',
);

$this->menu=array(
	array('label'=>'Create SystemList', 'url'=>array('create')),
	array('label'=>'Manage SystemList', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
