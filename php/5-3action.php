<!--文件5-3action.php：COOKIE实现用户登录-->
<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>COOKIE实现用户登录</TITLE>
</HEAD>
<BODY>
<?php
var_dump($_POST);
$_COOKIE["user_name"]=$_POST["user_name"];
$_COOKIE["user_pw"]=$_POST["user_pw"];
if ($_COOKIE["user_name"]=="php" && $_COOKIE["user_pw"]=="php5"){
    echo "恭喜您，用户名和口令正确，登陆成功！";
}else{
    echo "您输入的用户名为：".$_COOKIE["user_name"];
    echo "<br>口令为：".$_COOKIE["user_pw"];
    echo "<br>但是不正确，请尝试：php和php5";
}
?>
<br><a href="5-3action-check.php">点击检测Cookie的值是否可以页间传递</a>
</BODY>
</HTML>

