<?php
/* @var $this DischargeController */
/* @var $model Discharge */

$this->breadcrumbs=array(
	'Discharges'=>array('index'),
	$model->dis_id,
);

$this->menu=array(
	array('label'=>'List Discharge', 'url'=>array('index')),
	array('label'=>'Create Discharge', 'url'=>array('create')),
	array('label'=>'Update Discharge', 'url'=>array('update', 'id'=>$model->dis_id)),
	array('label'=>'Delete Discharge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dis_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Discharge', 'url'=>array('admin')),
);
?>

<h1>View Discharge #<?php echo $model->dis_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dis_id',
		'pid',
		'lab_id',
		'drug_id',
		'date',
		'stat',
	),
)); ?>
