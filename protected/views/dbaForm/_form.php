<?php
/* @var $this DbaFormController */
/* @var $model DotTrackerDba */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-dba-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Desired Fictitious Business Name *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'dba',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Business Address *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'b_address',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business Additional Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'b_add_address',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business City *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'b_city',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business State *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'b_state',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business Zip Code *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'b_zip',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business County *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'b_county',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business Country *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'v_country',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Articles of Incorporation # (if applicable)</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'article_incorp',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">BUSINESS MAILING ADDRESS (if different than Business Address):</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Mailing Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'m_address',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Mailing Additional Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'m_add_address',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing City</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'m_city',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing State</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'m_state',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing Zip Code</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'m_zip',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing Country</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'m_country',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">PLEASE ENTER THE FOLLOWING REGISTERED OWNER INFORMATION</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Full Name/Corp Name/LLC Name *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'full_name',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Street Address: P.O. Box is not accepted</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'s_address',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Required Address Additional (Unit, Apt, etc):</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'s_add_address',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">City *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">State *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Zip *</label>
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
                                        <label for="cardholder_information">Country *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'country',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">State of Organization (If Corp or LLC):</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'state_of_org',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">SELECT THE REGISTERED OWNER WHO WILL SIGN THE FBN STATEMENT</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Full Name/Corp Name/LLC Name *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'r_full_name',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Signatory's Name (if Corp or LLC):</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'sign_name',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Signatory's Title *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'sign_title',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Email *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'s_email',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Phone *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'s_phone',array('class'=>'form-control')); ?>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business is conducted by *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'business_conducted',array('class'=>'form-control')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Date registrant commenced to transact business under the fictitious business name or names listed above on (enter N/A if not applicable): *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'date_reg',array('class'=>'form-control')); ?>
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





<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="application/javascript">
    var dateToday = new Date();
    
    $('#DotTrackerDba_date_reg').mask('00/0000');
</script>