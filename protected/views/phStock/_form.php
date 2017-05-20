<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'ph-stock-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">

	<?php echo $form->textFieldRow($model,'SKU',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'dis_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'min_quantity',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'instore_quantity',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mfd_data',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'exp_data',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'stat',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'clerk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_date',array('class'=>'span5')); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
