<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('phbiid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->phbiid),array('view','id'=>$data->phbiid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phid')); ?>:</b>
	<?php echo CHtml::encode($data->phid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phbid')); ?>:</b>
	<?php echo CHtml::encode($data->phbid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eid')); ?>:</b>
	<?php echo CHtml::encode($data->eid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />


</div>