<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'doctor-charge-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>

<!--	--><?php //echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>

            <?php
                $this->widget('bootstrap.widgets.TbAlert', array(
                    'block' => true,
                    'fade' => true,
                    'closeText' => '&times;', // false equals no close link
                    'events' => array(),
                    'htmlOptions' => array(),
                    'userComponentId' => 'user',
                    'alerts' => array( // configurations per alert type
// success, info, warning, error or danger
                        'success' => array('closeText' => '&times;'),
                        'info', // you don't need to specify full config
                        'warning' => array('block' => false, 'closeText' => false),
                        'error' => array('block' => false, 'closeText' => 'AAARGHH!!')
                    ),
                ));
            ?>
   <div class="control-group">		
			<div class="span4">

	<?php echo $form->textFieldRow($model,'eid',array('class'=>'span5','value'=>$_GET['eid'],'readOnly'=>true)); ?>

	<?php echo $form->textFieldRow($model,'charge',array('class'=>'span5')); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
