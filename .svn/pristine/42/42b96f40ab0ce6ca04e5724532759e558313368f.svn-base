<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
          
$tsv = array();
$html = array();

$tsv[]  = implode("\t", $tsv);
//    $html[] = "<tr><th>First Name</th><th>Email</th><th>Last Name</th><th>Course</th><th>Enrolled</th><th>First Access</th><th>Last Access</th><th>Quiz Assigned</th><th>Final Score</th><th>ACF</th><th>Course Center</th></tr><tr><td>" .implode("\r\n", $html);
 $sn = 1;
 
 echo "\r\n";
 echo "\tSearch Catagory:";
 echo "\t".$Gender."\r\n";
 echo "\tFrom Date:";
 echo "\t".$fromDate;
 echo "\tTo Date:";
 echo "\t".$toDate;
 
 echo "\r\n";
 echo "\r\n";
 echo "\r\n";
 echo "\tSN"."\t";
 echo "CARD ID"."\t";
 echo "PATIENT NAME"."\t";
 echo "CONTACT NUMBER"."\t";
 echo "COMPLAIN"."\r";
 
 foreach ($patients as $patient)
{
   echo "\t".$sn."\t";
   echo $patient['cardID']."\t";
   echo $patient['fName']." ".$patient['mName']." ".$patient['lName']."\t";
   echo $patient['mobilePhone']."\t";
   echo $patient['complain'];
   echo "\r\n";
  $sn++;
    
}
 $tsv[]  = implode("\t", $patient);
  //  $html[] = "<tr><td>" .implode("</td><td>", $patient) . "</td></tr>";
$tsv  = implode("\r\n", $tsv);
//$html = "<table>" . implode("\r\n", $html) . "</table>";
 
$fileName = date("d-m-Y").'_mysql.xls';
header("Content-type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=$fileName");
 
//echo $tsv;       
                
     
