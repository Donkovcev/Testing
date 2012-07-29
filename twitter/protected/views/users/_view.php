
<tr>
    <td>
        <?php echo CHtml::link(CHtml::encode($data->name), CHtml::encode($data->link), array('target' => '_blank')); ?>
    </td>
    <td>
        <?php echo CHtml::encode($data->googleSearchTerms->term); ?>
    </td>
</tr>