<?php
/* @var $this DischargeController */
/* @var $model Discharge */

$this->breadcrumbs=array(
	'Discharges'=>array('index'),
	$model->dis_id=>array('view','id'=>$model->dis_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Discharge', 'url'=>array('index')),
	array('label'=>'Create Discharge', 'url'=>array('create')),
	array('label'=>'View Discharge', 'url'=>array('view', 'id'=>$model->dis_id)),
	array('label'=>'Manage Discharge', 'url'=>array('admin')),
);
?>

<h1>Update Discharge <?php echo $model->dis_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>