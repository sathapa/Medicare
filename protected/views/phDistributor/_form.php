<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'ph-distributor-form',
        'focus'=>array($model,'dis_name'),
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
            //'afterValidate'=>'js:$.yii.fix.ajaxSubmit.afterValidate'
        ),
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Add Distributor',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table'),
    )); ?>
    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>
    <table class="table">
        <tbody>
        <tr>
            <td>Distributor Name</td>
            <td><?php echo $form->textFieldRow($model,'dis_name',array('class'=>'span5','maxlength'=>50,'placeholder'=>'Name')); ?>
                <?php echo $form->error($model,'dis_name'); ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $form->textFieldRow($model,'dis_address',array('class'=>'span5','maxlength'=>100)); ?>
                <?php echo $form->error($model,'dis_address'); ?></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><?php echo $form->textFieldRow($model,'dis_contact',array('class'=>'span5','maxlength'=>50)); ?>
                <?php echo $form->error($model,'dis_contact'); ?></td>
        </tr>
        <tr>
            <td>Supply Quantity</td>
            <td><?php echo $form->textFieldRow($model,'supply_quantity',array('class'=>'span5')); ?>
                <?php echo $form->error($model,'supply_quantity'); ?></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2"><div class="pull-right">
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
            </td>
        </tr>
        </tfoot>
    </table>

    <div style="display: none"><?php echo $form->textFieldRow($model,'add_clerk',array('class'=>'span5','value'=>Yii::app()->user->id)); ?></div>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>
