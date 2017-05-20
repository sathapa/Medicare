<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-subjective-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'suid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'clerk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'blood_pressure',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'height',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'weight',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'temp',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bmi_calc',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'eye_left',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'eye_right',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'audio_right',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'audio_left',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textAreaRow($model,'complain',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'datetime',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Search')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


<?php $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>	
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-subjective-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

