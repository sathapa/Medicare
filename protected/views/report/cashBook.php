<?php
    $this->menu=array(
        array('icon'=>'list-alt','label'=>'List Patient', 'url'=>array('Report/listPatient','param1'=>'value1','active'=>true)),
        array('icon'=>'list-alt','label'=>'Doctor Report', 'url'=>array('Report/doctorReport','param1'=>'value1')),
        array('icon'=>'dollar','label'=>'Cash Book', 'url'=>array('Report/cashBook','param1'=>'value1')),
    );
?>

<form action="<?php echo Yii::app()->request->baseUrl; ?>/Report/CashBook" method="post"  >
    <table>
        <tr>
            <th><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                            'id' =>'fromDate',
                            'name'=>'fromDate',
                            'options' => array(
                            'mode'=>'focus',
                            'dateFormat'=>'yy-mm-dd',
                            'showAnim' => 'slideDown',
                            'changeMonth'=>true,
                            'changeYear'=>true,
                            'changeDay'=>true,
                            'yearRange'=>'1900:2015',
                        ),
                            'htmlOptions'=>array(
                            'required'=>'required',
                            'placeholder'=>'From',
                        ),
                    )
                );?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                            'id' =>'toDate',
                            'name'=>'toDate',
                            'options' => array(
                            'mode'=>'focus',
                            'dateFormat'=>'yy-mm-dd',
                            'showAnim' => 'slideDown',
                            'changeMonth'=>true,
                            'changeYear'=>true,
                            'changeDay'=>true,
                            'yearRange'=>'1900:2015',
                        ),
                            'htmlOptions'=>array(
                            'required'=>'required',
                            'placeholder'=>'To',
                        ),
                    )
                );?>
                <button type="submit" name="cashBook" id="cashBook" class="btn btn-info" style="margin-bottom: 1.5%"><i class="icon-file"> Generate Report</i></button>
            </th>
        </tr>
</form>

<table class="table table-striped table-bordered table-condensed">
    <tr>         
        <td colspan="4" >              
            <?php if(!empty($fromDate)){
                       echo  "<strong> From: &nbsp; &nbsp; </strong>";
                       echo $fromDate;
            }?> 
                &nbsp; 
                &nbsp;
                        
                <?php if(!empty($toDate)){
                    echo  "<strong> To: &nbsp; &nbsp; </strong>";
                    echo $toDate;
                }?>
            </td>
    </tr>
    <TR>
        <th style="text-align: center">S.N.</th>
        <th style="text-align: center">Registration Income (Rs.)</th>
        <th style="text-align: center">Pharmacy Income (Rs.)</th>
        <th style="text-align: center">Total (Rs.)</th>
    </TR>
    <?php
        if(!empty($cashBooks)){
            $sn = 1;
            foreach ($cashBooks as $mahesh)
            {
                ?>
                <tr>
                    <td style="text-align: center"><?php echo $sn++; ?></td>
                    <td style="text-align: center"><?php echo $mahesh['ph']; ?></td>
                    <td style="text-align: center"><?php echo $mahesh['reg']; ?></td>
                    <td style="text-align: center"><?php echo $mahesh['reg'] + $mahesh['ph']; ?></td>
                </tr>
            <?php  }}; ?>
</table>
 <?php if(!empty($fromDate)){?>
    <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Report/GenerateCashBookPdf">
    <input type="hidden" name="fdate" value="<?php echo $fromDate ?>" />
    <input type="hidden" name="tdate" value="<?php echo $toDate ?>" />
  
    <div style="float: left"><input class="btn-link" type="submit" value="Generate Pdf" /></div>
</form>

  <form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Report/GenerateCashBookExcel">
    <input type="hidden" name="fdate" value="<?php echo $fromDate ?>" />
    <input type="hidden" name="tdate" value="<?php echo $toDate ?>" />
  
    <div style="float: left"><input class="btn-link" type="submit" value="Generate Excel" /></div>
</form>
        <?php } ?>

    
    
    
    
    
    
    
    
    
    