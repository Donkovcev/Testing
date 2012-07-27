<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->link), CHtml::encode($data->link), array('target' => '_blank')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('google_search_terms_id')); ?>:</b>
	<?php echo CHtml::encode($data->google_search_terms_id); ?>
	<br />

</div>