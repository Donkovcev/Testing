<?php
$this->breadcrumbs=array(
	'Google Search Terms',
);

$this->menu=array(
	array('label'=>'Create GoogleSearchTerms', 'url'=>array('create')),
	array('label'=>'Manage GoogleSearchTerms', 'url'=>array('admin')),
);
?>

<h1>Google Search Terms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
