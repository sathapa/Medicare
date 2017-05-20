<?php
/* @var $this DischargeController */

$this->breadcrumbs=array(
    'Discharge',
);
?>

<?php
$this->menu=array(
    array('icon'=>'list-alt','label'=>'List Patient', 'url'=>array('Discharge/listPatient',)),
    array('icon'=>'paperclip','label'=>'Report', 'url'=>array('Discharge/report','param1'=>'value1')),
    array('icon'=>'plus','label'=>'Referral', 'url'=>array('Discharge/refferal','param1'=>'value1')),
);
?>

