<?php

header("Content-type: image/png");
$string = "GD Practice";
$im = imagecreatefrompng("images/button.png");
$orange = imagecolorallocate($im, 00, 00, 00);
$px = (imagesx($im) - 7.5 * strlen($string)) / 2;
imagestring($im, 30, $px, 10, $string, $orange);
imagepng($im);
imagedestroy($im);
?>