<?php
$this->breadcrumbs=array(
	'Reg Bills'=>array('index'),
	$model->rbid=>array('view','id'=>$model->rbid),
	'Update',
);

?>

<h1>Update RegBill <?php echo $model->rbid; ?></h1>
<hr/>

<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->rbid)),'active'=>true, 'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>