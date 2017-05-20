<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'doctortime-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'horizontal',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    )); ?>

    <?php $this->beginWidget('bootstrap.widgets.TbBox', array(
        'title' => $uid->uName,
        'headerIcon' => 'icon-plus',
        'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    ));?>

    <table class="table">
        <tr>
            <th>Day</th>
            <th>Morning Shift</th>
            <th>Day Shift</th>
            <th>Evening Shift</th>
            <th>Night Shift</th>
        </tr>
        <tr>
            <td>Sunday</td>
            <td><?php echo $form->checkBox($model, 'sunM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'sunD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'sunE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'sunN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
        <tr>
            <td>Monday</td>
            <td><?php echo $form->checkBox($model, 'monM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'monD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'monE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'monN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td><?php echo $form->checkBox($model, 'tueM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'tueD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'tueE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'tueN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td><?php echo $form->checkBox($model, 'wedM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'wedD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'wedE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'wedN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td><?php echo $form->checkBox($model, 'thrM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'thrD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'thrE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'thrN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
        <tr>
            <td>Friday</td>
            <td><?php echo $form->checkBox($model, 'friM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'friD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'friE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'friN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td><?php echo $form->checkBox($model, 'satM', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'satD', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'satE', array('class' => 'span1', 'DISABLED' => true)); ?></td>
            <td><?php echo $form->checkBox($model, 'satN', array('class' => 'span1', 'DISABLED' => true)); ?></td>
        </tr>
    </table>
    <?php $this->endWidget(); ?>

    <?php $this->endWidget(); ?>

</div>
