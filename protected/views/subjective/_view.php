<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('suid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->suid),array('view','id'=>$data->suid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clerk')); ?>:</b>
	<?php echo CHtml::encode($data->clerk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_pressure')); ?>:</b>
	<?php echo CHtml::encode($data->blood_pressure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temp')); ?>:</b>
	<?php echo CHtml::encode($data->temp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bmi_calc')); ?>:</b>
	<?php echo CHtml::encode($data->bmi_calc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye_left')); ?>:</b>
	<?php echo CHtml::encode($data->eye_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye_right')); ?>:</b>
	<?php echo CHtml::encode($data->eye_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('audio_right')); ?>:</b>
	<?php echo CHtml::encode($data->audio_right); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('audio_left')); ?>:</b>
	<?php echo CHtml::encode($data->audio_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complain')); ?>:</b>
	<?php echo CHtml::encode($data->complain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	*/ ?>

</div>