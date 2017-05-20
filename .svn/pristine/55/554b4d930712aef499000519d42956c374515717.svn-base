<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'lab-inventory-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'horizontal',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>
    <!--<fieldset>
   <legend>
       <p class="note">Fields with <span class="required">*</span> are required.</p>
   </legend>-->

    <?php $this->beginWidget('bootstrap.widgets.tbBox',array(
        'title'=>'<strong>Create Lab Test</strong>',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>

    <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>

    <?php echo $form->textFieldRow($model,'test_name',array('class'=>'span5','maxlength'=>100)); ?>

    <?php echo $form->textFieldRow($model,'test_unit',array('class'=>'span5','maxlength'=>40)); ?>

    <?php echo $form->textFieldRow($model,'min_range1',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'min_range2',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'max_range1',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'max_range2',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'comments',array('class'=>'span5','maxlength'=>100)); ?>

    <?php echo $form->textFieldRow($model,'price',array('class'=>'span5')); ?>


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


    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>
</div>
