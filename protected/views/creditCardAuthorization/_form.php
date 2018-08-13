<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */
/* @var $form CActiveForm */


?>

<style type="text/css">
    /*table { margin-bottom: 0px!important;}
    .colHead1{ width: 20%; border-right: #ccc solid 1px; }
    input[type="text"]{ width: 50%; font-size: 13px; border:#ccc solid 1px; padding: 5px 10px; }
    .bgColor{ background-color: #f5f5f5;*/ }
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

	<p class="note">Fields with <span class="required" style="color: red;">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row" style="margin-top: 30px;">

        <!-- Content Column -->
        <div class="col-md-9 ">
            <div class="row">


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">CREDIT CARD INFORMATION  </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="nameon_card">NAME ON CARD</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'cc_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="card_number">CARD NUMBER</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'cc_number',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group" style="margin-top:3px;">
                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/othercard-icon.png" id="ccType" style="height: 28px; width:39px; border-radius: 5px;">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class='form-group'>
                                            <label for="cardholder_information">TYPE OF CREDIT CARD</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <label class="radio-inline">
                                                    <input type="radio" value="VISA" name="cardType" <?php echo ($model->cc_type=='VISA')?'checked':''; ?> readonly="readonly">&nbsp;VISA
                                                </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="radio-inline">
                                                    <input type="radio" value="MC" name="cardType" <?php echo ($model->cc_type=='MC')?'checked':''; ?> readonly="readonly" >&nbsp;MC
                                                </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="radio-inline">
                                                    <input type="radio" value="AMEX" name="cardType" <?php echo ($model->cc_type=='AMEX')?'checked':''; ?>  readonly="readonly">&nbsp;AMEX
                                                </label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="radio-inline">
                                                    <input type="radio" value="DISCOVER" name="cardType" <?php echo ($model->cc_type=='DISCOVER')?'checked':''; ?>  readonly="readonly">&nbsp;DISCOVER
                                                </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="radio-inline">
                                                    <input type="radio" value="OTHER" name="cardType" <?php echo ($model->cc_type=='OTHER')?'checked':''; ?>  readonly="readonly">&nbsp;OTHER
                                                    <?php echo $form->hiddenField($model,'cc_type',array()); ?>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="card_number">CARD NUMBER</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'cc_number',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>-->

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exp_date">EXPIRATION DATE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php
                                            echo $form->textField($model,'cc_expdate',array('class'=>'form-control',"placeholder"=>"MM/YY","mask" => '(999) 999-9999',)); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group" style="text-align:right;">
                                            <label for="exp_date">SECURITY CODE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'cc_seccode',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">BILLING ADDRESS </div>
                        <div class="panel-body">
                            <fieldset>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="phone">STREET ADDRESS</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'address',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="city">CITY</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group" style="text-align:right;">
                                                    <label for="state">STATE</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group" style="text-align:right;">
                                                    <label for="zipcode">ZIP CODE</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'zipcode',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">AUTHORIZED USER OF CARD</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">NAME</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">COMPANY</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_company',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">MOBILE NUMBER <span style="color: red">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_phoneno',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">EMAIL ADDRESS <span style="color: red">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_email',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">DRIVER'S LICENSE NUMBER</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_drivlicense',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">RELATION TO OWNER</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php /*echo $form->textField($model,'auth_relationuser',array('class'=>'form-control')); */?>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">SERVICE TYPES</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_charges',array('class'=>'form-control','disabled'=>'disabled')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">AUTHORIZED AMOUNT</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_amount',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="name">DATE OF CHARGE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'date_of_charge',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row"  style="display:none ;">
                        <div class="col-sm-12">
                            <div class="panel-heading"><strong>CARDHOLDER INFORMATION</strong></div>
                            <div class="form-group" style="padding-left: 20px;">
                                <p>
                                    <input type="checkbox" id="accept1">  - I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate.
                                </p>
                                <p style="margin-bottom: 30px;">
                                    <input type="checkbox" id="accept2">- I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If additional charges are going to be authorized a new form will have to be completed.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" style="display:none ;">
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="cardHolderName">CARD HOLDER NAME</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ccholder_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="signature">SIGNATURE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <?php echo $form->hiddenField($model,'sign_link',array('value'=>'toBeAuth')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group"><label for="signature">DATE</label></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'date',array('placeholder'=>'MM-DD-YYYY')); ?>
                                            <?php echo $form->hiddenField($model,'created_by',array('value'=>Yii::app()->user->id)); ?>
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
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- /.row -->

        <!-- Right Sidebar -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>
                <?php
                foreach($menuArr as $menu)
                {
                   // echo '<pre>'; print_r($menu);die;
                    echo ' <a href="'.Yii::app()->createUrl($menu['url']).'" class="list-group-item"><i class="'.$menu['icon'].'" aria-hidden="true"></i> '.$menu['label'].'</a>';
                }

                ?>
                <a href="#" class="list-group-item"> <span ><center><input class="form-control" type="text" name="orderId" id="orderId" placeholder="Enter Order #" style=""> <p style="color:red;display: none" id="emg">Enter an Order Number</p><span style="margin-top:10px" class="btn btn-info" id="clkBtn"> Convert</span></center></span></a>


            </div>
        </div>
    </div>



<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
   // $('#clkBtn').hide();
   // $('#subBtn').attr('disabled','disabled');
   // $('#subBtn2').attr('disabled','disabled');
   // $('#subBtn3').attr('disabled','disabled');
    $(document).ready(function(){
        $('#clkBtn').on('click',function(){
           if($('#orderId').val()==''){
               $('#emg').show(); return false;
           }
           else{
               $('#emg').hide();
               var url='<?php echo Yii::app()->createUrl('creditCardAuthorization/create',array('quote-id'=>'__qid__'));?>';
                   url=url.replace('__qid__',$('#orderId').val());
                   console.log(url); //return false;
               location.replace(url);
           }
        });

        $('#orderId').on('',function(){
            if($(this).val() !=""){
                $('#clkBtn').show();

            }else{
                $('#clkBtn').hide();
            }
        });

        $('#CreditCardAuthorization_auth_amount').on('keypress',function(e){
            var keycode=e.which;
            //console.log(keycode);
            if(!((keycode >= 48 && keycode <= 57) || (keycode == 46) || (keycode == 8) ))
            { return false; }
            else
            {
                if(($(this).val().split('.').length === 2) && (keycode==46))
                {
                   // console.log('double dot');
                    return false;
                }
            }

            var valTxt=$(this).val();
            valTxt=valTxt.replace('$','');
            var val='$'+valTxt;

            $(this).val(val);

        });
        //checkForm();

        var dateToday = new Date();
       /* var offset = new Date().getTimezoneOffset();
        console.log('offSet>>>>>>'+offset);*/
        $('#CreditCardAuthorization_cc_number').mask('0000 0000 0000 0000');
        $('#CreditCardAuthorization_auth_phoneno').mask('0000000000');
        $('#CreditCardAuthorization_cc_expdate').mask('00/00');
         //$('#CreditCardAuthorization_cc_seccode').mask('000');

        $('#CreditCardAuthorization_date').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });
        $('#CreditCardAuthorization_date_of_charge').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });

         $('#CreditCardAuthorization_cc_number').on('keyup',function(){
             var valCc=$(this).val();

             var img='<?php echo Yii::app()->request->baseUrl; ?>/images/other.png';
             if(valCc.length>3)
             {
                 var firstChar=valCc.charAt(0);
                 console.log(firstChar);

                 switch(firstChar) {
                     case '4':
                         img='<?php echo Yii::app()->request->baseUrl; ?>/images/visa-icon.png';
                         $('#CreditCardAuthorization_cc_number').mask('0000 0000 0000 0000');

                         $('input[name="cardType"][value="VISA"]').trigger('click');
                         break;
                     case '5':
                         img='<?php echo Yii::app()->request->baseUrl; ?>/images/mc-icon.png';
                         $('#CreditCardAuthorization_cc_number').mask('0000 0000 0000 0000');

                         $('input[name="cardType"][value="MC"]').trigger('click');
                         break;
                     case '6':
                         img='<?php echo Yii::app()->request->baseUrl; ?>/images/discover-icon.png';
                         $('#CreditCardAuthorization_cc_number').mask('0000 0000 0000 0000');

                         $('input[name="cardType"][value="DISCOVER"]').trigger('click');
                         break;
                     case '3':
                         img='<?php echo Yii::app()->request->baseUrl; ?>/images/amex-icon.png';
                         $('#CreditCardAuthorization_cc_number').mask('0000 000000 00000');

                         $('input[name="cardType"][value="AMEX"]').trigger('click');
                         break;
                     default:
                         img='<?php echo Yii::app()->request->baseUrl; ?>/images/othercard-icon.png';
                         $('#CreditCardAuthorization_cc_number').mask('0000 0000 0000 0000');
                         $('input[name="cardType"][value="OTHER"]').trigger('click');
                 }

             }
             else{
              console.log('valCC>>>>>'+valCc);
                 img='<?php echo Yii::app()->request->baseUrl; ?>/images/othercard-icon.png';
                 $('input[name="cardType"][value="OTHER"]').trigger('click');
             }

             $('#ccType').attr('src',img);
             });


        $('input[name="cardType"]').on('click',function(){console.log('aaa');
           $('#CreditCardAuthorization_cc_type').val($(this).val());
        });

        $('#accept1').on('click',function(){
           checkForm();
        });

        $('#accept2').on('click',function(){
            checkForm();
        });

        $('#CreditCardAuthorization_cc_number').trigger('keyup');



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