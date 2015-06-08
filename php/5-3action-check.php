<!--文件5-3action-check.php：COOKIE页间传递-->
<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>COOKIE页间传递</TITLE>
</HEAD>
<BODY>
<?php
if ($_COOKIE["user_name"]!="" && $_COOKIE["user_pw"]!=""){
    echo "Cookie页间传递成功！<br>";
    echo "您输入的用户名为：".$_COOKIE["user_name"];
    echo "<br>口令为：".$_COOKIE["user_pw"];
}else{
    echo "Cookie页间传递失败，其值为空！<br>";
}
?>
</BODY>
</HTML>

