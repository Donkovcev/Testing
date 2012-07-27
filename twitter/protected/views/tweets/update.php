<?php
$this->breadcrumbs=array(
	'Tweets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tweets', 'url'=>array('index')),
	array('label'=>'Create Tweets', 'url'=>array('create')),
	array('label'=>'View Tweets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tweets', 'url'=>array('admin')),
);
?>

<h1>Update Tweets <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>