<?php
    $this->breadcrumbs=array(
        'Appointments',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('appointment-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<?php
    $this->widget('bootstrap.widgets.TbTabs',array(
        'type'=>'tabs',
        'tabs'=>array(
            array('icon'=>'edit','label'=>'List: Old Patients', 'url'=>array('Appointment/indexOld')),
            array('icon'=>'edit','label'=>'List: New Appointments', 'url'=>array('Appointment/index')),
        ),
    ));
?>

<?php
    $this->menu=array(
        array('label'=>'New Appointment', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        array('label'=>'List Appointments', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('indexOld'),'active'=>true, 'linkOptions'=>array()),
    );
?>



<div class="search-form">
    <?php $this->renderPartial('_searchOld',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->
<?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'block' => true,
        'fade' => true,
        'closeText' => '&times;', // false equals no close link
        'events' => array(),
        'htmlOptions' => array(),
        'userComponentId' => 'user',
        'alerts' => array( // configurations per alert type
// success, info, warning, error or danger
            'success' => array('closeText' => '&times;'),
            'info', // you don't need to specify full config
            'warning' => array('block' => false, 'closeText' => false),
            'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
        ),
    ));
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'appointment-grid',
    'dataProvider'=>$model->searchOld(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{pager}{items}{pager}',
    'columns'=>array(
        'id',
        'title',
        'fName',
        'mName',
        'lName',
        'gender',
        'homePhone',
        'mobilePhone',
        'type',
        /*
        'clerk',
        'dID',
        'date',
        'time',
        */
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'header'=>'<a>Actions</a>',
            'template' => '{view} {register}',
            'buttons' => array(
                'view' => array(
                    'label'=> 'View',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                ),
                'register' => array(
                    'label' => 'Register',
                    'icon' => 'icon-edit',
                    'url' => 'Yii::app()->controller->createUrl("Calendar/create2",array("id"=>$data->type,"did"=>$data->dID,"aid"=>$data->id))',
                    'options' => array(
                        'class' => 'btn btn-small update'
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

