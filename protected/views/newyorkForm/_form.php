<?php
/* @var $this NewyorkFormController */
/* @var $model DotTrackerNewyork */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-newyork-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">

        <!-- Content Column -->
        <div class="col-md-12">
            <div class="row">
               <br>
                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">INFORMATION</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label for="nameon_card">DO YOU HAVE AN ACCOUNT OR HAVE YOU HAD AN ACCOUNT BEFORE? IF YES, WHAT IS THE ACCOUNT #?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext1',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

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
                                            <label for="cardholder_information">EIN# / SSN</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ein_no',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">OWNER'S SSN</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'owner_ssn',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">WHAT TYPE OF VEHICLE IS IT?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->dropDownList($model,'vehicle_type',array('Hauls Auto Fuel'=>'Hauls Auto Fuel','Dump Truck'=>'Dump Truck','Towtruck'=>'Towtruck','Other'=>'Other')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">NUMBER OF AXLES</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'no_of_axles',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">GROSS VEHICLE WEIGHT (GVW)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'g_weight',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>

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
                                            <label for="cardholder_information">IS THE VEHICLE OWNED OR LEASED?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'v_owned',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">WHAT IS THE TRUCK UNIT #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'truck_unit',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">TITLE STATE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'title_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">VEHICLE MAKE</label>
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
                                            <label for="cardholder_information">LICENSE PLATE #</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'license_plate',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">PLATE STATE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'plate_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">TYPE OF FUEL USED</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'fuel_type',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="cardholder_information">UNLADEN WEIGHT</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'unloaded_weight',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
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

                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>






<?php $this->endWidget(); ?>

</div><!-- form -->