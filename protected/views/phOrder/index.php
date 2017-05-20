<?php
    $this->breadcrumbs=array(
        'Ph Orders',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('ph-order-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<b>PHARMACY ORDERS</b>

<?php
    $this->menu=array(
        array('label'=>'List Drugs', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDrug/index'),'linkOptions'=>array()),
        array('label'=>'List Orders', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhOrder/index'), 'active'=>true,
'linkOptions'=>array()),
        array('label'=>'List Distributors', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDistributor/index'), 'linkOptions'=>array()),
    );
?>

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
            //'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
        ),
    ));
?>

<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'ph-order-grid',
    'dataProvider'=>$model->search(),
    'type'=>'bordered condensed',
    'template'=>'{summary}{pager}{items}{pager}',
    'rowCssClassExpression'=>'$data->getCssClass($data)',
    'columns'=>array(
        array(
            'header' => '<a>Patient</a>',
            'value' =>'$data->getRelated("patientD")->fName." ".$data->getRelated("patientD")->mName." ".$data->getRelated("patientD")->lName',
            'type' => 'raw',
        ),
        'date',
        array(
            'header'=>'<a>Drug</a>',
            'value'=>'$data->getRelated("orderPH")->brand_name',
            'type'=>'raw',
        ),
        'sig',
        'days',
        'quantity',
        'refill',
        //'status',
        //'billstatus',

        array(
            'header'=>'<a>Actions</a>',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{delete} {billing}',
            'buttons' => array(
                /*'update' => array(
                    'label'=> 'Update',
                    'options'=>array(
                        'class'=>'btn btn-small update'
                    )
                ),*/
                'delete' => array(
                    'label'=> 'Drop',
                    'options'=>array(
                        'class'=>'btn btn-small delete'
                    )
                ),
                'billing' => array(
                    'label'=>'Bill',
                    'url'=>'Yii::app()->controller->createUrl("PhBill/create",array("id"=>$data->phoid))',
                    'options'=>array(
                        'class'=>'btn btn-small'
                    )
                )
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        )
    ),
)); ?>

