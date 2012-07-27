<?php
$this->breadcrumbs=array(
	'Google Search Terms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoogleSearchTerms', 'url'=>array('index')),
	array('label'=>'Manage GoogleSearchTerms', 'url'=>array('admin')),
);
?>

<h1>Create GoogleSearchTerms</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>