<?php
    $this->breadcrumbs=array(
        'Lab Inventories'=>array('index'),
        'Create',
    );

?>

<?php
    $this->menu=array(
        array('label'=>'List Lab Orders', 'icon'=>'icon-list', 'url'=>Yii::app()->controller->createUrl('LabOrder/index')),
        array('label'=>'List Lab Inventory Items', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('LabInventory/index'), 'linkOptions'=>array()),
        array('label'=>'Add Inventory Item', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
    )
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>