
<tr>
    <td>
        <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?>
    </td>
    <td>
        <b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->link), CHtml::encode($data->link), array('target' => '_blank')); ?>
    </td>
    <td>
        <b><?php echo CHtml::encode($data->getAttributeLabel('google_search_terms_id')); ?>:</b>
        <?php echo CHtml::encode($data->googleSearchTerms->term); ?>
    </td>
</tr>