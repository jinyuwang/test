<!--文件5-3action.php：SESSION实现用户登录-->
<HTML lang="en"><meta charset="UTF-8">
<HEAD>
    <TITLE>SESSION实现用户登录</TITLE>
</HEAD>
<BODY>
<?php
session_start();
$_SESSION["user_name"]=$_POST["user_name"];
$_SESSION["user_pw"]=$_POST["user_pw"];
if ($_SESSION["user_name"]=="php" && $_SESSION["user_pw"]=="php5"){
    echo "恭喜您，用户名和口令正确，登陆成功！";
}else{
    echo "您输入的用户名为：".$_SESSION["user_name"];
    echo "<br>口令为：".$_SESSION["user_pw"];
    echo "<br>但是不正确，请尝试：php和php5";
    //var_dump($_SERVER);
}
?>
<br><a href="5-4action-check.php">点击检测Cookie的值是否可以页间传递</a>
</BODY>
</HTML>

