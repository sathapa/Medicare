<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

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
            'success1' => array('closeText' => '&times;'),
            'success2' => array('closeText' => '&times;'),
            'info', // you don't need to specify full config
            'warning' => array('block' => false, 'closeText' => false),
            'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
        ),
    ));
?>

<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'plan-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array('onSubmit'=>true),
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>
    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Prescriptions & Plans',
        'headerIcon'=>'icon-list',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>
    <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>

    <table class="table">
        <tbody>
        <tr>
            <td colspan="7">
                <?php echo $form->html5EditorRow($model,'plan',array('rows'=>5, 'height' => '200', 'options' => array('color' => true))); ?>
            </td>
        </tr>
        <tr style="display: none">
            <td><?php echo $form->textFieldRow($model,'pid',array('class'=>'span1','value'=>$pid)); ?>
                <?php echo $form->textFieldRow($model,'clerk',array('class'=>'span1','value'=>Yii::app()->user->empID())); ?>
                <?php echo $form->textFieldRow($model,'datetime',array('class'=>'span1')); ?>
            </td>
        </tr>
        <tr class="well">
            <td>
                <fieldset><legend><b>Prescription</b></legend>
                    <table class="table templateFrame well" cellspacing="0">
                        <thead class="templateHead">
                        <tr>
                            <th style="text-align: center">Generic Name</th>
                            <th style="text-align: center">Drug Brand</th>
                            <th style="text-align: center">Unit(mg/ml)</th>
                            <th style="text-align: center">SIG</th>
                            <th style="text-align: center">Days</th>
                            <th style="text-align: center">Quantity</th>
                            <th style="text-align: center">Refill</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="8">
                                <textarea class="template" rows="0" cols="0" style="display: none">
                                    <tr class="templateContent">
                                        <td>
                                            <?php echo CHtml::dropDownList('PhOrderr','',CHtml::listData(PhDrug::model()->findAll(),'generic_name','generic_name'),array('prompt'=>'Select Category','style'=>'width:150px',
                                                                                                                                                                         'ajax'=>array(
                                                                                                                                                                             'type'=>'POST',
                                                                                                                                                                             'url'=>CController::createUrl('dynamicDrug1'),
                                                                                                                                                                             'update'=>'#PhOrdernd',
                                                                                                                                                                             'data'=>array('generic_name'=>'js:this.value')
                                                                                                                                                                         )));?>
                                        </td>
                                        <td>
                                            <?php echo CHtml::dropDownList('PhOrdernd','',array(),
                                                array('style'=>'width:125px',
                                                      'ajax'=>array(
                                                          'type'=>'POST',
                                                          'url'=>CController::createUrl('dynamicDrug2'),
                                                          'update'=>'#PhOrder_'.$i.'_drug_id',
                                                          'data'=>array('brand_name'=>'js:this.value')
                                                      )));?>
                                        </td>
                                        <td><?php echo CHtml::dropDownList('PhOrder[{0}][drug_id]','',array(),array('style'=>'width:80px'));?> </td>
                                        <td><?php echo CHtml::textField('PhOrder[{0}][sig]','',array('style'=>'width:240px')); ?> </td>
                                        <td><?php echo CHtml::dropDownList('PhOrder[{0}][days]','',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30'),array('style'=>'width:50px')); ?> </td>
                                        <td><?php echo CHtml::textField('PhOrder[{0}][quantity]','',array('style'=>'width:50px')); ?></td>
                                        <td><?php echo CHtml::textField('PhOrder[{0}][refill]','',array('style'=>'width:50px')); ?> </td>
                                        <td>
                                            <div class="remove btn btn-danger">
                                                <i class="icon-trash"></i>
                                            </div>
                                            <input type="text" class="rowIndex"  value="{0}" />
                                        </td>
                                    </tr>
                                </textarea>
                                <div class="add btn btn-primary" style="width: 97%"><i class="icon-plus-sign"></i>
                                    <?php echo Yii::t('ui','Add');?>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody class="templateTarget">
                        <?php foreach($drugs as $i=>$drug): ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </fieldset>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="7">
                <div class="pull-right">
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
                </div>
            </td>
        </tr>
        </tfoot>
    </table>

    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>

