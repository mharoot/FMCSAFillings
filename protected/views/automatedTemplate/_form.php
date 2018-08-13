<?php
/* @var $this AutomatedTemplateController */
/* @var $model DotTrackerEmailtemp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-emailtemp-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


    <div class="row" style="margin-top: 30px;">

        <div class="col-md-9 ">
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">EMAIL TEMPLATE INFORMATION</div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="nameon_card">TEMPLATE NAME</label>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'type',array('class'=>'form-control','placeholder'=>'Enter Email Template Name')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="nameon_card">FROM EMAIL</label>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'from_email',array('class'=>'form-control','placeholder'=>'Enter Sender Name')); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="nameon_card">FROM NAME</label>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'from_name',array('class'=>'form-control','placeholder'=>'Enter Sender Email')); ?>
                                    </div>
                                </div>
                            </div>


                            <?php echo $form->textArea($model,'emaildata',array('class'=>'form-control')); ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">PERSONALIZATION INFORMATION</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success" id="copySucc" style="display: none;"></div>
                                    <p>
                                        Use the following codes in your email text to further customize your emails. They will be replaced with information when the email is sent.
                                    </p>
                                </div>
                                <div class="col-lg-6">

                                    <table class="table table-striped" >
                                        <tr   class="per-header">
                                            <td>Form Field</td>
                                            <td>Email Code</td>
                                        </tr>
                            <?php

                            $exc_arr=array('mailCount','smsCount','last_update');
                            //echo '<pre>';
                            $arr=DotTrackerQuote::model()->attributeLabels();
                           $ele=count($arr);
                           $lim=($ele/2);
                           $c=1;
                            foreach ($arr as $index=>$val)
                            {
                                if(in_array($index,$exc_arr)!='-1')
                                {
                                    echo '<tr>
                                            <td>'.$val.'</td>
                                            <td><span class="copy">['.$index.']</span><i class="fa fa-copy cpy-btn" data-clipboard-text="['.$index.']" ></i> </td>
                                        </tr>';
                                    $c++;
                                }

                                if($c==$lim)
                                {
                                    echo '</table>

                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-striped" ><tr class="per-header">
                                            <td>Form Field</td>
                                            <td>Email Code</td>
                                        </tr>';
                                }



                            }


                            ?>
                            </table>
                                </div>

                            </div>










                        </div>
                    </div>
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

        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>

                <a href="<?php echo Yii::app()->createUrl('automatedTemplate/admin')?>" target="_blank" class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>
                    &nbsp;Manage Autmated Email Templates </a>

            </div>
        </div>
    </div>




	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'emaildata'); */?>

		<?php /*echo $form->error($model,'emaildata'); */?>
	</div>-->

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'created_by'); */?>
		<?php /*echo $form->textField($model,'created_by',array('value'=>'')); */?>
		<?php /*echo $form->error($model,'created_by'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'creationdate_time'); */?>
		<?php /*echo $form->textArea($model,'creationdate_time',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'creationdate_time'); */?>
	</div>-->

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'type'); */?>
		<?php /*echo $form->textField($model,'type',array('placeholder'=>'Enter Email Template Name')); */?>
		<?php /*echo $form->error($model,'type'); */?>
	</div>-->



<?php $this->endWidget(); ?>

</div><!-- form -->



<script>
    $(document).ready(function(){
        var clipboard =  new ClipboardJS('.cpy-btn');

        clipboard.on('success', function(e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);

            $("#copySucc").html('" '+e.text+' " copied to clipboard.');
            $("#copySucc").fadeIn();

            setTimeout(function () {
                $("#copySucc").fadeOut();

            },1300);

            e.clearSelection();
        });
    });
</script>
<style>

    .per-header
    {
        background: dimgray !important;
        color: #fff !important;
    }

    .cpy-btn
    {
        margin-left: 10px;
        float: right;
        padding: 4px;

        background: dimgray;
        color:#fff !important;

        border-radius: 10px;

        cursor: pointer;
    }
</style>