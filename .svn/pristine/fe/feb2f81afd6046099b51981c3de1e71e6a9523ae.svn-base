<?php
    $this->menu=array(
        array('icon'=>'list-alt','label'=>'List Patient', 'url'=>array('Report/listPatient','param1'=>'value1','active'=>true)),
        array('icon'=>'list-alt','label'=>'Doctor Report', 'url'=>array('Report/doctorReport','param1'=>'value1')),
        array('icon'=>'dollar','label'=>'Cash Book', 'url'=>array('Report/cashBook','param1'=>'value1')),
    );
?>
<div class="form">
    <form action="<?php echo Yii::app()->request->baseUrl; ?>/Report/DoctorReport" method="post"  >
        <select name="doctor" required="required" id="doctor">
            <option value="">Choose Doctor</option>
            <?php foreach($var as $mahesh)
            { 
                ?>
                <option value="<?php echo $mahesh['id'];?>"><?php  echo $mahesh['uName']; ?> </option>
            <?php }
            ?>
        </select>
         <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                            'id' =>'fromDate',
                            'name'=>'fromDate',
//                        'value'=>date('Y-m-d'),
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
//                'value'=>date('Y-m-d'),
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
        <button type="submit" name="doctorReport" id="doctorReport" class="btn btn-info" style="margin-bottom: 1%" /><i class="icon-search"> Generate Report</i></button>
    </form>
 
    <table class="table table-bordered table-striped table-condensed">
         
       
         <tr>         
                   <td colspan="2"> <?php
                       echo  "<strong> Doctor:  &nbsp; </strong>";
                      echo ucfirst($doctorName);
                      
               ?>
         <tr>         
                   <td colspan="2"> <?php
                       echo  "<strong> From: &nbsp; &nbsp; </strong>";
                       echo $fromDate;
            ?> 
                &nbsp; 
                &nbsp;
                        
          <?php 
          if(!empty($toDate)){
                    echo  "<strong> To: &nbsp; &nbsp; </strong>";
                    echo $toDate;
          ?>    </td>
        </tr><?PHP
                    }?>
           
        <tr>
            <th style="text-align: center">S.N.</th>
            <th style="text-align: center">Total Patients Visited</th>
        </tr>
        <?php
            if(!empty($doctorReport)){
                $sn = 1;
                foreach ($doctorReport as $mahesh)
                {
                    ?>
                    <tr>
                        <td style="text-align: center"><?php echo $sn++; ?></td>
                        <td style="text-align: center"><?php echo $mahesh['total']." Patients" ?></td>
                    </tr>
                <?php  }};?>
    </table>
</div>
 <?php if(!empty($fromDate)){?>
<form method="post" id='generate' name='generate' action="<?php echo Yii::app()->request->baseUrl; ?>/Report/GenerateDoctorPdf">
    <input type="hidden" name="fdate" value="<?php echo $fromDate ?>" />
    <input type="hidden" name="tdate" value="<?php echo $toDate ?>" />
    <input type="hidden" name="doctor" value="<?php echo $docId ?>" />
    <div style="float: left"><input class="btn-link" type="submit" value="Generate Pdf" /></div>
</form>
<?php }
?>

      <?php if(!empty($fromDate)){?>
<form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/Report/GenerateDoctorExcel">
    <input type="hidden" name="fdate" value="<?php echo $fromDate ?>" />
    <input type="hidden" name="tdate" value="<?php echo $toDate ?>" />
    <input type="hidden" name="doctor" value="<?php echo $docId ?>" />
    <div style="float: center"><input class="btn-link" type="submit" value="Generate Excel" /></div>
</form>
<?php }
?> 




<!-- <script type="text/javascript">
$('#doctor').change(function()
{
    var docId=$(this).val();
    $.ajax(
    {
            type:'POST',
            data:{docId:docId},
            url:'<?php echo Yii::app()->request->baseUrl; ?>/report/doctorName',
            success:function(result)
            {
                    $('#doctorName2').html(result);
            }
    });
});
</script> -->