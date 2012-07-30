<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'users_search'); ?>
		<?php echo $form->textField($model,'users_search'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Поиск', array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->