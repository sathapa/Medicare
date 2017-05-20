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
        'enableAjaxValidation'=>true,
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
                            <th style="text-align: center">Drug</th>
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
                                        <td><?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
//                                                'model'=>$model,
//                                                    'attribute'=>'icd10code',
                                                'name'=>'PhOrder[0][drug_id]',
//                                                    'value'=>'Search',
                                                'source'=>$this->createUrl('autoComplete'),
                                                // additional javascript options for the autocomplete plugin
                                                'options'=>array(
                                                    'minLength'=>'1',
                                                    'showAnim'=>'fold',
                                                    'select'=>"js:function(event, ui) {
                                          $('#id').val(ui.item.generic_name);
                                        }",
                                                    'change'=>"js:function(event, ui) {
                                          if (!ui.item) {
                                             $('#User_user_id').val('');
                                          }
                                        }",


                                                    /*'select' => "js:function(event, ui) {
                                            $('#icd10no').val(ui.item.['icd10no']);
                                            }",
                                                    'change' => "js:function(event, ui) {
                                            if (!ui.item) {
                                                $('#icd10no').val('');
                                            }
                                            }",*/
                                                ),
                                                'htmlOptions'=>array(
                                                    'class'=>'span3',
                                                    'placeholder'=>'ICD-10 Code',
                                                ),
                                            ));
                                            ?>
<!--                                            --><?php //echo CHtml::dropDownList('PhOrder[{0}][drug_id]','',array('1'=>'1','2'=>'2','3'=>'3'),array('style'=>'width:80px'));?><!-- </td>-->
                                        <td><?php echo CHtml::textField('PhOrder[{0}][sig]','',array('style'=>'width:240px')); ?> </td>
                                        <td><?php echo CHtml::dropDownList('PhOrder[{0}][days]','',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30'),array('style'=>'width:50px')); ?> </td>
                                        <td><?php echo CHtml::textField('PhOrder[{0}][quantity]','',array('style'=>'width:50px')); ?></td>
                                        <td><?php echo CHtml::textField('PhOrder[{0}][refill]','',array('style'=>'width:50px')); ?> </td>
                                        <td>
                                            <div class="remove btn btn-danger">
                                                <i class="icon-trash"></i>
                                            </div>
                                            <input type="hidden" class="rowIndex"  value="{0}" />
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


<html>
<head>
    <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>/js/jquery-latest.js"></script>
    <script type="text/javascript" src="<?php Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
    <script type="text/javascript">

        jQuery(document).ready(function($){
            // define global autocomplete settings
            var autocompleteSettings={
                'source': '../autoComplete',// the action that provides data
                'minLength':1,
                'select': function( event, ui ) {
//                    $('#id').val(ui.item.id);
                    $(this).val(ui.item.generic_name);
                    $('#valuee').val(ui.item.drug_id)
//                    $('#icd10details').val(ui.item.icd10details);
                    console.log( ui );
                    return false;

                }
            };
            //instantiate the existing field with the autocomplete.
            $("#cloneTag").autocomplete(autocompleteSettings).data( 'autocomplete' )._renderItem = function( ul, item ) {
                return $( '<li></li>' )
                    .data( 'item.autocomplete', item )
                    .append( '<a><b>' + item.generic_name +'</b> '+ item.brand_name + ' '+ item.unit_value + item.unit_measurement +'</a>' )
                    .appendTo( ul );
            };
            // create the action when the input field is cloned.
            var i = 1;
            var tagsdiv = $('#myTags');
            $("#cloneButton").click(function() {
                var $cloned=$('#cloneDiv').clone();
                $cloned.appendTo(tagsdiv);
                $("input",$cloned).each(function() {
                    $(this).val('').attr('id', function(_, id) { return id + i });
                    $(this).autocomplete(autocompleteSettings).data( 'autocomplete' )._renderItem = function( ul, item ) {
                        return $( '<li></li>' )
                            .data( 'item.autocomplete', item )
                            .append( '<a>' + item.generic_name +'</b> '+ item.brand_name + ' '+ item.unit_value + item.unit_measurement +'</a>' )
                            .appendTo( ul );
                    };// this is the important bit.
                });
                return false;
            });
        });
    </script>
</head>

<body>
<div id="myTags">
    <div id="cloneDiv">
        <input type="text" class="tags" id="cloneTag"/>
        <input type="text" id="valuee">
    </div>
</div>
<button id="cloneButton">Add Row</button>

</body>
</html>
