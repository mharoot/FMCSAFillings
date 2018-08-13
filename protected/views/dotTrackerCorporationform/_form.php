<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-corporationform-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?><br>

    <div class="row">

        <!-- Content Column -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4>Corporation Filing</h4>
                </div>
                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">1.CORPORATE NAME</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="nameon_card">THE NAME OF THE CORPORATION IS</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">2.BUSINESS ADDRESSES (Enter the complete business addresses.)</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="city">a. Initial Street Address of Corporation - <strong>Do not list a P.O. Box</strong></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="state">City (no abbreviations)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">State</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">Zip Code</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="city">b. Initial Mailing Address of Corporation, if different than item 2a</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'m_street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="state">City (no abbreviations)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'m_city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">State</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'m_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">Zip Code</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'m_zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">3.SERVICE OF PROCESS (Must provide either Individual OR Corporation.)</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">INDIVIDUAL - Complete Items 3a and 3b only. Must include agent's full name and California street address.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="city">a. California Agent's First Name (if agent is not a corporation)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ca_fname',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="state">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ca_mname',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ca_lname',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">Suffix</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ca_suffix',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="city">b. Street Address (if agent is not a corporation) - Do not enter a P.O. Box</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ag_street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="state">City (no abbreviations)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ag_city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">State</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ag_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">Zip Code</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ag_zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>


                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">CORPORATION – Complete Item 3c. Only include the name of the registered agent Corporation.</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">c. California Registered Corporate Agent’s Name (if agent is a corporation) – Do not complete Item 3a or 3b </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'c3filed',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">4.SHARES (Enter the number of shares the corporation is authorized to issue. Do not leave blank or enter zero (0).)</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">This corporation is authorized to issue only one class of shares of stock.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="city">The total number of shares which this corporation is authorized to issue is</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'shares',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">5. PURPOSE STATEMENT (Do not alter the Purpose Statement.)</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">The purpose of the corporation is to engage in any lawful act or activity for which a corporation may be organized under the General Corporation Law of California other than the banking business, the trust company business or the practice of a profession permitted to be incorporated by the California Corporations Code.</div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">6. SIGNATURE DETAILS</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Incorporator Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'sign_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'mobile',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="col-sm-12" style="margin-top:20px;margin-bottom: 50px;">
                        <div class="form-group" style="float: right;">
                            <div class="row buttons" style="margin-top:30px;">
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
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

<style type="text/css">
    .form-control{ height:35px; width:90%; border:#E1DFE1 solid 1px; padding:0 15px;}
    .span-19{width: 100% !important;}
    .table {
        border:none !important;
    }
</style>