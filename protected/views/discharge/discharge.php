<?php

$dis = Discharge::model()->findByAttributes(array('pid'=>$pid));

    if(!empty($dis))
    {
        echo "Patient has already been discharged.";
    }
    else
    {
        echo 'Patient has been discharged successfully';
    }

?>