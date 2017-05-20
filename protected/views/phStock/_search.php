<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-ph-stock-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'stock_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'SKU',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'dis_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'min_quantity',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'instore_quantity',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mfd_data',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'exp_data',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'stat',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'clerk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_date',array('class'=>'span5')); ?>

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
		$(":input","#search-ph-stock-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

