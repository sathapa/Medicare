<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-doctor-leave-form',
    'type'=>'inline',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->dropDownList($model,'eid', CHtml::listData(Employee::model()->findAllByAttributes(array('title'=>'Dr.')),'id','fName'),array('class'=>'small')); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span2','maxlength'=>10)); ?>

	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'icon'=>'search white', 'label'=>'Search')); ?>

<?php $this->endWidget(); ?>


<?php $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>	
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-doctor-leave-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

