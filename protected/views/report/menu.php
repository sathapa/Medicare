<?php
    $this->menu=array(
        array('icon'=>'list-alt','label'=>'List Patient', 'url'=>array('Report/listPatient','param1'=>'value1','active'=>true)),
        array('icon'=>'list-alt','label'=>'Doctor Report', 'url'=>array('Report/doctorReport','param1'=>'value1','active'=>true)),
        array('icon'=>'list-alt','label'=>'Cash Book', 'url'=>array('CashReport/cashBook','param1'=>'value1','active'=>true)),

    );
?>




















<?php /*echo CHtml::link('List Patient',array('Report/listPatient',
                                         'param1'=>'value1')); */?><!--
</br>
<?php /*echo CHtml::link('Cash Book',array('Report/cashBook',
                                         'param1'=>'value1')); */?>
</br>
--><?php /*echo CHtml::link('Doctor Report',array('Report/doctorReport',
                                         'param1'=>'value1')); */?>