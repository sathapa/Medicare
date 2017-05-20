<style>
th,td,th
{
background-color:white;
color:black;
}
th
{
height:40px;
} 
table
{
width: 100%;
border-collapse:collapse;
border: 1px solid green;
}
th,td
{

border:1px solid black;
}

h2
{
color:buttonface;
text-align:center;
}
td
{
height:20px;
vertical-align:top;
}
p
{
color:black;
text-align:center;

font-family:"Times New Roman";
font-size:20px;
}
.tbl
{
    border:1px solid #CCC;
    width:100%;
}


</style>

<h2> MedcoEMR Cash Book Report </h2>

<div>   <?php if(!empty($fromDate)){
                       echo  "<strong> From: &nbsp; &nbsp; </strong>";
                       echo $fromDate;
            }?> 
                &nbsp; 
                &nbsp;
                        
                <?php if(!empty($toDate)){
                    echo  "<strong> To: &nbsp; &nbsp; </strong>";
                    echo $toDate;
                }?>
</div>
</br>
</br>
<table>
            
         
          
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
        <?php  }
        
        ?>
</table>
   <?php } ?>
</br>
</br>

<div  style="text-align:right; font-size: 8">

  Medium Health Care Pvt. Ltd

</div>