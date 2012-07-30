<?php
$this->breadcrumbs = array(
	'Записи (твиты)',
);

$this->menu = array(
	array('label' => 'Создать', 'url' => array('create')),
	array('label' => 'Администрирование', 'url' => array('admin')),
);

$labels = Tweets::model()->attributeLabels();
?>


<table class="table table-bordered table-striped">
    <tr>
        <th><?php echo $labels['text']; ?></th>
        <th><?php echo $labels['users_id']; ?></th>
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