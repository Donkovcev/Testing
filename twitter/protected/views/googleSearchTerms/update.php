<?php
$this->breadcrumbs=array(
	'Google Search Terms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoogleSearchTerms', 'url'=>array('index')),
	array('label'=>'Create GoogleSearchTerms', 'url'=>array('create')),
	array('label'=>'View GoogleSearchTerms', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GoogleSearchTerms', 'url'=>array('admin')),
);
?>

<h1>Update GoogleSearchTerms <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>