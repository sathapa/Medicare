<?php
$this->breadcrumbs=array(
	'Ph Drugs'=>array('index'),
	$model->drug_id=>array('view','id'=>$model->drug_id),
	'Update',
);

?>

<h1>Update PhDrug <?php echo $model->drug_id; ?></h1>
<hr/>

<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->drug_id)),'active'=>true, 'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model,'model1'=>$model1)); ?>