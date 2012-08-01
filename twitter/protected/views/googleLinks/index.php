<?php
$this->breadcrumbs = array(
    'Google ссылки',
);

$this->menu = array(
    array('label' => 'Создать ссылку', 'url' => array('create')),
    array('label' => 'Администрирование', 'url' => array('admin')),
    array('label' => 'Проверить ссылки', 'url' => array('check')),
);

$labels = GoogleLinks::model()->attributeLabels();

?>

<table class="table table-bordered table-striped">
    <tr>
        <th><?php echo $labels['link']; ?></th>
        <th><?php echo $labels['google_search_terms_id']; ?></th>
        <th><?php echo $labels['checked']; ?></th>
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