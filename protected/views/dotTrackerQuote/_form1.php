<?php
/* @var $this DotTrackerQuoteController */
/* @var $model DotTrackerQuote */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-quote-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'s_fname'); ?>
		<?php echo $form->textField($model,'s_fname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_lname'); ?>
		<?php echo $form->textField($model,'s_lname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_company'); ?>
		<?php echo $form->textField($model,'s_company',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_address1'); ?>
		<?php echo $form->textField($model,'s_address1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_address2'); ?>
		<?php echo $form->textField($model,'s_address2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_city'); ?>
		<?php echo $form->textField($model,'s_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_state'); ?>
		<?php echo $form->textField($model,'s_state',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_state_code'); ?>
		<?php echo $form->textField($model,'s_state_code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_state_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_email'); ?>
		<?php echo $form->textField($model,'s_email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_phone1'); ?>
		<?php echo $form->textField($model,'s_phone1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_phone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_phone2'); ?>
		<?php echo $form->textField($model,'s_phone2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_phone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_mobile'); ?>
		<?php echo $form->textField($model,'s_mobile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_fax'); ?>
		<?php echo $form->textField($model,'s_fax',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'s_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'o_city'); ?>
		<?php echo $form->textField($model,'o_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'o_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'o_state'); ?>
		<?php echo $form->textField($model,'o_state',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'o_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'o_state_code'); ?>
		<?php echo $form->textField($model,'o_state_code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'o_state_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'o_country'); ?>
		<?php echo $form->textField($model,'o_country',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'o_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_city'); ?>
		<?php echo $form->textField($model,'d_city',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'d_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_state'); ?>
		<?php echo $form->textField($model,'d_state',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'d_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_state_code'); ?>
		<?php echo $form->textField($model,'d_state_code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'d_state_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_country'); ?>
		<?php echo $form->textField($model,'d_country',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'d_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'est_shipdate'); ?>
		<?php echo $form->textField($model,'est_shipdate'); ?>
		<?php echo $form->error($model,'est_shipdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vehicles_run'); ?>
		<?php echo $form->textField($model,'vehicles_run'); ?>
		<?php echo $form->error($model,'vehicles_run'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ship_via'); ?>
		<?php echo $form->textField($model,'ship_via'); ?>
		<?php echo $form->error($model,'ship_via'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipper_notes_from'); ?>
		<?php echo $form->textArea($model,'shipper_notes_from',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shipper_notes_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vehicle_detais'); ?>
		<?php echo $form->textArea($model,'vehicle_detais',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'vehicle_detais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipper_notes_to'); ?>
		<?php echo $form->textArea($model,'shipper_notes_to',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shipper_notes_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reffered_by'); ?>
		<?php echo $form->textField($model,'reffered_by'); ?>
		<?php echo $form->error($model,'reffered_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationdatetime'); ?>
		<?php echo $form->textField($model,'creationdatetime'); ?>
		<?php echo $form->error($model,'creationdatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->