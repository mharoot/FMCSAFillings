<?php
/* @var $this McApplicationController */
/* @var $data DotTrackerMc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authority_c')); ?>:</b>
	<?php echo CHtml::encode($data->authority_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authority_no')); ?>:</b>
	<?php echo CHtml::encode($data->authority_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('legal_business_name')); ?>:</b>
	<?php echo CHtml::encode($data->legal_business_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doing_business_as')); ?>:</b>
	<?php echo CHtml::encode($data->doing_business_as); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_street')); ?>:</b>
	<?php echo CHtml::encode($data->p_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_state')); ?>:</b>
	<?php echo CHtml::encode($data->p_state); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_city')); ?>:</b>
	<?php echo CHtml::encode($data->p_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_zip')); ?>:</b>
	<?php echo CHtml::encode($data->p_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->p_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_fax')); ?>:</b>
	<?php echo CHtml::encode($data->p_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_street')); ?>:</b>
	<?php echo CHtml::encode($data->m_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_city')); ?>:</b>
	<?php echo CHtml::encode($data->m_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_state')); ?>:</b>
	<?php echo CHtml::encode($data->m_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_zip')); ?>:</b>
	<?php echo CHtml::encode($data->m_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->m_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_fax')); ?>:</b>
	<?php echo CHtml::encode($data->m_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_name')); ?>:</b>
	<?php echo CHtml::encode($data->r_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_title')); ?>:</b>
	<?php echo CHtml::encode($data->r_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_street')); ?>:</b>
	<?php echo CHtml::encode($data->r_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_state')); ?>:</b>
	<?php echo CHtml::encode($data->r_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_zip')); ?>:</b>
	<?php echo CHtml::encode($data->r_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->r_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_fax')); ?>:</b>
	<?php echo CHtml::encode($data->r_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dot_number')); ?>:</b>
	<?php echo CHtml::encode($data->dot_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_of_business_c')); ?>:</b>
	<?php echo CHtml::encode($data->form_of_business_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_of_business')); ?>:</b>
	<?php echo CHtml::encode($data->form_of_business); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_auth')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_auth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_29a')); ?>:</b>
	<?php echo CHtml::encode($data->p_29a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_29b')); ?>:</b>
	<?php echo CHtml::encode($data->p_29b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_30')); ?>:</b>
	<?php echo CHtml::encode($data->p_30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_31')); ?>:</b>
	<?php echo CHtml::encode($data->p_31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('affl_cont')); ?>:</b>
	<?php echo CHtml::encode($data->affl_cont); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('affl_file')); ?>:</b>
	<?php echo CHtml::encode($data->affl_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_33')); ?>:</b>
	<?php echo CHtml::encode($data->p_33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_34')); ?>:</b>
	<?php echo CHtml::encode($data->p_34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_35')); ?>:</b>
	<?php echo CHtml::encode($data->p_35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_36_check')); ?>:</b>
	<?php echo CHtml::encode($data->p_36_check); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_36_file')); ?>:</b>
	<?php echo CHtml::encode($data->p_36_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_37')); ?>:</b>
	<?php echo CHtml::encode($data->p_37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_38_name')); ?>:</b>
	<?php echo CHtml::encode($data->p_38_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_link')); ?>:</b>
	<?php echo CHtml::encode($data->sign_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_checkboxes')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_checkboxes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_method')); ?>:</b>
	<?php echo CHtml::encode($data->payment_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc_type')); ?>:</b>
	<?php echo CHtml::encode($data->cc_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc_number')); ?>:</b>
	<?php echo CHtml::encode($data->cc_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc_date')); ?>:</b>
	<?php echo CHtml::encode($data->cc_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc_name')); ?>:</b>
	<?php echo CHtml::encode($data->cc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_amount')); ?>:</b>
	<?php echo CHtml::encode($data->payment_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_link1')); ?>:</b>
	<?php echo CHtml::encode($data->sign_link1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date1')); ?>:</b>
	<?php echo CHtml::encode($data->date1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra1')); ?>:</b>
	<?php echo CHtml::encode($data->extra1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra2')); ?>:</b>
	<?php echo CHtml::encode($data->extra2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra3')); ?>:</b>
	<?php echo CHtml::encode($data->extra3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra4')); ?>:</b>
	<?php echo CHtml::encode($data->extra4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra5')); ?>:</b>
	<?php echo CHtml::encode($data->extra5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra6')); ?>:</b>
	<?php echo CHtml::encode($data->extra6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationdate_time')); ?>:</b>
	<?php echo CHtml::encode($data->creationdate_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>