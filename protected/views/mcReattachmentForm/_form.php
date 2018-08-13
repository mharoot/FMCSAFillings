<?php
/* @var $this McReattachmentFormController */
/* @var $model DotTrackerMcReattachment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-mc-reattachment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usdot'); ?>
		<?php echo $form->textArea($model,'usdot',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'usdot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mc'); ?>
		<?php echo $form->textArea($model,'mc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'legal_business_name'); ?>
		<?php echo $form->textArea($model,'legal_business_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'legal_business_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office_name'); ?>
		<?php echo $form->textArea($model,'office_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'office_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textArea($model,'date',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textArea($model,'created_by',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation_datetime'); ?>
		<?php echo $form->textField($model,'creation_datetime'); ?>
		<?php echo $form->error($model,'creation_datetime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->