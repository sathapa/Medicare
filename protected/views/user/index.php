<?php
    $this->breadcrumbs=array(
        'Users',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<!-- <h1>Users</h1> -->
<!-- <hr /> -->

<?php
    $this->menu = array(
        array('label'=>'Add Employee', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('Employee/create'), 'linkOptions'=>array()),
        array('label'=>'List Employee', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('Employee/index'), 'linkOptions'=>array()),
        array('label'=>'List Authorised Users', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('User/index'),'active'=>true,'linkOptions'=>array()),
    );
?>



<div class="search-form">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'user-grid',
    'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
    'template'=>'{summary}{items}{pager}',
    'columns'=>array(
        'id',

        array(
            'header'=>'<a>Name</a>',
            'value'=>'$data->getRelated("emp")->fName." ".$data->getRelated("emp")->mName." ".$data->getRelated("emp")->lName',
            'type'=>'raw',
        ),
        'profession',
        'role',
//        'stat',

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
                    'label'=> 'Update User Role',
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

