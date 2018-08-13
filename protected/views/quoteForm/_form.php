<?php
/* @var $this QuoteFormController */
/* @var $model DotTrackerQuote */
/* @var $form CActiveForm */
?>

<div class="form">
    <!--<a id="hisBtn" href="<?php /*echo Yii::app()->createUrl('quoteForm/history',array('id'=>$model->id));*/?>" class="btn btn-warning"style="margin: 10px;float: right;"><i class="fa fa-calendar" style=""></i> Quote History</a>
    --><?php if(!$model->isNewRecord) { ?>
    <?php if($model->status != DotTrackerQuote::$enumStatus['archived'])  { ?>
        <a id="archiveBtn" onclick="moveToArchive();" class="btn btn-info"
       style="margin: 10px;float: right;"><i
                class="fa fa-archive" style=""></i> Move to Cancelled</a>
    <?php } ?>
    <?php if($model->status != DotTrackerQuote::$enumStatus['hold'])  { ?>
    <a id="holdBtn" onclick="moveTohold();" class="btn btn-info"
       style="margin:10px;float: right;"><i
                class="fa fa-stop"></i> Move to Hold</a>
        <?php } ?>

        <?php if($model->status != DotTrackerQuote::$enumStatus['quote'])  { ?>
            <a id="holdBtn" onclick="moveToQuote();" class="btn btn-info"
               style="margin:10px;float: right;"><i
                        class="fa fa-dollar"></i> Move to Quote</a>
        <?php } ?>

        <a href="<?php
        $order=DotTrackerOrder::model()->findByAttributes(array('quote_id'=>$model->id));

        echo Yii::app()->createUrl('orderForm/update',array('id'=>$order->id)); ?>" class="btn btn-info" style="margin:10px;float: right;"><i
                    class="fa fa-retweet"></i> Convert to Order</a>
    <?php } ?>


    <div class="col-lg-12 alert alert-success" id="succmsg" style="display: none;"></div>

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-quote-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required" style="color: red">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">CUSTOMER INFORMATION</div>
            <div class="panel-body">
                <fieldset>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nameon_card">Legal Business Name <span style="color: red;" >*</span></label>
                                <br />
                                <?php echo $form->textField($model,'shipper',array('class'=>'form-control','required'=>'required')); ?>
                            </div>
                            <div class="form-group">
                                <label for="nameon_card">Doing Business as Name(if different from above)</label>
                                <?php echo $form->textField($model,'fname',array('class'=>'form-control')); ?>
                            </div>

                            <div class="form-group">
                                <label for="nameon_card">First Name <span style="color: red;" >*</span></label>
                                <?php echo $form->textField($model,'fname',array('class'=>'form-control','required'=>'required')); ?>
                            </div>

                            <div class="form-group">
                                <label for="nameon_card">Last Name <span style="color: red;" >*</span></label>
                                <?php echo $form->textField($model,'lname',array('class'=>'form-control','required'=>'required')); ?>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nameon_card">Email</label>
                                <?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
                            </div>

                            <div class="form-group">
                                <label for="nameon_card">Mobile Number</label>
                                <?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
                            </div>

                            <div class="form-group">
                                <label for="nameon_card">Principal Business Phone Number</label>
                                <?php echo $form->textField($model,'mobile',array('class'=>'form-control')); ?>
                            </div>

                            <!--<div class="form-group">
                                <label for="nameon_card">Fax</label>
                                <input class="form-control" id="fax" name="fax" size="30" type="text" />
                            </div>-->
                        </div>

                        <div class="col-sm-4">

                            <div class="form-group">
                                <label for="nameon_card">Address</label>
                                <?php echo $form->textField($model,'address',array('class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <label for="nameon_card">City</label>
                                <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                            </div>

                            <div class="form-group">
                                <label for="nameon_card">State</label>
                                <br />
                                <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                <?php //echo $form->hiddenField($model,'status',array('class'=>'form-control','value'=>DotTrackerQuote::$enumStatus['followup'])); ?>
                                <?php echo $form->hiddenField($model,'arrdata',array('class'=>'form-control')); ?>
                                <?php echo $form->hiddenField($model,'totpayment',array('class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <label for="nameon_card">Zip</label>

                                <?php echo $form->textField($model,'zip',array('class'=>'form-control','type'=>'number')); ?>

                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">SERVICE TYPES</div>
            <div class="panel-body">
                <fieldset>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                            <div class="col-sm-12 headerT">
                                <span>Corporation Filing </span>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety1" data-name="S Corporation">S Corporation
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety2" data-name="C Corporation">C Corporation
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety3" data-name="Limited Liability Company (LLC)">Limited Liability Company (LLC)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety4" data-name="Limited Liability Partnership (LLP)">Limited Liability Partnership (LLP)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety5" data-name="Limited Partnership (LP)">Limited Partnership (LP)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety6" data-name="Fictitious Business Name (DBA)">Fictitious Business Name (DBA)
                                </label>
                            </div>



                            <div class="col-sm-12 headerT">
                                <span>USDOT#</span>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety7" data-name="USDOT #">USDOT #
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety28" data-name="Biennial Update">Biennial Update
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety34" data-name="USDOT# Reactivation">USDOT# Reactivation
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety20" data-name="Texas Operating Authority">Texas Operating Authority
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety35" data-name="USDOT# Deactivation">USDOT# Deactivation
                                </label>
                            </div>

                                <div class="col-sm-12 headerT">
                                    <span>Hazmat</span>
                                </div>
                                <div class="col-sm-12">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="servicety15" data-name="Hazardous Materials Registration (Federal)">Hazardous Materials Registration (Federal)
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="servicety14" data-name="Hazardous Materials Registration (CA)">Hazardous Materials Registration (CA)
                                    </label>
                                </div>



                            </div>
                            <div class="col-lg-4">
                            <div class="col-sm-12 headerT">
                                <span>MC#</span>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety8" data-name="MC # Carrier Authority">MC # Carrier Authority
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety16" data-name="BOC-3">BOC-3
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety31" data-name="MC# Revocation">MC# Revocation
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety29" data-name="MC# Reinstatement">MC# Reinstatement
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety32" data-name="MC# Name Change">MC# Name Change
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety30" data-name="MC# Detachment">MC# Detachment
                                </label>
                            </div>

                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety33" data-name="MC# Reattachment">MC# Reattachment
                                </label>
                            </div>

                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety19" data-name="Unified Carrier Registration (UCR)">Unified Carrier Registration (UCR)
                                </label>
                            </div>

                            <div class="col-sm-12">
                            </div>








                            <div class="col-sm-12 headerT">
                                <span>Broker</span>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety9" data-name="MC # Broker Authority">MC # Broker Authority
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety10" data-name="Freight Forwarder (FF #)">Freight Forwarder (FF #)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety22" data-name="BMC-85 Trust Bond">BMC-85 Trust Bond
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety21" data-name="BMC-84 Surety Bond">BMC-84 Surety Bond
                                </label>
                            </div>

                            <div class="col-sm-8">
                            </div>



                            </div><div class="col-lg-4">




                            <div class="col-sm-12 headerT">
                                <span>California and IRP</span>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety11" data-name="California DOT # (CA #)">California DOT # (CA #)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety13" data-name="Employee Pull Notice (EPN)">Employee Pull Notice (EPN)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety12" data-name="Motor Carrier Permit (MCP)">Motor Carrier Permit (MCP)
                                </label>
                            </div>

                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety23" data-name="International Registration Plan (IRP)">International Registration Plan (IRP)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety18" data-name="Highway Use Tax (2290)">Highway Use Tax (2290)
                                </label>
                            </div>





                            <div class="col-sm-12 headerT">
                                <span>Permits and Fuel taxes</span>
                            </div>

                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety17" data-name="International Fuel Tax Agreement (IFTA)">International Fuel Tax Agreement (IFTA)
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety25" data-name="Oregon Fuel Tax Permit">Oregon Fuel Tax Permit
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety26" data-name="New York HUT Permit">New York HUT Permit
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety24" data-name="New Mexico Weight Distance Permit">New Mexico Weight Distance Permit
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="servicety27" data-name="KYU Weight Distance Permit">KYU Weight Distance Permit
                                </label>
                            </div>











</div>














                        </div>
                    </div>
                </fieldset>
            </div>
        </div>



        <div class="panel panel-default">
            <div class="panel-heading">PAYMENT</div>
            <div class="panel-body">
                <fieldset>
                    <div class="row">
                        <div class="col-sm-10" id="paymentArea">



                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group" style="float:right;margin-right: 20px; text-align: left;"  >
                                        <p style="font-weight: bold;">Total Amount</p>
                                        <p id="finalAmt"><span class="eText">Please select service type</span></p>
                                        <p style="display: inline-flex;"><span style="padding: 8px 10px 0 0; font-weight: bold;">Your Total : </span>
                                           <span><?php echo $form->textField($model,'discounted_price',array('class'=>'form-control','placeholder'=>'Discounted Amount')); ?></span>
                                        </p>
                                       <!-- <p style="font-weight: bold; font-size: 16px;">Total : $1000.00</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">NOTES</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="nameon_card">Enter Notes from Customer</label>
                    <br />
                    <div class="alert alert-success" id="successservicety33" style="display: none"></div>
                    <div class="alert alert-danger" id="errorservicety33" style="display: none"></div>
                    <div class="row">
                        <input class="form-control" id="quote_id" type="hidden" value="<?php echo $model->id; ?>">
                        <?php if(!$model->isNewRecord) { ?>
                            <div class="col-lg-11"><div class="form-group"> <?php echo $form->textField($model,'shipper_notes',array('class'=>'form-control')); ?></div></div>
                            <div class="col-lg-1"><div class="form-group"> <input type="button" class="form-control btn btn-info" value="Add" onclick="addNote();"></div></div>

                        <?php }
                        else{
                        ?>
                            <div class="col-lg-12"><div class="form-group"> <?php echo $form->textField($model,'shipper_notes',array('class'=>'form-control')); ?></div></div>

                        <?php }?>
                    </div>

                    <div id="noteArea">
                    <?php  if(!$model->isNewRecord) {
                    $criteria = new CDbCriteria();
                        $criteria->addCondition("quote_id = ".$model->id);

                    $noteModels=DotTrackerNotes::model()->findAll($criteria);

                    /*cho '<pre>';print_r($noteModels->getAttributes); die;

                    $noteAll=$noteModels->attributes;*/
                    echo '<table id="noteTable " class="table table-striped" style="margin-top:30px;">';

                    echo '<tr>
                            <td width="10%">Date</td>
                            <td width="75%">Notes</td>
                            <td width="15%">Added By</td>
                        </tr>';
                    foreach ($noteModels as $notes)
                    {
                        $noteAttr=$notes->attributes;

                        echo '<tr>
                            <td>'.FilingGenerics::showDate($noteAttr['date']).'</td>
                            <td>'.$noteAttr['note'].'</td>
                            <td>'.FilingGenerics::getUserName($noteAttr['created_by']).'<br>( '.$noteAttr['created_by'].' )  </td>
                        </tr>';


                    }
                    echo '</table>';

//

                     } ?>
                    </div>

                </div>
            </div>
        </div>



        <div class="col-sm-12">
            <div class="form-group" style="float: right;">
                <div class="row buttons" style="margin-top:30px;">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
                </div>
            </div>
        </div>

    </div>







<?php $this->endWidget(); ?>

</div><!-- form -->

<input type="hidden" name="isEmail" id="isEmail" value="<?php echo $model->email; ?>" >
<input type="hidden" name="isSms" id="isSms"  value="<?php echo $model->phone; ?>" >


<script type="application/javascript">


    $('#subBtn2').hide();
    $('#subBtn3').hide();
    $(document).ready(function() {

        if($('#isEmail').val()!='')
        {
            $('#subBtn2').show();

        }

        if($('#isSms').val()!='')
        {
            $('#subBtn3').show();
        }


        $('#DotTrackerQuote_discounted_price').on('keypress',function(e){
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


        $('#DotTrackerQuote_email').on('change',function () {
            if($(this).val()==''){
                $('#subBtn2').hide();
            }
            else{
                $('#subBtn2').show();
            }

        });

        $('#DotTrackerQuote_phone').on('change',function () {
            if($(this).val()==''){
                $('#subBtn3').hide();
            }
            else{
                $('#subBtn3').show();
            }

        });

        $('input[type="checkbox"]').click(function (event) {
            if(!$(this).is(':checked'))
            {
                $('#'+this.name).closest('.col-lg-4').remove();
            }
            else{
                populateSum(this,event);
                $('.payField').on('keypress',function(e){
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
            }
            calculateSum();
        });
    });

    $('input[class="payField"').on('click',function(){

        alert('asdsadsad');$(this).val('');
    });

    $('input[class="payField"').on('keypress',function(){
        alert('aaa');
           calculateSum();
    });

    function calculateSum()
    { var totalSm=0;
        var arrData=[];
        $('.payField').each(function(){
            var thisVal=$(this).val();
            thisVal=thisVal.replace('$','');
            var va=parseFloat(thisVal);
            totalSm=parseFloat(totalSm)+va;
            arrData.push({id:$(this).attr('id'),amt:$(this).val()});


        });
        console.log(totalSm);

        totalSm=totalSm.toFixed(2);
        $('#DotTrackerQuote_totpayment').val(totalSm);
        if(totalSm =='NaN')
        {
            totalSm='<span class="eText">Please enter the amount</span>';
        }
        else
        {

            totalSm='$'+totalSm;
        }
        $('#finalAmt').html(totalSm);

        console.log(arrData);
        $('#DotTrackerQuote_arrdata').val(JSON.stringify(arrData));
    }

    function populateSum(e,event){
        var fieldOpt='';
        fieldOpt+='<div class="col-lg-4"><div class="form-group"><label for="city">'+$(e).attr('data-name')+'</label><input  id="'+$(e).attr('name')+'"  class="form-control payField" onkeydown="calculateSum();" onkeyup="calculateSum();" onkeypress="calculateSum();" onchange="calculateSum();" ></div></div>';
        $('#paymentArea').append(fieldOpt);
        var id=$(e).attr('name');
        setTimeout(function() { $('#'+id).focus() }, 300);

        calculateSum();

    }


    function addNote()
    {
        var arrData={quote_id:$('#quote_id').val(), shipper_notes:$('#DotTrackerQuote_shipper_notes').val()};

        var ajaxUrl='<?php echo Yii::app()->createUrl('notes/updateAjax');?>';
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: arrData,
            dataType: "json",
            success: function(html){
                console.log(html);
                if(html.success==true)
                {
                    $('#noteArea').find('table tbody').append(html.html);
                    $('#DotTrackerQuote_shipper_notes').val('');
                    //alert('savesccc');
                    $('#servicety33').val('1');
                    $("#successservicety33").html(html.msg);
                    $("#successservicety33").fadeIn();
                    setTimeout(function () {
                        $("#successservicety33").fadeOut();

                    },2000);
                    $('#servicety33S').fadeIn();
                    $('#DotTrackerMcReattachment_id').val(html.id);


                    var formDetails=JSON.parse($('#DotTrackerOrder_form_details').val());
                    console.log(formDetails);
                    formDetails.servicety33=html.id;
                    console.log(formDetails);
                    $('#DotTrackerOrder_form_details').val(JSON.stringify(formDetails));



                }
                else{
                    // alert('error');
                    $('#servicety33').val('0');
                    $("#errorservicety33").html(html.msg);
                    $("#errorservicety33").fadeIn();
                    setTimeout(function () {
                        $("#errorservicety33").fadeOut();

                    },2000);
                    $('#servicety33S').fadeOut();
                    $('#DotTrackerMcReattachment_id').val(html.id);
                }
            }
        });
    }

    function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds) {
                break;
            }
        }
    }

    function moveToArchive() {
        var idVal='<?php echo FilingGenerics::encryptKey($model->id); ?>';
        var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['archived'])));?>';
        url = url.replace('__id__', idVal);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'passKey': '2424324242dsfsdfs',
            },
            success: function (data) {

                $("#succmsg").html('Status has been changed to "Cancelled" successfully. ');
                $("#succmsg").fadeIn();
                setTimeout(function () {
                    $("#succmsg").fadeOut();

                },2000);



            }
        });

    }


    function moveToQuote() {

        var idVal='<?php echo FilingGenerics::encryptKey($model->id); ?>';
        var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['quote'])));?>';
        url = url.replace('__id__', idVal);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'passKey': '2424324242dsfsdfs',
            },
            success: function (data) {

                $("#succmsg").html('Status has been changed to "Quote" successfully. ');
                $("#succmsg").fadeIn();
                setTimeout(function () {
                    $("#succmsg").fadeOut();

                },2000);

            }
        });
    }

    function moveTohold() {

            var idVal='<?php echo FilingGenerics::encryptKey($model->id); ?>';
            var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['hold'])));?>';
            url = url.replace('__id__', idVal);
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'passKey': '2424324242dsfsdfs',
                },
                success: function (data) {

                    $("#succmsg").html('Status has been changed to "Hold" successfully. ');
                    $("#succmsg").fadeIn();
                    setTimeout(function () {
                        $("#succmsg").fadeOut();

                    },2000);

                }
            });
    }

</script>

<style>
    .errorSummary{
        margin: 20px !important;
    }
    .eText{
        font-size:12px;
        color: red;
    }

    .headerT
    {
        margin-top: 15px;
        font-weight: bold;
        text-decoration: underline;
    }
</style>








