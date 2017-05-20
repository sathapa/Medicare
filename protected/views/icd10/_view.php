<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icd10no')); ?>:</b>
	<?php echo CHtml::encode($data->icd10no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icd10details')); ?>:</b>
	<?php echo CHtml::encode($data->icd10details); ?>
	<br />


</div>