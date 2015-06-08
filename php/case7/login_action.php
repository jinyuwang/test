<html>
<head lang="en"><meta charset="UTF-8">
    <title>用户注册</title>
</head>
<body>
<?php
//接收表单数据
$user_name=$_POST["user_name"];
$user_pw1=$_POST["user_pw1"];
$user_pw2=$_POST["user_pw2"];
//表单数据基本性验证，省略用户名重名验证
if($user_name=="" or $user_pw1=="" or $user_pw2=="" or $_FILES["pic_name"]["name"]==""){
    echo "用户名、两次输入的登入口令和头像全不能为空，请<a href=login.html>返回</a>重新填写";
    exit;
}
if($user_pw1!=$user_pw2){
    echo "两次输入的登入口令不匹配，请<a href=login.html>返回</a>重新填写";
    exit;
}
//生成自动文件名
$rand=rand(100,999);
$filename=date("Ymdhms").$rand;
//头像上传
$oldfilename=$_FILES["pic_name"]["name"];
$filetype=substr($oldfilename,strrpos($oldfilename,"."));
//$filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
//echo "filetype=".$filetype."<br/>";
if(($filetype!='.gif')&&($filetype!='.GIF')&&($filetype!='.jpg')&&($filetype!='.JPG')){
    echo "<script>alert('文件类型或地址错误');</script>";
    echo "<script>location.href='login.html';</script>";
    exit;
}
if($_FILES['pic_name']['name']>1000000){
    echo "<script>alert('文件太大，不能上传');</script>";
    echo "<script>location.href='login.html';</script>";
    exit;
}
//取得保存文件的临时文件名，售路径
$filename=$filename.$filetype;
$savedir=$filename;
echo "savedir=filename=".$filename."<br/>";
var_dump($_FILES);
var_dump($_POST);
if(move_uploaded_file($_FILES['pic_name']['tmp_name'],$savedir)){
    $file_name=basename($savedir);//取得保存文件的文件名，不含路径
}else{
    echo "<script>alert(\"错误，无法将附件写入服务器！\n本次发布失败!\");</script>";
    echo "<script>location.href='login.html';</script>";
    exit;
}
//记录注册信息到user_info.txt文件中
$file=fopen("user_info.txt","a");
flock($file,LOCK_EX);
$string=$user_name."\n";
fputs($file,$string);
$string=$user_pw1."\n";
fputs($file,$string);
$string=$filename."\n";
fputs($file,$string);
fputs($file,"\n");
echo "恭喜您，注册成功！<br/>";
echo "用户名：".$user_name."<br/>";
echo "登入口令：".$user_pw1."<br/>";
echo "头像：<img src=".$filename." align=middle><br/>";
echo "请<a href='land.html'>登入</a><br/>";
?>
</body>
</html>