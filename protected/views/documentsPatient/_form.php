<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'documents-patient-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'horizontal',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=> 'Upload Document',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>

    <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
<table class="table table-condensed table bordered">
    <tr>
<!--        <td>Department</td>-->
        <td><?php echo $form->textFieldRow($model,'department',array('class'=>'span5','maxlength'=>500)); ?></td>
    </tr>
    <tr>
<!--        <td>Title</td>-->
    <td><?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>500)); ?></td>
    </tr>
    <tr>
<!--        <td>File</td>-->
        <td><?php echo $form->fileFieldRow($model,'file',array('class'=>'span5','maxlength'=>500,'class'=>'btn')); ?></td>
    </tr>
    <tr>
<!--        <td>Soruce</td>-->
        <td><?php echo $form->textFieldRow($model,'source',array('class'=>'span5','maxlength'=>500)); ?></td>
    </tr>
    <tr style="display: none;">
        <td><?php $session = Yii::app()->session; ?>
            <?php echo $form->textFieldRow($model,'pid',array('class'=>'span5','value'=>$session['PCID'])); ?>

            <?php echo $form->textFieldRow($model,'did',array('class'=>'span5','value'=>$session['did'])); ?>

            <?php echo $form->textFieldRow($model,'sid',array('class'=>'span5','value'=>$session['sid'])); ?>

            <?php echo $form->textFieldRow($model,'datetime',array('class'=>'span5')); ?>

            <?php echo $form->textFieldRow($model,'user',array('class'=>'span5','maxlength'=>500,'value'=>Yii::app()->user->id)); ?>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pull-right">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'type'=>'primary',
                    'icon'=>'upload-alt',
                    'label'=>$model->isNewRecord ? 'Create' : 'Save',
                )); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'=>'reset',
                    'icon'=>'remove',
                    'label'=>'Reset',
                )); ?>
            </div>
        </td>
    </tr>
</table>




    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>
