<?php header("content-type:text/html;charset=utf-8");
@$name=$_POST["name"];
if($name!=""){
    @$password=$_POST["password"];
    $id=mysqli_connect("localhost","root","");
    mysqli_select_db($id,"test");
    $query="select * from admin where username='$name'";
    $result=mysqli_query($id,$query);
    if(mysqli_num_rows($result)<1){
        echo "该用户不存在!请重新登陆!";
    }else{
        $info=mysqli_fetch_array($result,MYSQL_ASSOC);
        if($info['userpass']!=$password){
            echo "密码输入错误!请重新登陆!";
        }else{
            session_start();
            $_SESSION["login"]="YES";
            var_dump($_SESSION);////debug
            echo "<script language=javascript>alert('登陆成功!');location.href='manage.php';</script>";
            exit;
        }
    }
    mysqli_close($id);
}
?>
<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>欢迎使用简约不简单-我的留言本</TITLE>
</HEAD>
<BODY>
<table border=1 cellspacing=0 cellspadding=0 style="border-collapse:collapse" align=center width=800 bordercolor=black height="358">
    <tr><td height=100 bgcolor=#6C6C6C>
            <p align="center"><font style="font-size:30px" color=#ffffff face="黑体">简约不简单-我的留言本</font></p>
        </td>
    <tr><td height=25>
            <p align="center"><a href=send.php>[我要写留言]</a>&nbsp;&nbsp;<a href=login.php>[管理留言]</a></p>
        </td></tr>
    <tr><td height=178>
            <form method="POST" action="login.php">
                <table border="1" width="95%" id="table1" cellspacing="0" cellpadding="1" align=center bordercolor="#808080" style="border-collapse: collapse" height="154">
                    <tr>
                        <td colspan="2" height="29">
                            <p align="center">欢迎管理员登陆</td>
                    </tr>
                    <tr>
                        <td width="32%">
                            <p align="right">用户名</td>
                        <td width="67%"><input type="text" name="name" size="40"></td>
                    </tr>
                    <tr>
                        <td width="32%">
                            <p align="right">密&nbsp; 码</td>
                        <td width="67%"><input type="password" name="password" size="40"></td>
                    </tr>
                    <tr>
                        <td width="99%" colspan="2">
                            <p align="center"><input type="submit" value="登入" name="B1"></p>
                        </td>
                    </tr>
                </table>
            </form>
        </td></tr>
    <tr><td height=58 bgcolor=#6c6c6c align=center>
            <font color=#FFFFFF>版权所有&copy;：我的工作室<br>E-mail:jinyu345@163.com
        </td></tr>
</table>
</body>
</html>