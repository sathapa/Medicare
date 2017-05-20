<?php
    $this->breadcrumbs=array(
        'Patients'=>array('index'),
        'Create',
    );

?>

<?php
    $this->widget('bootstrap.widgets.TbTabs',array(
        'type'=>'tabs',
        'tabs'=>array(
            array('icon'=>'edit','label'=>'Old Patient', 'url'=>array('Patient/old')),
            array('icon'=>'edit','label'=>'New Registration', 'url'=>array('Patient/create')),
        ),
    ));
?>

<?php
    $this->menu=array(
        array('label'=>'New Registration', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'active'=>true, 'linkOptions'=>array()),
        array('label'=>'List Patients', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
    );
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>