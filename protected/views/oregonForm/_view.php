<?php
/* @var $this OregonFormController */
/* @var $data DotTrackerOregaon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usdot')); ?>:</b>
	<?php echo CHtml::encode($data->usdot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('o_full_name')); ?>:</b>
	<?php echo CHtml::encode($data->o_full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_full_name')); ?>:</b>
	<?php echo CHtml::encode($data->d_full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('highway')); ?>:</b>
	<?php echo CHtml::encode($data->highway); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_entering')); ?>:</b>
	<?php echo CHtml::encode($data->date_entering); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('loading')); ?>:</b>
	<?php echo CHtml::encode($data->loading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('make')); ?>:</b>
	<?php echo CHtml::encode($data->make); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('license_plate')); ?>:</b>
	<?php echo CHtml::encode($data->license_plate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vin_no')); ?>:</b>
	<?php echo CHtml::encode($data->vin_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_no')); ?>:</b>
	<?php echo CHtml::encode($data->unit_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('odometer')); ?>:</b>
	<?php echo CHtml::encode($data->odometer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_owned')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_owned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miles')); ?>:</b>
	<?php echo CHtml::encode($data->miles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apportioned')); ?>:</b>
	<?php echo CHtml::encode($data->apportioned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext1')); ?>:</b>
	<?php echo CHtml::encode($data->ext1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext2')); ?>:</b>
	<?php echo CHtml::encode($data->ext2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext3')); ?>:</b>
	<?php echo CHtml::encode($data->ext3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext4')); ?>:</b>
	<?php echo CHtml::encode($data->ext4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext5')); ?>:</b>
	<?php echo CHtml::encode($data->ext5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext6')); ?>:</b>
	<?php echo CHtml::encode($data->ext6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext7')); ?>:</b>
	<?php echo CHtml::encode($data->ext7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext8')); ?>:</b>
	<?php echo CHtml::encode($data->ext8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext9')); ?>:</b>
	<?php echo CHtml::encode($data->ext9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext10')); ?>:</b>
	<?php echo CHtml::encode($data->ext10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	*/ ?>

</div>