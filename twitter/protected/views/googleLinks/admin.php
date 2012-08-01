<?php

$this->breadcrumbs = array(
    'Google ссылки' => array('index'),
    'Администрирование',
);

$this->menu = array(
    array('label' => 'Все ссылки', 'url' => array('index')),
    array('label' => 'Создать', 'url' => array('create')),
    array('label' => 'Проверить ссылки', 'url' => array('check')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('google-links-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'google-links-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'link',
        array(
            'type' => 'raw',
            'value' => '$data->googleSearchTerms->term',
            'name' => 'googleSearchTerms_search',
        ),
        'checked',
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
