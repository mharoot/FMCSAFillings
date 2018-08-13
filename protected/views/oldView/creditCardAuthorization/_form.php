<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */
/* @var $form CActiveForm */
?>

<style type="text/css">
    table { margin-bottom: 0px!important;}
    .colHead1{ width: 20%; border-right: #ccc solid 1px; }
    input[type="text"]{ width: 50%; font-size: 13px; border:#ccc solid 1px; padding: 5px 10px; }
    .bgColor{ background-color: #f5f5f5; }
</style>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'credit-card-authorization-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



    <!-- Page Heading/Breadcrumbs -->


    <!-- Content Row -->
    <div class="row table-responsive">

        <table class="table table-bordered">
            <tbody>
            <tr><th class="bgColor">CREDIT CARD INFORMATION</th></tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">NAME ON CREDIT CARD</td>
                            <td><?php echo $form->textField($model,'cc_name',array()); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">TYPE OF CREDIT CARD</td>
                            <td><input type="radio" value="VISA" name="cardType" <?php echo ($model->cc_type=='VISA')?'checked':''; ?> >&nbsp;VISA</td>
                            <td><input type="radio" value="MC" name="cardType" <?php echo ($model->cc_type=='MC')?'checked':''; ?> >&nbsp;MC</td>
                            <td><input type="radio" value="AMEX" name="cardType" <?php echo ($model->cc_type=='AMEX')?'checked':''; ?> >&nbsp;AMEX</td>
                            <td><input type="radio" value="DISCOVER" name="cardType" <?php echo ($model->cc_type=='DISCOVER')?'checked':''; ?>>&nbsp;DISCOVER</td>
                            <td><input type="radio" value="OTHER" name="cardType" <?php echo ($model->cc_type=='OTHER')?'checked':''; ?>>&nbsp;OTHER
                                <?php echo $form->hiddenField($model,'cc_type',array()); ?>

                            </td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">CARD NUMBER</td>
                            <td><?php echo $form->textField($model,'cc_number',array()); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">EXPIRATION DATE</td>
                            <td><?php echo $form->textField($model,'cc_expdate',array()); ?></td>
                            <td class="colHead1">SECURITY CODE</td>
                            <td><?php echo $form->textField($model,'cc_seccode',array()); ?></td>
                        </tr></table></td>
            </tr>
            </tbody>
        </table>

        <div style="clear: both; height: 20px;"></div>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">BILLING ADDRESS</td>
                            <td><?php echo $form->textField($model,'address',array()); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">CITY</td>
                            <td><?php echo $form->textField($model,'city',array()); ?></td>
                            <td>STATE</td>
                            <td><?php echo $form->textField($model,'state',array()); ?></td>
                            <td>ZIP CODE</td>
                            <td><?php echo $form->textField($model,'zipcode',array()); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">PHONE</td>
                            <td><?php echo $form->textField($model,'phone',array()); ?></td>
                            <td>EMAIL</td>
                            <td><?php echo $form->textField($model,'email',array()); ?></td>
                            <td>FAX NUMBER</td>
                            <td><?php echo $form->textField($model,'fax',array()); ?></td>
                        </tr></table></td>
            </tr>
            </tbody>
        </table>

        <div style="clear: both; height: 20px;"></div>

        <table class="table table-bordered">
            <tbody>
            <tr><th class="bgColor">AUTHORIZED USER OF CREDIT CARD</th></tr>

            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1">
                        <tr>
                            <td class="colHead1">NAME</td>
                            <td><?php echo $form->textField($model,'auth_name',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">COMPANY</td>
                            <td><?php echo $form->textField($model,'auth_company',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">PHONE NUMBER</td>
                            <td><?php echo $form->textField($model,'auth_phoneno',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">EMAIL ADDRESS</td>
                            <td><?php echo $form->textField($model,'auth_email',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">DRIVER'S LICENSE NUMBER</td>
                            <td><?php echo $form->textField($model,'auth_drivlicense',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">RELATION TO OWNER</td>
                            <td><?php echo $form->textField($model,'auth_relationuser',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">TYPE OF CHARGES</td>
                            <td><?php echo $form->textField($model,'auth_charges',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">AUTHORIZED AMOUNT</td>
                            <td><?php echo $form->textField($model,'auth_amount',array()); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">DATE OF CHARGE</td>
                            <td><?php echo $form->textField($model,'date_of_charge',array()); ?></td>
                        </tr>
                    </table></td>
            </tr>
            </tbody>
        </table>

        <div style="clear: both; height: 20px;"></div>

        <table>
            <tr><td class="bgColor" style="font-size: 16px; font-weight: 600;">AUTHORIZATION OF CARD USER</td></tr>
            <tr><td>
                    <input type="checkbox" id="accept1"> - I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate. <br /><br />
                    <input type="checkbox" id="accept2"> - I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If
                    additional charges are going to be authorized a new form will have to be completed.
                </td>
            </tr>
        </table>

        <div style="clear: both; height: 20px;"></div>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <th colHead1>CARDHOLDER NAME</th>
                <td><?php echo $form->textField($model,'ccholder_name',array()); ?></td>
            </tr>
            <tr>
                <td colspan="2"><table><tr>
                            <th colHead1>SIGNATURE</th>
                            <td><?php echo $form->hiddenField($model,'sign_link',array('value'=>'toBeAuth')); ?></td>
                            <td>DATE</td>
                            <td><?php echo $form->textField($model,'date',array()); ?>
                                <?php echo $form->hiddenField($model,'created_by',array('value'=>Yii::app()->user->id)); ?>
                            </td>
                        </tr></table></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.row -->

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'cc_name'); */?>
		<?php /*echo $form->textField($model,'cc_name',array()); */?>
		<?php /*echo $form->error($model,'cc_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_type'); */?>
		<?php /*echo $form->textField($model,'cc_type',array()); */?>
		<?php /*echo $form->error($model,'cc_type'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_number'); */?>
		<?php /*echo $form->textField($model,'cc_number',array()); */?>
		<?php /*echo $form->error($model,'cc_number'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_expdate'); */?>
		<?php /*echo $form->textField($model,'cc_expdate'); */?>
		<?php /*echo $form->error($model,'cc_expdate'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'cc_seccode'); */?>
		<?php /*echo $form->textField($model,'cc_seccode',array()); */?>
		<?php /*echo $form->error($model,'cc_seccode'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'address'); */?>
		<?php /*echo $form->textField($model,'address',array()); */?>
		<?php /*echo $form->error($model,'address'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'city'); */?>
		<?php /*echo $form->textField($model,'city',array()); */?>
		<?php /*echo $form->error($model,'city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'state'); */?>
		<?php /*echo $form->textField($model,'state',array()); */?>
		<?php /*echo $form->error($model,'state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'zipcode'); */?>
		<?php /*echo $form->textField($model,'zipcode',array()); */?>
		<?php /*echo $form->error($model,'zipcode'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'phone'); */?>
		<?php /*echo $form->textField($model,'phone',array()); */?>
		<?php /*echo $form->error($model,'phone'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'email'); */?>
		<?php /*echo $form->textField($model,'email',array()); */?>
		<?php /*echo $form->error($model,'email'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'fax'); */?>
		<?php /*echo $form->textField($model,'fax',array()); */?>
		<?php /*echo $form->error($model,'fax'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_name'); */?>
		<?php /*echo $form->textField($model,'auth_name',array()); */?>
		<?php /*echo $form->error($model,'auth_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_company'); */?>
		<?php /*echo $form->textField($model,'auth_company',array()); */?>
		<?php /*echo $form->error($model,'auth_company'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_phoneno'); */?>
		<?php /*echo $form->textField($model,'auth_phoneno',array()); */?>
		<?php /*echo $form->error($model,'auth_phoneno'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_email'); */?>
		<?php /*echo $form->textField($model,'auth_email',array()); */?>
		<?php /*echo $form->error($model,'auth_email'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_drivlicense'); */?>
		<?php /*echo $form->textField($model,'auth_drivlicense',array()); */?>
		<?php /*echo $form->error($model,'auth_drivlicense'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_relationuser'); */?>
		<?php /*echo $form->textField($model,'auth_relationuser',array()); */?>
		<?php /*echo $form->error($model,'auth_relationuser'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_charges'); */?>
		<?php /*echo $form->textField($model,'auth_charges',array()); */?>
		<?php /*echo $form->error($model,'auth_charges'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'auth_amount'); */?>
		<?php /*echo $form->textField($model,'auth_amount',array()); */?>
		<?php /*echo $form->error($model,'auth_amount'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'date_of_charge'); */?>
		<?php /*echo $form->textField($model,'date_of_charge'); */?>
		<?php /*echo $form->error($model,'date_of_charge'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ccholder_name'); */?>
		<?php /*echo $form->textField($model,'ccholder_name',array()); */?>
		<?php /*echo $form->error($model,'ccholder_name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'sign_link'); */?>
		<?php /*echo $form->textField($model,'sign_link',array()); */?>
		<?php /*echo $form->error($model,'sign_link'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'date'); */?>
		<?php /*echo $form->textField($model,'date'); */?>
		<?php /*echo $form->error($model,'date'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'creation_datetime'); */?>
		<?php /*echo $form->textField($model,'creation_datetime'); */?>
		<?php /*echo $form->error($model,'creation_datetime'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'last_updated'); */?>
		<?php /*echo $form->textField($model,'last_updated'); */?>
		<?php /*echo $form->error($model,'last_updated'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'created_by'); */?>
		<?php /*echo $form->textField($model,'created_by',array()); */?>
		<?php /*echo $form->error($model,'created_by'); */?>
	</div>-->

	<div class="row buttons" style="margin-top:30px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1')); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2')); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Save ,Email and Message ' : 'Save ,Email and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    $('#subBtn').attr('disabled','disabled');
    $('#subBtn2').attr('disabled','disabled');
    $('#subBtn3').attr('disabled','disabled');
    $(document).ready(function(){

        $('#CreditCardAuthorization_cc_expdate').datepicker({ dateFormat: 'yy-mm-dd' });
        $('#CreditCardAuthorization_date').datepicker({ dateFormat: 'yy-mm-dd' });
        $('#CreditCardAuthorization_date_of_charge').datepicker({ dateFormat: 'yy-mm-dd' });


        $('input[name="cardType"]').on('click',function(){console.log('aaa');
           $('#CreditCardAuthorization_cc_type').val($(this).val());
        });

        $('#accept1').on('click',function(){
           checkForm();
        });

        $('#accept2').on('click',function(){
            checkForm();
        });


    });

    function checkForm() {
     if(($('#accept1').is(":checked")) && ($('#accept2').is(":checked")))
     {
         $('#subBtn').removeAttr('disabled');
         $('#subBtn2').removeAttr('disabled');
         $('#subBtn3').removeAttr('disabled');
     }
     else{
         $('#subBtn').attr('disabled','disabled');
         $('#subBtn2').attr('disabled','disabled');
         $('#subBtn3').attr('disabled','disabled');
     }
    }
</script>