<?php
/* @var $this McApplicationController */
/* @var $model DotTrackerMc */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'authority_c'); ?>
		<?php echo $form->textField($model,'authority_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'authority_no'); ?>
		<?php echo $form->textArea($model,'authority_no',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'legal_business_name'); ?>
		<?php echo $form->textArea($model,'legal_business_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doing_business_as'); ?>
		<?php echo $form->textArea($model,'doing_business_as',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_street'); ?>
		<?php echo $form->textArea($model,'p_street',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_state'); ?>
		<?php echo $form->textArea($model,'p_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_city'); ?>
		<?php echo $form->textArea($model,'p_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_zip'); ?>
		<?php echo $form->textArea($model,'p_zip',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_telephone'); ?>
		<?php echo $form->textField($model,'p_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_fax'); ?>
		<?php echo $form->textField($model,'p_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_street'); ?>
		<?php echo $form->textArea($model,'m_street',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_city'); ?>
		<?php echo $form->textArea($model,'m_city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_state'); ?>
		<?php echo $form->textArea($model,'m_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_zip'); ?>
		<?php echo $form->textArea($model,'m_zip',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_telephone'); ?>
		<?php echo $form->textField($model,'m_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_fax'); ?>
		<?php echo $form->textField($model,'m_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_name'); ?>
		<?php echo $form->textArea($model,'r_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_title'); ?>
		<?php echo $form->textArea($model,'r_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_street'); ?>
		<?php echo $form->textArea($model,'r_street',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_state'); ?>
		<?php echo $form->textArea($model,'r_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_zip'); ?>
		<?php echo $form->textArea($model,'r_zip',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_telephone'); ?>
		<?php echo $form->textArea($model,'r_telephone',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_fax'); ?>
		<?php echo $form->textArea($model,'r_fax',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dot_number'); ?>
		<?php echo $form->textField($model,'dot_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_of_business_c'); ?>
		<?php echo $form->textField($model,'form_of_business_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_of_business'); ?>
		<?php echo $form->textArea($model,'form_of_business',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_auth'); ?>
		<?php echo $form->textArea($model,'type_of_auth',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_29a'); ?>
		<?php echo $form->textArea($model,'p_29a',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_29b'); ?>
		<?php echo $form->textField($model,'p_29b'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_30'); ?>
		<?php echo $form->textField($model,'p_30'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_31'); ?>
		<?php echo $form->textField($model,'p_31'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'affl_cont'); ?>
		<?php echo $form->textArea($model,'affl_cont',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'affl_file'); ?>
		<?php echo $form->textArea($model,'affl_file',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_33'); ?>
		<?php echo $form->textField($model,'p_33'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_34'); ?>
		<?php echo $form->textField($model,'p_34'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_35'); ?>
		<?php echo $form->textField($model,'p_35'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_36_check'); ?>
		<?php echo $form->textField($model,'p_36_check'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_36_file'); ?>
		<?php echo $form->textArea($model,'p_36_file',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_37'); ?>
		<?php echo $form->textField($model,'p_37'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_38_name'); ?>
		<?php echo $form->textArea($model,'p_38_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sign_link'); ?>
		<?php echo $form->textArea($model,'sign_link',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textArea($model,'date',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_checkboxes'); ?>
		<?php echo $form->textField($model,'no_of_checkboxes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cc_type'); ?>
		<?php echo $form->textField($model,'cc_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cc_number'); ?>
		<?php echo $form->textField($model,'cc_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cc_date'); ?>
		<?php echo $form->textArea($model,'cc_date',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cc_name'); ?>
		<?php echo $form->textArea($model,'cc_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_amount'); ?>
		<?php echo $form->textField($model,'payment_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'street'); ?>
		<?php echo $form->textArea($model,'street',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textArea($model,'city',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textArea($model,'state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zip'); ?>
		<?php echo $form->textArea($model,'zip',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sign_link1'); ?>
		<?php echo $form->textArea($model,'sign_link1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date1'); ?>
		<?php echo $form->textArea($model,'date1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra1'); ?>
		<?php echo $form->textArea($model,'extra1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra2'); ?>
		<?php echo $form->textField($model,'extra2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra3'); ?>
		<?php echo $form->textField($model,'extra3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra4'); ?>
		<?php echo $form->textField($model,'extra4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra5'); ?>
		<?php echo $form->textField($model,'extra5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra6'); ?>
		<?php echo $form->textField($model,'extra6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creationdate_time'); ?>
		<?php echo $form->textField($model,'creationdate_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textArea($model,'created_by',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->