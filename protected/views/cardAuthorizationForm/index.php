<?php
/* @var $this CardAuthorizationFormController */

$this->breadcrumbs=array(
	'Card Authorization Form',
);
?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>-->



    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
    	<h1 class="page-header"><small>CREDIT CARD AUTHORIZATION FORM</small></h1>
    </div>
    
    <!-- Content Row -->
    <div class="row table-responsive">

    	<table class="table table-bordered">
		    <tbody>
		      <tr><th class="bgColor">CREDIT CARD INFORMATION</th></tr>
		      <tr>
		      	<td><table cellspacing="0" cellspacing="0" border="1"><tr>
			      	<td class="colHead1">NAME ON CREDIT CARD</td>
			      	<td><input type="text" name="cardHolderName"></td>
		      	</tr></table></td>
		      </tr>
		      <tr>
		      	<td><table cellspacing="0" cellspacing="0" border="1"><tr>
			      	<td class="colHead1">TYPE OF CREDIT CARD</td>
			      	<td><input type="radio" name="cardType">&nbsp;VISA</td>
			      	<td><input type="radio" name="cardType">&nbsp;MC</td>
			      	<td><input type="radio" name="cardType">&nbsp;AMEX</td>
			      	<td><input type="radio" name="cardType">&nbsp;DISCOVER</td>
			      	<td><input type="radio" name="cardType">&nbsp;OTHER</td>
		      	</tr></table></td>
		      </tr>
		      <tr>
		      	<td><table cellspacing="0" cellspacing="0" border="1"><tr>
			      	<td class="colHead1">CARD NUMBER</td>
			      	<td><input type="text" name="cardNumber"></td>
		      	</tr></table></td>
		      </tr>
		      <tr>
		      	<td><table cellspacing="0" cellspacing="0" border="1"><tr>
			      	<td class="colHead1">EXPIRATION DATE</td>
			      	<td><input type="text" name="cardNumber"></td>
			      	<td class="colHead1">SECURITY CODE</td>
			      	<td><input type="text" name="securityCode"></td>
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
			      	<td><input type="text" name="busAddress"></td>
		      	</tr></table></td>
		      </tr>
		      <tr>
		      	<td><table cellspacing="0" cellspacing="0" border="1"><tr>
			      	<td class="colHead1">CITY</td>
			      	<td><input type="text" name="bCity"></td>
			      	<td>STATE</td>
			      	<td><input type="text" name="bState"></td>
			      	<td>ZIP CODE</td>
			      	<td><input type="text" name="bZip"></td>
		      	</tr></table></td>
		      </tr>
		      <tr>
		      	<td><table cellspacing="0" cellspacing="0" border="1"><tr>
			      	<td class="colHead1">PHONE</td>
			      	<td><input type="text" name="bPhone"></td>
			      	<td>EMAIL</td>
			      	<td><input type="text" name="bEmail"></td>
			      	<td>FAX NUMBER</td>
			      	<td><input type="text" name="bFax"></td>
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
				      	<td><input type="text" name="userName"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">COMPANY</td>
				      	<td><input type="text" name="userCompany"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">PHONE NUMBER</td>
				      	<td><input type="text" name="userPhone"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">EMAIL ADDRESS</td>
				      	<td><input type="text" name="userName"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">DRIVER'S LICENSE NUMBER</td>
				      	<td><input type="text" name="drivLicense"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">RELATION TO OWNER</td>
				      	<td><input type="text" name="ownerRel"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">TYPE OF CHARGES</td>
				      	<td><input type="text" name="typeCharge"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">AUTHORIZED AMOUNT</td>
				      	<td><input type="text" name="authAmt"></td>
			      	</tr>
			      	<tr>
				      	<td class="colHead1">DATE OF CHARGE</td>
				      	<td><input type="text" name="chargeDt"></td>
			      	</tr>
		      	</table></td>
		      </tr>
		    </tbody>
		</table>
		
		<div style="clear: both; height: 20px;"></div>

		<table>
			<tr><td class="bgColor" style="font-size: 16px; font-weight: 600;">AUTHORIZATION OF CARD USER</td></tr>
			<tr><td>
					___ - I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate. <br /><br />
					___ - I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If 
					additional charges are going to be authorized a new form will have to be completed.
				</td>
			</tr>
		</table>

		<div style="clear: both; height: 20px;"></div>

		<table class="table table-bordered">
		    <tbody>
		      <tr>
		      	  <th colHead1>CARDHOLDER NAME</th>
                  <td><input type="text" name="cardHolderName"></td>
		      </tr>
		      <tr>
		      	<td colspan="2"><table><tr>
		      	  <th colHead1>SIGNATURE</th>
                  <td><input type="text" name="sign"></td>
                  <td>DATE</td>
                  <td><input type="text" name="date"></td>
		      	</tr></table></td>
		      </tr>
		    </tbody>
		</table>
    </div>
    <!-- /.row -->
        

    <style type="text/css">
    	table { margin-bottom: 0px!important;}
		.colHead1{ width: 20%; border-right: #ccc solid 1px; }
		input[type="text"]{ width: 50%; font-size: 13px; border:#ccc solid 1px; padding: 5px 10px; }
		.bgColor{ background-color: #f5f5f5; }
    </style>