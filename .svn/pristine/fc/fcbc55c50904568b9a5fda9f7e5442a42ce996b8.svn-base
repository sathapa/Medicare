<?php
$this->breadcrumbs=array(
    'Plans'=>array('index'),
    $model->plid=>array('view','id'=>$model->plid),
    'Update',
);

?>

<?php $session = Yii::app()->session;
$this->menu=array(
    array('icon'=>'plus-sign-alt','label'=>'Subjective', 'url'=>array('/Subjective/create')),
    array('icon'=>'plus-sign-alt','label'=>'Objective', 'url'=>array('/Objective/create')),
    array('icon'=>'plus-sign-alt','label'=>'Assessment', 'url'=>array('/LabOrder/laborderr')),
    array('icon'=>'plus-sign-alt','label'=>'Plan', 'url'=>array('/Plan/update','id'=>$_GET['id'])),
    array('icon'=>'upload-alt','label'=>'Attach Document', 'url'=>array('DocumentsPatient/create')),
); ?>

<?php echo $this->renderPartial('_form', array(
    'model'=>$model,
    'model1'=>$model1,
    'pid'=>$pid,
    'drugs'=>$drugs)); ?>

<!--<div class="form">
    <?php /*$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'plan-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); */?>
    <?php /*$this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Prescriptions & Plans',
        'headerIcon'=>'icon-list',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); */?>
    <?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); */?>
    <table class="table">
        <tbody>
        <tr>
            <td><?php /*echo $form->html5EditorRow($model,'plan',array('rows'=>5, 'height' => '200', 'options' => array('color' => true))); */?></td>
        </tr>
        <tr style="display: none"><td><?php /*echo $form->textFieldRow($model,'pid',array('class'=>'span2')); */?>

                <?php /*echo $form->textFieldRow($model,'clerk',array('class'=>'span2')); */?>

                <?php /*echo $form->textFieldRow($model,'datetime',array('class'=>'span2')); */?>
            </td></tr>
        </tbody>
        <tfoot>
        <tr>
            <td><div class="pull-right">
                    <?php /*$this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'submit',
                        'type'=>'primary',
                        'icon'=>'ok white',
                        'label'=>$model->isNewRecord ? 'Save' : 'Save',
                    )); */?>
                    <?php /*$this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'reset',
                        'icon'=>'remove',
                        'label'=>'Reset',
                    )); */?>
                </div></td>
        </tr>
        </tfoot>
    </table>
    <?php /*$this->endWidget(); */?>
    <?php /*$this->endWidget(); */?>

</div>
-->