<?php
    $this->breadcrumbs=array(
        'Lab Inventories',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('lab-inventory-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<?php
    $this->menu=array(
        array('label'=>'List Lab Orders', 'icon'=>'icon-list', 'url'=>Yii::app()->controller->createUrl('LabOrder/index')),
        array('label'=>'List Lab Inventory Items', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('LabInventory/index'),'active'=>true, 'linkOptions'=>array()),
        array('label'=>'Add Inventory Item', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        /*array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
        array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
        array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),*/
    );
?>



<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'lab-inventory-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{items}{pager}',
    'columns'=>array(
        'liid',
        'test_name',
        'test_unit',
        'min_range1',
        'min_range2',
        'max_range1',
        /*
        'max_range2',
        'comments',
        'price',
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

