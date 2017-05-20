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
            array('icon'=>'edit','label'=>'Old Patient', 'url'=>array('Patient/old')),
            array('icon'=>'edit','label'=>'New Registration', 'url'=>array('Patient/create')),
        ),
    ));
?>

<?php
    $this->menu=array(
        array('label'=>'New Registration', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
        array('label'=>'List Patients', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
    );
?>

    <div class="search-form">
        <?php $this->renderPartial('_old_r',array(
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
            'template' => '{view} {schedule}',
            'buttons' => array(
                'view' => array(
                    'label'=> 'View',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                ),
                'schedule' => array(
                    'label'=>'Schedule',
                    'icon'=>'icon-edit',
                    'url'=>'Yii::app()->controller->createUrl("Patient/selDoc",array("id"=>$data->id))',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                )
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        )
    ),
)); ?>