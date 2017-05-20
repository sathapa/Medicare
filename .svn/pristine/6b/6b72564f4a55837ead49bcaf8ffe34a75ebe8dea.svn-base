<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$result = mysqli_query($qry);

$tsv = array();
$html = array();

$tsv[]  = implode("\t", $tsv);
    $html[] = "<tr><th>First Name</th><th>Email</th><th>Last Name</th><th>Course</th><th>Enrolled</th><th>First Access</th><th>Last Access</th><th>Quiz Assigned</th><th>Final Score</th><th>ACF</th><th>Course Center</th></tr><tr><td>" .implode("\r\n", $html);
while($row = mysqli_fetch_array($result, MYSQLI_NUM))
{
    $tsv[]  = implode("\t", $row);
    $html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
}
 
$tsv  = implode("\r\n", $tsv);
$html = "<table>" . implode("\r\n", $html) . "</table>";
 
$fileName = date("d-m-Y").'_mysql.xls';
header("Content-type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=$fileName");
 
//echo $tsv;
echo $html;