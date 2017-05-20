<?php
/* @var $this DischargeController */
/* @var $model Discharge */

$this->breadcrumbs=array(
	'Discharges'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Discharge', 'url'=>array('index')),
	array('label'=>'Create Discharge', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#discharge-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Discharges</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'discharge-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'dis_id',
		'pid',
		'lab_id',
		'drug_id',
		'date',
		'stat',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
