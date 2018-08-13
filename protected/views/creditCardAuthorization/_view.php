<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
    'Credit Card Authorizations'=>array('index'),
    FilingGenerics::showCCid(FilingGenerics::getQuoteID($data->id)),
);
//print_r($data);

?>
<div class="row" style="margin-bottom: 50px;margin-top:50px;">
    <div class="col-md-9">
        <?php
        $type=Yii::app()->request->getParam('type',0);
        if($type==1)
        {
            echo ' <div id="succmsg" class="alert alert-success" style="width: 100% !important; "><i class="fa fa-check"></i> Authorization form saved successfully !</div>';
        }
        else if($type==2){
          echo ' <div id="succmsg" class="alert alert-success" style="width: 100% !important; "><i class="fa fa-check"></i> Authorization form saved and messaged successfully !</div>';
        }
        else if($type==3){
           echo ' <div id="succmsg" class="alert alert-success" style="width: 100% !important; "><i class="fa fa-check"></i> Authorization form saved and mailed successfully !</div>';
        }
        ?>

        <div id="successPayment" class="alert alert-success" style="display: none"> </div>
        <div id="errPayment" class="alert alert-warning" style="display: none"> </div>

        <div class="row">
            <center><div class="col-sm-12"><img src="http://www.dotoperatingauthority.com/wp-content/themes/dot/images/slogo.png" width="" height=""></div></center>
            <div class="col-sm-12" style="text-align: center;"><h4>CREDIT CARD AUTHORIZATION FORM</h4></div>

            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="trBg" scope="col" colspan="2">CREDIT CARD INFORMATION </th>
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

            <?php if($data->ccholder_name!='--' ) { ?>
            <div class="col-sm-12">
                <h4><u>CARDHOLDER INFORMATION</u></h4><br />
                <?php if($data->phone!='--') {



                    echo '<span style="border-bottom: 1px dashed;"><b>'.$data->phone.'</b></span>';

                } ?> - I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate.<br /><br />
                <?php if($data->ccholder_name!='--') {   echo '<span style="border-bottom: 1px dashed;"><b>'.$data->email.'</b></span>'; }  ?> - I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “AUTHORIZED AMOUNT” field. I understand this is only for up to this amount during the time period of “DATES OF CHARGES” referenced above. If additional charges are going to be authorized a new form will have to be completed.<br /><br /><br />
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td width="30%">CARDHOLDER NAME</td>
                            <td><?php echo CHtml::encode($data->ccholder_name); ?></td>
                        </tr>
                        <tr>
                            <td width="30%">SIGNATURE</td>
                            <td>
                                <table width="100%" border="0" class="brd">
                                    <tr>
                                        <td width="60%"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$data->sign_link; ?>" style="/* padding:20px; */width: 150px;"></td>
                                        <td>DATE</td>
                                        <td><?php echo CHtml::encode($data->date); ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
               <?php  if(1){ ?>
                <div class="col-lg-12" style="margin-top:20px">
                <input class="btn btn-success " type="button" value="Process Payment" onclick="processPayment(<?php echo $_GET['id'] ?>,false);" style="float: right;">
                <input class="btn btn-info " type="button" value="Process Payment & Email" onclick="processPayment(<?php echo $_GET['id'] ?>,true);" style="float: right; margin-right: 10px">

                </div>
            <?php } ?>
            <?php } ?>

        </div>
    </div>

<div class="col-md-3 noprint">
    <div class="list-group">
        <a href="#" class="list-group-item active"><i class="fa fa-cogs"></i> Actions</a>
        <a href="<?php echo Yii::app()->createUrl('creditCardAuthorization/create')?>" target="_blank" class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>
            &nbsp;Create Credit Card Authorization Form </a>
        <a href="<?php echo Yii::app()->createUrl('creditCardAuthorization/admin')?>" class="list-group-item"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Manage Credit Card Authorization Form</a>
        <a href="<?php echo Yii::app()->createUrl('creditCardAuthorization/update',array('id'=>$data->id))?>" class="list-group-item"><i class="fa fa-pencil" aria-hidden="true"></i> Update Credit Card Authorization Form</a>
        <?php  if(!Yii::app()->user->isGuest){ ?> <a href="<?php echo Yii::app()->createUrl('creditCardAuthorization/authorizeSignature',array('id'=>$data->id))?>" target="_blank" class="list-group-item"><i class="fa fa-certificate" aria-hidden="true"></i>
            &nbsp;Authorize Form </a> <?php } ?>
        <?php  if(!Yii::app()->user->isGuest && 1==2){ ?> <a onclick="mailReceipt();" class="list-group-item" style="cursor: pointer"><i class="fa fa-envelope" aria-hidden="true"></i>
            &nbsp;Mail Transaction Receipt </a> <?php } ?>
        <a class="list-group-item" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i> Print Form </a>
    </div>
</div>
</div>





<style type="text/css">
    table { margin-bottom: 0px!important;}
    .colHead1{ width: 20%; border-right: #ccc solid 1px; }
    input[type="text"]{ width: 50%; font-size: 13px; border:#ccc solid 1px; padding: 5px 10px; }
    .bgColor{ background-color: #f5f5f5; }

    @media print
    {
        .noprint {display:none;}
        .trBg{ background-color:#F1F1F1!important;  }
        .brd{ border:#ffffff solid 1px!important ; }
        .breadcrumbs{ display: none;}
    }
</style>

<script>

    $(document).ready(function(){
        setTimeout(function(){
            $('#succmsg').fadeOut(1000);
        },3000);

    });

    function mailReceipt() {
        $.ajax(
            {
                //url: "http://fmcsafiling.com/payments/charge-card.php?id="+id+"&e="+email,
                url: '<?php echo Yii::app()->createUrl('creditCardAuthorization/sendReceipt',array('id'=>$data->id))?>',
                dataType:"json",
                success: function(result){

                    var successR=result.success;
                    console.log(successR);

                    if(successR==true)
                    {
                        $('#successPayment').show();
                        $('#successPayment').html('Receipt mailed Successfully !!');
                        $("html, body").animate({ scrollTop: 0 }, 1000);
                        setTimeout(function(){
                            $('#successPayment').fadeOut(1000);
                        },7000);
                    }
                    else{
                        $('#errPayment').show();
                        $('#errPayment').html(' Receipt could not be processed due to a technical issue.Please try after sometime <br> Error : '+result.err_message);
                        $("html, body").animate({ scrollTop: 0 }, 1000);
                        setTimeout(function(){
                            $('#errPayment').fadeOut(1000);
                        },7000);
                    }

                }
            }
        );

    }

    function processPayment(id,email) {

        $.ajax(
            {
                //url: "http://fmcsafiling.com/payments/charge-card.php?id="+id+"&e="+email,
                url: "http://www.fmcsafiling.com/charge-card.php?id="+id+"&emails="+email,
                dataType:"json",
                success: function(result){

                    var successR=result.success;
                    console.log(successR);

                    if(successR=='true')
                    {
                    $('#successPayment').show();
                    $('#successPayment').html(' Payment Processed Successfully,Transcation has been approved bearing a Transaction ID# : '+result.trans_id+' & Authoration Code : '+result.auth_code);
                        $("html, body").animate({ scrollTop: 0 }, 1000);
                    setTimeout(function(){
                            $('#successPayment').fadeOut(1000);
                        window.location.replace("http://fmcsafiling.com/index.php?r=creditCardAuthorization/admin");
                        },7000);
                    }
                    else{
                        $('#errPayment').show();
                        $('#errPayment').html(' Payment status could not be processed due to a technical issue.Please try after sometime <br> Error : '+result.err_message);
                        $("html, body").animate({ scrollTop: 0 }, 1000);
                        setTimeout(function(){
                            $('#errPayment').fadeOut(1000);
                            window.location.replace("http://fmcsafiling.com/index.php?r=creditCardAuthorization/admin");
                        },7000);
                    }

                }
            }
        );

    }



</script>
