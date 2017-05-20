<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::encode($data->emp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uName')); ?>:</b>
	<?php echo CHtml::encode($data->uName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uPass')); ?>:</b>
	<?php echo CHtml::encode($data->uPass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sQuestion')); ?>:</b>
	<?php echo CHtml::encode($data->sQuestion); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('sAnswer')); ?>:</b>
    <?php echo CHtml::encode($data->sAnswer); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('profession')); ?>:</b>
	<?php echo CHtml::encode($data->profession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stat')); ?>:</b>
	<?php echo CHtml::encode($data->stat); ?>
	<br />

	*/ ?>

</div>