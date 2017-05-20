<?php
$this->breadcrumbs=array(
    'Lab Orders',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('lab-order-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<?php
$this->menu=array(
    /*array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('/LabBill/create'), 'linkOptions'=>array()),
    array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('/LabBill/index'),'active'=>true, 'linkOptions'=>array()),*/
    array('label'=>'List Lab Orders', 'icon'=>'icon-list', 'url'=>Yii::app()->controller->createUrl('LabOrder/index'),'active'=>true),
    array('label'=>'List Lab Inventory Items', 'icon'=>'icon-list', 'url'=>Yii::app()->controller->createUrl('LabInventory/index')),
    /*array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
    array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('/LabBill/GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
    array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('/LabBill/GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),*/
);
?>



<div class="search-form">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'lab-order-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{items}{pager}',
    'columns'=>array(
        array ('name'=>'pid','header'=>'Patient Id'),
        array(
            'header'=>'<a>Patient Name</a>',
            'value'=>'$data->getRelated("patientD")->fName." ".$data->getRelated("patientD")->mName." ".$data->getRelated("patientD")->lName',
            'type'=>'raw',
        ),
        'datetime',
        array(
            'header'=>'<a>Tests Requested</a>',
            'value'=>'count(LabOrder::model()->findAllByAttributes(array("sid"=>$data->sid,"status"=>1)))',
            'type'=>'raw',
        ),
//        'status',
        /*
        'billstatus',
        */
        array(
            'header'=>'<a>Actions</a>',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{result}',
            'buttons' => array(
                'result' => array(
                    'label'=> 'Result',
                    'url'=>'Yii::app()->controller->createUrl("LabResult/create",array("id"=>$data->sid))',
                    'options'=>array(
                        'class'=>'btn btn-small',

                    )
                ),
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        ),
            array(
            'header'=>'<a>BIll</a>',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{result}',
            'buttons' => array(
                'result' => array(
                    'label'=> 'Bill',
                    'url'=>'Yii::app()->controller->createUrl("LabBill/create/",array("pid"=>$data->pid,"loid"=>$data->lid))',
                    'options'=>array(
                        'class'=>'btn btn-small',
                    )
                ),
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        ),
    ),
)); ?>

