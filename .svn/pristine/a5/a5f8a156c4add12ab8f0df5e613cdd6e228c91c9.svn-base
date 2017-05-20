<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Create',
);

?>

<?php 
$this->menu=array(
    array('label'=>'Add Employee', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('Employee/create'), 'active'=>true,'linkOptions'=>array()),
    array('label'=>'List Employee', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('Employee/index'), 'linkOptions'=>array()),
    array('label'=>'List Authorised Users', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('User/index'),'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>