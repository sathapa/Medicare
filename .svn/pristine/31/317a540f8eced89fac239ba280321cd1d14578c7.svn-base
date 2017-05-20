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

border:2px solid black;
}

h1
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

<h1> MedcoEMR Doctor Report </h1>

<div>        
                   <td colspan="2"> <?php
                       echo  "<strong> Doctor:  &nbsp; </strong>";
                      echo ucfirst($doctorName);
                      
               ?>
</div>         
<div> <?php
                       echo  "<strong> From: &nbsp; &nbsp; </strong>";
                       echo $fromDate;
            ?> 
                &nbsp; 
                &nbsp;
                        
          <?php 
          if(!empty($toDate)){
                    echo  "<strong> To: &nbsp; &nbsp; </strong>";
                    echo $toDate;
          ?>    
</div> <?PHP
                    }?>
</br>
</br>
           

    <table class="table table-bordered table-striped table-condensed">
         
       
   
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
                <?php  };?>
    </table>
            <?php } ?>
</br>
</br>
</br>
</br>
<div  style="text-align:right; font-size: 8">

  Medium Health Care Pvt. Ltd

</div>