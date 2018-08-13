<?php
/* @var $this McApplicationController */
/* @var $model DotTrackerMc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-mc-form',
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
                <div class="col-md-12">
                    <h4>This application is for all businesses requesting Operating Authority as a motor carrier, broker, and/or U.S.-based enterprise carrier of property or household goods.</h4><br />
                </div>
                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 smBold">FORM OP-1 Revised 01/10/2017</div>
                        <div class="col-sm-6 smBold right">OMB No.: 2126-0016 Expiration: 01/31/2020</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">APPLICANT INFORMATION</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="nameon_card">1. DO YOU NOW HAVE AUTHORITY FROM OR AN APPLICATION BEING PROCESSED BY THE FMCSA, FHWA, OMCS, OR ICC?</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <div class="col-sm-6 col-xs-3">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="Yes">YES
                                                </label>
                                            </div>
                                            <div class="col-sm-6 col-xs-9">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="No">NO
                                                    <?php echo $form->hiddenField($model,'authority_c'); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span style="font-size:12px;">If yes, identify the MC/FF Number (or lead docket number):</span><br />
                                            <?php echo $form->textField($model,'authority_c',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class='form-group'>
                                            <label for="cardholder_information">2. LEGAL BUSINESS NAME:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'legal_business_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="card_number">3. DOING BUSINESS AS NAME <span style="font-size:12px;!important;">(if different from Legal Business Name)</span>:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'doing_business_as',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exp_date">4-9. PRINCIPAL PLACE OF BUSINESS (no P.O. Box):</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group smText">
                                            4. STREET ADDRESS/RTE. NUMBER<br />
                                            <?php echo $form->textField($model,'p_street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            5. CITY<br />
                                            <?php echo $form->textField($model,'p_city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group smText">
                                            6. STATE/PROVINCE<br />
                                            <?php echo $form->textField($model,'p_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            7. ZIP CODE<br />
                                            <?php echo $form->textField($model,'p_zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            8. TELEPHONE<br />
                                            <?php echo $form->textField($model,'p_telephone',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            9. FAX<br />
                                            <?php echo $form->textField($model,'p_fax',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class='form-group'>
                                            <label for="cardholder_information">10-15. MAILING ADDRESS:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="col-sm-5">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="0">Same as Principal Address
                                                </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="1">Mailing address below:
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group smText">
                                            10. STREET ADDRESS/RTE. NUMBER<br />
                                            <?php echo $form->textField($model,'m_street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            11. CITY<br />
                                            <?php echo $form->textField($model,'m_city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group smText">
                                            12. STATE/PROVINCE<br />
                                            <?php echo $form->textField($model,'m_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            13. ZIP CODE<br />
                                            <?php echo $form->textField($model,'m_zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            14. TELEPHONE<br />
                                            <?php echo $form->textField($model,'m_telephone',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group smText">
                                            15. FAX<br />
                                            <?php echo $form->textField($model,'m_fax',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class='form-group'>
                                            <label for="cardholder_information">16-23. REPRESENTATIVE (person who can respond to inquiries):</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class='form-group smText'>
                                            <?php echo $form->textField($model,'r_name',array('class'=>'form-control')); ?>
                                            <label for="cardholder_information">16.NAME</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class='form-group smText'>
                                            <?php echo $form->textField($model,'r_title',array('class'=>'form-control')); ?>
                                            <label for="cardholder_information">17. TITLE, POSITION, OR RELATIONSHIP TO APPLICANT</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            18. STREET ADDRESS/RTE. NUMBER<br />
                                            <?php echo $form->textField($model,'r_street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            19. CITY<br />
                                            <?php echo $form->textField($model,'r_city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            20. STATE/PROVINCE<br />
                                            <?php echo $form->textField($model,'r_state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            21. ZIP CODE<br />
                                            <?php echo $form->textField($model,'r_zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            22. TELEPHONE<br />
                                            <?php echo $form->textField($model,'r_telephone',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            23. FAX<br />
                                            <?php echo $form->textField($model,'r_fax',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class='form-group'>
                                            <label for="cardholder_information">24. USDOT NUMBER (if available; if not, see instructions):</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class='form-group'>
                                            <?php echo $form->textField($model,'dot_number',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class='form-group'>
                                            <label for="cardholder_information">25-27. FORM OF BUSINESS (select only one):</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class='form-group'>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="CORPORATION">25. CORPORATION
                                                </label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="radio-inline">State of Incorporation:</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" id="corp1" name="corp1" size="30" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class='form-group'>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="CORPORATION">26. SOLE PROPRIETORSHIP
                                                </label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="radio-inline">Legal Name of Owner:</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" id="corp2" name="corp2" size="30" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class='form-group'>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cardType" value="CORPORATION">27. PARTNERSHIP
                                                </label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="radio-inline">Legal Name of Each Partner:</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input class="form-control" id="corp3" name="corp3" size="30" type="text" />


                                                <?php echo $form->hiddenField($model,'form_of_business_c',array('class'=>'form-control','value'=>'1')); ?>
                                                <?php echo $form->hiddenField($model,'form_of_business',array('class'=>'form-control','value'=>'Prasanjeet Chakraborty')); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">TYPE OF OPERATING AUTHORITY</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="city">28. CHECK BOX(ES) FOR EACH TYPE OF OPERATING AUTHORITY REQUESTED<br ><span class="smText">
(you must submit a filing fee of $300 for each box checked):</span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety1" data-name="Motor Common Carrier of Property (except Household Goods)">Motor Common Carrier of Property (except Household Goods)
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety2" data-name="Motor Contract Carrier of Property (except Household Goods)">Motor Contract Carrier of Property (except Household Goods)
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety3" data-name="Motor Common Carrier of Household Goods">Motor Common Carrier of Household Goods
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety4" data-name="Motor Contract Carrier of Household Goods">Motor Contract Carrier of Household Goods
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety4" data-name="Broker of Property (except Household Goods)">Broker of Property (except Household Goods)
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety4" data-name="Broker of Household Goods">Broker of Household Goods
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety4" data-name="United States-based Enterprise Carrier of International Cargo (except Household Goods)">United States-based Enterprise Carrier of International Cargo (except Household Goods)
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="servicety4" data-name="United States-based Enterprise Carrier of International Household Goods">United States-based Enterprise Carrier of International Household Goods
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">INSURANCE INFORMATION</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12" style="padding-bottom: 25px;">
                                        <strong>Applicants that will operate commercial motor vehicles must complete this section.</strong><br />
                                        The dollar amounts in parentheses represent the minimum amount of bodily injury and property damage (liability) insurance coverage you must maintain and have on file with the FMCSA. (Refer to the instructions for information about cargo insurance requirements for motor common carriers and United States-based enterprise carriers, and surety bond/trust fund agreement filings for brokers.)
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">29a. APPLICANT WILL OPERATE ONE OR MORE VEHICLE(S) HAVING A GROSS VEHICLE WEIGHT RATING (GVWR) OF 10,000 POUNDS OR MORE TO TRANSPORT:</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="insInfo1" data-name="Motor Contract Carrier of Household Goods">Non-hazardous commodities ($750,000)
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="insInfo2" data-name="Motor Contract Carrier of Household Goods">Hazardous materials referenced in FMCSA’s insurance regulations at 49 CFR 387.9 ($1,000,000)
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="insInfo3" data-name="Motor Contract Carrier of Household Goods">Hazardous materials referenced in FMCSA’s insurance regulations at 49 CFR 387.9 ($5,000,000)
                                        </label>
                                    </div>
                                    <div class="col-sm-12"><hr></div>
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">29b. APPLICANT WILL OPERATE ONLY VEHICLE(S) HAVING GROSS VEHICLE WEIGHT RATINGS (GVWR) UNDER 10,000 POUNDS TO TRANSPORT:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="insInfo1" data-name="Motor Contract Carrier of Household Goods">Any quantity of Division 1.1, 1.2, or 1.3 material; any quantity of Division 2.3, Hazard Zone A, or Division 6.1, Packing Group I, Hazard Zone A material; or highway route controlled quantities of a Class 7 material as defined in 49 CFR 173.403 ($5,000,000)
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="insInfo2" data-name="Motor Contract Carrier of Household Goods">Commodities other than those listed above ($300,000)
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">SAFETY CERTIFICATION</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12" style="padding-bottom: 25px;">
                                        <strong>For vehicle-operating applicants only.</strong> <i>(Select only one.)</i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">30. APPLICANTS SUBJECT TO FEDERAL MOTOR CARRIER SAFETY REGULATIONS.</label>
                                            <i class="smText">If you will operate vehicles of more than 10,000 pounds GVWR and are, thus, subject to pertinent portions of the USDOT’s Federal MotorCarrier Safety Regulations (FMCSRs) at 49 CFR, Chapter 3, Subchapter B (Parts 350-399), you must certify as follows:<br />
                                                Applicant has access to and is familiar with all applicable USDOT regulations relating to the safe operation of commercial vehicles and the safe transportation of hazardous materials, and will comply with these regulations. In so certifying, applicant is verifying that, at a minimum, it:</i>
                                            <div style="line-height: 20px; padding-left: 20px;" class="smText">
                                                (1) Has in place a system and an individual responsible for ensuring overall compliance with FMCSRs.<br />
                                                (2) Can produce a copy of the FMCSRs and the Hazardous Materials Transportation Regulations.<br />
                                                (3) Has in place a driver safety training/orientation program.<br />
                                                (4) Has prepared and maintains an accident register (49 CFR 390.15).<br />
                                                (5) Is familiar with DOT regulations governing driver qualifications and has in place a system for overseeing driver qualification requirements (49 CFR 391).<br />
                                                (6) Has in place policies and procedures consistent with USDOT regulations governing driving and operational safety of motor vehicles, including drivers’ hours of service and vehicle inspection, repair, and maintenance (49 CFR 392, 395, and 396).<br />
                                                (7) Is familiar with, and will have in place on the appropriate effective date, a system for complying with USDOT regulations governing alcohol and controlled substances testing requirements (49 CFR 382 and 40).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="safetyCert1" data-name="YES"><strong>YES</strong>
                                        </label>
                                    </div>
                                    <div class="col-sm-12"><hr></div>
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">31. EXEMPT APPLICANTS</label><br />
                                            <i>If you will operate only small vehicles (GVWR under 10,000 pounds) and will not transport hazardous materials, you are exempt from FMCSRs, and must certify as follows:</i><br />
                                            Applicant is familiar with and will observe general operational safety guidelines, as well as any State and local laws and requirements relating to the safe operation of commercial motor vehicles and the safe transportation of hazardous materials.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="safetyCert2" data-name="YES"><strong>YES</strong>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">AFFILIATIONS</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">32. AFFILIATIONS</label><br />
                                            <span class="sm-text">Disclose any relationship you have or have had with any other FMCSA-regulated entity (including entities licensed by the FHWA, OMCS, or ICC) within the past three years. Examples include, but are not limited to, a percentage of stock ownership, a loan, or a management position. If this requirement applies to you, provide the name of the company, MC/FF Number, USDOT Number, and that company’s latest DOT safety rating. If you require more space, attach the information to this application form.</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="affiliattion">&nbsp;</label>
                                        <textarea class="form-control" id="affiliattion" name="affiliattion" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control-file" id="affattached" name="affattached">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">HOUSEHOLD GOODS CERTIFICATIONS</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12" style="padding-bottom: 25px;">
                                        <strong>33. HOUSEHOLD GOODS MOTOR COMMON CARRIER APPLICANTS</strong> <i>(including United States-based Enterprise Carriers of International Household Goods)</i> <strong>MUST CERTIFY AS FOLLOWS:</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="sm-text">
                                            Applicant is fit, willing, and able to provide the specialized services necessary to transport household goods. This assessment of fitness includes applicant's general familiarity with former ICC, FHWA, or OMCS, now FMCSA regulations for household goods movements and also requires an assurance that applicant has or is willing to acquire the protective equipment and trained operators necessary to perform household goods movements and that <b>applicant will offer arbitration as a means of settling loss and damage disputes on collect-on-delivery shipments.</b> The proposed operations will serve a useful public purpose responsive to a public demand or need.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="goodCert1" data-name="YES"><strong>YES</strong>
                                        </label>
                                    </div>
                                    <div class="col-sm-12"><hr></div>

                                    <div class="col-sm-12" style="padding-bottom: 25px;">
                                        <strong>34. HOUSEHOLD GOODS MOTOR CONTRACT CARRIER APPLICANTS</strong> <i>(including United States-based Enterprise Carriers of International Household Goods)</i> <strong>MUST CERTIFY AS FOLLOWS:</strong>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="sm-text">
                                            Applicant is fit, willing, and able to provide the specialized services necessary to transport household goods. This assessment of fitness includes applicant’s general familiarity with former ICC, FHWA, or OMCS, now FMCSA regulations for household goods movements and also requires an assurance that applicant has or is willing to acquire the protective equipment and trained operators necessary to perform household goods movements and that <b>applicant will offer arbitration as a means of settling loss and damage disputes on collect-on-delivery shipments.</b> The proposed service will be consistent with the public interest and the transportation policy of 49 USC 13101.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="goodCert2" data-name="YES"><strong>YES</strong>
                                        </label>
                                    </div>

                                    <div class="col-sm-12"><hr></div>

                                    <div class="col-sm-12" style="padding-bottom: 25px;">
                                        <strong>35. HOUSEHOLD GOODS BROKER APPLICANTS MUST CERTIFY AS FOLLOWS:</strong>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="sm-text">
                                            Applicant is fit, willing, and able to provide household goods brokerage operations and to comply with all pertinent statutory and regulatory requirements. The involved services will be consistent with the public interest and the transportation policy of 49 USC 13101.
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="goodCert3" data-name="YES"><strong>YES</strong>
                                        </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <label>Applicant may attach a supporting statement to this application to provide additional information about any of the above certifications. This evidence is optional.</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control-file" id="affattached" name="affattached">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">SCOPE OF OPERATING AUTHORITY</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">ONLY APPLICANTS REQUESTING OPERATING AUTHORITY AS A MOTOR CONTRACT CARRIER OF HOUSEHOLD GOODS
                                                MUST COMPLETE THIS SECTION; CHECK ALL BOXES THAT APPLY.</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="opAuth1" data-name="36. Contracting shippers have one or more of the distinct needs delineated in Interstate Van Lines, Inc., Extension — Household Goods, 5 I.C.C.2d 168 (1988). Describe briefly the distinct need(s):">36. Contracting shippers have one or more of the distinct needs delineated in Interstate Van Lines, Inc., Extension — Household Goods, 5 I.C.C.2d 168 (1988). Describe briefly the distinct need(s):
                                        </label>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="opAuth1">&nbsp;</label>
                                        <textarea class="form-control" id="opAuth2" name="opAuth12" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="opAuth3" data-name="337. Contracts provide for assignment of one or more vehicles for the exclusive use of each shipper in the manner specified in Interstate Van
                                          Lines, Inc., Extension — Household Goods, 5 I.C.C.2d 168 (1988).">37. Contracts provide for assignment of one or more vehicles for the exclusive use of each shipper in the manner specified in Interstate Van
                                            Lines, Inc., Extension — Household Goods, 5 I.C.C.2d 168 (1988).
                                        </label>
                                    </div>
                                    <div class="col-sm-12"><hr></div>
                                    <div class="col-sm-12"><strong>NOTE:</strong> <i>All motor carriers must comply with all pertinent Federal, State, local and tribal statutory and regulatory requirements when operating within the United States. Such requirements include, but are not limited to, all applicable statutory and regulatory requirements administered by the U.S. Department of Labor, or by a State agency operating a plan pursuant to Section 18 of the Occupational Safety and Health Act of 1970 (“OSHA State plan agency”). Such re-quirements also include all applicable statutory and regulatory environmental standards and requirements administered by the U.S. Environmental Protection Agency or a State, local or tribal environmental protection agency. Compliance with these statutory and regulatory requirements may require motor carriers and/or individual operators to produce documents for review and inspection for the purpose of determining compliance with such statutes and regulations.</i>
                                    </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">APPLICANT'S OATH</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">38. THIS OATH APPLIES TO ALL SUPPLEMENTAL FILINGS TO THIS APPLICATION.</label><br />
                                            <span class="sm-text">(The signature must be that of the applicant, not a legal representative. Print name in the first blank space.)</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        I <input type="text" name="oathName" class="singleBrd">(please type or print name), verify under penalty of perjury, under the laws of the United States of America, that  all information supplied on this form or relating to this application is true and correct. Further, I certify that I am qualified and authorized to file this application. I know that willful misstatements or omissions of material facts constitute Federal criminal violations punishable under 18 USC 1001 by imprisonment up to 5 years and fines up to $10,000 for each offense. Additionally, these misstatements are punishable as perjury under 18 USC 1621, which provides for fines up to $2,000 or imprisonment up to 5 years for each offense.
                                        <br /><br />
                                        I further certify under penalty of perjury, under the laws of the United States, that I have not been convicted, after September 1, 1989,of any Federal or State offense involving the distribution or possession of a controlled substance, or that if I have been so convicted,I am not ineligible to receive Federal benefits, either by court order or operation of law, pursuant to Section 5301 of the Anti-Drug Abuse Act of 1988 (21 USC 862).
                                        <br /><br />
                                        Finally, I certify that the applicant is not domiciled in Mexico, or owned or controlled by persons of that country. <i>(Note: This portion of the Applicant’s Oath does not pertain to applicants that are U.S.-based enterprises owned or controlled by persons of Mexico seeking to provide truck services for the transportation of international cargo.)</i>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Signature:</label>
                                        <input type="text" class="singleBrd" id="aothSign" name="aothSign">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Title:</label>
                                        <input type="text" class="singleBrd" id="aothTitle" name="aothTitle"><br />
                                        <i class="sm-text" style="padding-left: 30px;">(Please Type or Print)</i>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>DATE:</label>
                                        <input type="text" class="singleBrd" id="aothDate" name="aothDate">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">PAYMENT INSTRUCTIONS</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <label for="name">EACH TYPE OF OPERATING AUTHORITY REQUESTED IN SECTION 2 OF THE APPLICATION FORM REQUIRES A $300 PROCESSING FEE. THIS FEE IS NON-REFUNDABLE.</label><br /><br />
                                            Calculate the total amount due as follows:
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="singleBrd" id="payInst2" name="payInst2" size="30">&nbsp;× $300 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = <br />
                                        <i class="sm-text">Number of boxes checked in Section 2</i>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="singleBrd" id="payInst2" name="payInst2" size="30"><br />
                                        <i class="sm-text">Total payment due</i>
                                    </div>

                                    <div class="col-sm-12"><hr /></div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Select payment method:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="radio-inline">
                                            <input type="radio" name="payMethod" value="1">CHECK OR MONEY ORDER — Make payable to FMCSA in United States currency. Payment must be drawn upon funds deposited in a bank located in the United States.
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="radio-inline">
                                            <input type="radio" name="payMethod" value="2">CREDIT CARD — Complete the Credit Card Payment Authorization below.
                                        </label>
                                    </div>

                                    <div class="col-sm-11" style="padding: 20px 0 0 50px;">
                                        <div class="col-sm-12 form-group">
                                            <label>Credit Card Payment Authorization</label>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="radio-inline"><strong>Select Credit Card:</strong></label>&nbsp;&nbsp;<input type="radio" name="cardType" value="VISA">&nbsp;VISA&nbsp;<input type="radio" name="cardType" value="MasterCard">&nbsp;MasterCard
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label class="radio-inline"><strong>Credit Card Number:</strong></label>
                                        </div>
                                        <div class="col-sm-3 form-group"><input type="text" name="cNumber"></div>

                                        <div class="col-sm-6 form-group">&nbsp;</div>

                                        <div class="col-sm-3 form-group">
                                            <label class="radio-inline"><strong>Date:</strong></label>
                                        </div>
                                        <div class="col-sm-3 form-group"><input type="text" name="ExpDate"></div>

                                        <div class="col-sm-6 form-group"><label>Name</label><i> (exactly as it appears on card):</i></div>
                                        <div class="col-sm-6 form-group"><?php echo $form->textField($model,'cc_name'); ?></div>
                                        <div class="col-sm-6"><label>Payment Amount:</label></div>
                                        <div class="col-sm-6 form-group"><?php echo $form->textField($model,'payment_amount',array('value'=>'600')); ?></div>

                                        <div class="col-sm-12"><hr /></div>

                                        <div class="col-sm-12 form-group"><strong>Credit Card Billing Address</strong></div>
                                        <div class="col-sm-4 form-group"><label>Street Name and Number:</label></div>
                                        <div class="col-sm-3 form-group"><?php echo $form->textField($model,'street'); ?></div>
                                        <div class="col-sm-2 form-group"><label>City:</label></div>
                                        <div class="col-sm-3 form-group"><?php echo $form->textField($model,'city'); ?></div>

                                        <div class="col-sm-4 form-group"><label>State/Province:</label></div>
                                        <div class="col-sm-3 form-group"><?php echo $form->textField($model,'state'); ?></div>
                                        <div class="col-sm-2 form-group"><label>Zip Code:</label></div>
                                        <div class="col-sm-3 form-group"><?php echo $form->textField($model,'zip'); ?></div>

                                        <div class="col-sm-4 form-group"><label>Signature:</label></div>
                                        <div class="col-sm-3 form-group"><?php echo $form->textField($model,'sign_link1'); ?></div>
                                        <div class="col-sm-2 form-group"><label>Payment Date:</label></div>
                                        <div class="col-sm-3 form-group"><?php echo $form->textField($model,'date1'); ?></div>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">MAILING INSTRUCTIONS</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <div>
                                            <i>(To apply online, please see “How to Apply” [Topic II] in the Instructions.)</i><br /><br />
                                            <label for="name">(1) Save a copy of the completed application form(s), all supporting documents (if any), and payment details for the company's business records.</label><br />
                                            <label class="sm-text">(2) Depending upon the type of payment and method of mail delivery, send the completed application form(s), any supporting documents, and payment to one of the following addresses:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <strong>Check or Money Order:</strong><br />
                                        <span class="sm-text">
                                            Standard First-Class Mail<br />Federal Motor Carrier Safety Administration<br />P.O. Box 530226<br />Atlanta, GA 30353-0226
                                        </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <strong>Credit Card:</strong><br />
                                        <span class="sm-text">
                                            Federal Motor Carrier Safety Administration<br />1200 New Jersey Avenue SE, MC-RS<br />Washington, DC 20590
                                        </span>
                                    </div>
                                    <div class="col-sm-12">&nbsp;</div>

                                    <div class="col-sm-12 form-group">
                                        <strong>Express Mail Only:</strong><br />
                                        <span class="sm-text">
                                            Bank of America<br />Lockbox #530226<br />1075 Loop Road<br />Atlanta, GA 30337
                                        </span>
                                    </div>
                                    <div class="col-sm-12"><strong>Note:</strong> Sending payment to the wrong address will delay application processing by 2-3 weeks.</div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                   <!-- <div class="col-sm-12">
                        <div class="form-group" style="float: right;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>

    </div>

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'id'); */?>
		<?php /*echo $form->textField($model,'id'); */?>
		<?php /*echo $form->error($model,'id'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'authority_c'); */?>
		<?php /*echo $form->textField($model,'authority_c'); */?>
		<?php /*echo $form->error($model,'authority_c'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'authority_no'); */?>
		<?php /*echo $form->textArea($model,'authority_no',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'authority_no'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'legal_business_name'); */?>
		<?php /*echo $form->textArea($model,'legal_business_name',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'legal_business_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'doing_business_as'); */?>
		<?php /*echo $form->textArea($model,'doing_business_as',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'doing_business_as'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_street'); */?>
		<?php /*echo $form->textArea($model,'p_street',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_state'); */?>
		<?php /*echo $form->textArea($model,'p_state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_city'); */?>
		<?php /*echo $form->textArea($model,'p_city',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_zip'); */?>
		<?php /*echo $form->textArea($model,'p_zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_telephone'); */?>
		<?php /*echo $form->textField($model,'p_telephone'); */?>
		<?php /*echo $form->error($model,'p_telephone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_fax'); */?>
		<?php /*echo $form->textField($model,'p_fax'); */?>
		<?php /*echo $form->error($model,'p_fax'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_street'); */?>
		<?php /*echo $form->textArea($model,'m_street',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'m_street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_city'); */?>
		<?php /*echo $form->textArea($model,'m_city',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'m_city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_state'); */?>
		<?php /*echo $form->textArea($model,'m_state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'m_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_zip'); */?>
		<?php /*echo $form->textArea($model,'m_zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'m_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_telephone'); */?>
		<?php /*echo $form->textField($model,'m_telephone'); */?>
		<?php /*echo $form->error($model,'m_telephone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_fax'); */?>
		<?php /*echo $form->textField($model,'m_fax'); */?>
		<?php /*echo $form->error($model,'m_fax'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_name'); */?>
		<?php /*echo $form->textArea($model,'r_name',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_title'); */?>
		<?php /*echo $form->textArea($model,'r_title',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_title'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_street'); */?>
		<?php /*echo $form->textArea($model,'r_street',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_state'); */?>
		<?php /*echo $form->textArea($model,'r_state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_zip'); */?>
		<?php /*echo $form->textArea($model,'r_zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_telephone'); */?>
		<?php /*echo $form->textArea($model,'r_telephone',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_telephone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'r_fax'); */?>
		<?php /*echo $form->textArea($model,'r_fax',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'r_fax'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'dot_number'); */?>
		<?php /*echo $form->textField($model,'dot_number'); */?>
		<?php /*echo $form->error($model,'dot_number'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'form_of_business_c'); */?>
		<?php /*echo $form->textField($model,'form_of_business_c'); */?>
		<?php /*echo $form->error($model,'form_of_business_c'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'form_of_business'); */?>
		<?php /*echo $form->textArea($model,'form_of_business',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'form_of_business'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'type_of_auth'); */?>
		<?php /*echo $form->textArea($model,'type_of_auth',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'type_of_auth'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_29a'); */?>
		<?php /*echo $form->textArea($model,'p_29a',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_29a'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_29b'); */?>
		<?php /*echo $form->textField($model,'p_29b'); */?>
		<?php /*echo $form->error($model,'p_29b'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_30'); */?>
		<?php /*echo $form->textField($model,'p_30'); */?>
		<?php /*echo $form->error($model,'p_30'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_31'); */?>
		<?php /*echo $form->textField($model,'p_31'); */?>
		<?php /*echo $form->error($model,'p_31'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'affl_cont'); */?>
		<?php /*echo $form->textArea($model,'affl_cont',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'affl_cont'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'affl_file'); */?>
		<?php /*echo $form->textArea($model,'affl_file',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'affl_file'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_33'); */?>
		<?php /*echo $form->textField($model,'p_33'); */?>
		<?php /*echo $form->error($model,'p_33'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_34'); */?>
		<?php /*echo $form->textField($model,'p_34'); */?>
		<?php /*echo $form->error($model,'p_34'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_35'); */?>
		<?php /*echo $form->textField($model,'p_35'); */?>
		<?php /*echo $form->error($model,'p_35'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_36_check'); */?>
		<?php /*echo $form->textField($model,'p_36_check'); */?>
		<?php /*echo $form->error($model,'p_36_check'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_36_file'); */?>
		<?php /*echo $form->textArea($model,'p_36_file',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_36_file'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_37'); */?>
		<?php /*echo $form->textField($model,'p_37'); */?>
		<?php /*echo $form->error($model,'p_37'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'p_38_name'); */?>
		<?php /*echo $form->textArea($model,'p_38_name',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'p_38_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'sign_link'); */?>
		<?php /*echo $form->textArea($model,'sign_link',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'sign_link'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'title'); */?>
		<?php /*echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'title'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'date'); */?>
		<?php /*echo $form->textArea($model,'date',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'date'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'no_of_checkboxes'); */?>
		<?php /*echo $form->textField($model,'no_of_checkboxes'); */?>
		<?php /*echo $form->error($model,'no_of_checkboxes'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'payment_method'); */?>
		<?php /*echo $form->textField($model,'payment_method'); */?>
		<?php /*echo $form->error($model,'payment_method'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_type'); */?>
		<?php /*echo $form->textField($model,'cc_type'); */?>
		<?php /*echo $form->error($model,'cc_type'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_number'); */?>
		<?php /*echo $form->textField($model,'cc_number'); */?>
		<?php /*echo $form->error($model,'cc_number'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_date'); */?>
		<?php /*echo $form->textArea($model,'cc_date',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'cc_date'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_name'); */?>
		<?php /*echo $form->textArea($model,'cc_name',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'cc_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'payment_amount'); */?>
		<?php /*echo $form->textField($model,'payment_amount'); */?>
		<?php /*echo $form->error($model,'payment_amount'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'street'); */?>
		<?php /*echo $form->textArea($model,'street',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'city'); */?>
		<?php /*echo $form->textArea($model,'city',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'state'); */?>
		<?php /*echo $form->textArea($model,'state',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'zip'); */?>
		<?php /*echo $form->textArea($model,'zip',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'sign_link1'); */?>
		<?php /*echo $form->textArea($model,'sign_link1',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'sign_link1'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'date1'); */?>
		<?php /*echo $form->textArea($model,'date1',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'date1'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra1'); */?>
		<?php /*echo $form->textArea($model,'extra1',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'extra1'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra2'); */?>
		<?php /*echo $form->textField($model,'extra2'); */?>
		<?php /*echo $form->error($model,'extra2'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra3'); */?>
		<?php /*echo $form->textField($model,'extra3'); */?>
		<?php /*echo $form->error($model,'extra3'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra4'); */?>
		<?php /*echo $form->textField($model,'extra4'); */?>
		<?php /*echo $form->error($model,'extra4'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra5'); */?>
		<?php /*echo $form->textField($model,'extra5'); */?>
		<?php /*echo $form->error($model,'extra5'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extra6'); */?>
		<?php /*echo $form->textField($model,'extra6'); */?>
		<?php /*echo $form->error($model,'extra6'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'creationdate_time'); */?>
		<?php /*echo $form->textField($model,'creationdate_time'); */?>
		<?php /*echo $form->error($model,'creationdate_time'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'last_update'); */?>
		<?php /*echo $form->textField($model,'last_update'); */?>
		<?php /*echo $form->error($model,'last_update'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'created_by'); */?>
		<?php /*echo $form->textArea($model,'created_by',array('rows'=>6, 'cols'=>50)); */?>
		--><?php /*echo $form->error($model,'created_by'); */?>
	<!--</div>-->

    <div class="col-sm-12" style="margin-bottom: 50px;">
        <div class="form-group" style="float: right;">
            <div class="row buttons" style="margin-top:30px;">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save ,Email and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
            </div>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->