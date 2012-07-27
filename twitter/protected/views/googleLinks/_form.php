<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'google-links-form',
        'enableAjaxValidation' => false,
            ));
    ?>


    <?php echo $form->errorSummary($model, '<div class="alert alert-error">', '</div>'); ?>


    <div class="row">
        <?php echo $form->labelEx($model, 'link'); ?>
        <?php echo $form->textField($model, 'link', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'link'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'google_search_terms_id'); ?>
        <?php echo $form->dropDownList($model, 'google_search_terms_id', CHtml::listData(GoogleSearchTerms::model()->findAll(), 'id', 'term')); ?>
        <?php echo $form->error($model, 'google_search_terms_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->