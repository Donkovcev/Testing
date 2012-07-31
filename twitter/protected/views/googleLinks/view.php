<?php
$this->breadcrumbs=array(
	'Google ссылки'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Все ссылки', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Администрирование', 'url'=>array('admin')),
);

$labels = GoogleLinks::model()->attributeLabels();
?>

<table class="table table-bordered table-striped">
    <tr>
        <th><?= $labels['link']; ?></th>
        <th><?= $labels['google_search_terms_id']; ?></th>
        <th><?= $labels['checked']; ?></th>
    </tr>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
        'pager' => array(
            'firstPageLabel' => '<<',
            'prevPageLabel' => '<',
            'nextPageLabel' => '>',
            'lastPageLabel' => '>>',
        )
    ));
    ?>
</table>