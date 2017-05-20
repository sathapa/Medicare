<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cardID')); ?>:</b>
	<?php echo CHtml::encode($data->cardID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pID')); ?>:</b>
	<?php echo CHtml::encode($data->pID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stat')); ?>:</b>
	<?php echo CHtml::encode($data->stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clerk')); ?>:</b>
	<?php echo CHtml::encode($data->clerk); ?>
	<br />


</div>