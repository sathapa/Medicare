<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'dose-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.tbBox',array(
        'title'=>'<strong>Create Form</stong>',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>

    <?php echo $form->errorSummary($Form,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
    <table class="table">
        <tr>
            <td><?php echo $form->textFieldRow($Form,'title'); ?></td>
        </tr>
        <tr>
            <td><div class="pull-right">
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
    </table>

    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>