<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'doctor-charge-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

        <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>

        <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true,
                'fade' => true,
                'closeText' => '&times;', // false equals no close link
                'events' => array(),
                'htmlOptions' => array(),
                'userComponentId' => 'user',
                'alerts' => array( // configurations per alert type
// success, info, warning, error or danger
                    'success' => array('closeText' => '&times;'),
                    'info', // you don't need to specify full config
                    'warning' => array('block' => false, 'closeText' => false),
                    'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
                ),
            ));
        ?>
        <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
            'title'=> 'Define Doctor Charge',
            'headerIcon'=>'icon-plus',
            'htmlOptions'=>array('class'=>'bootstrap-widget-table')
        )); ?>

    <table class="table">
        <tbody>
        <tr>
            <td width="40%" style="text-align: center; vertical-align: middle">Doctor:</td>
            <td><?php echo $form->dropDownList($model,'eid',CHtml::listData(User::model()->findAllByAttributes(array('profession'=>'doctor')),'emp_id','uName'),array('class'=>'span4')); ?></td>
        </tr>
        <tr>
            <td width="40%" style="text-align: center; vertical-align: middle">Charge:</td>
            <td><?php echo $form->textFieldRow($model,'charge',array('class'=>'span4')); ?></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td></td>
            <td style="text-align: center"><div>
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
