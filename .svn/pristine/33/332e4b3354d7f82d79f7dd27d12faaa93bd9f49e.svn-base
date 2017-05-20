<?php
$this->breadcrumbs=array(
	'Objectives'=>array('index'),
	$model->obid=>array('view','id'=>$model->obid),
	'Update',
);

?>

<?php
$this->menu=array(
    array('icon'=>'plus-sign-alt','label'=>'Subjective', 'url'=>array('/Subjective/create')),
    array('icon'=>'plus-sign-alt','label'=>'Objective', 'url'=>array('/Objective/update','id'=>$_GET['id'])),
    array('icon'=>'plus-sign-alt','label'=>'Assessment', 'url'=>array('/LabOrder/laborderr')),
    array('icon'=>'plus-sign-alt','label'=>'Plan', 'url'=>array('/Plan/create')),
    array('icon'=>'upload-alt','label'=>'Attach Document', 'url'=>array('DocumentsPatient/create')),
); ?>

<?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'block' => true,
        'fade' => true,
        'closeText' => '&times;', // false equals no close link
        'events' => array(),
        'htmlOptions' => array(),
        'userComponentId' => 'user',
        'alerts' => array(
            'success' => array('closeText' => '&times;'),
        ),
    ));
?>

<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'objective-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Objective',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table'),
    )); ?>

    <table class="table">
        <tbody>
        <tr>
            <td><?php echo $form->html5EditorRow($model,'objective',array('rows'=>5, 'height' => '200', 'options' => array('color' => true))); ?></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td><div class="pull-right">
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'submit',
                        'type'=>'primary',
                        'icon'=>'ok white',
                        'label'=>$model->isNewRecord ? 'Save' : 'Save',
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

    <div style="display: none">
        <?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); */?>

        <?php echo $form->textFieldRow($model,'clerk',array('class'=>'span5')); ?>

        <?php $session = Yii::app()->session;
        echo $form->textFieldRow($model,'sid',array('class'=>'span5')); ?>

        <?php $session = Yii::app()->session;
        echo $form->textFieldRow($model,'pid',array('class'=>'span5')); ?>

        <?php echo $form->textFieldRow($model,'datetime',array('class'=>'span5')); ?>
    </div>

    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>
