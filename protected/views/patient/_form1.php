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
	'id'=>'patient-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'inline',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>

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
    'title'=>'Add New Patient',
    'headerIcon'=>'icon-plus',
    'htmlOptions'=>array('class'=>'bootstrap-widget-table')
)) ;?>
	<?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9'));*/ ?>
<table class="table">
    <tbody>
    <tr style="background-color: lavender">
        <th colspan="6">Basic Info</th>
    </tr>
    <tr>
        <td>Name</td>
        <td colspan="5"><?php echo $form->textFieldRow($model,'title',array('class'=>'span1','maxlength'=>100,'value'=>$data->title,'readOnly'=>true)); ?>
            <?php echo $form->textFieldRow($model,'fName',array('class'=>'span2','maxlength'=>100,'value'=>$data->fName,'readOnly'=>true)); ?>
            <?php echo $form->textFieldRow($model,'mName',array('class'=>'span2','maxlength'=>100,'value'=>$data->mName,'readOnly'=>true)); ?>
            <?php echo $form->textFieldRow($model,'lName',array('class'=>'span2','maxlength'=>100,'value'=>$data->lName,'readOnly'=>true)); ?>
        </td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $form->textFieldRow($model,'gender',array('class'=>'span2','maxlength'=>100,'value'=>$data->gender,'readOnly'=>true)); ?></td>
        <td>DOB</td>
        <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'model'=>$model,
                'attribute'=>'dob',
                // additional javascript options for the date picker plugin
                'options'=>array(
                    'showAnim'=>'drop',
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                    'yearRange'=>'1900:',
                ),
                'htmlOptions'=>array(
                    'style'=>'height:20px;','placeholder'=>'DOB', 'class'=>'span2'
                ),
            ));?>
        </td>
        <td>Marital Status</td>
        <td><?php echo $form->dropDownList($model,'marital_status',array(''=>'Select One','Single'=>'Single','Married'=>'Married','Divorced'=>'Divorced','Widow'=>'Widow'),array('class'=>'span2','maxlength'=>100)); ?></td>
    </tr>
    <tr style="background-color: lavender">
        <th colspan="6">Current Address</th>
    </tr>
    <tr>
        <td colspan="6"><?php echo $form->textFieldRow($model,'sStreet',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->textFieldRow($model,'sWardNo',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->textFieldRow($model,'sCity',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->dropDownList($model,'sDistrict',CHtml::listData(Listaddress::model()->findAll(),'id','district'),array('prompt'=>'Select District', 'class'=>'span2', 'ajax'=>array(
                    'type'=>'POST',
                    'url'=>CController::createUrl('loadZone'),
                    'update'=>'#sZone',
//                    'update'=>'#'.CHtml::activeId($model,'sZone'),
                    'data'=>array('id'=>'js:this.value')
                ))); ?>
            <?php echo $form->dropDownList($model,'sZone',array(),array('prompt'=>'Zone','class'=>'span2','maxlength'=>100,'id'=>'sZone')); ?>
        </td>
    </tr>
    <tr style="background-color: lavender">
        <th colspan="6">Permanent Address</th>
    </tr>
    <tr>
        <td colspan="6"><?php echo $form->textFieldRow($model,'pStreet',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->textFieldRow($model,'pWardNo',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->textFieldRow($model,'pCity',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->dropDownList($model,'pDistrict',CHtml::listData(Listaddress::model()->findAll(),'id','district'),array('prompt'=>'Select District', 'class'=>'span2', 'ajax'=>array(
                    'type'=>'POST',
                    'url'=>CController::createUrl('loadZone'),
                    'update'=>'#pZone',
//                    'update'=>'#'.CHtml::activeId($model,'sZone'),
                    'data'=>array('id'=>'js:this.value')
                ))); ?>
            <?php echo $form->dropDownList($model,'pZone',array(),array('prompt'=>'Zone','class'=>'span2','maxlength'=>100,'id'=>'pZone')); ?>
            <?php echo $form->textFieldRow($model,'country',array('class'=>'span2','maxlength'=>100)); ?>
        </td>
    </tr>
    <tr style="background-color: lavender">
        <th colspan="6">Contact Information</th>
    </tr>
    <tr>
        <td>Mother's Name</td>
        <td><?php echo $form->textFieldRow($model,'motherName',array('class'=>'span2','maxlength'=>100)); ?></td>
        <td>Guardian's Name</td>
        <td><?php echo $form->textFieldRow($model,'guardianName',array('class'=>'span2','maxlength'=>100)); ?></td>
        <td>Relation</td>
        <td><?php echo $form->textFieldRow($model,'relation',array('class'=>'span2','maxlength'=>100)); ?></td>
    </tr>
    <tr>
        <td>E. Contact</td>
        <td><?php echo $form->textFieldRow($model,'eContact',array('class'=>'span2','maxlength'=>100)); ?></td>
        <td>E. Phone</td>
        <td><?php echo $form->textFieldRow($model,'ePhone',array('class'=>'span2','maxlength'=>100)); ?></td>
        <td>Home Phone</td>
        <td><?php echo $form->textFieldRow($model,'homePhone',array('class'=>'span2','maxlength'=>100,'value'=>$data->homePhone,'readOnly'=>true)); ?></td>
    </tr>
    <tr>
        <td>Work Phone</td>
        <td><?php echo $form->textFieldRow($model,'workPhone',array('class'=>'span2','maxlength'=>100)); ?></td>
        <td>Mobile</td>
        <td><?php echo $form->textFieldRow($model,'mobilePhone',array('class'=>'span2','maxlength'=>100,'value'=>$data->mobilePhone,'readOnly'=>true)); ?></td>
        <td>Email</td>
        <td><?php echo $form->textFieldRow($model,'email',array('class'=>'span2','maxlength'=>100)); ?></td>
    </tr>
    <tr style="background-color: lavender">
        <th colspan="6">Assign New Card</th>
    </tr>
    <tr>
        <td colspan="2">Assign New Card</td>
        <td colspan="4"><?php echo $form->textFieldRow($model,'cardID',array('class'=>'span2','maxlength'=>100)); ?>
            <?php echo $form->error($model,'cardID'); ?>
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
            </div>
        </td>
    </tr>
    </tfoot>
</table>
<?php $this->endWidget(); ?>

<div style="display: none;" >
	<?php echo $form->textFieldRow($model,'stat',array('class'=>'span2','maxlength'=>100,'value'=>1)); ?>

	<?php echo $form->textFieldRow($model,'dID',array('class'=>'span2','maxlength'=>100,'value'=>$data->dID)); ?>

	<?php echo $form->textFieldRow($model,'clerk',array('class'=>'span2','maxlength'=>100,'value'=>Yii::app()->user->id)); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span2','maxlength'=>100,'value'=>date('Y-m-d'))); ?>

	<?php echo $form->textFieldRow($model,'time',array('class'=>'span2','maxlength'=>100,'id'=>'time')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
