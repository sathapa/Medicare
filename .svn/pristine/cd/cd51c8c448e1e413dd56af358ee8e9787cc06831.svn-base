<?php
$this->breadcrumbs=array(
	'Doctortimes'=>array('index'),
	$model->dtid,
);
?>

<h1>View Doctortime #<?php echo $model->dtid; ?></h1>
<hr />
<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->dtid)), 'linkOptions'=>array()),
		//array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

);
?>
<div class='printableArea'>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'dtid',
		'uid',
		'sunM',
		'sunD',
		'sunE',
		'sunN',
		'monM',
		'monD',
		'monE',
		'monN',
		'tueM',
		'tueD',
		'tueE',
		'tueN',
		'wedM',
		'wedD',
		'wedE',
		'wedN',
		'thrM',
		'thrD',
		'thrE',
		'thrN',
		'friM',
		'friD',
		'friE',
		'friN',
		'satM',
		'satD',
		'satE',
		'satN',
	),
)); ?>
</div>
<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>
