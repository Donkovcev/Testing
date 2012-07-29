<?php
$this->breadcrumbs = array(
    'Пользователи',
);

$this->menu = array(
    array('label' => 'Создать пользователя', 'url' => array('create')),
    array('label' => 'Управление пользователями', 'url' => array('admin')),
);

$labels = Users::model()->attributeLabels();

?>

<h2>Пользователи</h2>
<table class="table table-bordered table-striped">
    <tr>
        <th><?= $labels['name']; ?></th>
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
