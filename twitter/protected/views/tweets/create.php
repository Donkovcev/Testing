<?php
$this->breadcrumbs=array(
	'Tweets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tweets', 'url'=>array('index')),
	array('label'=>'Manage Tweets', 'url'=>array('admin')),
);
?>

<h1>Create Tweets</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>