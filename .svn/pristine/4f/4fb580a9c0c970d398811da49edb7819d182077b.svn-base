<?php
    $this->breadcrumbs=array(
        'Patients'=>array('index'),
        'Create',
    );

?>


<?php
    $this->menu=array(
        array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
        array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
    );
?>

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

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'patient-form',
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

    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Add New Patient',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )) ;?>
    <?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); */?>
    <table class="table">
        <tbody>

        <tr>
            <td>Select Doctor</td>
            <td colspan="2"><?php echo $form->dropDownList($model,'dID',CHtml::listData(User::model()->findAllByAttributes(array('profession'=>'doctor')),'id','uName'),array('class'=>'span2','maxlength'=>100)); ?></td>
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

        <?php echo $form->textFieldRow($model,'clerk',array('class'=>'span2','maxlength'=>100,'value'=>Yii::app()->user->id)); ?>

        <?php echo $form->textFieldRow($model,'date',array('class'=>'span2','maxlength'=>100,'value'=>date('Y-m-d'))); ?>

        <?php echo $form->textFieldRow($model,'time',array('class'=>'span2','maxlength'=>100,'id'=>'time')); ?>

    </div>

    <?php $this->endWidget(); ?>

</div>
