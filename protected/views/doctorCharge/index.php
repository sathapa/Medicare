<?php
    $this->breadcrumbs=array(
        'Doctor Charges',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('doctor-charge-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<?php
    $this->menu=array(
        array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
    );
?>



<div class="search-form">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'doctor-charge-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{items}{pager}',
    'columns'=>array(
        //'dcid',
        //'eid',
        array(
            'header'=>'<a href="#">First Name </a>',
            'value'=>'$data->getRelated("user")->fName',
            'type'=>'raw',
        ),
        array(
            'header'=>'<a href="#">Middle Name </a>',
            'value'=>'$data->getRelated("user")->mName',
            'type'=>'raw',
        ),
        array(
            'header'=>'<a href="#">Last Name </a>',
            'value'=>'$data->getRelated("user")->lName',
            'type'=>'raw',
        ),
        'charge',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'header'=>'<a href="#">Actions </a>',
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

