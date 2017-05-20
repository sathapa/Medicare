<?php
$this->breadcrumbs=array(
	'Subjectives'=>array('index'),
	'Create',
);

?>
<?php
    $this->menu=array(
        array('icon'=>'plus-sign-alt','label'=>'Subjective', 'url'=>array('/Subjective/create')),
        array('icon'=>'plus-sign-alt','label'=>'Objective', 'url'=>array('/Objective/create')),
        array('icon'=>'plus-sign-alt','label'=>'Assessment', 'url'=>array('/LabOrder/laborderr')),
        array('icon'=>'plus-sign-alt','label'=>'Plan', 'url'=>array('/Plan/create')),
        array('icon'=>'upload-alt','label'=>'Attach Document', 'url'=>array('DocumentsPatient/create')),
    ); ?>
<?php
/*$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus pull-right', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
	);
*/?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>