<?php
/* @var $this SmsController */
/* @var $model SmsResponse */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sms-response-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'resp'); ?>
		<?php echo $form->textArea($model,'resp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fromPhone'); ?>
		<?php echo $form->textArea($model,'fromPhone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fromPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'toPhone'); ?>
		<?php echo $form->textArea($model,'toPhone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'toPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationdatetime'); ?>
		<?php echo $form->textField($model,'creationdatetime'); ?>
		<?php echo $form->error($model,'creationdatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext1'); ?>
		<?php echo $form->textArea($model,'ext1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ext1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext2'); ?>
		<?php echo $form->textArea($model,'ext2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ext2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->