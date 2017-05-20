<?php
$this->breadcrumbs=array(
	'Ph Stocks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PhStock','url'=>array('index')),
	array('label'=>'Create PhStock','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ph-stock-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ph Stocks</h1>

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
	'id'=>'ph-stock-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'stock_id',
		'SKU',
		'dis_id',
		'min_quantity',
		'instore_quantity',
		'mfd_data',
		/*
		'exp_data',
		'stat',
		'clerk',
		'create_date',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
