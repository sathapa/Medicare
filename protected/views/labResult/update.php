<?php
$this->breadcrumbs=array(
	'Lab Results'=>array('index'),
	$model->lrid=>array('view','id'=>$model->lrid),
	'Update',
);

?>

<h1>Update LabResult <?php echo $model->lrid; ?></h1>
<hr/>

<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->lrid)),'active'=>true, 'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>