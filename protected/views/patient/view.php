<?php
$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->title,
);
?>

<h1>View Patient #<?php echo $model->id; ?></h1>
<hr />
<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array()),
		//array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
		array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

);
?>
<div class='printableArea'>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'fName',
		'mName',
		'lName',
		'dob',
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
