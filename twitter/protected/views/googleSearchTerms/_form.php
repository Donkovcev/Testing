<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'google-search-terms-form',
	'enableAjaxValidation'=>false,
)); ?>

        <?php echo $form->errorSummary($model, '<div class="alert alert-error">', '</div>'); ?>


		<?php echo $form->labelEx($model,'term'); ?>
		<?php echo $form->textArea($model,'term',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'term'); ?>


	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->