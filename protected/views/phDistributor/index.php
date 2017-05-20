<?php
$this->breadcrumbs=array(
	'Ph Distributors',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('ph-distributor-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<?php 
$this->menu=array(
    array('label'=>'List Drugs', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDrug/index'),'linkOptions'=>array()),
    array('label'=>'List Orders', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhOrder/index'), 'linkOptions'=>array()),
    array('label'=>'List Distributors', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true,'linkOptions'=>array()),
    array('label'=>'Add Distributor', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
	);
?>



<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ph-distributor-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'dis_id',
		'dis_name',
		'dis_address',
		'dis_contact',
		'supply_quantity',
//		'add_clerk',
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

