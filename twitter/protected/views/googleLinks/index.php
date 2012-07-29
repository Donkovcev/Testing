<?php
$this->breadcrumbs = array(
    'Google ссылки',
);

$this->menu = array(
    array('label' => 'Создать ссылку', 'url' => array('create')),
    array('label' => 'Управление ссылками', 'url' => array('admin')),
);

$labels = GoogleLinks::model()->attributeLabels();

?>

<h2>Google ссылки</h2>


<table class="table table-bordered table-striped">
    <tr>
        <th><?= $labels['link']; ?></th>
        <th><?= $labels['google_search_terms_id']; ?></th>
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