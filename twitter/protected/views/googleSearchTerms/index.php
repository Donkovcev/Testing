<?php
$this->breadcrumbs = array(
    'Поисковые запросы',
);

$this->menu = array(
    array('label' => 'Создать', 'url' => array('create')),
    array('label' => 'Администрирование', 'url' => array('admin')),
);

$labels = GoogleSearchTerms::model()->attributeLabels();

?>

<table class="table table-bordered table-striped">
    <tr>
        <th><?php echo $labels['term']; ?></th>
    </tr>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
        'pager' => array(
            'header' => '',
            'firstPageLabel' => '<<',
            'prevPageLabel' => '<',
            'nextPageLabel' => '>',
            'lastPageLabel' => '>>',
        )
    ));
    ?>
</table>