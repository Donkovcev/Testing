<?php
$this->breadcrumbs = array(
    'Пользователи',
);

$this->menu = array(
    array('label' => 'Создать', 'url' => array('create')),
    array('label' => 'Администрирование', 'url' => array('admin')),
);

$labels = Users::model()->attributeLabels();

?>

<table class="table table-bordered table-striped">
    <tr>
        <th><?php echo $labels['name']; ?></th>
        <th><?php echo $labels['google_search_terms_id']; ?></th>
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
