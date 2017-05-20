<?php
$this->breadcrumbs=array(
	'Ph Drugs'=>array('index'),
	'Create',
);

?>

<?php 
$this->menu=array(
    array('label'=>'Add Drug', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true,'linkOptions'=>array()),
    array('label'=>'List Drugs', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'linkOptions'=>array()),
    array('label'=>'List Orders', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhOrder/index'), 'linkOptions'=>array()),
    array('label'=>'List Distributors', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDistributor/index'), 'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'model1'=>$model1)); ?>