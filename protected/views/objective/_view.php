<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('obid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->obid),array('view','id'=>$data->obid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clerk')); ?>:</b>
	<?php echo CHtml::encode($data->clerk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objective')); ?>:</b>
	<?php echo CHtml::encode($data->objective); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />


</div>