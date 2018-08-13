<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="row">
<div class="col-sm-12" style="padding-bottom: 50px;">
	<div class="col-sm-4 centred">
		<div class="loginBox">
			<h3>Sign in to your account</h3>
			<br>
			<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<div class="form-group">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username'); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password'); ?>
					<?php echo $form->error($model,'password'); ?>

				</div>

				<div class="form-group rememberMe">
					<?php echo $form->checkBox($model,'rememberMe'); ?>
					<?php echo $form->label($model,'rememberMe'); ?>
					<?php echo $form->error($model,'rememberMe'); ?>
				</div>

				<div class="form-group buttons">
					<?php echo CHtml::submitButton('Login'); ?>
				</div>

				<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</div>
</div>

<style type="text/css">
	.centred{ float: none; margin: 0 auto; }
	.loginBox{ border-top:#E6E6E6 solid 6px; padding: 20px; background-color:#F4F4F4; border-left:#E6E6E6 solid 1px;border-right:#E6E6E6 solid 1px;border-bottom:#E6E6E6 solid 1px; }
</style>