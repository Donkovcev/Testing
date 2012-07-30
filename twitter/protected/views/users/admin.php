<?php
$this->breadcrumbs = array(
    'Пользователи' => array('index'),
    'Администрирование',
);

$this->menu = array(
    array('label' => 'Все пользователи', 'url' => array('index')),
    array('label' => 'Создать', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Расширенный поиск', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'users-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'name',
        'link',
        array(
            'type' => 'raw',
            'value' => '$data->googleSearchTerms->term',
            'name' => 'googleSearchTerms_search',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
    'pager' => array(
        'header' => '',
        'firstPageLabel' => '<<',
        'prevPageLabel' => '<',
        'nextPageLabel' => '>',
        'lastPageLabel' => '>>',
    )
));
?>
