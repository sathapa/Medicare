<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subject')); ?>:</b>
	<?php echo CHtml::encode($data->Subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Location')); ?>:</b>
	<?php echo CHtml::encode($data->Location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StartTime')); ?>:</b>
	<?php echo CHtml::encode($data->StartTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EndTime')); ?>:</b>
	<?php echo CHtml::encode($data->EndTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IsAllDayEvent')); ?>:</b>
	<?php echo CHtml::encode($data->IsAllDayEvent); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Color')); ?>:</b>
	<?php echo CHtml::encode($data->Color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RecurringRule')); ?>:</b>
	<?php echo CHtml::encode($data->RecurringRule); ?>
	<br />

	*/ ?>

</div>