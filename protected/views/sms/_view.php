<?php
/* @var $this SmsController */
/* @var $data SmsResponse */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resp')); ?>:</b>
	<?php echo CHtml::encode($data->resp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromPhone')); ?>:</b>
	<?php echo CHtml::encode($data->fromPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toPhone')); ?>:</b>
	<?php echo CHtml::encode($data->toPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationdatetime')); ?>:</b>
	<?php echo CHtml::encode($data->creationdatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext1')); ?>:</b>
	<?php echo CHtml::encode($data->ext1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ext2')); ?>:</b>
	<?php echo CHtml::encode($data->ext2); ?>
	<br />

	*/ ?>

</div>