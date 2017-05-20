<script language="javascript" type="text/javascript">
    function bmI()
    {
        var height = parseFloat(document.getElementById('in').value);
        var weight = parseFloat(document.getElementById('lb').value);

        var bm = (weight*703)/(height*height);
        document.getElementById('bmi').value = parseFloat(bm).toFixed(2);
    }
</script>

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
        'id'=>'subjective-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Subjective',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table'),
    )); ?>

    <table class="table">
        <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>
        <tbody>
        <tr>
            <th colspan="6">Vitals :</th>
        </tr>
        <tr>
            <td>Height</td>
            <td><?php echo $form->textFieldRow($model,'height',array('class'=>'span1','append'=>'in','id'=>'in')); ?></td>
            <td>Weight</td>
            <td><?php echo $form->textFieldRow($model,'weight',array('class'=>'span1','append'=>'lb','id'=>'lb', 'onchange'=>'bmI()')); ?></td>
            <td>BMI</td>
            <td><?php echo $form->textFieldRow($model,'bmi_calc',array('class'=>'span2','id'=>'bmi','value'=>'')); ?></td>
        </tr>
        <tr>
            <td>Tempr.</td>
            <td><?php echo $form->textFieldRow($model,'temp',array('class'=>'span2')); ?></td>
            <td>B.P.</td>
            <td><?php echo $form->textFieldRow($model,'blood_pressure',array('class'=>'span2')); ?></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Eye Left</td>
            <td><?php echo $form->textFieldRow($model,'eye_left',array('class'=>'span2','maxlength'=>50)); ?></td>
            <td>Eye Right</td>
            <td colspan="3"><?php echo $form->textFieldRow($model,'eye_right',array('class'=>'span2','maxlength'=>50)); ?></td>
        </tr>
        <tr>
            <td>Audio Left</td>
            <td><?php echo $form->textFieldRow($model,'audio_left',array('class'=>'span2','maxlength'=>50)); ?></td>
            <td>Audio Right</td>
            <td colspan="3"><?php echo $form->textFieldRow($model,'audio_right',array('class'=>'span2','maxlength'=>50)); ?></td>
        </tr>
        <tr>
            <td colspan="5"><?php echo $form->html5EditorRow($model,'complain',array('rows'=>5, 'height' => '200', 'options' => array('color' => true))); ?></td>
            <td></td>
        </tr>
        <tr style="display: none">
            <td colspan="6"><?php $session = Yii::app()->session;
                echo $form->textFieldRow($model,'pid',array('class'=>'span2','value'=>$session['PCID'])); ?>

                <?php echo $form->textFieldRow($model,'clerk',array('class'=>'span2','value'=>Yii::app()->user->empID())); ?>
                <?php echo $form->textFieldRow($model,'datetime',array('class'=>'span2')); ?>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6"><div class="pull-right">
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
    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>

