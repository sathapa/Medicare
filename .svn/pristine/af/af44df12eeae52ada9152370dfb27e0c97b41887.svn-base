<?php
$this->breadcrumbs=array(
	'Appointments'=>array('index'),
	'Create',
);

?>

<?php
    $this->widget('bootstrap.widgets.TbTabs',array(
        'type'=>'tabs',
        'tabs'=>array(
            array('icon'=>'edit','label'=>'Old Patient', 'url'=>array('Patient/oldA')),
            array('icon'=>'edit','label'=>'New Appointment', 'url'=>array('Appointment/create')),
        ),
    ));
?>

<?php 
$this->menu=array(
    array('label'=>'New Appointment', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
    array('label'=>'List Appointments', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'linkOptions'=>array()),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>