<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'plan-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array('onSubmit'=>true),
    'enableAjaxValidation'=>true,
    'method'=>'post',
    'type'=>'inline',
    'action'=>Yii::app()->controller->createUrl("PhOrder/modalCreate"),
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data'
    )
)); ?>
    <table class="table table-condensed">
        <tr>
            <th style="text-align: center">Drug</th>
            <th style="text-align: center">SIG</th>
            <th style="text-align: center">Days</th>
            <th style="text-align: center">Quantity</th>
            <th style="text-align: center">Refill</th>
        </tr>
        <?php foreach($model as $i=>$orders): ?>
            <tr>
                <td>
                    <?php $this->widget('ext.MyAutoComplete', array(
                        'name'=>'PhOrder['.$i.']',
                        'source'=>$this->createUrl('autoComplete'),
                        // additional javascript options for the autocomplete plugin
                        'options'=>array(
                            'minLength'=>'1',
                            'showAnim'=>'fold',
                            'select'=>"js:function(event, ui) {
                                            $(this).val(ui.item.generic_name+'/'+ui.item.brand_name+'/'+ui.item.unit_value+ui.item.unit_measurement);
                                            $('#PhOrder_$i'+'_orders_id').val(ui.item.orders_id);
                                            console.log( ui );
                                            return false;
                                        }",
                        ),
                        'htmlOptions'=>array(
                            'class'=>'span3',
                            'placeholder'=>'Drug Search',
                        ),
                        'methodChain'=>'.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
          return $( "<li></li>" )
              .data( "item.autocomplete", item )
              .append( "<a>" + item.generic_name +"</b>/"+ item.brand_name + "/"+ item.unit_value + item.unit_measurement +"</a>" )
              .appendTo( ul );
      };'
                    ));
                    ?>
                </td>
                <td style="display: none;"><?php echo CHtml::activeTextField($orders,"[$i]drug_id",array('class'=>'span2')); ?></td>
                <td><?php echo CHtml::activeTextField($orders,"[$i]sig",array('class'=>'span4')); ?></td>
                <td><?php echo CHtml::activeTextField($orders,"[$i]days",array('class'=>'span1')); ?></td>
                <td><?php echo CHtml::activeTextField($orders,"[$i]quantity",array('class'=>'span1')); ?></td>
                <td><?php echo CHtml::activeTextField($orders,"[$i]refill",array('class'=>'span1')); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="6">
                <div class="pull-right">
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'submit',
                        'type'=>'primary',
                        'icon'=>'ok white',
                        'label'=>'Submit',
                    )); ?>
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'reset',
                        'icon'=>'remove',
                        'label'=>'Reset',
                    )); ?>
                </div>
            </td>
        </tr>
    </table>
<?php $this->endWidget(); ?>