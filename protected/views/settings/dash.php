<?php
/* @var $this SettingsController */

$this->breadcrumbs=array(
	'Settings'=>array('/settings'),
	'Dash',
);
?>
<?php
    $this->menu=array(
        array('label'=>'Manage Leaves', 'icon'=>'icon-phone-sign', 'url'=>Yii::app()->controller->createUrl('/DoctorLeave/create'),'linkOptions'=>array()),
        array('label'=>'Manage Time Table', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('/Doctortime/create'), 'linkOptions'=>array()),
        array('label'=>'Doctor Charges', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('/DoctorCharge/index'), 'linkOptions'=>array()),
    );
?>
<div class="span9">
    <!--<h4 class="header">DashBoard</h4>-->


    <h4>Settings</h4>
    <div class="panel">
        <a href="<?php echo Yii::app()->controller->createUrl('/DoctorLeave/create'); ?>"><div class="bottom">
                <i class="icon-edit icon-white icon-4x"></i>
                <h2>Manage Leaves</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php Yii::app()->controller->createUrl('/Doctortime/create');?>"><div class="bottom">
                <i class="icon-edit icon-white icon-4x"></i>
                <h2>Manage Time Table</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php Yii::app()->controller->createUrl('/DoctorCharge/index');?>"><div class="bottom">
                <i class="icon-edit icon-white icon-4x"></i>
                <h2>Doctor Charge</h2>
                <h6>Details</h6>
            </div></a>
    </div>

    <!--<div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div>

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div>

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div>

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div><

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div>

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div>

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-h-sign icon-white icon-4x"></i>
                <h2>Menu Name</h2>
                <h6>Details</h6>
            </div></a>
    </div>-->



</div>
<!--  </div>-->
<!--</div>-->