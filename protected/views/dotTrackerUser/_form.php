<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */
/* @var $form CActiveForm */
?>

<div class="row">
<div class="col-sm-9">
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
			        <div class="col-sm-3">
						<label> First Name <span class="required">*</span></label>
					</div>
					<div class="col-sm-9">
						<?php echo $form->textField($model,'fname',array('rows'=>6, 'cols'=>50)); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
			        	<label> Last Name</label>
			        </div>
			        <div class="col-sm-9">
						<?php echo $form->textField($model,'lname',array('rows'=>6, 'cols'=>50)); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
			        	<label> Phone Number <span class="required">*</span></label>
			        </div>
			        <div class="col-sm-9">
						<?php echo $form->textField($model,'phone',array('rows'=>6, 'cols'=>50)); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
			        	<label> Username <span class="required">*</span></label>
			        </div>
			        <div class="col-sm-9">
						<?php echo $form->textField($model,'username',array('rows'=>6, 'cols'=>50)); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
			        	<label> Email ID <span class="required">*</span></label>
			        </div>
			        <div class="col-sm-9">
						<?php echo $form->textField($model,'email',array('rows'=>6, 'cols'=>50)); ?>
					</div>
				</div>

			    <div class="row">
			    	<div class="col-sm-3">
			        	<label> Password <span class="required">*</span></label>
			        </div>
			        <div class="col-sm-9">
			        	<?php echo $form->passwordField($model,'password',array('rows'=>6, 'cols'=>50)); ?>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="col-sm-3">
			        	<label> Repeat Password <span class="required">*</span></label>
			        </div>
			        <div class="col-sm-9">
			        	<?php echo $form->passwordField($model,'s_password',array('rows'=>6, 'cols'=>50)); ?>
			        </div>
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
			    	<div class="col-sm-3">
			        	<label> Extra Notes</label>
			        </div>
			        <div class="col-sm-9">
				        <?php echo $form->textField($model,'extra',array('rows'=>6, 'cols'=>50)); ?>
				        <?php echo $form->error($model,'extra'); ?>
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-sm-3">
				        <label> User Role <span class="required">*</span></label>
				    </div>
			        <div class="col-sm-9">
				        <?php echo $form->dropDownList($model,'role',DotTrackerUser::$arrUserRoles); ?>
				        <?php //echo $form->error($model,'role'); ?>
				    </div>
			    </div><div class="row">
				    <div class="col-sm-3">
				        <label> Activation Status <span class="required">*</span></label>
				    </div>
			        <div class="col-sm-9">
				        <?php echo $form->dropDownList($model,'active',DotTrackerUser::$arrActivationStatus); ?>
				        <?php //echo $form->error($model,'active'); ?>
				    </div>
			    </div>

			    <br><br>

				<div class="row buttons" style="width100% !important;">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>

			<?php $this->endWidget(); ?>

			</div><!-- form -->
	</div>
	<!-- Right Sidebar -->
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>
            <a href="<?php echo Yii::app()->createUrl('DotTrackerUser/admin'); ?>" class="list-group-item "><i class="fa fa-cog" aria-hidden="true"></i> Manage Users</a>
        </div>
    </div>
    
</div>

<style>
    .row{ margin-bottom: 10px; }
</style>