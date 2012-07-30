<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

        <?php echo $form->errorSummary($model, '<div class="alert alert-error">', '</div>'); ?>


	<div>
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'google_search_terms_id'); ?>
		<?php echo $form->dropDownList($model,'google_search_terms_id', CHtml::listData(GoogleSearchTerms::model()->findAll(), 'id', 'term')); ?>
		<?php echo $form->error($model,'google_search_terms_id'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->