<?php

$this->breadcrumbs = array(
    'Теги' => array('index'),
    'Администрирование',
);

$this->menu = array(
    array('label' => 'Список тегов', 'url' => array('index')),
    array('label' => 'Создать', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tags-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'tags-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'value',
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
