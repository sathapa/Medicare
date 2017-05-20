<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dcid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dcid),array('view','id'=>$data->dcid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eid')); ?>:</b>
	<?php echo CHtml::encode($data->eid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('charge')); ?>:</b>
	<?php echo CHtml::encode($data->charge); ?>
	<br />


</div>