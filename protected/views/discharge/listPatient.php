<?php
/* @var $this DischargeController */

$this->breadcrumbs=array(
    'Discharge',
);
?>

<?php
$this->menu=array(
    array('icon'=>'list-alt','label'=>'List Patient', 'url'=>array('Discharge/listPatient',)),
    //array('icon'=>'paperclip','label'=>'Report', 'url'=>array('Discharge/report','param1'=>'value1')),
   // array('icon'=>'plus','label'=>'Referral', 'url'=>array('Discharge/refferal','param1'=>'value1')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id'=>'discharge-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{items}{pager}',

    'columns'=>array(
        array ('name'=>'id','header'=>'Patient Id'),
        array(
            'header'=>'<a>Patient Name</a>',
            'value'=>'$data->fName." ".$data->mName." ".$data->lName',
            'type'=>'raw',
        ),
        array('header'=>'<a>Admitted Date</a>',
            'value'=>'$data-> date',),

//        'status',
        array(
            'header'=>'<a>Actions</a>',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{report}',
            'buttons' => array(
                'report' => array(
                    'label' => 'Report',
                    'icon' => 'icon-paper-clip',
                    'url' => 'Yii::app()->controller->createUrl("Discharge/report",array("pid"=>$data->id))',
                    'options' => array(
                        'class' => 'btn btn-small update',
                        'onclick' =>"js:alert('do u want to book this offer!')",
                        'style' => 'font-weight: bold',

                    ),
                ),
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        ),
    ),
)); ?>
