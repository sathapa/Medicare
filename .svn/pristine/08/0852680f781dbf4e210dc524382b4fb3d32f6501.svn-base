<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'doctor-leave-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'inline',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		

                <table>
                    <tr>
                        <td>Select Doctor: <?php echo $form->dropDownList($model,'eid',CHtml::listData(Employee::model()->findAllByAttributes(array('title'=>'Dr.')),'id','fName')); ?>
                        </td>
                        <td>Date: <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'model'=>$model,
                            'attribute'=>'date',
                            // additional javascript options for the date picker plugin
                            'options'=>array(
                            'showAnim'=>'drop',
                            ),
                            'htmlOptions'=>array(
                            'style'=>'height:20px;',
                             'placeHolder'=>'Select Date'
                            ),
                            )); ?>
                        </td>
                    </tr>
                </table>

                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th width="20%" style="text-align: center">Full_Day</th>
                        <th width="20%" style="text-align: center">Morning_Shift</th>
                        <th width="20%" style="text-align: center">Day_Shift</th>
                        <th width="20%" style="text-align: center">Evening_Shift</th>
                        <th width="20%" style="text-align: center">Night_Shift</th>
                    </tr>
                    <tr>
                        <td style="text-align: center"><input type="checkbox" id="all" name="all" onclick="checkall()" /> </td>
                        <td style="text-align: center"><?php echo $form->checkBox($model,'mShift',array('class'=>'span1','id'=>'mShift')); ?></td>
                        <td style="text-align: center"><?php echo $form->checkBox($model,'dshift',array('class'=>'span1','id'=>'dshift')); ?></td>
                        <td style="text-align: center"><?php echo $form->checkBox($model,'eShift',array('class'=>'span1','id'=>'eShift')); ?></td>
                        <td style="text-align: center"><?php echo $form->checkBox($model,'nShift',array('class'=>'span1','id'=>'nShift')); ?></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="5">
                            <div class="pull-right">
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



<?php $this->endWidget(); ?>

</div>
<script type="text/javascript">
    function checkall()
    {
        var a=document.getElementById('all');
        if(a.checked==1)
        {
            document.getElementById('mShift').checked=1;
            document.getElementById('dshift').checked=1;
            document.getElementById('eShift').checked=1;
            document.getElementById('nShift').checked=1;
        }
        else
        {
            document.getElementById('mShift').checked=0;
            document.getElementById('dshift').checked=0;
            document.getElementById('eShift').checked=0;
            document.getElementById('nShift').checked=0;
        }
    }

</script>