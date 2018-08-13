<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

?>

<div class="view" id="printView" style="margin-top:-30px;">
    <div class="col-md-12 ">
        <div class="row">
            <a id="scrollBtn" style="float: right; "><i class="scrollBut fa fa-2x fa-angle-down"></i> </a>
        </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">


                <div class="col-md-12 hidden-xs">
            <div class="row">
                <center><div class="col-sm-12"><img src="http://www.dotoperatingauthority.com/wp-content/themes/dot/images/slogo.png" width="" height=""></div></center>
                <div class="col-sm-12" style="text-align: center;"><h4>CREDIT CARD AUTHORIZATION FORM</h4></div>

                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="trBg" scope="col" colspan="2">CREDIT CARD INFORMATION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td width="30%">NAME ON CREDIT CARD</td>
                            <td><?php echo CHtml::encode($data->cc_name); ?></td>
                        </tr>
                        <tr>
                            <td width="30%">TYPE OF CREDIT CARD</td>
                            <td><?php echo CHtml::encode($data->cc_type); ?></td>
                        </tr>
                        <tr>
                            <td width="30%">CARD NUMBER</th>
                            <td><?php echo CHtml::encode($data->cc_number); ?></td>
                        </tr>
                        <tr>
                            <td width="30%">EXPIRATION DATE</td>
                            <td width="70%">
                                <table width="100%"  border="0">
                                    <tr>
                                        <td width="50%"><?php echo CHtml::encode($data->cc_expdate); ?></td>
                                        <td width="20%">Security code</td>
                                        <td><?php echo CHtml::encode($data->cc_seccode); ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="trBg" scope="col" colspan="6">BILLING ADDRESS</th>
                            </tr>
                            </thead>
                            <tr>
                                <td width="17%"  >STREET ADDRESS</td>
                                <td width="80%" colspan="5"><?php echo CHtml::encode($data->address); ?></td>
                            </tr>
                            <tr>
                                <td width="17%">CITY</td>
                                <td width="17%"><?php echo CHtml::encode($data->city); ?></td>
                                <td width="17%">STATE</td>
                                <td width="17%"><?php echo CHtml::encode($data->state); ?></td>
                                <td width="17%">ZIP CODE</td>
                                <td width="17%"><?php echo CHtml::encode($data->zipcode); ?></td>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="trBg" scope="col" colspan="2">AUTHORIZED USER OF CREDIT CARD</th>
                            </tr>
                            </thead>
                            <tr>
                                <td width="30%">NAME</td>
                                <td><?php echo CHtml::encode($data->auth_name); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">COMPANY</td>
                                <td><?php echo CHtml::encode($data->auth_company); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">PHONE NUMBER</td>
                                <td><?php echo CHtml::encode($data->auth_phoneno); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">EMAIL ADDRESS</td>
                                <td><?php echo CHtml::encode($data->auth_email); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">DRIVER'S LICENSE NUMBER</td>
                                <td><?php echo CHtml::encode($data->auth_drivlicense); ?></td>
                            </tr>
                           <!-- <tr>
                                <td width="30%">RELATION TO OWNER</td>
                                <td><?php /*echo CHtml::encode($data->auth_relationuser); */?></td>
                            </tr>-->
                            <tr>
                                <td width="30%">SERVICE TYPES</td>
                                <td><?php echo CHtml::encode($data->auth_charges); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">AUTHORIZED AMOUNT</td>
                                <td><?php echo CHtml::encode($data->auth_amount); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">DATE OF CHARGE</td>
                                <td><?php echo CHtml::encode($data->date_of_charge); ?></td>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="col-sm-12">

                    <h4  id="autho1"><u>CARDHOLDER INFORMATION</u></h4>
                    <div id="errorMsgdesk" style="display: none"></div>
                    <input type="checkbox" id="deskaccept1"><input type="text" id="deskacceptinitial1" style="display: none;max-width:90px;margin-left: 5px;" placeholder="Enter Initial" > I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate.<br /><br />
                    <input type="checkbox" id="deskaccept2"><input type="text" id="deskacceptinitial2" style="display: none;max-width:90px;margin-left: 5px;" placeholder="Enter Initial" > I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If additional charges are going to be authorized a new form will have to be completed.<br /><br /><br />
                </div>

                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <td><input style="float:left" class="form-control" name="CreditCardAuthorization1[ccholder_name]" id="CreditCardAuthorization1_ccholder_name" type="text" placeholder="Cardholder Name">
                                    <input class="form-control" name="CreditCardAuthorization[date]" style="    width: 10% !important;float: right;" id="CreditCardAuthorization_date" readonly="readonly" type="text" value="<?php
                                        date_default_timezone_set('America/Los_Angeles');
                                        echo date('m/d/Y') ;

                                        ?>"><label style="float: right;padding: 7px;font-weight: normal;font-size: 16px;">Date : </label></td>
                            </tr>
                            <tr>
                                <td><div id="signBoard1"></div>
                                    <p style="max-width: 300px; word-break: break-word; text-align: center">Sign inside the above box and click on "Submit Form" to update your signature.</p>
                                    <div onclick="clearCanvas1();" style="max-width: 300px;text-align: center;cursor: pointer;text-decoration: underline;">Clear</div></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>

            </div>
        </div>




        <!-- Mobile version -->
        <div class="col-xs-12 hidden-md hidden-lg">
        		<center><div class="col-sm-12"><img src="http://www.dotoperatingauthority.com/wp-content/themes/dot/images/slogo.png" width="" height=""></div></center>
                <div class="col-sm-12" style="text-align: center;"><h4>CREDIT CARD AUTHORIZATION FORM</h4></div>
                
            	<div class="mHead">CREDIT CARD INFORMATION</div>
                <div class="mSec">
                    <div class="col-xs-12 mTitle">NAME ON CREDIT CARD</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->cc_name); ?></div>
                    <div class="col-xs-12 mTitle">TYPE OF CREDIT CARD</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->cc_type); ?></div>
                    <div class="col-xs-12 mTitle">CARD NUMBER</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->cc_number); ?></div>
                    <div class="col-xs-12 mTitle">EXPIRATION DATE</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->cc_expdate); ?></div>
                    <div class="col-xs-12 mTitle">SECURITY CODE</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->cc_seccode); ?></div>
                    <div style="clear:both;"></div>
                </div>
                
                <div style="clear:both; height:10px;"></div>
                
                <div class="mHead">BILLING ADDRESS</div>
                <div class="mSec">
                    <div class="col-xs-12 mTitle">STREET ADDRESS</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->address); ?></div>
                    <div class="col-xs-12 mTitle">CITY</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->city); ?></div>
                    <div class="col-xs-12 mTitle">STATE</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->state); ?></div>
                    <div class="col-xs-12 mTitle">ZIP CODE</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->zipcode); ?></div>
                    <div style="clear:both;"></div>
                </div>
                
                <div style="clear:both; height:10px;"></div>
                
                <div class="mHead">AUTHORIZED USER OF CREDIT CARD</div>
                <div class="mSec">
                    <div class="col-xs-12 mTitle">NAME</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_name); ?></div>
                    <div class="col-xs-12 mTitle">COMPANY</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_company); ?></div>
                    <div class="col-xs-12 mTitle">PHONE NUMBER</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_phoneno); ?></div>
                    <div class="col-xs-12 mTitle">EMAIL ADDRESS</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_email); ?></div>
                    <div class="col-xs-12 mTitle">DRIVER'S LICENSE NUMBER</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_drivlicense); ?></div>
                    <div class="col-xs-12 mTitle">SERVICE TYPES</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_charges); ?></div>
                    <div class="col-xs-12 mTitle">AUTHORIZED AMOUNT</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->auth_amount); ?></div>
                    <div class="col-xs-12 mTitle">DATE OF CHARGE</div>
                    <div class="col-xs-12"><?php echo CHtml::encode($data->date_of_charge); ?></div>
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both; height:20px;"></div>
                
                <div class="col-xs-12" style="margin-top:20px">
                   <h4 id="autho"><u>CARDHOLDER INFORMATION</u></h4>
                    <div id="errorMsg" style="display: none"></div>

                    <input type="checkbox" id="accept1"><input type="text" id="acceptinitial1" style="display: none;max-width:90px;margin-left: 5px;" placeholder="Enter Initial" > - I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate.<br /><br />
                    <input type="checkbox" id="accept2"><input type="text" id="acceptinitial2" style="display: none;max-width:90px;margin-left: 5px;" placeholder="Enter Initial" > - I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If additional charges are going to be authorized a new form will have to be completed.<br /><br />
                </div>
                
                <div class="mSec">
                	<div class="col-xs-12 mTitle">CARDHOLDER NAME </div>
                    <div class="col-xs-12"><input class="form-control" name="CreditCardAuthorization[ccholder_name]" id="CreditCardAuthorization_ccholder_name" type="text" style="width:100%!important;"  ></div>
                    
                    <div class="col-xs-12 mTitle">SIGNATURE</div>
                    <div class="col-xs-12">
                        <div id="signBoard"></div>
                    	<p style="max-width: 300px; word-break: break-word; text-align: center">Sign inside the above box and click on "Submit Form" to update your signature.</p>
                        <div onclick="clearCanvas();" style="max-width: 300px;text-align: center;cursor: pointer;text-decoration: underline;">Clear</div>
                    </div>
                    
                    <div class="col-xs-12 mTitle">DATE</div>
                    <div class="col-xs-12"><input name="CreditCardAuthorization[date]" id="CreditCardAuthorization_date" readonly="readonly" type="text" value="<?php
                        date_default_timezone_set('America/Los_Angeles');
                        echo date('m/d/Y') ;

                        ?>"></div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
        </div>
    </div>
    
    <input class="btn btn-success hidden-xs" type="button" value="Submit Form" onclick="onSaveclick1();" style="float: right;">
    <input class="btn btn-success hidden-lg" type="button" value="Submit Form" onclick="onSaveclick();" id="signButtondesk" >



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" style="margin-top: 100px;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <p style="text-align:center;font-size: large; color:green;"><i class="fa fa-check"></i> Authorization Form has been submitted successfully.</p>
                </div>

            </div>

        </div>
    </div>

</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/simple-undo/lib/simple-undo.js"></script>

<!-- in a production environment, just include the minified script. It contains the board and the default controls (size, nav, colors, download): -->
<!--<script src="../dist/drawingboard.min.js"></script>-->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/utils.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/board.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/control.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/color.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/drawingmode.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/navigation.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/size.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/download.js"></script>

<style>
    #signBoard {
        width: 300px;
        height: 100px;
        border:none;
    }

    #signBoard1
    {
        width: 300px;
        height: 100px;
        border:none;
    }
</style>
<style type="text/css">
    table { margin-bottom: 0px!important;}
    .colHead1{ width: 20%; border-right: #ccc solid 1px; }
    input[type="text"]{ width: 50%; font-size: 13px; border:#ccc solid 1px; padding: 5px 10px; }
    .bgColor{ background-color: #f5f5f5; }
    #header{
        display: none;
    }
    #mainmenu{
        display: none;
    }


    .trBg{ background-color:#F1F1F1;  }
    .brd{ border:#ffffff solid 1px ; }
	
	.mHead{background-color:#F1F1F1; padding:5px 10px;border:#ccc solid 1px; font-weight:600; }
	.mSec{border-left:#ccc solid 1px; border-right:#ccc solid 1px; border-bottom:#ccc solid 1px; padding:10px 5px;}
	.mTitle{ margin-top:10px; font-weight:600; font-size:12px;}
    @media print
    {
        .noprint {display:none;}
        .trBg{ background-color:#F1F1F1!important;  }
        .brd{ border:#ffffff solid 1px!important ; }
    }

    .navbar
    {
        display:none !important;
    }

    #errorMsg
    {
        color: red;
        padding: 18px;
    }#errorMsgdesk
    {
        color: red;
        padding: 18px;
    }

    .scrollBut
    {
        background: #8ac3de;
        color: #fff;
        padding: 8px 11px;
        width: 40px;

        border-radius: 100%;
        height: 40px;
        cursor: pointer;
        right:7px;
    }
    
</style>

<script>

    function onClick() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        pdf.canvas.height = 72 * 11;
        pdf.canvas.width = 72 * 8.5;



        pdf.fromHTML($('#printView').html(), 15, 15, {
            'width': 170,

        });

        pdf.save('test.pdf');
    };

    var specialElementHandlers = {
        '.container': function(element, renderer){
            return true;
        }
    };
    //$('#signButton').attr('disabled','disabled');
    $(document).ready(function () {


        $('#scrollBtn').on('click',function(){
            $("html, body").animate({  scrollTop: ($('#autho').offset().top-20)  }, 2000);
        });
       // window.scrollTo(0, 9000);
        $('#accept1').on('click',function(){

            if($('#accept1:checked').length > 0)
            {
                $('#acceptinitial1').show();$('#acceptinitial1').focus();
            }
            else
            {
                $('#acceptinitial1').hide();
            }

            // checkForm();
        });

        $('#accept2').on('click',function(){
            if($('#accept2:checked').length > 0)
            {
                $('#acceptinitial2').show();$('#acceptinitial2').focus();
            }
            else
            {
                $('#acceptinitial2').hide();
            }
            // checkForm();
        });



        $('#deskaccept1').on('click',function(){

            if($('#deskaccept1:checked').length > 0)
            {
                $('#deskacceptinitial1').show();$('#deskacceptinitial1').focus();
            }
            else
            {
                $('#deskacceptinitial1').hide();
            }

            // checkForm();
        });

        $('#deskaccept2').on('click',function(){
            if($('#deskaccept2:checked').length > 0)
            {
                $('#deskacceptinitial2').show();$('#deskacceptinitial2').focus();
            }
            else
            {
                $('#deskacceptinitial2').hide();
            }
            // checkForm();
        });




        //$('#CreditCardAuthorizatio1n_date').datepicker({ dateFormat: 'mm/dd/yy',minDate: dateToday });

      /*  $("#CreditCardAuthorization_date").val($.datepicker.formatDate('mm/dd/yy', new Date()));
        $("#CreditCardAuthorizatio1n_date").val($.datepicker.formatDate('mm/dd/yy', new Date()));*/

    });
    function checkForm() {
        if(($('#accept1').is(":checked")) && ($('#accept2').is(":checked")))
        {
            $('#signButton').removeAttr('disabled');

        }
        else{
            $('#signButton').attr('disabled','disabled');

        }
    }

    var simpleBoard = new DrawingBoard.Board('signBoard', {
        controls: false,
        webStorage: false,
        size: 5,

    });

    var simpleBoard = new DrawingBoard.Board('signBoard1', {
        controls: false,
        webStorage: false,
        size: 5,

    });


    function clearCanvas() {
        $('#signBoard').html('');
        var simpleBoard = new DrawingBoard.Board('signBoard', {
            controls: false,
            webStorage: false,
            size: 5,

        });
    }function clearCanvas1() {
        $('#signBoard1').html('');
        var simpleBoard = new DrawingBoard.Board('signBoard1', {
            controls: false,
            webStorage: false,
            size: 5,

        });
    }


    function onSaveclick(){
        var successF=true;
        var failM='';
    if(!( ($('#accept1:checked').length > 0) && ($('#acceptinitial1').val() !=='') && ($('#accept2:checked').length > 0) && ($('#acceptinitial2').val() !=='') ))
    {
        successF=false;
        failM= failM + '<li>Please accept T&C`s and enter proper initials.</li>';
    }

    if($('#CreditCardAuthorization_ccholder_name').val() == '')
    {
        successF=false;
        failM= failM + '<li>Please enter Cardholder Name.</li>';
    }


    html2canvas($("#signBoard"), {
        onrendered: function(canvas) {
            var myImage = canvas.toDataURL("image/png");
            var myImage = myImage.replace(/^data:image\/(png|jpg);base64,/, "");
            //alert(myImage.length);
           if(myImage.length <= 1144)
           {
               successF=false;
               failM= failM + '<li>Please sign the Authorization Form.</li>';
           }


            if(!successF)
            {
                $('#errorMsg').show();
                $('#errorMsg').html(failM);

                $("html, body").animate({ scrollTop: ($('#autho').offset().top-20) }, 1000);
                // $(window).scrollTop($('#autho').offset().top)
                return false;
            }
            else{
                $('#errorMsg').hide();
            }

            var sendUrl= '<?php echo $this->createUrl('/CreditCardAuthorization/saveScr',array('id'=>$data->id)); ?>';
            $.ajax({
                type:'POST',
                url: sendUrl,
                data:{'imgData': myImage,'phone':$('#acceptinitial1').val(),'email':$('#acceptinitial2').val(),'ccholder_name':$('#CreditCardAuthorization_ccholder_name').val(),'date':$('#CreditCardAuthorization_date').val()},
                dataType: 'JSON',
                success:function(jsonResp) {
                    console.log(jsonResp);
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        $('#myModal').modal('hide');
                        window.close();
                    },2000);
                },
                error:function(err)
                {
                    console.log('error in updating data');
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        $('#myModal').modal('hide');
                        //window.close();
                    },2000);
                }

            });

        }
    });
    }

    function onSaveclick1(){
        var successF=true;
        var failM='';
        if(!( ($('#deskaccept1:checked').length > 0) && ($('#deskacceptinitial1').val() !=='') && ($('#deskaccept2:checked').length > 0) && ($('#deskacceptinitial2').val() !=='') ))
        {
            successF=false;
            failM= failM + '<li>Please accept T&C`s and enter proper initials.</li>';
        }

        if($('#CreditCardAuthorization1_ccholder_name').val() == '')
        {
            successF=false;
            failM= failM + '<li>Please enter Cardholder Name.</li>';
        }


        html2canvas($("#signBoard1"), {
            onrendered: function(canvas) {
                var myImage = canvas.toDataURL("image/png");
                var myImage = myImage.replace(/^data:image\/(png|jpg);base64,/, "");
                //alert(myImage.length);
                if(myImage.length <= 1144)
                {
                    successF=false;
                    failM= failM + '<li>Please sign the Authorization Form.</li>';
                }


                if(!successF)
                {
                    $('#errorMsgdesk').show();
                    $('#errorMsgdesk').html(failM);

                    $("html, body").animate({ scrollTop: ($('#autho1').offset().top-20) }, 1000);
                    // $(window).scrollTop($('#autho').offset().top)
                    return false;
                }
                else{
                    $('#errorMsgdesk').hide();
                }

                var sendUrl= '<?php echo $this->createUrl('/CreditCardAuthorization/saveScr',array('id'=>$data->id)); ?>';
                $.ajax({
                    type:'POST',
                    url: sendUrl,
                    data:{'imgData': myImage,'phone':$('#deskacceptinitial1').val(),'email':$('#deskacceptinitial2').val(),'ccholder_name':$('#CreditCardAuthorization1_ccholder_name').val(),'date':$('#CreditCardAuthorization_date').val()},
                    dataType: 'JSON',
                    success:function(jsonResp) {
                        console.log(jsonResp);
                        $('#myModal').modal('show');
                        setTimeout(function(){
                            $('#myModal').modal('hide');
                            open(location, '_self').close();
                        },2000);
                    },
                    error:function(err)
                    {
                        console.log('error in updating data');
                        $('#myModal').modal('show');
                        setTimeout(function(){
                            $('#myModal').modal('hide');
                            open(location, '_self').close();
                        },2000);
                    }

                });

            }
        });
    }
</script>