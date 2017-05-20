<?php
/* @var $this DischargeController */
/* @var $data Discharge */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dis_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dis_id), array('view', 'id'=>$data->dis_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lab_id')); ?>:</b>
	<?php echo CHtml::encode($data->lab_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drug_id')); ?>:</b>
	<?php echo CHtml::encode($data->drug_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stat')); ?>:</b>
	<?php echo CHtml::encode($data->stat); ?>
	<br />


</div>