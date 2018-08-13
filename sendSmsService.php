<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
require_once "/home/wwwdot321t/public_html/fmcsafiling.com/twilio-php/Twilio/autoload.php"; 
use Twilio\Rest\Client;

/*$account_sid = "AC8b53f1185c712916f25e4eaebff262ae";
$auth_token = "90f0552473c094eddbb23e29b6e7bff9";
*/
$account_sid = "AC7f8a40ddd62032b6c6385e8b8bde1f36";
$auth_token = "afbc626cf965300e959164dddd075495";
//$twilio_phone_number = "8183512878";
$twilio_phone_number = "3236723067s";
$client = new Client($account_sid, $auth_token);
 
$client->messages->create(
    $argv[2],
    array(
        "from" => $twilio_phone_number,
        "body" => "Credit Card Authorization request has been generated , Click on the link to authenticate http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=".$argv[1]
    )
);



?>
