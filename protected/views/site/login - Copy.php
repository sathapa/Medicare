<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login Form</title>
		<!--STYLESHEETS-->
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_login.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
		<!--SCRIPTS-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
		<!--Slider-in icons-->
		<script type="text/javascript">
		$(document).ready(function() {
			$(".username").focus(function() {
				$(".user-icon").css("left","-48px");
			});
			$(".username").blur(function() {
				$(".user-icon").css("left","0px");
			});

			$(".password").focus(function() {
				$(".pass-icon").css("left","-48px");
			});
			$(".password").blur(function() {
				$(".pass-icon").css("left","0px");
			});
		});
		</script>

	</head>
	<body>

		<!--WRAPPER-->
		<div id="wrapper">
			<!--SLIDE-IN ICONS-->
			<div class="user-icon"></div>
			<div class="pass-icon"></div>
			<!--END SLIDE-IN ICONS-->

			<div class="login-form">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),
				)); ?>

				<!--HEADER-->
				<div class="header">
					<!--TITLE-->
					<h1>CPM Login</h1>
					<!--END TITLE-->
					<!--DESCRIPTION-->
					<span>Please Provide your Login Details</span>
					<!--END DESCRIPTION-->
				</div>
				<!--END HEADER-->

				<?php
					$a = $form->error($model,'username');
					$b = $form->error($model,'password');
					if ($a != null || $b != null)
					{
				?>

				<div class="alert-error" style="padding-left:30px; margin-bottom:20px;">
					<?php echo $form->error($model,'username'); ?><?php echo $form->error($model,'password'); ?>
				</div>
				<?php
					}
				?>

				<div class="content">
					<?php echo $form->textField($model,'username', array('class'=>'input username','value'=>'Username','onfocus'=>'this.value=null')); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'input password','value'=>'Password','onfocus'=>'this.value=null')); ?>
				</div>

				<div class="footer">
					<?php echo CHtml::submitButton('Login', array('class'=>'button')); ?>
				</div>
				<?php $this->endWidget(); ?>
			</div>
			<!-- form -->
		</div>
		<!--END WRAPPER-->

		<!--GRADIENT-->
		<div class="gradient"></div>
		<!--END GRADIENT-->
	</body>
</html>