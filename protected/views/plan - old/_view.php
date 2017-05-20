<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('plid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->plid),array('view','id'=>$data->plid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clerk')); ?>:</b>
	<?php echo CHtml::encode($data->clerk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan')); ?>:</b>
	<?php echo CHtml::encode($data->plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />


</div>