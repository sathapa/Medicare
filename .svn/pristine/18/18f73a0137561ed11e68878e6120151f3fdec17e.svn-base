<script type="text/javascript" language="JavaScript">
    <!--
    function updateTime() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        if (minutes < 10){
            minutes = "0" + minutes;
        }
        if (seconds < 10){
            seconds = "0" + seconds;
        }
        /*if (hours > 11)
         {
         hours1 = hours-12;
         }
         else if(hours < 11)
         {
         hours1 = hours;
         }*/
        var v = hours + ":" + minutes + ":" + seconds + " ";
        if(hours > 11){
            v+="PM";
        } else {
            v+="AM"
        }
        setTimeout("updateTime()",1000);
        document.getElementById('time').value=v;
    }
    updateTime();
    //-->
</script>


<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'appointment-form',
        'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
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

    <?php
        $data = Patient::model()->findByPk($_GET['id']);
    ?>
    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Create New Appointment',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>
    <table class="table">
        <tbody>
        <tr>
            <td>Name</td>
            <td colspan="5"><?php echo $form->textFieldRow($model,'title',array('class'=>'span1','maxlength'=>100,'value'=>$data->title,'readOnly'=>true)); ?>
                <?php echo $form->textFieldRow($model,'fName',array('class'=>'span2','maxlength'=>100,'value'=>$data->fName,'readOnly'=>true)); ?>
                <?php echo $form->textFieldRow($model,'mName',array('class'=>'span2','maxlength'=>100,'value'=>$data->mName,'readOnly'=>true)); ?>
                <?php echo $form->textFieldRow($model,'lName',array('class'=>'span2','maxlength'=>100,'value'=>$data->lName,'readOnly'=>true)); ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $form->textFieldRow($model,'gender',array('class'=>'span2','maxlength'=>100,'value'=>$data->gender,'readOnly'=>true)); ?></td>
            <td>Home Phone</td>
            <td><?php echo $form->textFieldRow($model,'homePhone',array('class'=>'span2','maxlength'=>100,'value'=>$data->homePhone,'readOnly'=>true)); ?></td>
            <td>Mobile</td>
            <td><?php echo $form->textFieldRow($model,'mobilePhone',array('class'=>'span2','maxlength'=>100,'value'=>$data->mobilePhone,'readOnly'=>true)); ?></td>
        </tr>
        <tr>
            <td>Choose Doctor</td>
            <td><?php echo $form->dropDownList($model,'dID',CHtml::listData(User::model()->findAllByAttributes(array('profession'=>'doctor')),'id','uName'),array('class'=>'span2','maxlength'=>100)); ?></td>
            <td>Reason</td>
            <td colspan="3"><?php echo $form->textAreaRow($model,'reason',array('class'=>'span4','maxlength'=>100)); ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Medium</td>
            <td><?php echo $form->dropDownList($model,'medium',array(''=>'Select One','Walkin'=>'Walk In','Phone'=>'Phone'),array('class'=>'span2')) ?>
                <?php echo $form->error($model,'medium'); ?>
            </td>
        </tr>
        <tr style="display: none">
            <td colspan="6"><?php echo $form->textFieldRow($model,'clerk',array('class'=>'span2','maxlength'=>100,'value'=>Yii::app()->user->id)); ?>
                <?php echo $form->textFieldRow($model,'date',array('class'=>'span2','maxlength'=>100,'value'=>date('Y-m-d'))); ?>
                <?php echo $form->textFieldRow($model,'time',array('class'=>'span2','maxlength'=>100,'id'=>'time')); ?>
                <?php echo $form->textFieldRow($model,'stat',array('class'=>'span2','maxlength'=>100,'id'=>'time','value'=>1)); ?>
                <?php echo $form->textFieldRow($model,'type',array('class'=>'span2','maxlength'=>100,'id'=>'time','value'=>$_GET['id'])); ?>
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
