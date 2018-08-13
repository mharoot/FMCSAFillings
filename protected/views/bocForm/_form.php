<?php
/* @var $this BocFormController */
/* @var $model DotTrackerBoc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-boc-form',
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
            <div class="row"><br>

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">COMPANY INFORMATION</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="nameon_card">USDOT# / MC# / FF#*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'usdot',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="nameon_card">COMPANY NAME*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'company_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">ADDRESS AND CONTACT INFORMATION</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="city">REPRESENTATIVE FIRST NAME*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'fname',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="state">REPRESENTATIVE LAST NAME*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'lname',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="city">STREET ADDRESS*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'street',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="city">STREET ADDRESS LINE 2</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext1',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="city">CITY</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="state">STATE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="phone">ZIP CODE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="phone">PHONE NUMBER*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'phone_no',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="phone">FAX NUMBER</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'fax',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="phone">EMAIL ADDRESS*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="phone">MOBILE*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'mobile',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>


                    <!--<div class="panel panel-default"  style="display: none;">
                        <div class="panel-heading">SERVICES</div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name"><input id="service1" name="service" size="30" type="radio" />&nbsp;&nbsp; B0C-3 only - $30.00</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name"><input id="service2" name="service" size="30" type="radio" />&nbsp;&nbsp; B0C-3 and letter of new authority on the day it is issued by the FMCSA - $55.00</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name"><input id="service3" name="service" size="30" type="radio" />&nbsp;&nbsp; B0C-3 and letter of reinstatement of authority - $55.00</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name"><input id="service4" name="service" size="30" type="radio" />&nbsp;&nbsp; B0C-3 and letter of reinstatement of authority - $55.00</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <?php /*echo $form->hiddenField($model,'services',array('class'=>'form-control')); */?>
                                            <label for="name" >Total : $<span id="totalAmt">0</span></label>
                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Please make sure you submit your email or fax if you are planning to receive your copy of authority and/or B0C-3 with email or fax.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="display: none">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="name">Send BOC-30*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select name="sendBoc" class="form-control">
                                                <option value="Email">Email</option>
                                                <option value="Fax">Fax</option>
                                                <option value="Mail">Mail</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">&nbsp;</div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="name">Your order will be processed the same day, 7 days a week, if received by 9 PM Mountain Time.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="name">Comments</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <?php /*echo $form->textArea($model,'comments',array('class'=>'form-control')); */?>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>-->


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
    </div>



<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    $(document).ready(function(){
        if($('#DotTrackerBoc_services').val()!='')
        {
            var count=$('#DotTrackerBoc_services').val();
            if(count==1)
            {
                $('#service1').trigger('click');
                var valA=30;
                var i=1;
                $('#DotTrackerBoc_services').val(i);
                $('#totalAmt').html(valA);
            }
            else if(count==2)
            {
                $('#service2').trigger('click');
                var valA=55;
                var i=2;
                $('#DotTrackerBoc_services').val(i);
                $('#totalAmt').html(valA);
            }
            else if(count==3)
            {   var valA=55;
                var i=3;
                $('#DotTrackerBoc_services').val(i);
                $('#totalAmt').html(valA);
                $('#service3').trigger('click');
            }
            else if(count==4)
            {
                var valA=55;
                var i=4;
                $('#DotTrackerBoc_services').val(i);
                $('#totalAmt').html(valA);
                $('#service4').trigger('click');
            }

        }

        $('#service1').on('click',function(){
            var valA=30;
            var i=1;
            $('#DotTrackerBoc_services').val(i);
            $('#totalAmt').html(valA);
        });

        $('#service2').on('click',function(){
            var valA=55;
            var i=2;
            $('#DotTrackerBoc_services').val(i);
            $('#totalAmt').html(valA);
        });

        $('#service3').on('click',function(){
            var valA=55;
            var i=3;
            $('#DotTrackerBoc_services').val(i);
            $('#totalAmt').html(valA);
        });

        $('#service4').on('click',function(){
            var valA=55;
            var i=4;
            $('#DotTrackerBoc_services').val(i);
            $('#totalAmt').html(valA);
        });


    });

</script>