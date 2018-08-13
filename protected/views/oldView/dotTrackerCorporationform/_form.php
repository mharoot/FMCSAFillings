<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-corporationform-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <table cellpadding="0" cellspacing="0" width="100%">
        <!-- Step 1-->
        <tr>
            <td><b>1. Corporate Name</b></td>
        </tr>
        <tr>
            <td>
                <table cellpadding="10" cellspacing="10" width="100%" style="border:#ccc solid 1px; padding:10px;">
                    <tr>
                        <td width="22%">The name of the corporation is</td>
                        <td><?php echo $form->textField($model,'name',array('class'=>'inputBox')); ?></td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Step 2-->
        <tr>
            <td><b>2. Business Addresses </b>(Enter the complete business addresses.)</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="10" cellspacing="10" width="100%" style="border:#ccc solid 1px; padding:10px;">
                    <tr>
                        <td width="40%">a. Initial Street Address of Corporation - <b>Do not list a P.O. Box</b></td>
                        <td width="20%">City (no abbreviations)</td>
                        <td width="20%">State</td>
                        <td width="15%">Zip Code</td>
                    </tr>
                    <tr>
                        <td><?php echo $form->textField($model,'street',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'city',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'state',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'zip',array('class'=>'inputBox')); ?></td>
                    </tr>
                    <tr><td colspan="4"><br  /><hr /></td></tr>
                    <tr>
                        <td width="40%">b. Initial Mailing Address of Corporation, <b>if different than item 2a</b></td>
                        <td width="20%">City (no abbreviations)</td>
                        <td width="20%">State</td>
                        <td width="15%">Zip Code</td>
                    </tr>
                    <tr>
                        <td><?php echo $form->textField($model,'m_street',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'m_city',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'m_state',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'m_zip',array('class'=>'inputBox')); ?></td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Step 3-->
        <tr>
            <td><b>3. Service of Process </b>(Must provide either Individual OR Corporation.)<br /><b>INDIVIDUAL - </b> Complete Items 3a and 3b only.  Must include agent's full name and California street address.
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="10" cellspacing="10" width="100%" style="border:#ccc solid 1px; padding:10px;">
                    <tr>
                        <td width="40%">a. California Agent's First Name (if agent is not a corporation)</td>
                        <td width="25%">Middle Name</td>
                        <td width="25%">Last Name</td>
                        <td width="10%">Suffix </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->textField($model,'ca_fname',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'ca_mname',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'ca_lname',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'ca_suffix',array('class'=>'inputBox')); ?></td>
                    </tr>
                    <tr><td colspan="4"><br  /><hr /></td></tr>
                    <tr>
                        <td width="40%">b.   Street Address (if agent is not a corporation) - <b>Do not enter a P.O. Box</b></td>
                        <td width="25%">City (no abbreviations)</td>
                        <td width="15%">State</td>
                        <td width="15%">Zip Code</td>
                    </tr>
                    <tr>
                        <td><?php echo $form->textField($model,'ag_street',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'ag_city',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'ag_state',array('class'=>'inputBox')); ?></td>
                        <td><?php echo $form->textField($model,'ag_zip',array('class'=>'inputBox')); ?></td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Step 4-->
        <tr>
            <td><b>4. Shares</b> (Enter the number of shares the corporation is authorized to issue. Do not leave blank or enter zero (0).)</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="10" cellspacing="10" width="100%" style="border:#ccc solid 1px; padding:10px;">
                    <tr><td colspan="2">This corporation is authorized to issue only one class of shares of stock.</td></tr>
                    <tr>
                        <td width="50%">The total number of shares which this corporation is authorized to issue is</td>
                        <td><?php echo $form->textField($model,'shares',array('class'=>'inputBox')); ?></td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Step 5-->
        <tr>
            <td><b>4. Purpose Statement </b>(Do not alter the Purpose Statement.)</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="10" cellspacing="10" width="100%" style="border:#ccc solid 1px; padding:10px;">
                    <tr><td>The  purpose  of  the  corporation  is  to  engage  in  any  lawful  act  or  activity  for  which  a  corporation  may  be  organized
                            under the General Corporation Law of California other than the banking business, the trust company business or the
                            practice of a profession permitted to be incorporated by the California Corporations Code.</td></tr>
                </table>
            </td>
        </tr>

        <!-- Step 6-->
        <tr>
            <td><b>6. Read and Sign Below</b> (This form must be signed by each incorporator. <a href="http://bpd.cdn.sos.ca.gov/corp/pdf/articles/arts-gs.pdf">See instructions</a> for signature requirements.)</td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td width="50%">
                            <br />
                            ---------------------------------------------------------------------------------<br />
                            Signature
                        </td>
                        <td width="50%">
                            <br />
                            ---------------------------------------------------------------------------------<br />
                            Type or Print Name
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>
	<?php /*echo $form->errorSummary($model); */?><!--

	<div class="row">
		<?php /*echo $form->labelEx($model,'name'); */?>
		<?php /*echo $form->textField($model,'name',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'name'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'street'); */?>
		<?php /*echo $form->textField($model,'street',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'city'); */?>
		<?php /*echo $form->textField($model,'city',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'state'); */?>
		<?php /*echo $form->textField($model,'state',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'zip'); */?>
		<?php /*echo $form->textField($model,'zip',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_street'); */?>
		<?php /*echo $form->textField($model,'m_street',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'m_street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_city'); */?>
		<?php /*echo $form->textField($model,'m_city',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'m_city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_state'); */?>
		<?php /*echo $form->textField($model,'m_state',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'m_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'m_zip'); */?>
		<?php /*echo $form->textField($model,'m_zip',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'m_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ca_fname'); */?>
		<?php /*echo $form->textField($model,'ca_fname',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ca_fname'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ca_mname'); */?>
		<?php /*echo $form->textField($model,'ca_mname',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ca_mname'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ca_lname'); */?>
		<?php /*echo $form->textField($model,'ca_lname',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ca_lname'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ca_suffix'); */?>
		<?php /*echo $form->textField($model,'ca_suffix'); */?>
		<?php /*echo $form->error($model,'ca_suffix'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ag_street'); */?>
		<?php /*echo $form->textField($model,'ag_street',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ag_street'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ag_city'); */?>
		<?php /*echo $form->textField($model,'ag_city',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ag_city'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ag_state'); */?>
		<?php /*echo $form->textField($model,'ag_state',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ag_state'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'ag_zip'); */?>
		<?php /*echo $form->textField($model,'ag_zip',array('class'=>'inputBox')); */?>
		<?php /*echo $form->error($model,'ag_zip'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'shares'); */?>
		<?php /*echo $form->textField($model,'shares'); */?>
		<?php /*echo $form->error($model,'shares'); */?>
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

	<div class="row buttons">
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); */?>
	</div>-->

<?php $this->endWidget(); ?>

</div><!-- form -->

<style type="text/css">
    .inputBox{ height:35px; width:90%; border:#E1DFE1 solid 1px; padding:0 15px;}
    .span-19{width: 100% !important;}
</style>