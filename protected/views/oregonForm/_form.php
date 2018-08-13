<?php
/* @var $this OregonFormController */
/* @var $model DotTrackerOregaon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-oregaon-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
<br>
        <!-- Content Column -->
        <div class="col-md-12">
            <div class="row">

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">INFORMATION</div>
                        <div class="panel-body">
                            <fieldset>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="nameon_card">USDOT #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'usdot',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">EIN# / TAX ID#</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext1',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">OWNER'S FULL NAME</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'o_full_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">DRIVER'S FULL NAME</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'d_full_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">DATE ENTERING  #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'date_entering',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='form-group'>
                                            <label for="cardholder_information">WHAT HIGHWAY / INTERSTATE ARE YOU ENTERING  FROM?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'highway',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">DATE EXITING #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext4',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='form-group'>
                                            <label for="cardholder_information">WHAT HIGHWAY / INTERSTATE ARE YOU EXISTING FROM?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext5',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">WHAT IS THE CARGO?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'cargo',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">LOADING OR PASSING THROUGH</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'loading',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">YEAR</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'year',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">MAKE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'make',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">MODEL</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'model',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">LICENSE PLATE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'license_plate',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">STATE LICENSE PLATE IS ISSUED?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext2',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class='form-group'>
                                            <label for="cardholder_information">IS LICENSE PLATE APPORTIONED FOR ISSUED STATE ONLY OR OTHER STATES AS WELL ON REGISTRATION?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext3',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">VIN #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'vin_no',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">UNIT #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'unit_no',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">ODOMETER#</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'odometer',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">IS VEHICLE OWNED OR LEASED?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'vehicle_owned',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">HOW MANY MILES ARE YOU SET UP FOR BY IRP TO ENTER EACH STATE?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'miles',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">WHAT IS THE # APPORTIONED FOR STATE OREGON?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'apportioned',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>


    <div class="col-sm-12" style="margin-bottom: 50px;">
        <div class="form-group" style="float: right;">
                <div class="row buttons" style="margin-top:30px;">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                <?php //echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                <?php //echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
                </div>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    $(document).ready(function(){
        var dateToday = new Date();
        $('#DotTrackerOregaon_date_entering').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });
        $('#DotTrackerOregaon_ext4').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });
    });
</script>