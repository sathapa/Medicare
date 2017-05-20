<?php
$this->breadcrumbs=array(
	'Ph Distributors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PhDistributor','url'=>array('index')),
	array('label'=>'Create PhDistributor','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
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

<h1>Manage Ph Distributors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ph-distributor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'dis_id',
		'dis_name',
		'dis_address',
		'dis_contact',
		'supply_quantity',
		'add_clerk',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
