<?php
    $this->breadcrumbs=array(
        'Patients',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('patient-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>


<?php
    $this->menu=array(
        array('label'=>'Add New Patient', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        array('label'=>'List Patients', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
        /*array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
        array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),*/
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
            'template' => '{view} {update}',
            'buttons' => array(
                'view' => array(
                    'label'=> 'View',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                ),
                'update' => array(
                    'label'=> 'Update',
                    'options'=>array(
                        'class'=>'btn btn-small update'
                    )
                ),
                /*'delete' => array(
                    'label'=> 'Delete',
                    'options'=>array(
                        'class'=>'btn btn-small delete'
                    )
                )*/
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        )
    ),
)); ?>

