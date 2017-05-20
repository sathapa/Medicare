<?php
    $this->menu=array(
        array('label'=>'Appointment', 'icon'=>'icon-phone-sign', 'url'=>Yii::app()->controller->createUrl('/Appointment/create'),'linkOptions'=>array()),
        array('label'=>'Registration', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('/Patient/create'), 'linkOptions'=>array()),
        array('label'=>'Scheduling', 'icon'=>'icon-calendar', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Patient Screen', 'icon'=>'icon-desktop', 'url'=>Yii::app()->controller->createUrl('PatientScreen/index'), 'linkOptions'=>array()),
        array('label'=>'Laboratory', 'icon'=>'icon-beaker', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Pharmacy', 'icon'=>'icon-medkit', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Billing', 'icon'=>'icon-list-alt', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Users', 'icon'=>'icon-group', 'url'=>Yii::app()->controller->createUrl('/User/index'), 'linkOptions'=>array()),
        array('label'=>'Settings', 'icon'=>'icon-cogs', 'url'=>Yii::app()->controller->createUrl('Settings/dash'), 'linkOptions'=>array('class'=>'search-button')),
    );
?>
<div class="span9">
    <h4>Dashboard</h4>
    <div class="panel">
        <a href="<?php echo Yii::app()->controller->createUrl('/Appointment/create') ;?>"><div class="bottom">
                <i class="icon-phone-sign icon-white icon-4x"></i>
                <h2>Appointment</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo Yii::app()->controller->createUrl('/Patient/create');?>"><div class="bottom">
                <i class="icon-edit icon-white icon-4x"></i>
                <h2>Registration</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo CController::createUrl('/wdcalendar'); ?>"><div class="bottom">
                <i class="icon-calendar icon-white icon-4x"></i>
                <h2>Scheduling</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
<<<<<<< .mine
        <a href="<?php echo CController::createUrl('/PatientDetail/index'); ?>"><div class="bottom">
=======
        <a href="<?php echo CController::createUrl('PatientScreen/index');?>"><div class="bottom">
>>>>>>> .r81
                <i class="icon-desktop icon-white icon-4x"></i>
                <h2>Patient Screen</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo CController::createUrl('/LabOrder/index'); ?>"><div class="bottom">
                <i class="icon-beaker icon-white icon-4x"></i>
                <h2>Laboratory</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo CController::createUrl('/PhDrug/index'); ?>"><div class="bottom">
                <i class="icon-medkit icon-white icon-4x"></i>
                <h2>Pharmacy</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="#"><div class="bottom">
                <i class="icon-list-alt icon-white icon-4x"></i>
                <h2>Billing</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo CController::createUrl('/Employee/index'); ?>"><div class="bottom">
                <i class="icon-group icon-white icon-4x"></i>
                <h2>Users</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo CController::createUrl('Settings/dash'); ?>"><div class="bottom">
                <i class="icon-cogs icon-white icon-4x"></i>
                <h2>Settings</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->

    <div class="panel">
        <a href="<?php echo CController::createUrl('Report/menu'); ?>"><div class="bottom">
                <i class="icon-paperclip icon-white icon-4x"></i>
                <h2>Reports</h2>
                <h6>Details</h6>
            </div></a>
    </div><!--panel END-->



</div>
<!--  </div>-->
<!--</div>-->