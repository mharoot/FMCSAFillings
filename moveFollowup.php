<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 4/1/18
 * Time: 2:36 AM
 */

$servername = "localhost";
$username = "wwwdot32_dot_adm";
$password = "pass_dot@741";
$dbname = "dot_tracker";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlUp1="update dot_tracker_quote set status=1 where status=3";
$conn->query($sqlUp1);

$conn->close();









?>
