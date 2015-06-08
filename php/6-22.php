<?php
header("Content-type: image/png");
//创建图片，并在上面画图和写字
$im = @imagecreate(400, 200) or die("无法创建图像流");
@imagecolorallocate($im, 240, 150, 255);
$t_color1 = imagecolorallocate($im, 0, 0, 0);
$t_color2 = imagecolorallocate($im,100,100,100);
imagestring($im, 10, 16, 20,  "I like PHP!", $t_color1);
imagestringup($im,10,16,180,"Hello!",$t_color2);
imageellipse($im,130,130,110,110,$t_color1);
imageellipse($im,130,130,110,110,$t_color1);
imagefilledrectangle($im,220,190,320,60,$t_color2);
imagepng($im);
imagedestroy($im);
?>
