<?php
/* @var $this QuotesController */

$this->breadcrumbs=array(
	'Quotes',
);
?>
<div class="row">
            
        <!-- Content Column -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h4>ADD QUOTE</h4>
                    </div>
                    <!-- Contact Form -->
                    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">CUSTOMER INFORMATION</div>
                          <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nameon_card">Select Shipper</label>
                                            <br />
                                            <select name="shipper">
                                                <option value="">Select</option>
                                                <option value="New Shipper">New Shipper</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="nameon_card">First Name</label>
                                            <input class="form-control" id="fName" name="fName" size="30" type="text" />    
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="nameon_card">Last Name</label>
                                            <input class="form-control" id="lName" name="lName" size="30" type="text" />    
                                        </div>
                                        <div class="form-group">
                                            <label for="nameon_card">Company</label>
                                            <input class="form-control" id="company" name="company" size="30" type="text" />    
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nameon_card">Email</label>
                                            <input class="form-control" id="email" name="email" size="30" type="text" />
                                        </div>

                                        <div class="form-group">
                                            <label for="nameon_card">Phone 1</label>
                                            <input class="form-control" id="phone1" name="phone1" size="30" type="text" />    
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nameon_card">Mobile</label>
                                            <input class="form-control" id="mobile" name="mobile" size="30" type="text" />    
                                        </div>
                                        <div class="form-group">
                                            <label for="nameon_card">Fax</label>
                                            <input class="form-control" id="fax" name="fax" size="30" type="text" />    
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="nameon_card">Address</label>
                                            <input class="form-control" id="address" name="address" size="30" type="text" />
                                        </div>

                                        <div class="form-group">
                                            <label for="nameon_card">City</label>
                                            <input class="form-control" id="city" name="city" size="30" type="text" />    
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="nameon_card">State</label>
                                            <br />
                                            <select name="state">
                                                <option value="">Select State</option>
                                                <option value="">Select a state</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">Dist. of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="GU">Guam</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="CP">Canada-Province Not Specified</option>
                                                <option value="AB">Canada-Alberta</option>
                                                <option value="BC">Canada-British Columbia</option>
                                                <option value="MB">Canada-Manitoba</option>
                                                <option value="NB">Canada-New Brunswick</option>
                                                <option value="NL">Canada-Newfoundland</option>
                                                <option value="NT">Canada-Northwest Territories</option>
                                                <option value="NS">Canada-Nova Scotia</option>
                                                <option value="NU">Canada-Nunavut</option>
                                                <option value="ON">Canada-Ontario</option>
                                                <option value="PE">Canada-Prince Edward Island</option>
                                                <option value="QC">Canada-Quebec</option>
                                                <option value="SK">Canada-Saskatchewan</option>
                                                <option value="YT">Canada-Yukon</option>
                                                <option value="OC">OTHER COUNTRIES</option>
                                            </select>   
                                        </div>
                                        <div class="form-group">
                                            <label for="nameon_card">Zip</label>
                                            <input class="form-control" id="zip" name="zip" size="30" type="text" />    
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
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety1">S Corporation
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety2">C Corporation
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety3">Limited Liability Company (LLC)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety4">Limited Liability Partnership (LLP)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety5">Limited Partnership (LP)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety6">Fictitious Business Name (DBA)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety7">USDOT #
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety8">MC # Carrier Authority
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety9">MC # Broker Authority
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety10">Freight Forwarder (FF #)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety11">California DOT # (CA #)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety12">Motor Carrier Permit (MCP)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety13">Employee Pull Notice (EPN)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety14">Hazardous Materials Registration (CA)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety15">Hazardous Materials Registration (Federal)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety16">BOC-3
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety17">International Fuel Tax Agreement (IFTA)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety18">Highway Use Tax (2290)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety19">Unified Carrier Registration (UCR)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety20">Texas Operating Authority
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety21">BMC-84 Surety Bond
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety22">BMC-85 Trust Bond
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety23">International Registration Plan (IRP)
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety24">New Mexico Weight Distance Permit
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety25">Oregon Fuel Tax Permit
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety26">New York HUT Permit
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety27">KYU Weight Distance Permit
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety28">Biennial Update
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety29">MC# Reinstatement
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety30">MC# Detachment
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety31">MC# Revocation
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety32">MC# Name Change
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety33">MC# Reattachment
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety34">USDOT# Reactivation
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="checkbox-inline">
                                              <input type="checkbox" name="servicety35">USDOT# Deactivation
                                            </label>
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
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="city">Card Details</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <input class="form-control" id="bCity" name="bCity" size="30" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group" style="float: right;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <style type="text/css">
            select{
                width: 100%;
                border: #ccc solid 1px;
                border-radius: 3px;
                height: 35px;
            }
        </style>