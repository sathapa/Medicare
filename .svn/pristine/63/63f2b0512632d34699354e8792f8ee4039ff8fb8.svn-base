<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'ph-drug-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array('onSubmit'=>true),
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'horizontal',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.TbBox',array(
        'title'=>'Add Drug',
        'headerIcon'=>'icon-plus',
        'htmlOptions'=>array('class'=>'bootstrap-widget-table')
    )); ?>
    <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <table class="table">
        <tbody>
        <tr>
            <td><fieldset><b>Product</b><hr>
                    <?php echo $form->textFieldRow($model,'brand_name',array('class'=>'span5','maxlength'=>50)); ?>
                    <?php echo $form->textFieldRow($model,'generic_name',array('class'=>'span5','maxlength'=>50)); ?>
                    <?php echo $form->textFieldRow($model,'drug_cat',array('class'=>'span5','maxlength'=>50)); ?>
                    <?php echo $form->textFieldRow($model,'drug_root',array('class'=>'span5','maxlength'=>50)); ?>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td><fieldset><b>Unit</b><hr>
                    <?php echo $form->textFieldRow($model,'unit_value',array('class'=>'span5')); ?>
                    <?php echo $form->dropDownListRow($model,'unit_measurement',CHtml::listData(MedDose::model()->findAll(),'sn','title'), array('class'=>'span1')); ?>
                    <?php echo $form->textFieldRow($model,'unit_price',array('class'=>'span5')); ?>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td><fieldset><b>Stock</b><hr>
                    <?php echo $form->textFieldRow($model,'SKU',array('class'=>'span5','maxlength'=>50)); ?>
                    <?php echo $form->dropDownListRow($model1,'dis_id',CHtml::listData(PhDistributor::model()->findAll(),'dis_id','dis_name'),array('class'=>'span5')); ?>
                    <?php echo $form->textFieldRow($model1,'min_quantity',array('class'=>'span5')); ?>
                    <?php echo $form->textFieldRow($model1,'instore_quantity',array('class'=>'span5')); ?>
                    <?php echo $form->datepickerRow($model1, 'mfd_data',array(
                            'append'=>'<i class="icon-calendar"></i>','class'=>'span4', 'options'=>array(
                                'format' => 'yyyy-mm-dd',
                                'weekStart'=> 1,
                                'showButtonPanel' => true,
                                'showAnim'=>'fold'
                            )
                        )
                    );?>
                    <?php echo $form->datepickerRow($model1, 'exp_data',array(
                            'append'=>'<i class="icon-calendar"></i>','class'=>'span4', 'options'=>array(
                                'format' => 'yyyy-mm-dd',
                                'weekStart'=> 1,
                                'showButtonPanel' => true,
                                'showAnim'=>'fold'
                            )
                        )
                    );?>
                </fieldset>
            </td>
        </tr>
        <tr style="display: none">
            <td><?php echo $form->textFieldRow($model,'stat',array('class'=>'span5','value'=>1)); ?>
                <?php echo $form->textFieldRow($model1,'stat',array('class'=>'span5','value'=>1)); ?>
                <?php echo $form->textFieldRow($model1,'clerk',array('class'=>'span5','value'=>Yii::app()->user->id)); ?>
                <?php echo $form->textFieldRow($model1,'create_date',array('class'=>'span5','value'=>date('Y-m-d'))); ?></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td><div class="pull-right">
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

    <?php /*echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); */?>


    <?php /*echo $form->textFieldRow($model,'stock_id',array('class'=>'span5')); */?>

    <?php $this->endWidget(); ?>
    <?php $this->endWidget(); ?>

</div>
