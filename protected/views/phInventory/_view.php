<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('phid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->phid),array('view','id'=>$data->phid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eid')); ?>:</b>
	<?php echo CHtml::encode($data->eid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_type')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_date')); ?>:</b>
	<?php echo CHtml::encode($data->man_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exp_date')); ?>:</b>
	<?php echo CHtml::encode($data->exp_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	*/ ?>

</div>