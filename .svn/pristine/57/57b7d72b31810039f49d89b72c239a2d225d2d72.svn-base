<?php
    $this->breadcrumbs=array(
        'Patients'=>array('old patients'),
        'Old Patients',
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
        array('label'=>'New Appointment', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('Patient/OldA'), 'active'=>true, 'linkOptions'=>array()),
        array('label'=>'List Appointments', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('Appointment/index'),'linkOptions'=>array()),
    );
?>

    <div class="search-form">
        <?php $this->renderPartial('_old_a',array(
            'model'=>$model,
        )); ?>
    </div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'patient-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{pager}{items}{pager}',
    'columns'=>array(
        'id',
        'title',
        'fName',
        'mName',
        'lName',
        'dob',
        /*
        'gender',
        'marital_status',
        'sStreet',
        'sWardNo',
        'sCity',
        'sDistrict',
        'sZone',
        'pStreet',
        'pWardNo',
        'pCity',
        'pDistrict',
        'pZone',
        'country',
        'motherName',
        'guardianName',
        'relation',
        'eContact',
        'ePhone',
        'homePhone',
        'workPhone',
        'mobilePhone',
        'email',
        'stat',
        'dID',
        'clerk',
        'date',
        'time',
        'cardID',
        */
        array(
            'header'=>'<a>Actions</a>',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{view} {appoint}',
            'buttons' => array(
                'view' => array(
                    'label'=> 'View',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                ),
                'appoint' => array(
                    'label'=>'Appoint',
                    'url' => 'Yii::app()->controller->createUrl("Appointment/old",array("id"=>$data->id))' ,
                    'options'=>array(
                        'class'=>'btn btn-small'
                    )
                ),
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        )
    ),
)); ?>