<?php
$this->breadcrumbs=array(
	'Patients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Patient','url'=>array('index')),
	array('label'=>'Create Patient','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('patient-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Patients</h1>

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
	'id'=>'patient-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'fName',
		'mName',
		'lName',
		'dob',
		/*
		'gender',
		'marital_status',
		'sStreet',
		'sWardNo',
		'sCity',
		'sDistrict',
		'sZone',
		'pStreet',
		'pWardNo',
		'pCity',
		'pDistrict',
		'pZone',
		'country',
		'motherName',
		'guardianName',
		'relation',
		'eContact',
		'ePhone',
		'homePhone',
		'workPhone',
		'mobilePhone',
		'email',
		'stat',
		'dID',
		'clerk',
		'date',
		'time',
		'cardID',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
