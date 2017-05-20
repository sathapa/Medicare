<?php
$this->breadcrumbs=array(
	'Ph Bill Identities'=>array('index'),
	$model->phbiid=>array('view','id'=>$model->phbiid),
	'Update',
);

?>

<h1>Update PhBillIdentity <?php echo $model->phbiid; ?></h1>
<hr/>

<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->phbiid)),'active'=>true, 'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>