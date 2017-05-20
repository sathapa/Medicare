<style>
     div.ex
    {
        width:800px;
        height:150px;
        padding:15px;
        border:2px solid gray;
        margin:20px;
    }
    p.st {text-align:left;margin:10px;padding-top:10px }
    p.sig {text-align:right;margin:10px;padding-top:2px }
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
        background:#2b2bdb;
        background: -moz-linear-gradient(top,  #2b2bdb 0%, #101051 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2b2bdb), color-stop(100%,#101051));
        background: -webkit-linear-gradient(top,#2b2bdb 0%,#101051 100%);
        background: -o-linear-gradient(top,#2b2bdb 0%,#101051 100%);
        background: -ms-linear-gradient(top,#2b2bdb 0%,#101051 100%);
        background: linear-gradient(top,#2b2bdb 0%,#101051 100%);
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
        background:#2b2bdb;
        color:#FFFFFF;
    }

    tr:nth-child(odd) td
    {
        background:#EBEBEB;
    }

    tr:nth-child(odd):hover td
    {
        background:#2b2bdb;
    }

    td
    {
        background:#FFFFFF;
        padding:3px 5px;
        text-align:left;
        vertical-align:top;
    }
</style>

 <?php
 /* @var $this DischargeController */

    $this->breadcrumbs=array(
        'Discharge',
    );
 ?>

<?php

    $direct= Discharge::model()->findByAttributes(array('pid'=>$pid));
?>
 <?php
    $this->menu=array(
        array('icon'=>'list-alt','label'=>'List Patient', 'url'=>array('Discharge/listPatient',)),
      //  array('icon'=>'paperclip','label'=>'Report', 'url'=>array('Discharge/report','param1'=>'value1')),
       // array('icon'=>'plus','label'=>'Referral', 'url'=>array('Discharge/refferal','param1'=>'value1')),
    );
 ?>


 <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
                    'block' => true,
                    'fade' => true,
                    'closeText' => '&times;', // false equals no close link
                    'events' => array(),
                    'htmlOptions' => array(),
                    'userComponentId' => 'user',
                    'alerts' => array( // configurations per alert type
        // success, info, warning, error or danger
        'success' => array('closeText' => '&times;'),
        'info', // you don't need to specify full config
        'warning' => array('block' => false, 'closeText' => false),
        //'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
       ),
    ));
 ?>

    <div class="flash alert-success">
        <?php
        //flash message

            foreach(Yii::app()->user->getFlashes() as $key => $message)
            {
                echo  $message;
            }
        ?>
    </div>


<?php
    echo '<hr><h4>General Info</h4><hr>';
    $val1 = Patient::model()->findByAttributes(array('id'=>$pid));


    if(!empty($val1))
    {
        echo '<pre>';
        echo 'Name: '.$fname=$val1->fName.''.$mname=$val1->mName.''.$lname=$val1->lName.'<br>';

        echo 'DOB: '.$dob=$val1->dob.'<br>';
      $t=time();  $time= (date("Y-m-d",$t));
        echo 'Age: '.$age=$time-$dob.'<br>';
        echo 'Card No.'.$card_no=$val1->cardID.'<br>';
        echo 'Gender: '.$gender=$val1->gender.'<br>';
        echo 'Marital Status: '.$status=$val1->marital_status.'<br>';
        echo 'Admitted Date: '.$date=$val1->date.'<br>';

      $did=$val1->dID;
      $doc= User::model()->findByAttributes(array('id'=>$did));
        if(!empty($doc))
            {
              echo 'Assigned Doctor: '.$doc1=$doc->uName.'<br>';
            }
        else
            {
                echo "Not Available";
            }

        echo '</pre><br>';
    }
    else
    {
        echo '<pre>'."Not Available".'<pre>';
    }

    echo '<hr><h4>Physical Report</h4><hr>';
    $val2 = Subjective::model()->findByAttributes(array('pid'=>$pid));
    if(!empty($val2))
    {
        echo '<table>';
        echo '<th>Blood Pressure </th> '.'<td>'.$b_pres=$val2->blood_pressure.'</td><br>';
        echo '<th>Height </th>'.'<td>'.$ht= $val2->height.'</td><br>';
        echo '<th>Body Temp. </th>'.'<td>'.$temp= $val2->temp.'</td><br>';
        echo '<th>BMI Calc </th>'.'<td>'.$calc= $val2->bmi_calc.'</td><br>';
        echo '</table><table><th>Eye left </th>'.'<td>'.$eye_l= $val2->eye_left.'</td><br>';
        echo '<th>Eye right </th>'.'<td>'.$eye_r= $val2->eye_right.'</td><br>';
        echo '<th>Audio left </th>'.'<td>'.$audio_l= $val2->audio_left.'</td><br>';
        echo '<th>Audio right </th>'.'<td>'.$audio_r= $val2->audio_right.'</td><br>';
        echo '<th>Date </th>'.'<td>'.$test_date= $val2->datetime.'</td><br>';
        echo '</table>';
    }
    else
    {
        echo '<pre>'."Not Available.".'</pre>';
    }

    echo '<hr><h4>Laboratory Report</h4><hr>';
    $session = Yii::app()->session;
    $lr = LabResult::model()->findAllByAttributes(array('pid'=>$session['pid']));
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
    <?php
        unset (Yii::app()->session['pid']);
    }
    else
    {
        echo '<pre>Not Available</pre>';
    }
    ?>
<hr><h4>Summary & Recommendation </h4><hr>
<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'report-form',
        'enableAjaxValidation'=>false,
        'method'=>'post',
        'type'=>'inline',
        'action'=>Yii::app()->controller->createUrl("Discharge/discharge", array('pid'=>$pid)),
        'htmlOptions'=>array(
            'enctype'=>'multipart/form-data'
        ),
    )); ?>

<!--    <input type="textArea" value="" name="dir">-->
<?php echo CHtml::ActiveTextField($model, 'dir', array('maxlength' => 300, 'rows' => 6, 'cols' => 50)); ?>
<?php  $dir=$model->dir; ?>
    <tfoot>
    <tr>
        <td colspan="6">
            <div align="center" >
                <tfoot>
                <tr>
                    <td><div class="pull-right">
                            <?php $this->widget('bootstrap.widgets.TbButton', array(
                                'buttonType'=>'submit',
                                'type'=>'primary',
                                'icon'=>'ok white',
                                'label'=> $model->isNewRecord ? 'Create' : 'Save',
                            )); ?>

                            <?php $this->widget('bootstrap.widgets.TbButton', array(
                                'buttonType'=>'reset',
                                'icon'=>'remove',
                                'label'=>'Reset',
                            )); ?>
                       </div></td>
                </tr>
                </tfoot>
<?php echo CHtml::button(
                   'Discharge',
                array('submit' => array('Discharge/discharge',  'pid'=>$pid))
                ); ?>
<?php echo CHtml::button(
                   'Generate PDF',
                    array('submit' => array('Discharge/pdf', 'pid'=>$pid))
               ); ?>
            </div>
        </td>
    </tr>
    </tfoot>
<?php $this->endWidget(); ?>
</div>