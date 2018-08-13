<?php
header('Content-type: image/jpeg');

$imgPath = '/Applications/MAMP/htdocs/fmcsa-filings/epn.jpg';
$image = imagecreatefromjpeg($imgPath);
$dest = imagecreatefrompng('/Applications/MAMP/htdocs/fmcsa-filings/tick.png');

function addText($x, $y, $image, $str)
{
    $color = imagecolorallocate($image, 0, 0, 0);
    $fontSize = 5;
    imagestring($image, $fontSize, $x, $y, $str, $color);
}

addText(60, 300, $image, 'Prasanjeet Transport Services');
addText(580, 300, $image, 'Prasanjeet Transport Services');

addText(60, 350, $image, '- NA -');
addText(580, 350, $image, 'prasanjeet.chakraborty@gmail.com');

addText(60, 400, $image, 'Vijay Park , Lane Number 7 , Tingre Nagar , Dhanori ');
addText(580, 400, $image, 'Pune');
addText(950, 400, $image, 'MH');
addText(1050, 400, $image, '411014');

addText(60, 450, $image, 'Mr. Kunal Gandu');
addText(580, 450, $image, 'prasanjeet.chakraborty@gmail.com');

//addText(580, 950, $image, '&pound;');
imagecopymerge($image, $dest, 580, 950, 100, 100, 10, 10, 100);


imagejpeg($image);

imagedestroy($jpg_image);
?>