<!--文件5-3action-check.php：SESSION页间传递-->
<HTML lang="en"><meta charset="UTF-8">
<HEAD>
    <TITLE>SESSION页间传递</TITLE>
</HEAD>
<BODY>
<?php
if ($_SESSION["user_name"]!="" && $_SESSION["user_pw"]!=""){
    echo "Session页间传递成功！<br>";
    echo "您输入的用户名为：".$_SESSION["user_name"];
    echo "<br>口令为：".$_SESSION["user_pw"];
}else{
    echo "Session页间传递失败，其值为空！<br>";
}
?>
</BODY>
</HTML>

