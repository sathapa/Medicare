<script type="text/javascript">
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
        var v = hours + ":" + minutes + ":" + seconds + " ";
        if(hours > 11){
            v+="PM";
        } else {
            v+="AM"
        }
        setTimeout("updateTime()",1000);
        document.getElementById('tam').value=v;
    }
    updateTime();
    //-->
</script>
<script language="javascript" type="text/javascript">
    function tota()
    {
        var amt = parseFloat(document.getElementById('amt').value);
        var dis = parseFloat(document.getElementById('dis').value);
        var subTot = amt - ((dis/100) * amt);
        (document.getElementById('subTot')).value = parseFloat(subTot);
//        document.getElementById('sCharge').value = (10/100) * disAmount;
//        var dTotal = disAmount + ((10/100) * disAmount);
//        document.getElementById('total').value = parseFloat(dTotal);
        var vat = (13/100) * subTot;
        document.getElementById('vat').value = (parseFloat(vat)).toFixed(2);
        document.getElementById('gTot').value = subTot + vat;

    }
    function tender()
    {
        var tend = parseFloat(document.getElementById('tend').value);
        var gTotal = parseFloat(document.getElementById('gTot').value);
        document.getElementById('cng').value = (tend - gTotal).toFixed(2);
    }
</script>



<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'reg-bill-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        )
    )); ?>

    <?php
        $dataP = Patient::model()->findByPk($pid);

        $dataD = Employee::model()->findByPk($did);

        $dataU = User::model()->findByPk(Yii::app()->user->id);
        $dataC = Employee::model()->findByPk($dataU->emp_id);

        $dataF = DoctorCharge::model()->findByAttributes(array('eid'=>$did));
    ?>

    <?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span9')); ?>

    <fieldset style="background-color: powderblue" id="printss">
        <table border="0" width="100%" style="padding-left: 10px; padding-top: 10px; padding-right: 10px">
            <tr>
                <td width="15%" style="padding:0 0 0 0">HOSPITAL NO</td>
                <td width="55%" style="padding:0 0 0 0">: 70098</td>
                <td style="padding:0 0 0 0">INVOICE NO</td>
                <td style="padding:0 0 0 0">: <?php echo 'billID'; ?></td>
            </tr>
            <tr>
                <td style="padding:0 0 0 0">Name</td>
                <td style="padding:0 0 0 0">: <?php echo $dataP->fName." ".$dataP->mName." ".$dataP->lName; ?></td>
                <td style="padding:0 0 0 0">INVOICE DATE</td>
                <td style="padding:0 0 0 0">: <?php echo date('d/m/Y'); ?></td>
            </tr>
            <tr>
                <td style="padding:0 0 0 0">AGE/SEX</td>
                <td style="padding:0 0 0 0">: <?php echo "34-Y/".$dataP->gender."<br />"; ?></td>
                <td style="padding:0 0 0 0">INVOICE TIME</td>
                <td style="padding:0 0 0 0">: <input type="text" id="tam" class="span2"> </td>
            </tr>
            <tr>
                <td style="padding:0 0 0 0">ADDRESS</td>
                <td style="padding:0 0 0 0">: <?php echo $dataP->sStreet.", ".$dataP->sWardNo.", ".$dataP->sCity.", ".$dataP->sDistrict; ?></td>
            </tr>
        </table>

        <table border="1" width="100%">
            <tr>
                <td style="text-align: center" width="10%">SNO</td>
                <td>PARTICULARS</td>
                <td width="28%" style="text-align: center">AMOUNT</td>
            </tr>
            <tr>
                <td style="vertical-align: top; text-align: center">1</td>
                <td height="60" style="vertical-align: top" colspan="">Doctor Consultancy Charge</td>
                <td style="vertical-align: top; text-align: center"><?php echo $dataF->charge; ?></td>
            </tr>
            <tr>
                <td colspan="2">USER : <?php echo $dataC->fName." ".$dataC->mName." ".$dataC->lName."<br>"; ?>
                    DOCTOR : <?php echo $dataD->title.".".$dataD->fName." ".$dataD->mName." ".$dataD->lName ?></td>
                <td colspan="2">
                    <table>
                        <tr>
                            <td style="padding:0 0 0 0">AMOUNT</td>
                            <td style="padding:0 0 0 0"><?php echo $form->textFieldRow($model,'charge',array('class'=>'span2','id'=>'amt','value'=>$dataF->charge,'style'=>'text-align: center')); ?></td>
                        </tr>
                        <tr>
                            <td style="padding:0 0 0 0">(-) %</td>
                            <td style="padding:0 0 0 0"><?php echo $form->textFieldRow($model,'discount',array('class'=>'span2','id'=>'dis','value'=>'','style'=>'text-align: center','onchange'=>'tota()')); ?></td>
                        </tr>
                        <tr>
                            <td style="padding:0 0 0 0">SUB TOTAL</td>
                            <td style="padding:0 0 0 0"><input type="text" id="subTot" value="" class="span2" placeholder="Sub Total" style="text-align: center"></td>
                        </tr>
                        <tr>
                            <td style="padding:0 0 0 0">VAT @ 13%</td>
                            <td style="padding:0 0 0 0"><?php echo $form->textFieldRow($model,'vat',array('class'=>'span2','style'=>"text-align: center",'id'=>'vat','value'=>'')); ?></td>
                        </tr>
                        <tr>
                            <td style="padding:0 0 0 0"><b>TOTAL</b></td>
                            <td style="padding:0 0 0 0"><?php echo $form->textFieldRow($model,'total',array('class'=>'span2','style'=>"text-align: center",'id'=>'gTot','value'=>'')); ?></td>
                        </tr>
                        <tr>
                            <td style="padding:0 0 0 0">Tender</td>
                            <td style="padding:0 0 0 0"><?php echo $form->textFieldRow($model,'tender',array('class'=>'span2','id'=>'tend','style'=>'text-align: center','onchange'=>'tender()')); ?></td>
                        </tr>
                        <tr>
                            <td style="padding:0 0 0 0">Change</td>
                            <td style="padding:0 0 0 0"><?php echo $form->textFieldRow($model,'change',array('class'=>'span2','id'=>'cng','style'=>'text-align: center')); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <fieldset style="display: none">
            <?php echo $form->textFieldRow($model,'tax',array('class'=>'span1','id'=>'tax')); ?>
            <?php echo $form->textFieldRow($model,'remarks',array('class'=>'span1','maxlength'=>1000,'id'=>'remarks')); ?>
            <?php echo $form->textFieldRow($model,'pid',array('class'=>'span1','value'=>$pid,'id'=>'pid')); ?>
            <?php echo $form->textFieldRow($model,'dr_eid',array('class'=>'span1','value'=>$did,'id'=>'dr_eid')); ?>
            <?php echo $form->textFieldRow($model,'clerk',array('class'=>'span1','value'=>Yii::app()->user->id,'id'=>'clerk')); ?>
        </fieldset>

</div>

<div class="pull-right" id="last">
    <input type="submit" id="sub" name="sub" value="Print" onclick="test()" class="btn btn-info"/>

    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType'=>'reset',
        'icon'=>'remove',
        'label'=>'Reset',
        'htmlOptions'=>array(
            'class'=>'btn btn-small')
    )); ?>
</div>

<?php $this->endWidget(); ?>

</div>
<script>
    function  test(){
        $('#top').css({"display":"none"});
        $('#mid').css({"display":"none"});
        $('#tax').css({"border":"none"});
        $('#remarks').css({"border":"none"});
        $('#pid').css({"border":"none"});
        $('#dr_eid').css({"border":"none"});
        $('#clerk').css({"border":"none"});
        $('#amt').css({"border":"none"});
        $('#last').css({"display":"none"});
        $('#dis').css({"border":"none"});
        $('#subTot').css({"border":"none"});
        $('#tend').css({"border":"none"});
        $('#gTot').css({"border":"none"});
        $('#vat').css({"border":"none"});
        $('#cng').css({"border":"none"});
        $('#tam').css({"border":"none"});
        javascript:window.print();
        $('#top').css({"display":"inherit"});
        $('#mid').css({"display":"inherit"});
        $('#tax').css({"border":"inherit"});
        $('#remarks').css({"border":"inherit"});
        $('#pid').css({"border":"inherit"});
        $('#dr_eid').css({"border":"inherit"});
        $('#clerk').css({"border":"inherit"});
        $('#amt').css({"border":"inherit"});
        $('#last').css({"display":"inherit"});
        $('#dis').css({"border":"inherit"});
        $('#subTot').css({"border":"inherit"});
        $('#tend').css({"border":"inherit"});
        $('#gTot').css({"border":"inherit"});
        $('#vat').css({"border":"inherit"});
        $('#cng').css({"border":"inherit"});
        $('#tam').css({"border":"inherit"});

    }

</script>