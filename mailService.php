<?php
/**
 * Created by PhpStorm.
 * User: prasanjeet
 * Date: 3/24/18
 * Time: 1:10 AM
 */


$to = "prasanjeet.chakraborty@gmail.com";
$subject = "Dot Form Submitted";
$txt = "Hello world!";
$headers = "From: info@fmcsafiling.com" . "\r\n" .
    "CC: niobe.chill@gmail.com";

mail($to,$subject,$txt,$headers);