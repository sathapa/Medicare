<?php
$this->breadcrumbs=array(
	'Ph Distributors'=>array('index'),
	'Create',
);

?>

<h1>Create PhDistributor</h1>
<hr/>
<?php 
$this->menu=array(
    array('label'=>'List Drugs', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDrug/index'),'linkOptions'=>array()),
    array('label'=>'List Orders', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhOrder/index'), 'linkOptions'=>array()),
    array('label'=>'List Distributors', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'linkOptions'=>array()),
    array('label'=>'Add Distributor', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true,'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>