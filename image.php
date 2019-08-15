<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
// Line reserved to trigger the webhook in the lab. 
//$deployment = getenv("COLOR");
$deployment = 'gonnabearainbow';

if ( $deployment == 'blue') {
  $color = imagecolorallocate($im, 0, 0, 255);
} elseif ($deployment == 'green')  {
  $color = imagecolorallocate($im, 0, 255, 0);
} elseif ($deployment == 'red')  {
  $color = imagecolorallocate($im, 255, 0, 0);
} elseif ($deployment == 'gonnabearainbow')  {
  $color = imagecolorallocate($im, 100, 100, 1000);
} else {
  $color = imagecolorallocate($im, 0, 0, 255);
}

// Draw a filled rectangle
imagefilledrectangle($im, 0, 0, 199, 199, $color);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
