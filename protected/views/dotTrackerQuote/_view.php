<?php
/* @var $this DotTrackerQuoteController */
/* @var $data DotTrackerQuote */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_fname')); ?>:</b>
	<?php echo CHtml::encode($data->s_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_lname')); ?>:</b>
	<?php echo CHtml::encode($data->s_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_company')); ?>:</b>
	<?php echo CHtml::encode($data->s_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_address1')); ?>:</b>
	<?php echo CHtml::encode($data->s_address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_address2')); ?>:</b>
	<?php echo CHtml::encode($data->s_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_city')); ?>:</b>
	<?php echo CHtml::encode($data->s_city); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('s_state')); ?>:</b>
	<?php echo CHtml::encode($data->s_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_state_code')); ?>:</b>
	<?php echo CHtml::encode($data->s_state_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_email')); ?>:</b>
	<?php echo CHtml::encode($data->s_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_phone1')); ?>:</b>
	<?php echo CHtml::encode($data->s_phone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_phone2')); ?>:</b>
	<?php echo CHtml::encode($data->s_phone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->s_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_fax')); ?>:</b>
	<?php echo CHtml::encode($data->s_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_city')); ?>:</b>
	<?php echo CHtml::encode($data->o_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_state')); ?>:</b>
	<?php echo CHtml::encode($data->o_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_state_code')); ?>:</b>
	<?php echo CHtml::encode($data->o_state_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_country')); ?>:</b>
	<?php echo CHtml::encode($data->o_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_city')); ?>:</b>
	<?php echo CHtml::encode($data->d_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_state')); ?>:</b>
	<?php echo CHtml::encode($data->d_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_state_code')); ?>:</b>
	<?php echo CHtml::encode($data->d_state_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_country')); ?>:</b>
	<?php echo CHtml::encode($data->d_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('est_shipdate')); ?>:</b>
	<?php echo CHtml::encode($data->est_shipdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicles_run')); ?>:</b>
	<?php echo CHtml::encode($data->vehicles_run); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ship_via')); ?>:</b>
	<?php echo CHtml::encode($data->ship_via); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipper_notes_from')); ?>:</b>
	<?php echo CHtml::encode($data->shipper_notes_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_detais')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_detais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipper_notes_to')); ?>:</b>
	<?php echo CHtml::encode($data->shipper_notes_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reffered_by')); ?>:</b>
	<?php echo CHtml::encode($data->reffered_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationdatetime')); ?>:</b>
	<?php echo CHtml::encode($data->creationdatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>