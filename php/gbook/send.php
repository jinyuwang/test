<?php header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/6/7
 * Time: 20:27
 */
@$name=$_POST["name"];
if($name!=""){
    $content=$_POST["content"];
    $addtime=date("Y-m-d h:i:s");
    $id=mysqli_connect("localhost","test","test");
    mysqli_select_db($id,"test");
    $query="insert into message(author,addtime,content,reply) values('$name','$addtime','$content','')";
    mysqli_query($id,$query);
    mysqli_close($id);
    echo "<script language=javascript>alert('留言成功！点击确定查看留言。');location.href='index.php';</script>";
    exit;
}
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎使用简约不简单-我的留言本</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse" align="center" width="800" bordercolor="black">
    <tr>
        <td height="100" bgcolor="#c6c6c6">
            <p align="center"><font style="font-size:30px" color="white" face="黑体">简约不简单-我的原创留言本</font></p>
        </td>
    </tr>
    <tr>
        <td height="25">
            <p align="center"><a href="send.php">[我要写留言]</a>&nbsp;&nbsp;<a href="login.php">管理留言</a></p>
        </td>
    </tr>
    <tr>
        <td height="200">

            <form method="post" action="send.php">
                <p align="center"><br/>
                <table border="1" width="95%" id="table1" cellpadding="1" cellspacing="0" bordercolor="#808080" style="border-collapse:collapse;border-color: green" height="265">
                    <tr>
                        <td colspan="2" height="29">
                            <p align="center">欢迎您填写留言</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="32%">
                            <p align="right">您的名字</p>
                        </td>
                        <td width="67%">
                            <input type="text" name="name" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td width="32%">
                            <p align="right">留言内容</p>
                        </td>
                        <td width="67%">
                            <textarea rows="10" name="content" cols="60"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td width="99%" colspan="2">
                            <p align="center">
                                <input type="submit" value="提交" name="B1">
                            </p>
                        </td>
                    </tr>
                </table>
                </p>
            </form>

        </td>
    </tr>
    <tr>
        <td height="80" bgcolor="#6c6c6c" align="center">
            <font color="white">版权所有&copy;：我的工作室<br/>E-mail:jinyu345@163.com</font>
        </td>
    </tr>
</table>
</body>
</html>