<?php
$this->breadcrumbs=array(
	'Ph Bills'=>array('index'),
	$model->phbid=>array('view','id'=>$model->phbid),
	'Update',
);

?>

<h1>Update PhBill <?php echo $model->phbid; ?></h1>
<hr/>

<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->phbid)),'active'=>true, 'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>