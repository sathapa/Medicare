<style>
    <style>


    h1
    {
        color:buttonface;
        text-align:center;
    }

    p
    {
        color:black;
        text-align:center;

        font-family:"Times New Roman";
        font-size:20px;
    }


    div.ex
    {
        width:800px;
        height:150px;
        padding:15px;
        border:2px solid gray;
        margin:2px;
    }
    table
    {
        border-collapse:collapse;
        border-style:solid;
        border-width:1px;
        border-color:#707070;
        font:14px Georgia, serif;
        padding:0px;
        box-shadow:1px 1px 3px 1px #6E6D6D;
    }

    th
    {
        color:#FFFFFF;
        background:#DB2C2C;
        background: -moz-linear-gradient(top,  #DB2C2C 0%, #571515 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#DB2C2C), color-stop(100%,#571515));
        background: -webkit-linear-gradient(top,#DB2C2C 0%,#571515 100%);
        background: -o-linear-gradient(top,#DB2C2C 0%,#571515 100%);
        background: -ms-linear-gradient(top,#DB2C2C 0%,#571515 100%);
        background: linear-gradient(top,#DB2C2C 0%,#571515 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#DB2C2C',endColorstr='#571515',GradientType=0s);
        font-weight:bold;
        padding:5px;
        text-align:center;
        vertical-align:top;
    }

    tr
    {
        color:#000000;
        border-top-style: solid;
        border-width:1px;
        border-color:#707070;
        font-weight:normal;
    }

    tr:hover td
    {
        background:#DB2C2C;
        color:#FFFFFF;
    }

    tr:nth-child(odd) td
    {
        background:#EBEBEB;
    }

    tr:nth-child(odd):hover td
    {
        background:#DB2C2C;
    }

    td
    {
        background:#FFFFFF;
        padding:3px 5px;
        text-align:left;
        vertical-align:top;
    }

    h1 {text-align:center;}
    p.right {text-align:right;}
    p.main {text-align:;}

</style>

<div align="center" font="Consolas" size="16">MedcoEMR </div>
<div align="center" font="Consolas" size="12">Baluatar, Kathmandu </div>
<div align="center" font="Consolas" size="12">Patient Report </div>


<div align="right">    <strong> Card ID.: </strong> <?php echo $pat['cardID']; ?></br></div>
<div><b>Name: </b>  <?php echo $pat['fName']." ".$pat['mName']." ".$pat['lName'];?> &nbsp;
     <b>DOB: </b> <?php echo $pat['dob']; ?> &nbsp;
     <b>Age: </b> <?php $t=time(); $cur_date=(date("Y-m-d",$t)); echo $age=$cur_date-$pat['dob'];?> &nbsp;
</div>
<div>
    <b>Gender: </b> <?php echo $pat['gender']; ?> &nbsp;
    <b>Marital Status: </b> <?php echo $pat['marital_status']; ?> &nbsp;
</div>
<div>
    <b>Address: </b> <?php echo $pat['sWardNo']."-".$pat['sStreet'].", ".$pat['sCity'].", ".$pat['sDistrict'].", ".$pat['sZone']; ?> &nbsp;
    <b>Phone No.: </b> <?php echo $pat['dob']; ?> &nbsp;
</div>
<div>
    <b>Reason for Hospitalization: </b>

    <?php $did=$pat['dID'];
    $doc= User::model()->findByAttributes(array('id'=>$did));
    if(!empty($doc))
    {
        echo '<b>Assigned Doctor: </b>'.$doc1=$doc->uName.'<br>';
    }
    else
    {
        echo "Not Available";
    }
    ?>
</div>
</br>
</br>
</br>


<h4>Physical Report</h4>
<table>
    <TR>


        <th style="text-align: center">Height</th>
        <th style="text-align: center">Weight</th>
        <th style="text-align: center">BMI Calc</th>
        <th style="text-align: center">Blood Pres.</th>
        <th style="text-align: center">Body Temp.</th>
        <th style="text-align: center">Eye-left</th>
        <th style="text-align: center">Eye-right</th>
        <th style="text-align: center">Audio-left</th>
        <th style="text-align: center">Audio-right</th>
        <th style="text-align: center">Date/Time</th>
    </TR>

    <?php


    if(!empty($sub)){
        $sn=1;
        ?>
        <tr>

                <td><?php echo $sub['height']; ?></td>
                <td><?php echo $sub['weight']; ?></td>
                <td><?php echo $sub['bmi_calc']; ?></td>
                <td><?php echo $sub['blood_pressure']; ?></td>
                <td><?php echo $sub['temp']; ?></td>
                <td><?php echo $sub['eye_left']; ?></td>
                <td><?php echo $sub['eye_right']; ?></td>
                <td><?php echo $sub['audio_left']; ?></td>
                <td><?php echo $sub['audio_right']; ?></td>
                <td><?php echo $sub['datetime']; ?></td>
        </tr>
        <?php }
    else { ?>
        <tr>

                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
                <td><?php echo 'NA'; ?></td>
    </tr>
   <?php }
    ?>
</table>
</br>
</br>
</br>

<h4>Laboratory Report</h4>

<?php

$session = Yii::app()->session;
$lr = LabResult::model()->findAllByAttributes(array('pid'=>$session['pid']));
//echo $dataLR['1']->result;
$count = count($lr);
if($lr != null)
{ ?>
<b>LAB Report:</b>
<table class="table well" border="1" style="font-size: 13px">
    <tr>
        <th width="5%"  style="text-align: center">SN.</th>
        <th width="" style="text-align: center">Test Name</th>
        <th width="10%" style="text-align: center">Test Unit</th>
        <th width="10%" style="text-align: center">min range 1</th>
        <th width="10%" style="text-align: center">max range 1</th>
        <th width="10%" style="text-align: center">min range 2</th>
        <th width="10%" style="text-align: center">max range 2</th>
        <th width="10%" style="text-align: center">Result</th>
        <th width="15%" style="text-align: center">Remarks</th>
    </tr>
    <?php
    for ($i=1; $i<=$count; $i++)
    {
        $lo = LabOrder::model()->findByPk($lr[$i-1]->loid);
        $li = LabInventory::model()->findByPk($lo->lid);
        ?>
        <tr>
            <td style="text-align: center"><?php echo $i; ?></td>
            <td><?php echo $li->test_name ?></td>
            <td style="text-align: center"><?php echo $li->test_unit; ?></td>
            <td style="text-align: center"><?php echo $li->min_range1 ;?></td>
            <td style="text-align: center"><?php echo $li->max_range1 ;?></td>
            <td style="text-align: center"><?php echo $li->min_range2 ;?></td>
            <td style="text-align: center"><?php echo $li->max_range1 ;?></td>
            <td style="text-align: center"><?php echo $lr[$i-1]->result; ?></td>
            <td style="text-align: center"><?php echo $lr[$i-1]->suggestion; ?></td>
        </tr>
    <?php }; ?>
</table>
<?php }
else
{
echo 'Not Available';
}?>


<br>

<h4>Summary & Recommendation </h4>
<div class="ex"></div>

<br><br><br>
<div align="right" font="Consolas" size="16">Authorized Doctor </div>
<br><br><br><br><br><br><br><br><br>
<div  style="text-align:right; font-size: 8">
    Medium Health Care Pvt. Ltd
</div>