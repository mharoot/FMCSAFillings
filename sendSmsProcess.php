<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 4/1/18
 * Time: 2:36 AM
 */

error_reporting(E_ALL); ini_set('display_errors', 1);
require_once "/xampp/htdocs/FMCSAFillings/twilio-php/Twilio/autoload.php";
use Twilio\Rest\Client;

$servername = "localhost";
$username = "wwwdot32_dot_adm";
$password = "pass_dot@741";
$dbname = "dot_tracker";

$account_sid = "AC7f8a40ddd62032b6c6385e8b8bde1f36";
$auth_token = "afbc626cf965300e959164dddd075495";
//$twilio_phone_number = "8183512878"; 3236723067
$twilio_phone_number = "3236723067";
$client = new Client($account_sid, $auth_token);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dot_tracker_sms where status=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $sqlUp1="update dot_tracker_sms set status=2 where id=".$row['id'];
        $conn->query($sqlUp1);

        $client->messages->create(
            $row['phone'],
            array(
                "from" => $twilio_phone_number,
                "body" => $row['message']
            )
        );

        echo 'message sent to '.$row['phone'];

        $sqlUp="update dot_tracker_sms set status=3 where id=".$row['id'];
        $conn->query($sqlUp);

    }
}

$conn->close();









?>
