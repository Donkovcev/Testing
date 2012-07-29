<?php
$this->breadcrumbs = array(
    'Поисковые запросы',
);

$this->menu = array(
    array('label' => 'Создать', 'url' => array('create')),
    array('label' => 'Управление', 'url' => array('admin')),
);

$labels = GoogleSearchTerms::model()->attributeLabels();
?>

<h2>Поисковые запросы</h2>




<table class="table table-bordered table-striped">
    <tr>
        <th><?= $labels['term']; ?></th>
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