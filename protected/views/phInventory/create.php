<?php
$this->breadcrumbs=array(
	'Ph Inventories'=>array('index'),
	'Create',
);

?>

<h1>Create PhInventory</h1>
<hr/>
<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>