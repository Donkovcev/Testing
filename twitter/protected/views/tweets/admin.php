<?php

$this->breadcrumbs = array(
    'Записи (твиты)' => array('index'),
    'Администрирование',
);

$this->menu = array(
    array('label' => 'Все записи', 'url' => array('index')),
    array('label' => 'Создать', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tweets-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'tweets-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'text',
        array(
            'type' => 'raw',
            'value' => '$data->users->name',
            'name' => 'users_search',
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
