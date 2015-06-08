<?php header("content-type:text/html;charset=utf-8");
session_start();
$passcode=$_SESSION["Checknum"];
$usercode=$_POST["passcode"];
if($passcode == $usercode){
    echo "验证码正确！验证通过！<br/>验证码为：$passcode"."yyyyyyyyyyyyyy";
}else{
    echo "验证码输入错误！验证失败！<br/>验证码为：".$passcode."xxxxxxxxxxxxxx";
}
?>