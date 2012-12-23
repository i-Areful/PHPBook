<?php
//send header information
header("Content-type: image/png");

//get image handle
$im = @imagecreate(200, 50) or die("Cannot Initialize GD image stream");

//set image properties
$background_color = imagecolorallocate($im, 0, 255, 255);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 5,10, 10, "generated by PHP", $text_color);

//create PNG image
imagepng($im);

//destroy image
imagedestroy($im);

?>