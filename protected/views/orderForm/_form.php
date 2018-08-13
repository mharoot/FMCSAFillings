<?php
/* @var $this OrderFormController */
/* @var $model DotTrackerOrder */
/* @var $form CActiveForm */
?>

<div class="form">
<br><br>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="text-align: right;">
		<?php echo 'Quote Id'; ?>
		<?php echo ' : <b>'.FilingGenerics::showQuoteId($model->quote_id).'</b>'; ?>
		<?php // echo $form->error($model,'quote_id'); ?>

        <?php echo $form->hiddenField($model,'form_details',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->hiddenField($model,'extrafields',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->hiddenField($model,'created_by',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->hiddenField($model,'status'); ?>
	</div>

    <div class="row buttons" style="text-align: right;">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Convert to Order' : 'Save and Convert to Order ',array('class'=>'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div style="padding:20px;">
                <?php  $formDetailsAll=json_decode($model->form_details);
                $allForm=array();
            //print_r($formDetailsAll);
            $c=1;
            foreach($formDetailsAll as $ind=>$val)
            {
               // echo 'ind??'.$ind;
                if(array_key_exists($ind,FilingGenerics::$serviceTypeFile))
                {
                  echo '<span class="formTabs"  style="margin-left: 10px;"><span class="badge"> Step '.$c.' </span> Fill '.FilingGenerics::$serviceType[$ind].' Form</span>  ';
                  $allForm[$ind]='allow';
                $c++;
                }


            }

               // print_r($allForm); die;

            ?>

                <span class="formTabs" style="margin-left: 10px; color: green !important; border-color: green !important;"><span class="badge" style=" background-color:green;color: #fff !important;"> Final Step </span> Save and Proceed to convert to order</span>

       <!--<span>Fill MC# Detachment Form</span> | <span>Fill MC# Attachment Form</span>-->

                <input id="servicety30" type="text" value="0" style="display: none">
                <input id="servicety33" type="text" value="0" style="display: none"  >

       </div>
            <hr>
            <?php if(array_key_exists('servicety30',$allForm)) { ?>
            <div form-co="1" id="servicety30" <?php if(!array_key_exists('servicety30',$allForm)) { echo 'display:none';} ?> >
            <?php $id=$formDetailsAll->servicety30;
            if($id >0)
            {
                $mcDetachment=DotTrackerMcDetachment::model()->findbyPk($id);
            }
            else{
                $mcDetachment=new DotTrackerMcDetachment();
            }
            ?>

                <div  ><div class="col-lg-12">
                        <h3 style="text-decoration: underline;"><?php echo FilingGenerics::$serviceType['servicety30'].' Form'; ?></h3> <span id="servicety30S" class="label label-success" style="float: right;display: none;"><i class="fa fa-check-circle"></i> Form Filled </span>
                    <tr class="form" style="margin-left:20px;">

                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'dot-tracker-mc-detachment-form',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation'=>false,
                        )); ?>

                        <br><p class="note">Fields with <span class="required">*</span> are required.</p>

                        <div class="alert alert-success" id="successservicety30" style="display: none"></div>
                        <div class="alert alert-danger" id="errorservicety30" style="display: none"></div>

                        <?php echo $form->errorSummary($mcDetachment); ?>
                        <table class="table table-striped">
                        <tr>
                           <td> <?php echo $form->labelEx($mcDetachment,'usdot'); ?></td>
                            <td><?php echo $form->textField($mcDetachment,'usdot',array('rows'=>6, 'cols'=>50)); ?></td>

                        </tr>

                        <tr>
                            <td> <?php echo $form->labelEx($mcDetachment,'mc'); ?></td>
                            <td> <?php echo $form->textField($mcDetachment,'mc',array('rows'=>6, 'cols'=>50)); ?></td>

                        </tr>

                            <tr>
                                <td><?php echo $form->labelEx($mcDetachment,'legal_business_name'); ?> </td>
                                <td> <?php echo $form->textField($mcDetachment,'legal_business_name',array('rows'=>6, 'cols'=>50)); ?></td>
                             </tr>

                            <tr>
                                <td> <?php echo $form->labelEx($mcDetachment,'office_name'); ?></td>
                                <td> <?php echo $form->textField($mcDetachment,'office_name',array('rows'=>6, 'cols'=>50)); ?></td>

                            </tr>

                            <tr>
                                <td><?php echo $form->labelEx($mcDetachment,'date'); ?></td>
                                <td> <?php echo $form->textField($mcDetachment,'date',array('rows'=>6, 'cols'=>50)); ?></td>

                            </tr>

                            <tr style="display: none">
                                <td> <?php echo $form->labelEx($mcDetachment,'created_by'); ?></td>
                                <td><?php echo $form->textField($mcDetachment,'id'); echo $form->textField($mcDetachment,'created_by',array('value'=>Yii::app()->user->id)); ?></td>

                            </tr>

                            <tr style="display: none">
                                <td> <?php echo $form->labelEx($mcDetachment,'creation_datetime'); ?></td>
                                <td> <?php echo $form->textField($mcDetachment,'creation_datetime' ,array('value'=>date('Y-m-d h:i:sa'))); ?></td>

                            </tr>
                        </table>



                        <?php $this->endWidget(); ?>
                        
                        <div class="col-lg-12" style="text-align: right;">
                        <input type="button" class="btn btn-info" value="Print Form" disabled="disabled">
                        <input type="button" class="btn btn-success" value="Save Form" onclick="processservicety30();">
                        </div>

                    </div>
                </div>
                </div>

            <?php } ?>


            </div>

        <?php if(array_key_exists('servicety33',$allForm)) { ?>
        <div form-co="2" id="servicety33" <?php if(!array_key_exists('servicety33',$allForm)) { echo 'display:none';} ?>>
            <?php $id=$formDetailsAll->servicety33;
            if($id >0)
            {
                $mcReattachment=DotTrackerMcReattachment::model()->findbyPk($id);
            }
            else{
                $mcReattachment=new DotTrackerMcReattachment();
            }
            ?>

            <div  ><div class="col-lg-12">
                    <h3 style="text-decoration: underline;"><?php echo FilingGenerics::$serviceType['servicety33'].' Form'; ?></h3> <span id="servicety33S" class="label label-success" style="float: right;display: none;"><i class="fa fa-check-circle" ></i> Form Filled </span>
                    <tr class="form" style="margin-left:20px;">

                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'dot-tracker-mc-detachment-form1',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation'=>false,
                        )); ?>

                        <br><p class="note">Fields with <span class="required">*</span> are required.</p>
                        <div class="alert alert-success" id="successservicety33" style="display: none"></div>
                        <div class="alert alert-danger" id="errorservicety33" style="display: none"></div>

                        <?php echo $form->errorSummary($mcReattachment); ?>
                        <table class="table table-striped">
                            <tr>
                                <td> <?php echo $form->labelEx($mcReattachment,'usdot'); ?></td>
                                <td><?php echo $form->textField($mcReattachment,'usdot',array('rows'=>6, 'cols'=>50)); ?></td>

                            </tr>

                            <tr>
                                <td> <?php echo $form->labelEx($mcReattachment,'mc'); ?></td>
                                <td> <?php echo $form->textField($mcReattachment,'mc',array('rows'=>6, 'cols'=>50)); ?></td>

                            </tr>

                            <tr>
                                <td><?php echo $form->labelEx($mcReattachment,'legal_business_name'); ?> </td>
                                <td> <?php echo $form->textField($mcReattachment,'legal_business_name',array('rows'=>6, 'cols'=>50)); ?></td>
                            </tr>

                            <tr>
                                <td> <?php echo $form->labelEx($mcReattachment,'office_name'); ?></td>
                                <td> <?php echo $form->textField($mcReattachment,'office_name',array('rows'=>6, 'cols'=>50)); ?></td>

                            </tr>

                            <tr>
                                <td><?php echo $form->labelEx($mcReattachment,'date'); ?></td>
                                <td> <?php echo $form->textField($mcReattachment,'date',array('rows'=>6, 'cols'=>50)); ?></td>

                            </tr>

                            <tr  style="display: none">
                                <td> <?php echo $form->labelEx($mcReattachment,'created_by'); ?></td>
                                <td><?php echo $form->textField($mcReattachment,'created_by',array('value'=>Yii::app()->user->id));
                                    echo $form->textField($mcReattachment,'id');?></td>

                            </tr>

                            <tr style="display: none;">
                                <td> <?php echo $form->labelEx($mcReattachment,'creation_datetime'); ?></td>
                                <td> <?php echo $form->textField($mcReattachment,'creation_datetime',array('value'=>date('Y-m-d h:i:sa'))); ?></td>

                            </tr>
                        </table>



                        <?php $this->endWidget(); ?>

                        <div class="col-lg-12" style="text-align: right;">
                            <input type="button" class="btn btn-info" value="Print Form" disabled="disabled">
                            <input type="button" class="btn btn-success" value="Save Form" onclick="processservicety33()">
                        </div>

                </div>
            </div>
        </div>

        <?php } ?>




       </div>

       <!-- <div class="col-lg-3">

        </div>-->
    </div>

<div class="panel panel-default" style="margin-top:30px;">
    <div class="panel-heading">NOTES</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="nameon_card">Enter Notes from Customer </label>
            <br />
            <div class="alert alert-success" id="successnotes" style="display: none"></div>
            <div class="alert alert-danger" id="errornotes" style="display: none"></div>
            <div class="row">
                <input class="form-control" id="quote_id" type="hidden" value="<?php echo $model->quote_id; ?>">

                <div class="col-lg-11"><div class="form-group"> <input class="form-control" name="DotTrackerQuote[shipper_notes]" id="DotTrackerQuote_shipper_notes" type="text"></div></div>
                <div class="col-lg-1"><div class="form-group"> <input type="button" class="form-control btn btn-info" value="Add" onclick="addNote();"></div></div>

            </div>

            <div id="noteArea">
                <?php
                $criteria = new CDbCriteria();
                $criteria->addCondition("quote_id = ".$model->quote_id);

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

                ?>
            </div>

        </div>
    </div>
</div>



	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'form_details'); */?>
		<?php /*echo $form->textArea($model,'form_details',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'form_details'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'extrafields'); */?>
		<?php /*echo $form->textArea($model,'extrafields',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'extrafields'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'created_by'); */?>
		<?php /*echo $form->textArea($model,'created_by',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'created_by'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'creation_datetime'); */?>
		<?php /*echo $form->textField($model,'creation_datetime'); */?>
		<?php /*echo $form->error($model,'creation_datetime'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'status'); */?>
		<?php /*echo $form->textField($model,'status'); */?>
		<?php /*echo $form->error($model,'status'); */?>
	</div>-->



</div><!-- form -->

<style>
    .formTabs
    {
        border: 2px solid #aaa4a4;
        padding: 6px;
        border-radius: 10px;
    }

    .formTabActive
    {
        border: 2px solid #88e38c;
    }
</style>


<script>

    $(document).ready(function(){
        var dateToday = new Date();
        $('#DotTrackerMcDetachment_date').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });
        $('#DotTrackerMcReattachment_date').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });
    });


    function checkBtn()
    {

    }

    function processservicety30()
    {
        var arrData=$('#dot-tracker-mc-detachment-form').serializeArray();

        var ajaxUrl='<?php echo Yii::app()->createUrl('dotTrackerMcDetachment/updateAjax');?>';
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: arrData,
            dataType: "json",
            success: function(html){
                console.log(html);
                if(html.success==true)
                {
                    //alert('savesccc');
                    $('#servicety30').val('1');
                    $("#successservicety30").html(html.msg);
                    $("#successservicety30").fadeIn();
                    setTimeout(function () {
                        $("#successservicety30").fadeOut();

                    },2000);
                    $('#servicety30S').fadeIn();
                    $('#DotTrackerMcDetachment_id').val(html.id);


                    var formDetails=JSON.parse($('#DotTrackerOrder_form_details').val());
                    console.log(formDetails);
                    formDetails.servicety30=html.id;
                    console.log(formDetails);
                    $('#DotTrackerOrder_form_details').val(JSON.stringify(formDetails));



                }
                else{
                   // alert('error');
                    $('#servicety30').val('0');
                    $("#errorservicety30").html(html.msg);
                    $("#errorservicety30").fadeIn();
                    setTimeout(function () {
                        $("#errorservicety30").fadeOut();

                    },2000);
                    $('#servicety30S').fadeOut();
                    $('#DotTrackerMcDetachment_id').val(html.id);


                }

            }
        });
    }



    function processservicety33()
    {
        var arrData=$('#dot-tracker-mc-detachment-form1').serializeArray();

        var ajaxUrl='<?php echo Yii::app()->createUrl('mcReattachmentForm/updateAjax');?>';
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: arrData,
            dataType: "json",
            success: function(html){
                console.log(html);
                if(html.success==true)
                {
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
                    $("#successnotes").html(html.msg);
                    $("#successnotes").fadeIn();
                    setTimeout(function () {
                        $("#successnotes").fadeOut();

                    },2000);



                }
                else{
                    // alert('error');
                    $("#errornotes").html(html.msg);
                    $("#errornotes").fadeIn();
                    setTimeout(function () {
                        $("#errornotes").fadeOut();

                    },2000);


                }

            }
        });

    }






</script>