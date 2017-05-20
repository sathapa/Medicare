<?php
/* @var $this DischargeController */
/* @var $model Discharge */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dis_id'); ?>
		<?php echo $form->textField($model,'dis_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pid'); ?>
		<?php echo $form->textField($model,'pid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lab_id'); ?>
		<?php echo $form->textField($model,'lab_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drug_id'); ?>
		<?php echo $form->textField($model,'drug_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stat'); ?>
		<?php echo $form->textField($model,'stat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->