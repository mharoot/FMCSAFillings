<?php
/* @var $this EmployeePullNotice3Controller */
/* @var $model DotTrackerEpn3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-epn3-form',
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
                    <h4>PULL NOTICE AGREEMENT</h4>
                </div>

                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="nameon_card">REQUESTER</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'requester',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="nameon_card">THIS AGREEMENT is made and entered into this</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'day',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 text-right">
                                        <div class="form-group">
                                            <label for="nameon_card">day of</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'month',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 text-right">
                                        <div class="form-group">
                                            <label for="nameon_card">20</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'year',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        between the STATE OF CALIFORNIA, acting by and through the DEPARTMENT OF MOTOR VEHICLES, herein called SELLER, and
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'party',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div><div class="row">
                                    <div class="col-sm-3">
                                        Email Address
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext1',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        Mobile
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'ext2',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">COMPANY NAME (PLEASE PRINT)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">SIGNATURE OF AUTHORIZED DMV REPRESENTATIVE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'company_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                            <div class="form-group">
                                                <?php //echo $form->textField($model,'auth_sign',array('class'=>'form-control')); ?>
                                            </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">MAILING ADDRESS</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">SIGNATURE OF AUTHORIZED REPRESENTATIVE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'mailing_address',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <?php //echo $form->textField($model,'auth_sign',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">CITY</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">STATE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="city">ZIP</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'zip',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">PRINT NAME AND TITLE OF AUTHORIZED REPRESENTATIVE</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <?php echo $form->textField($model,'auth_name',array('class'=>'form-control')); ?>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                    </div>
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


<?php $this->endWidget(); ?>

</div><!-- form -->