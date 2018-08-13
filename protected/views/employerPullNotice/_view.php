<?php
/* @var $this EmployerPullNoticeController */
/* @var $data DotTrackerEpn1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dba')); ?>:</b>
	<?php echo CHtml::encode($data->dba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attention')); ?>:</b>
	<?php echo CHtml::encode($data->attention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_person')); ?>:</b>
	<?php echo CHtml::encode($data->acc_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->acc_email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->acc_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_street_address')); ?>:</b>
	<?php echo CHtml::encode($data->acc_street_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_city')); ?>:</b>
	<?php echo CHtml::encode($data->acc_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_state')); ?>:</b>
	<?php echo CHtml::encode($data->acc_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_zip')); ?>:</b>
	<?php echo CHtml::encode($data->acc_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_person')); ?>:</b>
	<?php echo CHtml::encode($data->billing_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->billing_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_attention')); ?>:</b>
	<?php echo CHtml::encode($data->billing_attention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_telephone2')); ?>:</b>
	<?php echo CHtml::encode($data->billing_telephone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_address')); ?>:</b>
	<?php echo CHtml::encode($data->billing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_city')); ?>:</b>
	<?php echo CHtml::encode($data->billing_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_state')); ?>:</b>
	<?php echo CHtml::encode($data->billing_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_zip')); ?>:</b>
	<?php echo CHtml::encode($data->billing_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_name')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_title')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_dl_nmber')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_dl_nmber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_state')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_expiration')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_expiration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_email')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licensing_federal_employer')); ?>:</b>
	<?php echo CHtml::encode($data->licensing_federal_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose_enrollment')); ?>:</b>
	<?php echo CHtml::encode($data->purpose_enrollment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('all_employee_mandate')); ?>:</b>
	<?php echo CHtml::encode($data->all_employee_mandate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issued_requester_code')); ?>:</b>
	<?php echo CHtml::encode($data->issued_requester_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issued_requester_code_a')); ?>:</b>
	<?php echo CHtml::encode($data->issued_requester_code_a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issued_requester_code_b')); ?>:</b>
	<?php echo CHtml::encode($data->issued_requester_code_b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_link')); ?>:</b>
	<?php echo CHtml::encode($data->sign_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra')); ?>:</b>
	<?php echo CHtml::encode($data->extra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>