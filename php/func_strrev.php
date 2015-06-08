<?php header("content-type:text/html;charset=utf-8");
$str1="hello world! i am bob!";
$str2="你好世界，我市bob！阿";

$str3="i am a teacher ,and you?4";
echo strtr($str3,"ea4e","66b#")."<br>";
echo $str2."<br>".strlen($str2)."<br>";
echo $str1."<br>".strrev($str1)."<br>";
echo $str2."<br>".strrev($str2)."<br>";
?>