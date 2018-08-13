<?php
/* @var $this DotTrackerQuoteController */
/* @var $model DotTrackerQuote */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'s_fname'); ?>
		<?php echo $form->textArea($model,'s_fname',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_lname'); ?>
		<?php echo $form->textArea($model,'s_lname',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_company'); ?>
		<?php echo $form->textArea($model,'s_company',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_address1'); ?>
		<?php echo $form->textArea($model,'s_address1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_address2'); ?>
		<?php echo $form->textArea($model,'s_address2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_city'); ?>
		<?php echo $form->textArea($model,'s_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_state'); ?>
		<?php echo $form->textArea($model,'s_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_state_code'); ?>
		<?php echo $form->textArea($model,'s_state_code',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_email'); ?>
		<?php echo $form->textArea($model,'s_email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_phone1'); ?>
		<?php echo $form->textArea($model,'s_phone1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_phone2'); ?>
		<?php echo $form->textArea($model,'s_phone2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_mobile'); ?>
		<?php echo $form->textArea($model,'s_mobile',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_fax'); ?>
		<?php echo $form->textArea($model,'s_fax',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_city'); ?>
		<?php echo $form->textArea($model,'o_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_state'); ?>
		<?php echo $form->textArea($model,'o_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_state_code'); ?>
		<?php echo $form->textArea($model,'o_state_code',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'o_country'); ?>
		<?php echo $form->textArea($model,'o_country',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_city'); ?>
		<?php echo $form->textArea($model,'d_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_state'); ?>
		<?php echo $form->textArea($model,'d_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_state_code'); ?>
		<?php echo $form->textArea($model,'d_state_code',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_country'); ?>
		<?php echo $form->textArea($model,'d_country',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_shipdate'); ?>
		<?php echo $form->textField($model,'est_shipdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicles_run'); ?>
		<?php echo $form->textField($model,'vehicles_run'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ship_via'); ?>
		<?php echo $form->textField($model,'ship_via'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipper_notes_from'); ?>
		<?php echo $form->textArea($model,'shipper_notes_from',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicle_detais'); ?>
		<?php echo $form->textArea($model,'vehicle_detais',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipper_notes_to'); ?>
		<?php echo $form->textArea($model,'shipper_notes_to',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reffered_by'); ?>
		<?php echo $form->textField($model,'reffered_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creationdatetime'); ?>
		<?php echo $form->textField($model,'creationdatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->