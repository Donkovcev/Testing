<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->link), $data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('google_search_terms_id')); ?>:</b>
	<?php echo CHtml::encode($data->googleSearchTerms->term); ?>
	<br />


</div>

<?php //var_dump($data); ?>