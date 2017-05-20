<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
    <script type="text/javascript">
    window.addEvent('domready', function(){

        //create our Accordion instance
        var myAccordion = new Fx.Accordion(document.id('accordion'), 'h3.toggler', 'div.element', {
            opacity: false,
            onActive: function(toggler, element){
                toggler.addClass('active');
            },
            onBackground: function(toggler, element){
                toggler.removeClass('active');
            }
        });

    });
    </script>
<?php
    $this->breadcrumbs=array(
        'Patients'=>array('index'),
        $model->title,
    );
?>

<?php
    $this->menu=array(
        array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array()),
        //array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
        array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

    );
?>
<table class="table table-condensed table-bordered" style="background-color: #F2FFEE;">
    <tr>
        <th>Patient ID</th>
        <td colspan="5"><?php echo $model->id; ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td colspan="5"><?php echo $model->fName.' '.$model->mName.' '.$model->lName; ?></td>
    </tr>
    <tr>
        <th>DOB</th>
        <td><?php echo $model->dob; ?></td>
        <th>Gender</th>
        <td><?php echo $model->gender; ?></td>
        <th>Marital Status</th>
        <td><?php echo $model->marital_status; ?></td>
    </tr>
    <tr>
        <th>Mobile</th>
        <td><?php echo $model->mobilePhone; ?></td>
        <th>Email</th>
        <td colspan="3"><?php echo $model->email; ?></td>
    </tr>
</table>

<b>Patient History</b>

    <?php
        $id = $_GET['id'];
        $criteria = new CDbCriteria(array('order'=>'datetime DESC'));
        $subjectiveData = Subjective::model()->findAllByAttributes(array('pid'=>$id),$criteria);
        if($subjectiveData != null)
        {
            foreach ($subjectiveData as $subd)
            {
                $sid = $subd['sid'];
                echo '<div id="accordion>">';
                echo '<h3 class="toggler">DATE:'.$subd['datetime'].'</h3>';
                echo '<div class="element">';
                echo '<table class="table table-condensed table-bordered" style="background-color: #F2FFEE;">';
                echo '<tr style="background-color: #DDFFAA"><th colspan="7">Subjective</th></tr>';
                echo '<tr style="background-color: #EEFFBB"><td>B/P</td><td>BMI</td><td>Eye L</td><td>Eye R</td><td>Audio L</td><td>Audio R</td><td>Complain</td></tr>';
                echo '<tr>';
                echo '<td>'.$subd['blood_pressure'].'</td>';
                echo '<td>'.$subd['bmi_calc'].'</td>';
                echo '<td>'.$subd['eye_left'].'</td>';
                echo '<td>'.$subd['eye_right'].'</td>';
                echo '<td>'.$subd['audio_left'].'</td>';
                echo '<td>'.$subd['audio_right'].'</td>';
                echo '<td>'.$subd['complain'].'</td>';
                echo '</tr>';

                $objectiveData = Objective::model()->findAllByAttributes(array('pid'=>$id,'sid'=>$subd['sid']));
                foreach ($objectiveData as $objd)
                {
                    echo '<tr style="background-color: #DDFFAA"><th colspan="7">Objective</th></tr>';
                    echo '<tr>';
                    echo '<td colspan="7">'.$objd['objective'].'</td>';
                    echo '</tr>';
                }
                $assessmentData = Assessment::model()->findAllByAttributes(array('pid'=>$id,'sid'=>$subd['sid']));
                $dataLR = LabResult::model()->findAllByAttributes(array('pid'=>$id,'sid'=>$subd['sid']));

                foreach ($assessmentData as $assd)
                {

                    echo '<tr style="background-color: #DDFFAA"><th colspan="7">Assessment</th></tr>';
                    echo '<tr style="background-color: #EEFFBB"><td>ICD 10 Code</td><td colspan="6">Description</td></tr>';
                    echo '<tr>';
                    echo '<td>'.$assd['icd10code'].'</td>';
                    $icd = Icd10::model()->findByAttributes(array('icd10no'=>$assd['icd10code']));
                    echo '<td colspan="7">'.$icd->icd10details.'</td>';
                    echo '</tr>';
                }






//Collapse widget 
?>

<?php
 /*       
      $this->widget(
            'chartjs.widgets.ChLine', 
            array(
                'width' => 600,
                'height' => 300,
                'htmlOptions' => array(),
                'labels' => array("January","February","March","April","May","June"),
                'datasets' => array(
                    array(
                        "fillColor" => "rgba(220,220,220,0.5)",
                        "strokeColor" => "rgba(220,220,220,1)",
                        "pointColor" => "rgba(220,220,220,1)",
                        "pointStrokeColor" => "#ffffff",
                        "data" => array(10, 20, 25, 25, 50, 60),
                        "label" => "X"
                    ),
                    array(
                        "fillColor" => "rgba(220,220,220,0.5)",
                        "strokeColor" => "rgba(220,220,220,1)",
                        "pointColor" => "rgba(220,220,220,1)",
                        "pointStrokeColor" => "#ffffff",
                        "data" => array(55, 50, 45, 30, 20, 10),
                        "label" => "Y"
                    )      
                ),
                'options' => array()
            )
        ); 

*/?>


<!-- <tr style="background-color: #DDFFAA"><th colspan="7">Investigation Tests</th></tr>
<tr>
<div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-block">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</tr> -->

<?php
    $count = count($dataLR);
    $item_results = array();
    $item_results_1=array();
    $item_results_2=array();
    
    $item_tests = array();
    $items = array();
    $items_1 = array();

    $date1= array();
    $date2 = array();
    $months1= array();
    $months2= array();

                for ($i=1; $i<=$count; $i++)
                {
      //              var_dump($dataLR[$i-1]->result);
        //            var_dump($dataLR[$i-1]->datetime);
                    $item_results[] = $dataLR[$i-1]->result;
                    $dataLO = LabOrder::model()->findByPk($dataLR[$i-1]->loid);
                    $dataLI = LabInventory::model()->findByPk($dataLO->lid);
                    $item_tests[] = $dataLI->test_name;
//                    var_dump($item_tests);
                    if($item_tests[$i-1] == "RBC"){
                        $item_results_1=$dataLR[$i-1]->result;
                        $date1 = $dataLR[$i-1]->datetime;
                        $time=strtotime($date1);
                        $months_1=date("F",$time);

                    }
                   else if($item_tests[$i-1] =="Platelets"){
                    $item_results_2 = $dataLR[$i-1]->result;
                    $date2= $dataLR[$i-1]->datetime;
                    $time=strtotime($date2);
                    $months_2=date("F",$time);
                }
//                    $str_item_results_1 = array_unique($item_results_1);
                    $items[] = $item_results_1;
                    $items_1[] = $item_results_2;
                    unset($items_1[0]);
  //                  print_r($items_1);

                    $months1[] = $months_1;
//                    $months2[] = $months_2;
//                    var_dump($dates1);
                  //  $dates2[]=$date2;
                   // unset($dates1[0]);unset($dates1[1]);unset($dates1[2]);
 //                   var_dump($month);

                }
//  var_dump($items_1);
//For RBC or first investigation
  $str_item_results_1 = array_unique($items);
//For 2nd or Platelets investigation  
  $str_item_results_2 = array_unique($items_1);

$month1 = array_unique($months1);
//$month2 = array_unique($months2);

//  $str_date1 = array_unique($dates1);
//$str_item_months = array_unique($month);
 //var_dump($str_date1);
 // $str_date2 = array_unique($dates2);
  //var_dump($str_item_results_1);
 // var_dump($str_item_results_2);
                // var_dump($item_results_1);
               // print_r($item_results_1);
               // print_r($item_results_2);
//                $uniq_item_results_1 = array_unique($item_results_1);
  //      var_dump($uniq_item_results_1);

                $str_item_tests = array_unique($item_tests);
                //var_dump($item_tests);
                //$str_item_tests_1 = array_unique();
                $str_item_results_01 = rtrim(implode(',', $str_item_results_1), ',');
               // print_r($str_item_results_01);
                $str_item_results_02 = rtrim(implode(',',$str_item_results_2),',');


                $str_months_01 = rtrim(implode(',',$month1),',');
  //              $str_months_02 = rtrim(implode(',',$month2),',');

//                $str_item_mon =  rtrim(implode(',',$str_item_months),',');
//                $str_item_date1 = rtrim(implode(',', $str_date1), ',');

            //    $str_item_date2 = rtrim(implode(',',$str_date2),',');
             //   var_dump($str_item_date1);
          //      $cars=array("Volvo","BMW","Toyota");
?>

<?php


$this->widget('ext.highcharts.HighchartsWidget', array(
    'options'=>"{
        colors: ['#DDDF0D', '#7798BF', '#55BF3B'],
        chart: {
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, 'rgb(96, 96, 96)'],
                    [1, 'rgb(16, 16, 16)']
                ]
            },
            borderWidth: 0,
            borderRadius: 15,
            plotBackgroundColor: null,
            plotShadow: false,
            plotBorderWidth: 0
        },      
        title: {
            style: {
                color: '#FFF',
            },                
            text: 'TITLE: Patient History : Tests'
        },
        subtitle: {
            style: {
                color: '#FF0000',
            },
            text: ''
        },
        xAxis: {
            categories: [$str_months_01],
        },
        yAxis: {
            title: {
                text: 'Result (mg)'
            }
        },
        tooltip: {
            enabled: true,
            formatter: function() {
                return '<b>'+ this.series.name +'</b><br/>'+
                this.x +': '+ this.y +'C';
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
         
         series: [{
            name: 'RBC',
            data: [$str_item_results_01],
            }, {
            name: 'Platelets',
            data: [$str_item_results_02]
            }]
         }"
));
?>



<?php    if($dataLR != null)
    { 
       // print_r($dataLR[1]['result']);

        ?>
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
                <th width="10%" style="text-align: center">DateTime</th>
                <th width="10%" style="text-align: center">Result</th>
                <th width="15%" style="text-align: center">Remarks</th>
            </tr>
            <?php
                for ($i=1; $i<=$count; $i++)
                {
                    $dataLO = LabOrder::model()->findByPk($dataLR[$i-1]->loid);
                    $dataLI = LabInventory::model()->findByPk($dataLO->lid);
                    $dataLI_1=$dataLI->test_name;
                    //var_dump($dataLI_1);
//                    if($dataLI_1=="RBC"){
                    ?>
                    <tr>
                        <td style="text-align: center"><?php echo $i; ?></td>
                        <td><?php echo $dataLI->test_name ?></td>
                        <td style="text-align: center"><?php echo $dataLI->test_unit; ?></td>
                        <td style="text-align: center"><?php echo $dataLI->min_range1 ;?></td>
                        <td style="text-align: center"><?php echo $dataLI->max_range1 ;?></td>
                        <td style="text-align: center"><?php echo $dataLI->min_range2 ;?></td>
                        <td style="text-align: center"><?php echo $dataLI->max_range1 ;?></td>
                        <td style="text-align: center"><?php echo $dataLR[$i-1]->datetime ;?></td>
                        <td style="text-align: center"><?php echo $dataLR[$i-1]->result; ?></td>
                        <td style="text-align: center"><?php echo $dataLR[$i-1]->suggestion; ?></td>
                    </tr>
                <?php 





//}

                /*
                else if($dataLI_1=="Platelets"){
                    ?>
                    <tr>
                        <td style="text-align: center"><?php echo $i; ?></td>
                        <td><?php echo $dataLI->test_name ?></td>
                        <td style="text-align: center"><?php echo $dataLI->test_unit; ?></td>
                        <td style="text-align: center"><?php echo $dataLI->min_range1 ;?></td>
                        <td style="text-align: center"><?php echo $dataLI->max_range1 ;?></td>
                        <td style="text-align: center"><?php echo $dataLI->min_range2 ;?></td>
                        <td style="text-align: center"><?php echo $dataLI->max_range1 ;?></td>
                        <td style="text-align: center"><?php echo $dataLR[$i-1]->result; ?></td>
                        <td style="text-align: center"><?php echo $dataLR[$i-1]->suggestion; ?></td>
                    </tr>
                <?php
                }*/
                }; ?>
        </table>
    <?php }; 


                $planData = Plan::model()->findAllByAttributes(array('pid'=>$id,'sid'=>$subd['sid']));
                $pharmacyDATA = PhOrder::model()->findAllByAttributes(array('pid'=>$id, 'sid'=>$subd['sid']));
                foreach ($planData as $pland)
                {
                    echo '<tr style="background-color: #DDFFAA"><th colspan="7">Plan</th></tr>';
                    echo '<tr>';
                    echo '<td colspan="7">'.$pland['plan'].'</td>';
                    echo '</tr>';
                    echo '<tr style="background-color: #EEFFBB"><td colspan="7">Medication Prescription</td></tr>';
                    foreach ($pharmacyDATA as $pharma)
                    {
                        $drugData = PhDrug::model()->findByPk($pharma['drug_id']);
                        echo '<tr>';
                        echo '<td colspan="7">'.$drugData->brand_name.' '.$drugData->unit_value.$drugData->unit_measurement.' '.$pharma['sig'].' for '.$pharma['days'].' days.'.'</td>';
                        echo '</tr>';
                    }
                }
                echo '</table>';
                echo '</div>';
                echo '</div>';
            }
        }
    ?>


<?php
    /*
        echo '<hr><b>Pharmacy Order</b>'.'<br>';

        $labData = LabOrder::model()->findAllByAttributes(array('pid'=>$id));
        echo '<hr><b>Lab Order</b>'.'<br>';
        foreach ($labData as $labo)
        {
            echo $labo['sid']."<br>";
        }

        $labResult = LabResult::model()->findAllByAttributes(array('pid'=>$id));
        echo '<hr><b>Lab Result</b><br>';
        foreach ($labResult as $labr)
        {
            echo $labr['sid']."<br>";
        }


    */?>

<?php /*$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'fName',
		'mName',
		'lName',
		'dob',
		'gender',
		'marital_status',
		'sStreet',
		'sWardNo',
		'sCity',
		'sDistrict',
		'sZone',
		'pStreet',
		'pWardNo',
		'pCity',
		'pDistrict',
		'pZone',
		'country',
		'motherName',
		'guardianName',
		'relation',
		'eContact',
		'ePhone',
		'homePhone',
		'workPhone',
		'mobilePhone',
		'email',
	),
)); */?><!--
<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>-->
