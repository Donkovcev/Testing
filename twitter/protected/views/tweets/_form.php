<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tweets-form',
	'enableAjaxValidation'=>false,
)); ?>

        <?php echo $form->errorSummary($model, '<div class="alert alert-error">', '</div>'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'users_id'); ?>
		<?php echo $form->dropDownList($model,'users_id', CHtml::listData(Users::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'users_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->