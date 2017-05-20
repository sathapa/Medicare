<?php
$this->breadcrumbs=array(
    'Plans'=>array('index'),
    $model->plid=>array('view','id'=>$model->plid),
    'Update',
);

?>

<?php $this->menu=array(
    array('icon'=>'plus-sign-alt','label'=>'Subjective', 'url'=>array('/Subjective/create')),
    array('icon'=>'plus-sign-alt','label'=>'Objective', 'url'=>array('/Objective/create')),
    array('icon'=>'plus-sign-alt','label'=>'Assessment', 'url'=>array('/LabOrder/laborderr')),
    array('icon'=>'plus-sign-alt','label'=>'Plan', 'url'=>array('/Plan/update','id'=>$_GET['id'])),
    array('icon'=>'upload-alt','label'=>'Attach Document', 'url'=>array('/DocumentsPatient/create')),
); ?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'pid'=>$pid)); ?>