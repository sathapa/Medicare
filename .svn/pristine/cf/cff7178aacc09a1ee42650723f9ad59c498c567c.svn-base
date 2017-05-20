<?php
    /* @var $this PatientScreenController */

    $this->breadcrumbs=array(
        'Patient Screen',
    );
?>

    <div class="search-form">
        <?php $this->renderPartial('_search',array(
            'model'=>$model,
        )); ?>
    </div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'patient-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{items}{pager}',
    'columns'=>array(
        'id',
//        'title',
        array(
            'header'=>'<a>Name</a>',
            'value'=>'"$data->title"." "."$data->fName"." "."$data->mName"." "."$data->lName"',
            'type'=>'raw',
        ),
//        'fName',
//        'mName',
//        'lName',
        'gender',
        'dob',
        'mobilePhone',
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
            'template' => '{view}',
            'buttons' => array(
                'view' => array(
                    'label'=> 'View',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                ),
            ),
//            'htmlOptions'=>array('nowrap'=>'nowrap'),
        )
    ),
)); ?>