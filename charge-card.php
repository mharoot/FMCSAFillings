<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 4/19/18
 * Time: 11:19 PM
 */

header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL); ini_set('display_errors', 1);

require_once '/xampp/htdocs/FMCSAFillings/payments/vendor/autoload.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
define("AUTHORIZENET_LOG_FILE", "phplog");






function chargeCreditCard($amount1)
{
    $servername = "localhost";
    $username = "wwwdot32_dot_adm";
    $password = "pass_dot@741";
    $dbname = "dot_tracker";


    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT * FROM dot_tracker_authorizationForm where id=".$_GET['id'];
    $result = $conn->query($sql);

    $processId=$_GET['id'].'-CCA';

    $cc_name='';
    $cc_number='';
    $cc_expdate='';
    $cc_seccode='';

    $auth_name='';
    $auth_fname='';
    $auth_lname='';
    $auth_company='';
    $address='';
    $city='';
    $state='';
    $zipcode='';
    $country='USA';

    $email='';
    $type='';
    $doc='';
    $amount='';
    $arrData='';
    $orderId='';

    $orderDescription='DOT Operating Authority';

//echo '<pre>';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            $cc_name=$row['cc_name'];
            $cc_number=$row['cc_number'];
            $cc_expdate=$row['cc_expdate'];
            $cc_seccode=$row['cc_seccode'];

            $auth_name=$row['auth_name'];
            $auth_phoneno=$row['auth_phoneno'];

            $auth_company=$row['auth_company'];
            $address=$row['address'];
            $city=$row['city'];
            $state=$row['state'];
            $zipcode=$row['zipcode'];


            $email=$row['auth_email'];
            $type=$row['cc_type'];
            $doc=$row['date_of_charge'];
            $amount=$row['auth_amount'];
            $arrData=$row['service_details'];
            $orderId=$row['order_id'];


        }
    }



    $sql12 = "SELECT * FROM dot_tracker_order where id=".$orderId;
    // echo $sql12;
    $result12= $conn->query($sql12);

    if ($result12->num_rows > 0) {
        // output data of each row

        while($row12 = $result12->fetch_assoc()) {
            // print_r($row12);
            $orderId=$row12['quote_id'];

        }
    }




    //FilingGenerics::
    $newArr=array();
    $serviceType=array(
        'servicety1'=>'S Corporation',
        'servicety2'=>'C Corporation',
        'servicety3'=>'Limited Liability Company (LLC)',
        'servicety4'=>'Limited Liability Partnership (LLP)',
        'servicety5'=>'Limited Partnership (LP)',
        'servicety6'=>'Fictitious Business Name (DBA)',
        'servicety7'=>'USDOT #',
        'servicety8'=>'MC # Carrier Authority',
        'servicety9'=>'MC # Broker Authority',
        'servicety10'=>'Freight Forwarder (FF #)',
        'servicety11'=>'California DOT # (CA #)',
        'servicety12'=>'Motor Carrier Permit (MCP)',
        'servicety13'=>'Employee Pull Notice (EPN)',
        'servicety14'=>'Hazardous Materials Registration (CA)',
        'servicety15'=>'Hazardous Materials Registration (Federal)',
        'servicety16'=>'BOC-3',
        'servicety17'=>'International Fuel Tax Agreement (IFTA)',
        'servicety18'=>'Highway Use Tax (2290)',
        'servicety19'=>'Unified Carrier Registration (UCR)',
        'servicety20'=>'Texas Operating Authority',
        'servicety21'=>'BMC-84 Surety Bond',
        'servicety22'=>'BMC-85 Trust Bond',
        'servicety23'=>'International Registration Plan (IRP)',
        'servicety24'=>'New Mexico Weight Distance Permit',
        'servicety25'=>'Oregon Fuel Tax Permit',
        'servicety26'=>'New York HUT Permit',
        'servicety27'=>'KYU Weight Distance Permit',
        'servicety28'=>'Biennial Update',
        'servicety29'=>'MC# Reinstatement',
        'servicety30'=>'MC# Detachment',
        'servicety31'=>'MC# Revocation',
        'servicety32'=>'MC# Name Change',
        'servicety33'=>'MC# Reattachment',
        'servicety34'=>'USDOT# Reactivation',
        'servicety35'=>'USDOT# Deactivation'
    );
    $arrN=json_decode($arrData);

    if(count($arrN)) {
        foreach (json_decode($arrData) as $data) {
            array_push($newArr, $serviceType[$data->id]);
            //array_push()
        }
    }

    $arrData = implode(' , ',$newArr);
    //die;
    //$conn->close();

    $cc_number=str_replace(' ','',$cc_number);
    $name=explode(' ',$auth_name);
    if(array_key_exists('0',$name))
    $auth_fname=$name[0];
    if(array_key_exists('1',$name))
    $auth_lname=$name[1];

    //echo $cc_number; die;



    /* Create a merchantAuthenticationType object with authentication details
       retrieved from the constants file */
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    $merchantAuthentication->setName('3yYdm7G3mtFY');
    $merchantAuthentication->setTransactionKey('8uJWa8q4b4t2CV7s');
//t key 8uJWa8q4b4t2CV7s 78bU69pWMtkYy33n
    //client key : 595CY6exQfAgywRGd8ncs9532pNhrj85PehM3VmuEFQ2nEqPDjt9T7Hwsz6W6sGT
    // Set the transaction's refId
    $refId = 'ref' . time();
    // Create the payment data for a credit card
    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber($cc_number);
    $creditCard->setExpirationDate($cc_expdate);
    $creditCard->setCardCode($cc_seccode);
    // Add the payment data to a paymentType object
    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);
    // Create order information
    $order = new AnetAPI\OrderType();
    $order->setInvoiceNumber($processId);
    $order->setDescription($orderDescription);
    // Set the customer's Bill To address
    $customerAddress = new AnetAPI\CustomerAddressType();
    $customerAddress->setFirstName($auth_fname);
    $customerAddress->setLastName($auth_lname);
    $customerAddress->setCompany($auth_company);
    $customerAddress->setAddress($address);
    $customerAddress->setCity($city);
    $customerAddress->setState($state);
    $customerAddress->setZip($zipcode);
    $customerAddress->setPhoneNumber($auth_phoneno);
    $customerAddress->setCountry($country);
    // Set the customer's identifying information
    $customerData = new AnetAPI\CustomerDataType();
    $customerData->setType("individual");
    $customerData->setId(rand(99999,9999999));
    $customerData->setEmail($email);
    // Add values for transaction settings
    $duplicateWindowSetting = new AnetAPI\SettingType();
    $duplicateWindowSetting->setSettingName("duplicateWindow");
    $duplicateWindowSetting->setSettingValue("60");
    // Add some merchant defined fields. These fields won't be stored with the transaction,
    // but will be echoed back in the response.
   /* $merchantDefinedField1 = new AnetAPI\UserFieldType();
    $merchantDefinedField1->setName("customerLoyaltyNum");
    $merchantDefinedField1->setValue("1128836273");
    $merchantDefinedField2 = new AnetAPI\UserFieldType();
    $merchantDefinedField2->setName("favoriteColor");
    $merchantDefinedField2->setValue("blue");*/
    // Create a TransactionRequestType object and add the previous objects to it
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authCaptureTransaction");
    $transactionRequestType->setAmount($amount1);
    $transactionRequestType->setOrder($order);
    $transactionRequestType->setPayment($paymentOne);
    $transactionRequestType->setBillTo($customerAddress);
    $transactionRequestType->setCustomer($customerData);
    $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
    /*$transactionRequestType->addToUserFields($merchantDefinedField1);
    $transactionRequestType->addToUserFields($merchantDefinedField2);*/
    // Assemble the complete transaction request
    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId($refId);
    $request->setTransactionRequest($transactionRequestType);
    // Create the controller and get the response
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::PRODUCTION);

    if ($response != null) {
        // Check to see if the API request was successfully received and acted upon
        if ($response->getMessages()->getResultCode() == 'Ok') {
            // Since the API request was successful, look for a transaction response
            // and parse it to display the results of authorizing the card
            $tresponse = $response->getTransactionResponse();
            $resp=array();
            if ($tresponse != null && $tresponse->getMessages() != null) {
                $resp=array(
                    'trans_id'=>$tresponse->getTransId(),
                    'response_code'=>$tresponse->getResponseCode(),
                    'message_code'=>$tresponse->getMessages()[0]->getCode(),
                    'auth_code'=>$tresponse->getAuthCode(),
                    'desc'=>$tresponse->getMessages()[0]->getDescription(),
                    'success'=>'true');

            } else {

                $resp=array(
                    'success'=>'false',

                );

                if ($tresponse->getErrors() != null) {

                    $resp=array(
                        'success'=>'false',
                        'err_code'=>$tresponse->getErrors()[0]->getErrorCode(),
                        'err_message'=>$tresponse->getErrors()[0]->getErrorText()
                    );


                }
            }
            // Or, print errors if the API request wasn't successful
        } else {

            $resp=array(
                'success'=>'false',

            );
            $tresponse = $response->getTransactionResponse();

            if ($tresponse != null && $tresponse->getErrors() != null) {
                $resp=array(
                    'success'=>'false',
                    'err_code'=>$tresponse->getErrors()[0]->getErrorCode(),
                    'err_message'=>$tresponse->getErrors()[0]->getErrorText()
                );

            } else {
                $resp=array(
                    'success'=>'false',
                    'err_code'=>$response->getMessages()->getMessage()[0]->getCode(),
                    'err_message'=>$response->getMessages()->getMessage()[0]->getText()
                );

            }
        }
    } else {
        $resp=array(
            'success'=>'false',

        );

    }



    $sqlPayLog="INSERT INTO `dot_tracker_paymentlog` (`id`, `authorization_id`, `status`, `response`, `creation_datetime`, `extra`) VALUES (NULL, '".$_GET['id']."', '".$resp['success']."', '".json_encode($resp)."', CURRENT_TIMESTAMP, ' ');";

    $conn->query($sqlPayLog);
    $payLog='';
    if($resp['success']=='true')
    {
        $payLog='Success <br> (Response:Credit Card charged succesfully.)';
        if(isset($_GET['emails']) && $_GET['emails']=='true')
        {
            $txt='';
            foreach($resp as $ind=>$val)
            {
                $txt.=$ind.'=>'.$val;
            }

            $len=strlen($cc_number);
            $num=substr($cc_number,-3);
            $num1='';
            for($i=0;$i<$len;$i++)
            {
                $num1=$num1.'*';
            }
            $orderId=(empty($orderId))?'--':$orderId;
            $body='<h2><span style="color: #000000;"><strong>PAYMENT RECEIPT</strong></span></h2>
                <p>---------------------------------------------------------------------------------------------------------------------</p>
                <p>DOT OPERATING AUTHORITY, INC</p>
                <p>2009 W BURBANK BLVD,</p>
                <p>BURBANK, CA, 91506</p>
                <p>UNITED STATES</p>
                <p><a href="http://www.dotoperatingauthority.com/">http://www.dotoperatingauthority.com/</a></p>
                <p>(888) 669-4383</p>
                <p>-----------------------------------------------------------------------------------------------------------------------</p>
                <p>&nbsp;</p>
                <p><strong>RECEIVED BY:</strong> '.$cc_name.'</p>
                <p><strong>ORDER # :</strong> '.$orderId.'</p>
                
                <p><strong>PAYMENT METHOD: </strong>'.$type.' '.$num1.$num.'</p>
                <p><strong>SERVICE TYPES: </strong>'.$arrData.'</p>
                <p><strong>DATE OF CHARGE: </strong>'.$doc.'</p>
                <p><strong>AUTHORIZED AMOUNT PAID: </strong>'.$amount.'</p>
                <p>&nbsp;</p>
                <h3><strong>Thank You For Your Payment</strong></h3>';


            //$to = $_GET['email'];
            $subject = "Payment Charge from Credit Card - Payment Receipt [Time:".date('Y-m-d h:i:sa').']';

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com";

            if(mail($email,$subject,$body,$headers))
            {
                $resp['mail']='sent';
            }
            else{
                $resp['mail']='not_sent';
            }
        }
    }
    else{
        $payLog='Error <br> (Response:'.$resp['err_message'].')';
    }

    $sqlUpdateAuth="UPDATE dot_tracker_authorizationForm set `pay_status`='".$resp['success']."' , `pay_log` ='".$payLog."' where id=".$_GET['id'];
//echo $sqlUpdateAuth; die;
    $conn->query($sqlUpdateAuth);


    echo json_encode($resp);
}
if (!defined('DONT_RUN_SAMPLES')) {
/*    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dot_tracker";
*/
    $servername = "localhost";
    $username = "wwwdot32_dot_adm";
    $password = "pass_dot@741";
    $dbname = "dot_tracker";

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM dot_tracker_authorizationForm where id=".$_GET['id'];
    $result = $conn->query($sql);

    $auth_amount=0;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            $auth_amount=$row['auth_amount'];
        }
    }

    $conn->close();

    $auth_amount=str_replace('$','',$auth_amount);
    //echo $auth_amount; die;
    chargeCreditCard($auth_amount);
    //chargeCreditCard('1');
}

