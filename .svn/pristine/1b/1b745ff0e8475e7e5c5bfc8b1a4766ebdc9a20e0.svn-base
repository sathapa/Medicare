
<?php
$this->breadcrumbs=array(
    'Doctor Leaves'=>array('index'),
    $model->lid,
);
?>

<?php
$this->menu=array(
    array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
    array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
    array('label'=>'Update', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->lid)), 'linkOptions'=>array()),
    //array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
    array('label'=>'Print', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;')),

);
?>
<div class="form">
        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
            'id'=>'doctor-leave-form',
            'enableAjaxValidation'=>false,
            'method'=>'post',
            'type'=>'inline',
            'htmlOptions'=>array(
                'enctype'=>'multipart/form-data'
            )
        )); ?>

    <div class='printableArea'>
        <div>
            <b><?php echo $uid->title." $uid->fName"." $uid->mName"." $uid->lName"; ?></b></br>

        </div>
        <table class="table table-hover">
            <tr>
                <th>Date</th>
                <th>Morning_Shift</th>
                <th>Day_Shift</th>
                <th>Evening_Shift</th>
                <th>Night_Shift</th>
            </tr>
            <tr>
                <td><?php echo $model->date; ?></td>
                <td><?php echo $form->checkBox($model,'mShift',array('class'=>'span1','DISABLED'=>true)); ?></td>
                <td><?php echo $form->checkBox($model,'dshift',array('class'=>'span1','DISABLED'=>true)); ?></td>
                <td><?php echo $form->checkBox($model,'eShift',array('class'=>'span1','DISABLED'=>true)); ?></td>
                <td><?php echo $form->checkBox($model,'nShift',array('class'=>'span1','DISABLED'=>true)); ?></td>
            </tr>

        </table>
    </div>
    <?php $this->endWidget(); ?>
</div>
    <style type="text/css" media="print">
    body {visibility:hidden;}
    .printableArea{visibility:visible;}
    </style>
    <script type="text/javascript">
    function printDiv()
    {

    window.print();

    }
    </script>

