<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('drug_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->drug_id),array('view','id'=>$data->drug_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_id')); ?>:</b>
	<?php echo CHtml::encode($data->stock_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SKU')); ?>:</b>
	<?php echo CHtml::encode($data->SKU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drug_cat')); ?>:</b>
	<?php echo CHtml::encode($data->drug_cat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drug_root')); ?>:</b>
	<?php echo CHtml::encode($data->drug_root); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->brand_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('generic_name')); ?>:</b>
	<?php echo CHtml::encode($data->generic_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_value')); ?>:</b>
	<?php echo CHtml::encode($data->unit_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_measurement')); ?>:</b>
	<?php echo CHtml::encode($data->unit_measurement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_price')); ?>:</b>
	<?php echo CHtml::encode($data->unit_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stat')); ?>:</b>
	<?php echo CHtml::encode($data->stat); ?>
	<br />

	*/ ?>

</div>