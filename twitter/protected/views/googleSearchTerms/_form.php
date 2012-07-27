<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'google-search-terms-form',
	'enableAjaxValidation'=>false,
)); ?>

        <?php echo $form->errorSummary($model, '<div class="alert alert-error">', '</div>'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'term'); ?>
		<?php echo $form->textArea($model,'term',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'term'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->