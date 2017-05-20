<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'search-appointment-form',
    'type'=>'inline',
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
));  ?>
<?php echo $form->textFieldRow($model,'id',array('class'=>'input-small','maxlength'=>100,'placeholder'=>'Apt. ID')); ?>

<?php echo $form->textFieldRow($model,'fName',array('class'=>'input-small','maxlength'=>100,)); ?>

<?php echo $form->textFieldRow($model,'mName',array('class'=>'input-small','maxlength'=>100)); ?>

<?php echo $form->textFieldRow($model,'lName',array('class'=>'input-small','maxlength'=>100)); ?>

<?php echo $form->textFieldRow($model,'mobilePhone',array('class'=>'input-small','maxlength'=>100)); ?>

<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model'=>$model,
    'attribute'=>'date',
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'drop',
        'dateFormat'=>'yy-mm-dd',
        'changeYear'=>true,
        'changeMonth'=>true,
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;','placeholder'=>'Date', 'class'=>'input-small',
    ),
));?>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Search')); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset', 'htmlOptions'=>array('class'=>'btnreset btn-input-small'))); ?>

<?php $this->endWidget(); ?>


<?php
    $cs = Yii::app()->getClientScript();
    $cs->registerCoreScript('jquery');
    $cs->registerCoreScript('jquery.ui');
    $cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>
<script>
    $(".btnreset").click(function(){
        $(":input","#search-appointment-form").each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase(); // normalize case
            if (type == "text" || type == "password" || tag == "textarea") this.value = "";
            else if (type == "checkbox" || type == "radio") this.checked = false;
            else if (tag == "select") this.selectedIndex = "";
        });
    });
</script>

