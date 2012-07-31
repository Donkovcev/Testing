
<tr>
    <td>
        <?php echo CHtml::link(CHtml::encode($data->link), $data->link, array('target'=>'_blank')); ?>
    </td>
    <td>
        <?php echo CHtml::encode($data->googleSearchTerms->term); ?>
    </td>
    <td>
        <?php echo CHtml::encode($data->checked); ?>
    </td>
</tr>