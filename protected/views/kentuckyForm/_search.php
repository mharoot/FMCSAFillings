<?php
/* @var $this KentuckyFormController */
/* @var $model DotTrackerKentucky */
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
		<?php echo $form->label($model,'usdot'); ?>
		<?php echo $form->textField($model,'usdot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ein'); ?>
		<?php echo $form->textArea($model,'ein',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_axles'); ?>
		<?php echo $form->textField($model,'no_of_axles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vin_no'); ?>
		<?php echo $form->textArea($model,'vin_no',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicle_owned'); ?>
		<?php echo $form->textArea($model,'vehicle_owned',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'truck_unit_no'); ?>
		<?php echo $form->textArea($model,'truck_unit_no',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title_state'); ?>
		<?php echo $form->textArea($model,'title_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'make'); ?>
		<?php echo $form->textArea($model,'make',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model'); ?>
		<?php echo $form->textArea($model,'model',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textArea($model,'year',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'license_plate'); ?>
		<?php echo $form->textArea($model,'license_plate',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plate_state'); ?>
		<?php echo $form->textArea($model,'plate_state',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_fuel'); ?>
		<?php echo $form->textArea($model,'type_of_fuel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unloaded_weight'); ?>
		<?php echo $form->textArea($model,'unloaded_weight',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext1'); ?>
		<?php echo $form->textArea($model,'ext1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext2'); ?>
		<?php echo $form->textArea($model,'ext2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext3'); ?>
		<?php echo $form->textArea($model,'ext3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext4'); ?>
		<?php echo $form->textArea($model,'ext4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext5'); ?>
		<?php echo $form->textArea($model,'ext5',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext6'); ?>
		<?php echo $form->textArea($model,'ext6',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext7'); ?>
		<?php echo $form->textArea($model,'ext7',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textArea($model,'created_by',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_datetime'); ?>
		<?php echo $form->textArea($model,'creation_datetime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->