<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 7/14/18
 * Time: 9:39 PM
 */
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL); ini_set('display_errors', 1);

$servername = "localhost";
$username = "wwwdot32_dot_adm";
$password = "pass_dot@741";
$dbname = "dot_tracker";

//{"ToCountry":"US","ToState":"CA","SmsMessageSid":"SMa2018d5e858478dbaac6af0b56a380ae","NumMedia":"0","ToCity":"LOS ANGELES","FromZip":"","SmsSid":"SMa2018d5e858478dbaac6af0b56a380ae","FromState":"CA","SmsStatus":"received","FromCity":"","Body":"test test","FromCountry":"US","To":"+13236723067","ToZip":"","NumSegments":"1","MessageSid":"SMa2018d5e858478dbaac6af0b56a380ae","AccountSid":"AC7f8a40ddd62032b6c6385e8b8bde1f36","From":"+18189308338","ApiVersion":"2010-04-01"}

$conn = new mysqli($servername, $username, $password, $dbname);



$sqlUpdateAuth="INSERT INTO `smsr` (`id`, `resp`, `ext1`, `ext2`,`fromPhone`,`toPhone`,`content`) VALUES (NULL, '".json_encode($_POST)."', NULL, NULL,'".$_POST['From']."','".$_POST['To']."','".$_POST['Body']."');";

$conn->query($sqlUpdateAuth);








