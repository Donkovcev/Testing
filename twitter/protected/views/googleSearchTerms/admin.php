<?php

$this->breadcrumbs = array(
    'Поисковые запросы' => array('index'),
    'Администрирование',
);

$this->menu = array(
    array('label' => 'Все запросы', 'url' => array('index')),
    array('label' => 'Создать', 'url' => array('create')),
    array('label' => 'Парсинг', 'url' => array('parse')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('google-search-terms-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'google-search-terms-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'term',
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
