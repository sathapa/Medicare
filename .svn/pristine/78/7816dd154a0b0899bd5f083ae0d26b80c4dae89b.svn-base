<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-doctortime-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'dtid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'uid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sunM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sunD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sunE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sunN',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'monM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'monD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'monE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'monN',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tueM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tueD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tueE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tueN',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wedM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wedD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wedE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wedN',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'thrM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'thrD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'thrE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'thrN',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'friM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'friD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'friE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'friN',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'satM',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'satD',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'satE',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'satN',array('class'=>'span5')); ?>

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
		$(":input","#search-doctortime-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

