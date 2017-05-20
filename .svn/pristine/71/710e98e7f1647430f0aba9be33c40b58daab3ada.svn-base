<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />



</head>
<body>
			<h1 style="text-align:center; margin-top:10px; color:#fff;">MedcoEMR</h1><!--END TITLE-->
<!--TITLE--><h1 style="text-align:center; margin-top:10px;">Clinical Practice Management</h1><!--END TITLE-->
    <!--DESCRIPTION--><h3 style="text-align:center;">Please Provide Login Details</h3><!--END DESCRIPTION-->

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->

    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<!--<form name="login-form" class="login" action="" method="post">


	CONTENT
  <div class="login-form">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),
				)); ?>

				HEADER
				<div class="header">
					TITLE
					<h1>CPM Login</h1>
					END TITLE
					DESCRIPTION
					<span>Please Provide your Login Details</span>
					END DESCRIPTION
				</div>
				END HEADER
				
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
    END CONTENT
    -->
    <form name="login-form" class="login" action="" method="post">


	<!--CONTENT-->
    <div class="content" style="margin-top:80px;">
	 <!--div class="user-icon"></div>
    <div class="pass-icon"></div>-->

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

    <!--USERNAME--><?php echo $form->textField($model,'username', array('class'=>'input username','value'=>'Username','onfocus'=>'this.value=null')); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'input password','value'=>'Password','onfocus'=>'this.value=null')); ?>
    </div>
    <!--END CONTENT-->

    <!--FOOTER-->

    <?php echo CHtml::submitButton('SUBMIT', array('class'=>'foot')); ?>
    <!--END FOOTER-->


    <!--FOOTER-->



    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>