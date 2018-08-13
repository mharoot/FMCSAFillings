<?php
/* @var $this DotTrackerCorporationformController */
/* @var $data DotTrackerCorporationform */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_street')); ?>:</b>
	<?php echo CHtml::encode($data->m_street); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('m_city')); ?>:</b>
	<?php echo CHtml::encode($data->m_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_state')); ?>:</b>
	<?php echo CHtml::encode($data->m_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_zip')); ?>:</b>
	<?php echo CHtml::encode($data->m_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_fname')); ?>:</b>
	<?php echo CHtml::encode($data->ca_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_mname')); ?>:</b>
	<?php echo CHtml::encode($data->ca_mname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_lname')); ?>:</b>
	<?php echo CHtml::encode($data->ca_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_suffix')); ?>:</b>
	<?php echo CHtml::encode($data->ca_suffix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ag_street')); ?>:</b>
	<?php echo CHtml::encode($data->ag_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ag_city')); ?>:</b>
	<?php echo CHtml::encode($data->ag_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ag_state')); ?>:</b>
	<?php echo CHtml::encode($data->ag_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ag_zip')); ?>:</b>
	<?php echo CHtml::encode($data->ag_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shares')); ?>:</b>
	<?php echo CHtml::encode($data->shares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />

	*/ ?>

</div>