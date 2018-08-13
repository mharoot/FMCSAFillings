<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-epn1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->

        <!-- /.row -->

        <!-- Marketing Icons Section -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-md-12">
                <div class="row">
                    <br>

                    <!-- Contact Form -->
                    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">SECTION A — ACCOUNT INFORMATION</div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="nameon_card">COMPANY NAME</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'company_name',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="nameon_card">DBA</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'dba',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">ATTENTION</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'attention',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">EMAIL ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'email_address',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">TELEPHONE NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'telephone',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">EXT.</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'telephone_ext',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">MAILING ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'mailing_address',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">CITY</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">STATE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">ZIP CODE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'zip',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">ACCOUNT CONTACT PERSON</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_person',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">EMAIL ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_email_address',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">TELEPHONE NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_telephone',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">EXT.</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_telephone_ext',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">STREET ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_street_address',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">CITY</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_city',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">STATE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_state',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class='form-group'>
                                                <label for="cardholder_information">ZIP CODE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'acc_zip',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">SECTION B — BILLING ADDRESS (Complete only if different from above)</div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="city">BILLING ACCOUNT CONTACT PERSON(S)</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_person',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="state">TELEPHONE NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_telephone',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label for="city">EXT.</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_telephone_ext',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="city">ATTENTION</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_attention',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="state">TELEPHONE NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_telephone2',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label for="city">EXT.</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_telephone2_ext',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="city">BILLING ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_address',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="state">CITY</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_city',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label for="city">STATE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'billing_state',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="phone">ZIP CODE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <?php echo $form->textField($model,'billing_zip',array('class'=>'form-control')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">SECTION C — LICENSING AND BUSINESS IDENTIFICATION</div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12" style="padding-bottom: 10px;">Instructions: Complete the following on the individual participating in the direction, control or management of the business. Provide federal employer identification number.</div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">NAME (lASt, FirSt, Mi)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_name',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">TITLE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_title',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">DL/ID NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_dl_nmber',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">STATE ISSUED</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_state',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">EXPIRATION DATE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_expiration',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">EMAIL ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_email',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="name">FEDERAL EMPLOYER IDENTIFICATION NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'licensing_federal_employer',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">&nbsp;</div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">SECTION D — ACCOUNT USE AND HISTORY (Answer each question)</div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="name">1. STATE YOUR PURPOSE FOR ENROLLMENT (Be SPeciFic)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <?php echo $form->textField($model,'purpose_enrollment',array('class'=>'form-control')); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="name">2. ARE ALL OF YOUR EMPLOYEES MANDATED TO BE ENROLLED IN THE PULL NOTICE PROGRAM PURSUANT TO VEHICLE CODE SECTION 1808.1(b)? <?php echo $form->hiddenField($model,'all_employee_mandate',array('class'=>'form-control')); ?></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input class="" id="enrolled1" name="Yes" onclick="checkepn1(1);" type="radio" />Yes
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input id="enrolled2" name="No"  onclick="checkepn1(0);" type="radio" />No
                                            </div>
                                        </div>
                                        <div class="col-sm-12">(NOTE: Any employee who is not mandated to be enrolled in the pull notice program must have a signed waiver [INF 1101 or similar] on file at the employer’s worksite.)</div>
                                        <div class="col-sm-12">3. HAS YOUR COMPANY PREVIOUSLY BEEN ISSUED A REQUESTER CODE? <?php echo $form->hiddenField($model,'issued_requester_code',array('class'=>'form-control')); ?></div>
                                        <div class="col-sm-1"><input id="reqCode1" name="reqCode1" size="30" type="radio"  onclick="checkepn2(1);" /><label for="name">Yes</label></div>
                                        <div class="col-sm-1"><input id="reqCode2" name="reqCode2" size="30" type="radio"  onclick="checkepn2(0);" /><label for="name">No</label></div>
                                        <div class="col-sm-10">If yes, complete the following:</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">a) Company name(s) in which Requester Code(s) issued:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <?php echo $form->textField($model,'issued_requester_code_a',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="name">b) Requester Code(s) previously issued:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <?php echo $form->textField($model,'issued_requester_code_b',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <!--<div class="panel panel-default">
                            <div class="panel-heading">SECTION E — CERTIFICATION</div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            I certify (or declare) under penalty of perjury under the laws of the State of California that the information contained herein is true and
                                            correct to the best of my knowledge and belief. I understand that this information is provided for the lawful conduct of this business and the pursuit of its interest and that any misuse will result in both cancellation of the requester number and refusal of subsequent application for requester number.
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">SIGNATURE OF AUTHORIZED REPRESENTATIVE (SAMe PerSON AS iN SectiON c)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">PRINT NAME OF AUTHORIZED REPRESENTATIVE</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" id="sign" name="sign" size="30" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" id="printName" name="printName" size="30" type="text" />
                                            </div>
                                        </div>
                                </fieldset>
                            </div>
                        </div>-->






                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div>
        <!-- /.row -->



        <!-- Footer -->

    </div>

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'company_name'); */?>
		<?php /*echo $form->textField($model,'company_name',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'company_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'dba'); */?>
		<?php /*echo $form->textField($model,'dba',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'dba'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'attention'); */?>
		<?php /*echo $form->textField($model,'attention',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'attention'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'email_address'); */?>
		<?php /*echo $form->textField($model,'email_address',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'email_address'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'telephone'); */?>
		<?php /*echo $form->textField($model,'telephone',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'telephone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'mailing_address'); */?>
		<?php /*echo $form->textField($model,'mailing_address',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'mailing_address'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'city'); */?>
		<?php /*echo $form->textField($model,'city',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'state'); */?>
		<?php /*echo $form->textField($model,'state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'zip'); */?>
		<?php /*echo $form->textField($model,'zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_person'); */?>
		<?php /*echo $form->textField($model,'acc_person',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_person'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_email_address'); */?>
		<?php /*echo $form->textField($model,'acc_email_address',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_email_address'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_telephone'); */?>
		<?php /*echo $form->textField($model,'acc_telephone',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_telephone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_street_address'); */?>
		<?php /*echo $form->textField($model,'acc_street_address',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_street_address'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_city'); */?>
		<?php /*echo $form->textField($model,'acc_city',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_state'); */?>
		<?php /*echo $form->textField($model,'acc_state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'acc_zip'); */?>
		<?php /*echo $form->textField($model,'acc_zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'acc_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_person'); */?>
		<?php /*echo $form->textField($model,'billing_person',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_person'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_telephone'); */?>
		<?php /*echo $form->textField($model,'billing_telephone',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_telephone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_attention'); */?>
		<?php /*echo $form->textField($model,'billing_attention',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_attention'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_telephone2'); */?>
		<?php /*echo $form->textField($model,'billing_telephone2',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_telephone2'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_address'); */?>
		<?php /*echo $form->textField($model,'billing_address',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_address'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_city'); */?>
		<?php /*echo $form->textField($model,'billing_city',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_state'); */?>
		<?php /*echo $form->textField($model,'billing_state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'billing_zip'); */?>
		<?php /*echo $form->textField($model,'billing_zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'billing_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_name'); */?>
		<?php /*echo $form->textField($model,'licensing_name',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_title'); */?>
		<?php /*echo $form->textField($model,'licensing_title',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_title'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_dl_nmber'); */?>
		<?php /*echo $form->textField($model,'licensing_dl_nmber',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_dl_nmber'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_state'); */?>
		<?php /*echo $form->textField($model,'licensing_state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_expiration'); */?>
		<?php /*echo $form->textField($model,'licensing_expiration',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_expiration'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_email'); */?>
		<?php /*echo $form->textField($model,'licensing_email',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_email'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'licensing_federal_employer'); */?>
		<?php /*echo $form->textField($model,'licensing_federal_employer',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'licensing_federal_employer'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'purpose_enrollment'); */?>
		<?php /*echo $form->textField($model,'purpose_enrollment',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'purpose_enrollment'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'all_employee_mandate'); */?>
		<?php /*echo $form->textField($model,'all_employee_mandate'); */?>
		<?php /*echo $form->error($model,'all_employee_mandate'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'issued_requester_code'); */?>
		<?php /*echo $form->textField($model,'issued_requester_code'); */?>
		<?php /*echo $form->error($model,'issued_requester_code'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'issued_requester_code_a'); */?>
		<?php /*echo $form->textField($model,'issued_requester_code_a',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'issued_requester_code_a'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'issued_requester_code_b'); */?>
		<?php /*echo $form->textField($model,'issued_requester_code_b',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'issued_requester_code_b'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'sign_link'); */?>
		<?php /*echo $form->textField($model,'sign_link',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'sign_link'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra'); */?>
		<?php /*echo $form->textField($model,'extra'); */?>
		<?php /*echo $form->error($model,'extra'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'creation_datetime'); */?>
		<?php /*echo $form->textField($model,'creation_datetime',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'creation_datetime'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'created_by'); */?>
		<?php /*echo $form->textField($model,'created_by',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'created_by'); */?>
	</div>

    <br><br>-->

    <div class="col-sm-12" style="margin-bottom: 50px;">
        <div class="form-group" style="float: right;">
            <div class="row buttons" style="margin-top:30px;">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                <?php //echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
            </div>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<style>



</style>


<script>
    function checkepn1(resp) {
        if(resp==1)
        {
            $('#enrolled2').attr('checked',false);
        }
        else{
            $('#enrolled1').attr('checked',false);
        }
        $('#DotTrackerEpn1_all_employee_mandate').val(resp);

    } function checkepn2(resp) {
        if(resp==1)
        {
            $('#reqCode2').attr('checked',false);
        }
        else{
            $('#reqCode1').attr('checked',false);
        }
      $('#DotTrackerEpn1_issued_requester_code').val(resp);

    }


    $(document).ready(function(){
        var dateToday = new Date();
        $('#DotTrackerEpn1_licensing_expiration').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });
    });
</script>