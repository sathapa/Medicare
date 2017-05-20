<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="<?php echo Yii::app()->request->baseUrl; ?>/Report/CashBook" method="post"  >

 <table>
  <tr> <td> <input type="submit" name="cashBook" id="cashBook" value="Cash Book">
      </td></tr>
    
    
</form>
  
     <?php
 
    if(!empty($ph)){
        $sn = 1;
     ?> <table border="2px">
         <tr>         
            <td colspan="6">              
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
             <th>S.N.</th>
              <th>Registration Income</th>
             <th>Pharmacy Income</th>
             

         </TR><?PHP  
        foreach ($ph as $mahesh){
            ?>
    <tr>
        <td>
            <?php echo $sn++; ?>
        </td>
        
         <td>
            <?php echo $mahesh['ph']; ?>
        
         </td>
        <td>
            <?php echo $mahesh['reg']; ?>
        </td>
        1
    </tr>
    
    
    
    <?php  }
?></table>
<?php
           
    }
    
    
    
    
    
    
    
    
    
    
    