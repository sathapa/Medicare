<!DOCTYPE html>
<!--<div class="form">
    <?php /*$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'lab-result-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); */?>

    <?php /*$this->beginWidget('bootstrap.widgets.tbBox',array(
        'title'=>'Fields with <span class="required">*</span> are required.',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); */?>

    <?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); */?>

<table class="table">
    <tr>
        <td>
            <table border=1>
                <tr>
                    <th width="5%"  style="text-align: center">SN.</th>
                    <th width="35%" style="text-align: center">Test Name</th>
                    <th width="12%" style="text-align: center">Test Unit</th>
                    <th width="12%" style="text-align: center">min range 1</th>
                    <th width="12%" style="text-align: center">max range 1</th>
                    <th width="12%" style="text-align: center">min range 2</th>
                    <th width="12%" style="text-align: center">max range 2</th>
                    <th width="12%" style="text-align: center">Result</th>
                </tr>
                <?php /*$data = LabOrder::model()->findByPk($id);
                    $dataLI = LabInventory::model()->findByPk($data->lid); */?>
                <tr>
                    <td style="text-align: center">1</td>
                    <td><?php /*echo $dataLI->test_name; */?></td>
                    <td style="text-align: center"><?php /*echo $dataLI->test_unit; */?></td>
                    <td style="text-align: center"><?php /*echo $dataLI->min_range1; */?></td>
                    <td style="text-align: center"><?php /*echo $dataLI->max_range1; */?></td>
                    <td style="text-align: center"><?php /*echo $dataLI->min_range2; */?></td>
                    <td style="text-align: center"><?php /*echo $dataLI->max_range2; */?></td>
                    <td style="text-align: center"><?php /*echo $form->textFieldRow($model,'result',array('class'=>'span1','maxlength'=>100)); */?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td><?php /*echo $form->textAreaRow($model,'suggestion',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); */?></td>
    </tr>
    <tr style="display: none">
        <td>
            <?php /*echo $form->textFieldRow($model,'sid',array('class'=>'span5','value'=>$data->sid)); */?>
            <?php /*echo $form->textFieldRow($model,'pid',array('class'=>'span5','value'=>$data->pid)); */?>
            <?php /*echo $form->textFieldRow($model,'eid',array('class'=>'span5','value'=>Yii::app()->user->id)); */?>
            <?php /*echo $form->textFieldRow($model,'loid',array('class'=>'span5','value'=>$id)); */?>
            <?php /*echo $form->textFieldRow($model,'datetime',array('class'=>'span5','value'=>date('Y-m-d h:m:s'))); */?>
        </td>
    </tr>
    <tr>
        <td><div class="pull-right">
                <?php /*$this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'type'=>'primary',
                    'icon'=>'ok white',
                    'label'=>$model->isNewRecord ? 'Create' : 'Save',
                )); */?>
                <?php /*$this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType'=>'reset',
                    'icon'=>'remove',
                    'label'=>'Reset',
                )); */?>
            </div>
        </td>
    </tr>
</table>

    <?php /*$this->endWidget(); */?>
    <?php /*$this->endWidget(); */?>

</div>
-->


<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'lab-result-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php /*$this->beginWidget('bootstrap.widgets.tbBox',array(
        'title'=>'Fields with <span class="required">*</span> are required.',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); */?>

    <?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); */?>
    <table class="table table-condensed table-bordered">
        <tr style="background-color: lightsteelblue">
            <th style="text-align: center">SN</th>
            <th style="text-align: center">Test Name</th>
            <th style="text-align: center">Test Unit</th>
            <th style="text-align: center">Min Range1</th>
            <th style="text-align: center">Min Range2</th>
            <th style="text-align: center">Max Range1</th>
            <th style="text-align: center">Max range2</th>
            <th style="text-align: center">Result</th>
            <th style="text-align: center">Remark</th>
        </tr>
        <?php $data = LabOrder::model()->findAllByAttributes(array('sid'=>$id,'status'=>1)); ?>
        <?php foreach($model1 as $i=>$model): ?>
            <?php $datass = LabInventory::model()->findAllByPk($data[$i]->lid); ?>
            <tr>
                <td style="display: none;"><?php echo CHtml::activeTextField($model,"[$i]sid",array('value'=>$id,'class'=>'span1')); ?></td>
                <td style="display: none;"><?php echo CHtml::activeTextField($model,"[$i]pid",array('value'=>$data[$i]->pid,'class'=>'span1')); ?></td>
                <td style="display: none"><?php echo CHtml::activeTextField($model,"[$i]eid",array('value'=>Yii::app()->user->id,'class'=>'span1')); ?></td>
                <td style="display: none;"><?php echo CHtml::activeTextField($model,"[$i]loid",array('value'=>$data[$i]->loid,'class'=>'span1')); ?></td>
                <td style="display: none;"><?php echo CHtml::activeTextField($model,"[$i]datetime",array('value'=>date('Y-m-d h:m:s'),'class'=>'span2')); ?></td>
                <td style="text-align: center"><?php echo $i+1; ?></td>
                <td><?php echo $datass[0]->test_name; ?></td>
                <td style="text-align: center"><?php echo $datass[0]->test_unit; ?></td>
                <td style="text-align: center"><?php echo $datass[0]->min_range1 ;?></td>
                <td style="text-align: center"><?php echo $datass[0]->min_range2 ;?></td>
                <td style="text-align: center"><?php echo $datass[0]->max_range1 ;?></td>
                <td style="text-align: center"><?php echo $datass[0]->max_range2 ;?></td>
                <td style="text-align: center"><?php echo CHtml::activeTextField($model,"[$i]result",array('class'=>'span1')); ?></td>
                <td><?php echo CHtml::activeTextField($model,"[$i]suggestion"); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="14"><div class="pull-right">
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
    </table>

    <?php $this->endWidget(); ?>
    <?php /*$this->endWidget(); */?>

    <?php /*echo CHtml::submitButton('Save'); */?><!--
    --><?php /*echo CHtml::endForm(); */?>
</div><!-- form -->