<?php
/* @var $this CorporationFilingFormController */

$this->breadcrumbs=array(
	'Corporation Filing Form',
);
?>
<h1>Corporation Filing Form(LLC,INC )</h1>

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
                    <td><input type="text" name="corporationName" id="corporationName" class="inputBox"/></td>
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
                	<td><input type="text" name="corporationAdd1" id="corporationAdd1" class="inputBox"/></td>
                    <td><input type="text" name="city1" id="city1" class="inputBox"/></td>
                    <td><input type="text" name="state1" id="state1" class="inputBox"/></td>
                    <td><input type="text" name="zipCode1" id="zipCode1" class="inputBox"/></td>
                </tr>
                <tr><td colspan="4"><br  /><hr /></td></tr>
                <tr>
                    <td width="40%">b. Initial Mailing Address of Corporation, <b>if different than item 2a</b></td>
                    <td width="20%">City (no abbreviations)</td>
                    <td width="20%">State</td>
                    <td width="15%">Zip Code</td>
                </tr>
                <tr>
                	<td><input type="text" name="corporationMailAdd1" id="corporationMailAdd1" class="inputBox"/></td>
                    <td><input type="text" name="city2" id="city2" class="inputBox"/></td>
                    <td><input type="text" name="state2" id="state2" class="inputBox"/></td>
                    <td><input type="text" name="zipCode2" id="zipCode2" class="inputBox"/></td>
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
                	<td><input type="text" name="agentFname" id="agentFname" class="inputBox"/></td>
                    <td><input type="text" name="agentMname" id="agentMname" class="inputBox"/></td>
                    <td><input type="text" name="agentLname" id="agentLname" class="inputBox"/></td>
                    <td><input type="text" name="agentSuffix" id="agentSuffix" class="inputBox"/></td>
                </tr>
                <tr><td colspan="4"><br  /><hr /></td></tr>
                <tr>
                    <td width="40%">b.   Street Address (if agent is not a corporation) - <b>Do not enter a P.O. Box</b></td>
                    <td width="25%">City (no abbreviations)</td>
                    <td width="15%">State</td>
                    <td width="15%">Zip Code</td>
                </tr>
                <tr>
                	<td><input type="text" name="agentSadd" id="agentSadd" class="inputBox"/></td>
                    <td><input type="text" name="agentCity2" id="agentCity2" class="inputBox"/></td>
                    <td><input type="text" name="agentState2" id="agentState2" class="inputBox"/></td>
                    <td><input type="text" name="agentZipCode2" id="agentZipCode2" class="inputBox"/></td>
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
                    <td><input type="text" name="totNoissue" id="totNoissue" class="inputBox"/></td>
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

<style type="text/css">
	.inputBox{ height:35px; width:90%; border:#E1DFE1 solid 1px; padding:0 15px;}
</style>