<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
    'Credit Card Authorizations'=>array('index'),
    $data->id,
);

$this->menu=array(
    array('label'=>'Create Credit Card Authorization', 'url'=>array('create')),
    array('label'=>'Authorize Credit Card Authorization', 'url'=>array('authorizeSignature', 'id'=>$data->id),array('target'=>'_blank')),
    array('label'=>'Update Credit Card Authorization', 'url'=>array('update', 'id'=>$data->id)),
    array('label'=>'Manage Credit Card Authorization', 'url'=>array('admin')),
);
?>

<div class="view">
   <center> <img src="http://www.dotoperatingauthority.com/wp-content/themes/dot/images/slogo.png" style="padding:20px;"></center>
    <div class="row table-responsive">

        <table class="table     ">
            <tbody>
            <tr><th class="bgColor">CREDIT CARD INFORMATION</th></tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">NAME ON CREDIT CARD</td>
                            <td><?php echo CHtml::encode($data->cc_name); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">TYPE OF CREDIT CARD</td>
                            <td><input type="radio" value="VISA" name="cardType" <?php echo ($data->cc_type=='VISA')?'checked':'disabled'; ?> >&nbsp;VISA</td>
                            <td><input type="radio" value="MC" name="cardType" <?php echo ($data->cc_type=='MC')?'checked':'disabled'; ?>  >&nbsp;MC</td>
                            <td><input type="radio" value="AMEX" name="cardType" <?php echo ($data->cc_type=='AMEX')?'checked':'disabled'; ?>  >&nbsp;AMEX</td>
                            <td><input type="radio" value="DISCOVER" name="cardType" <?php echo ($data->cc_type=='DISCOVER')?'checked':'disabled'; ?> >&nbsp;DISCOVER</td>
                            <td><input type="radio" value="OTHER" name="cardType" <?php echo ($data->cc_type=='OTHER')?'checked':'disabled'; ?>  >&nbsp;OTHER


                            </td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">CARD NUMBER</td>
                            <td><?php echo CHtml::encode($data->cc_number); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">EXPIRATION DATE</td>
                            <td><?php echo CHtml::encode($data->cc_expdate); ?></td>
                            <td class="colHead1">SECURITY CODE</td>
                            <td><?php echo CHtml::encode($data->cc_seccode); ?></td>
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
                            <td><?php echo CHtml::encode($data->address); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">CITY</td>
                            <td><?php echo CHtml::encode($data->city); ?></td>
                            <td>STATE</td>
                            <td><?php echo CHtml::encode($data->state); ?></td>
                            <td>ZIP CODE</td>
                            <td><?php echo CHtml::encode($data->zipcode); ?></td>
                        </tr></table></td>
            </tr>
            <tr>
                <td><table cellspacing="0" cellspacing="0" border="1"><tr>
                            <td class="colHead1">PHONE</td>
                            <td><?php echo CHtml::encode($data->phone); ?></td>
                            <td>EMAIL</td>
                            <td><?php echo CHtml::encode($data->email); ?></td>
                            <td>FAX NUMBER</td>
                            <td><?php echo CHtml::encode($data->fax); ?></td>
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
                            <td><?php echo CHtml::encode($data->auth_name); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">COMPANY</td>
                            <td><?php echo CHtml::encode($data->auth_company); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">PHONE NUMBER</td>
                            <td><?php echo CHtml::encode($data->auth_phoneno); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">EMAIL ADDRESS</td>
                            <td><?php echo CHtml::encode($data->auth_email); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">DRIVER'S LICENSE NUMBER</td>
                            <td><?php echo CHtml::encode($data->auth_drivlicense); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">RELATION TO OWNER</td>
                            <td><?php echo CHtml::encode($data->auth_relationuser); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">TYPE OF CHARGES</td>
                            <td><?php echo CHtml::encode($data->auth_charges); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">AUTHORIZED AMOUNT</td>
                            <td><?php echo CHtml::encode($data->auth_amount); ?></td>
                        </tr>
                        <tr>
                            <td class="colHead1">DATE OF CHARGE</td>
                            <td><?php echo CHtml::encode($data->date_of_charge); ?></td>
                        </tr>
                    </table></td>
            </tr>
            </tbody>
        </table>

        <div style="clear: both; height: 20px;"></div>

        <table>
            <tr><td class="bgColor" style="font-size: 16px; font-weight: 600;">AUTHORIZATION OF CARD USER</td></tr>
            <tr><td>
                    <input type="checkbox" id="accept1" checked disabled> - I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate. <br /><br />
                    <input type="checkbox" id="accept2" checked disabled> - I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If
                    additional charges are going to be authorized a new form will have to be completed.
                </td>
            </tr>
        </table>

        <div style="clear: both; height: 20px;"></div>

        <table class="table table-bordered">
            <tbody>
            <tr>
                <td class="colHead1">CARDHOLDER NAME</td>
                <td><?php echo CHtml::encode($data->ccholder_name); ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <table><tr>
                            <td class="colHead1" style="border:none!important;">SIGNATURE</td>
                            <td><img src="<?php echo Yii::app()->request->baseUrl.'/'.$data->sign_link; ?>" style="/* padding:20px; */width: 150px;"></td>
                            <td>DATE</td>
                            <td><?php echo CHtml::encode($data->date); ?>
                                <?php //echo $form->hiddenField($model,'created_by',array('value'=>Yii::app()->user->id)); ?>
                            </td>
                        </tr>
                    </table></td>
            </tr>
            </tbody>
        </table>
    </div>

	<!--<b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); */?>:</b>
	<?php /*echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('cc_name')); */?>:</b>
	<?php /*echo CHtml::encode($data->cc_name); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('cc_type')); */?>:</b>
	<?php /*echo CHtml::encode($data->cc_type); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('cc_number')); */?>:</b>
	<?php /*echo CHtml::encode($data->cc_number); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('cc_expdate')); */?>:</b>
	<?php /*echo CHtml::encode($data->cc_expdate); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('cc_seccode')); */?>:</b>
	<?php /*echo CHtml::encode($data->cc_seccode); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('address')); */?>:</b>
	<?php /*echo CHtml::encode($data->address); */?>
	<br />

	--><?php /*/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipcode')); ?>:</b>
	<?php echo CHtml::encode($data->zipcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_name')); ?>:</b>
	<?php echo CHtml::encode($data->auth_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_company')); ?>:</b>
	<?php echo CHtml::encode($data->auth_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_phoneno')); ?>:</b>
	<?php echo CHtml::encode($data->auth_phoneno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_email')); ?>:</b>
	<?php echo CHtml::encode($data->auth_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_drivlicense')); ?>:</b>
	<?php echo CHtml::encode($data->auth_drivlicense); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_relationuser')); ?>:</b>
	<?php echo CHtml::encode($data->auth_relationuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_charges')); ?>:</b>
	<?php echo CHtml::encode($data->auth_charges); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth_amount')); ?>:</b>
	<?php echo CHtml::encode($data->auth_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_charge')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ccholder_name')); ?>:</b>
	<?php echo CHtml::encode($data->ccholder_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_link')); ?>:</b>
	<?php echo CHtml::encode($data->sign_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>

<style type="text/css">
    table { margin-bottom: 0px!important;}
    .colHead1{ width: 20%; border-right: #ccc solid 1px; }
    input[type="text"]{ width: 50%; font-size: 13px; border:#ccc solid 1px; padding: 5px 10px; }
    .bgColor{ background-color: #f5f5f5; }
</style>