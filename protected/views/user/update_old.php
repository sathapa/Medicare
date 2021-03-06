<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update User <?php echo $model->id; ?></h1>
<hr/>

<?php 
$this->menu=array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
                array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)),'active'=>true, 'linkOptions'=>array()),
	);
?>

<?php /*echo $this->renderPartial('_form',array('model'=>$model)); */?>
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

    <?php if(Yii::app()->user->hasFlash('contact')): ?>

        <div class="alert alert-error">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
        </div>

    <?php endif; ?>


    <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>
    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Add User',
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
            <td>Old Password</td>
            <td><?php echo "<input type='text' value='' name='old_pass''>" ?></td>
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
        <tr style="display: none">
            <td colspan="2"><?php echo $form->textFieldRow($model,'emp_id',array('class'=>'span5')); ?>
                <?php echo $form->textFieldRow($model,'stat',array('class'=>'span5','maxlength'=>100,'value'=>1)); ?></td>
        </tr>
        </tbody>
        </tfoot>
    </table>
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>
