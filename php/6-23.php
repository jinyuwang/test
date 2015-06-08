<?php
header("Content-type: image/jpeg");
//在图片上打水印
$im = imagecreatefromjpeg("pic.jpg");
$white = imagecolorallocate($im,255,255,255);
$width=imagesx($im);
$height=imagesy($im);
$x=0;
$y=0;
while($x<$width && $y<$height){
    imagestring($im,3, $x,$y,"http://www.wangjy.com", $white);
    $x+=50;
    $y+=50;
}
imagejpeg($im);
imagedestroy($im);
?> 