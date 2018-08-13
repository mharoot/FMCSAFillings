<?php
/* @var $this KentuckyFormController */
/* @var $data DotTrackerKentucky */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usdot')); ?>:</b>
	<?php echo CHtml::encode($data->usdot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ein')); ?>:</b>
	<?php echo CHtml::encode($data->ein); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_axles')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_axles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vin_no')); ?>:</b>
	<?php echo CHtml::encode($data->vin_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_owned')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_owned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('truck_unit_no')); ?>:</b>
	<?php echo CHtml::encode($data->truck_unit_no); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('title_state')); ?>:</b>
	<?php echo CHtml::encode($data->title_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('make')); ?>:</b>
	<?php echo CHtml::encode($data->make); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('license_plate')); ?>:</b>
	<?php echo CHtml::encode($data->license_plate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plate_state')); ?>:</b>
	<?php echo CHtml::encode($data->plate_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_fuel')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_fuel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unloaded_weight')); ?>:</b>
	<?php echo CHtml::encode($data->unloaded_weight); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	*/ ?>

</div>