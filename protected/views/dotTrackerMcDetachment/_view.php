<?php
/* @var $this DotTrackerMcDetachmentController */
/* @var $data DotTrackerMcDetachment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usdot')); ?>:</b>
	<?php echo CHtml::encode($data->usdot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mc')); ?>:</b>
	<?php echo CHtml::encode($data->mc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('legal_business_name')); ?>:</b>
	<?php echo CHtml::encode($data->legal_business_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_name')); ?>:</b>
	<?php echo CHtml::encode($data->office_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	*/ ?>

</div>