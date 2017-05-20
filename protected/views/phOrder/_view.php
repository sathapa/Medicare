<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('phoid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->phoid),array('view','id'=>$data->phoid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('did')); ?>:</b>
	<?php echo CHtml::encode($data->did); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drug_id')); ?>:</b>
	<?php echo CHtml::encode($data->drug_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sig')); ?>:</b>
	<?php echo CHtml::encode($data->sig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('days')); ?>:</b>
	<?php echo CHtml::encode($data->days); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refill')); ?>:</b>
	<?php echo CHtml::encode($data->refill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billstatus')); ?>:</b>
	<?php echo CHtml::encode($data->billstatus); ?>
	<br />

	*/ ?>

</div>