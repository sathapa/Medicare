<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'ph-dispose-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'horizontal',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>
    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Dispose Drug',
        'headerIcon'=>'icon-minus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>
    <?php $dataS=PhStock::model()->findByPk($stock_id); ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <table class="table">
        <tbody>
        <tr>
            <td>
            <table class="table">
                <tr>
                    <td width="20%">Stock ID: </td>
                    <td><?php echo $stock_id; ?></td>
                </tr>
                <tr>
                    <td>SKU :</td>
                    <td><?php echo $dataS->SKU; ?></td>
                </tr>
                <tr>
                    <td>Quantity :</td>
                    <td><?php echo $dataS->instore_quantity; ?></td>
                </tr>
            </table>
            </td>
        </tr>
        <tr style="display: none">
            <td><?php echo $form->textFieldRow($model,'SKU',array('class'=>'span5','maxlength'=>50,'value'=>$dataS->SKU)); ?>
                <?php echo $form->textFieldRow($model,'quantity',array('class'=>'span5','value'=>$dataS->instore_quantity)); ?>
                <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
                <?php echo $form->textFieldRow($model,'stock_id',array('class'=>'span5','value'=>$stock_id)); ?>
                <?php echo $form->textFieldRow($model,'clerk',array('class'=>'span5','value'=>Yii::app()->user->id)); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->textAreaRow($model,'remarks',array('class'=>'span5','maxlength'=>500)); ?></td>
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
                </div>
            </td>
        </tr>
        </tfoot>
    </table>

    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>
