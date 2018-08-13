<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<label> First Name <span class="required">*</span></label>
		<?php echo $form->textField($model,'fname',array('rows'=>6, 'cols'=>50)); ?>
		<?php /*echo $form->error($model,'fname'); */?>
	</div>

	<div class="row">
        <label> Last Name</label>
		<?php echo $form->textField($model,'lname',array('rows'=>6, 'cols'=>50)); ?>
		<?php /*echo $form->error($model,'lname'); */?>
	</div>



	<div class="row">
        <label> Phone Number <span class="required">*</span></label>
		<?php echo $form->textField($model,'phone',array('rows'=>6, 'cols'=>50)); ?>
		<?php /*echo $form->error($model,'phone'); */?>
	</div>

	<div class="row">
        <label> Username <span class="required">*</span></label>
		<?php echo $form->textField($model,'username',array('rows'=>6, 'cols'=>50)); ?>
		<?php /*echo $form->error($model,'username');*/ ?>
	</div>

	<div class="row">
        <label> Email ID <span class="required">*</span></label>
		<?php echo $form->textField($model,'email',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'email'); ?>
	</div>

    <div class="row">
        <label> Password <span class="required">*</span></label>
        <?php echo $form->passwordField($model,'password',array('rows'=>6, 'cols'=>50)); ?>
        <?php //echo $form->error($model,'password'); ?>
    </div>
    <div class="row">
        <label> Repeat Password <span class="required">*</span></label>
        <?php echo $form->passwordField($model,'s_password',array('rows'=>6, 'cols'=>50)); ?>
        <?php //echo $form->error($model,'s_password'); ?>
    </div>



	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'creationdatetime'); */?>
		<?php /*echo $form->textField($model,'creationdatetime'); */?>
		<?php /*echo $form->error($model,'creationdatetime'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'last_updated'); */?>
		<?php /*echo $form->textField($model,'last_updated'); */?>
		<?php /*echo $form->error($model,'last_updated'); */?>
	</div>-->

    <div class="row">
        <label> Extra Notes</label>
        <?php echo $form->textField($model,'extra',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'extra'); ?>
    </div>
    <div class="row">
        <label> User Role <span class="required">*</span></label>
        <?php echo $form->dropDownList($model,'role',DotTrackerUser::$arrUserRoles); ?>
        <?php //echo $form->error($model,'role'); ?>
    </div><div class="row">
        <label> Activation Status <span class="required">*</span></label>
        <?php echo $form->dropDownList($model,'active',DotTrackerUser::$arrActivationStatus); ?>
        <?php //echo $form->error($model,'active'); ?>
    </div>



    <br><br>

	<div class="row buttons" style="width100% !important;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<style>
    .row{
        width: 50%;
        float: left;
    }
</style>