<?php
/* @var $this DischargeController */
/* @var $model Discharge */

$this->breadcrumbs=array(
	'Discharges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Discharge', 'url'=>array('index')),
	array('label'=>'Manage Discharge', 'url'=>array('admin')),
);
?>

<h1>Create Discharge</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>