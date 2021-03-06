<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'inline',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>
<?php $this->beginWidget('bootstrap.widgets.TbBox',array(
    'title'=>'Add Authenticated User',
    'headerIcon'=>'icon-plus',
    'htmlOptions'=>array('class'=>'bootstrap-widget-table')
));

?>

    <table class="table">
        <tbody>
        <tr>
            <td>User Name</td>
            <td><?php echo $form->textFieldRow($model,'uName',array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $form->passwordFieldRow($model,'uPass',array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><?php echo $form->passwordFieldRow($model,'uPass2',array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td>Security Question</td>
            <td><?php echo $form->textFieldRow($model,'sQuestion',array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td>Answer</td>
            <td><?php echo $form->textFieldRow($model,'sAnswer',array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td>Post</td>
            <td><?php echo $form->dropDownList($model,'profession',array(''=>'Select One','doctor'=>'Doctor','accountant'=>'Accountant','clerk'=>'Clerk'),array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><?php echo $form->dropDownList($model,'role',array(''=>'Select One','admin'=>'Admin','doctor'=>'Doctor','clerk'=>'Clerk'),array('class'=>'span5','maxlength'=>100)); ?></td>
        </tr>
        <tr style="display: none">
            <td colspan="2"><?php echo $form->textFieldRow($model,'emp_id',array('class'=>'span5','value'=>$eid)); ?>
                <?php echo $form->textFieldRow($model,'stat',array('class'=>'span5','maxlength'=>100,'value'=>1)); ?></td>
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
                </div></td>
        </tr>
        </tfoot>
    </table>
<?php $this->endWidget(); ?>






<?php $this->endWidget(); ?>

</div>
