<?php
$this->breadcrumbs=array(
	'Ph Drugs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PhDrug','url'=>array('index')),
	array('label'=>'Create PhDrug','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ph-drug-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ph Drugs</h1>

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
	'id'=>'ph-drug-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'drug_id',
		'stock_id',
		'SKU',
		'drug_cat',
		'drug_root',
		'brand_name',
		/*
		'generic_name',
		'unit_value',
		'unit_measurement',
		'unit_price',
		'stat',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
