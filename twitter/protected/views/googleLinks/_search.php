<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'googleSearchTerms_search'); ?>
		<?php echo $form->textField($model,'googleSearchTerms_search'); ?>
	</div>
    
	<div>
		<?php echo $form->label($model,'checked'); ?>
		<?php echo $form->textField($model,'checked'); // TODO: Сделать нормальный поиск ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Поиск', array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->