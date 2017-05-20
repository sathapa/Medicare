<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'inline',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<!-- <fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?> -->
        		
   <!-- <div class="control-group">		 -->
			<!-- <div class="span4"> -->

<?php $this->beginWidget('bootstrap.widgets.TbBox',array(
	'title'=> 'Add Employee',
	'headerIcon'=>'icon-plus',
	'htmlOptions'=>array('class'=>'bootstrap-widget-table')
	)); ?>
	<table class="table">
		<tbody>
			<tr>
				<th colspan="6">Basic Info</th>
			</tr>
			<tr>
				<td>Name</td>
				<td colspan="5"><?php echo $form->dropDownList($model,'title',array(''=>'Title','Mr.'=>'Mr.','Ms.'=>'Ms.','Mrs.'=>'Mrs.','Dr.'=>'Dr.'),array('class'=>'span1','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'fName',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'mName',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'lName',array('class'=>'span2','maxlength'=>100)); ?>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $form->textFieldRow($model,'gender',array('class'=>'span2','maxlength'=>100)); ?></td>
				<td>DOB</td>
					<td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
		                'model'=>$model,
		                'attribute'=>'dob',
		                // additional javascript options for the date picker plugin
		                'options'=>array(
		                    'showAnim'=>'drop',
		                    'dateFormat'=>'yy-mm-dd',
		                    'changeYear'=>true,
		                    'changeMonth'=>true,
		                ),
		                'htmlOptions'=>array(
		                    'style'=>'height:20px;','placeholder'=>'DOB', 'class'=>'span2'
		                ),
            		));?></td>
			</tr>
			<tr>
				<th colspan="6">Currrent Address</th>
			</tr>
			<tr>
				<td colspan="6"><?php echo $form->textFieldRow($model,'sStreet',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'sWardNo',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'sCity',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'sDistrict',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'sZone',array('class'=>'span2','maxlength'=>100)); ?></td>
			</tr>
			<tr>
				<th colspan="6">Permanent Address</th>
			</tr>
			<tr>
				<td colspan="6"><?php echo $form->textFieldRow($model,'pStreet',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'pWardNo',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'pCity',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'pDistrict',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'pZone',array('class'=>'span2','maxlength'=>100)); ?>
					<?php echo $form->textFieldRow($model,'Country',array('class'=>'span2','maxlength'=>100)); ?></td>
			</tr>
			<tr>
				<th colspan="6">Contact</th>
			</tr>
			<tr>
				<td>E. Contact</td>
				<td><?php echo $form->textFieldRow($model,'eContact',array('class'=>'span2','maxlength'=>100)); ?></td>
				<td>E. Phone</td>
				<td><?php echo $form->textFieldRow($model,'ePhone',array('class'=>'span2','maxlength'=>100)); ?></td>
				<td>Home Phone</td>
				<td><?php echo $form->textFieldRow($model,'homePhone',array('class'=>'span2','maxlength'=>100)); ?></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><?php echo $form->textFieldRow($model,'mobilePhone',array('class'=>'span2','maxlength'=>100)); ?></td>
				<td>Email</td>
				<td colspan="3"><?php echo $form->textFieldRow($model,'email',array('class'=>'span2','maxlength'=>100)); ?></td>
			</tr>
			<tr style="display:none;">
				<td><?php echo $form->textFieldRow($model,'stat',array('class'=>'span5','value'=>'1')); ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="6"><div class="pull-right">
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
				</td>
			</tr>
		</tfoot>
	</table>
<?php $this->endWidget(); ?>


	

                        <!-- </div>    -->
  <!-- </div> -->

	
<!-- </fieldset> -->

<?php $this->endWidget(); ?>

</div>
