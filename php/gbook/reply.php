<?php header("content-type:text/html;charset=utf-8");
session_start();
if($_SESSION["login"]!="YES"){
    echo "你还没有登陆,无法管理留言!";
    exit;
}
@$msgid=$_GET["id"];
@$reply=$_POST["reply"];
if($reply!=""){
    $id=mysqli_connect("localhost","root","");
    mysqli_select_db($id,"test");
    $query="update message set reply='$reply' where id=".$msgid;
    mysqli_query($id,$query);
    echo "<script language=javascript>alert('回复成功!');location.href='manage.php';</script>";
    exit;
    mysqli_close($id);
}

$id=mysqli_connect("localhost","root","");
mysqli_select_db($id,"test");
$query="select * from  message where id=$msgid";
$result=mysqli_query($id,$query);
if(mysqli_num_rows($result)<1){
    echo "没有此留言";
    exit;
}
$msg=mysqli_fetch_array($result,MYSQL_ASSOC);
?>
    <HTML>
    <HEAD lang="en">
        <meta charset="UTF-8">
        <TITLE>欢迎使用简约不简单-我的留言本</TITLE>
    </HEAD>
    <BODY>
    <table border=1 cellspacing=0 cellspadding=0 style="border-collapse:collapse" align=center width=800 bordercolor=black height="358">
        <tr><td height=100 bgcolor=#6C6C6C>
                <p align="center"> <font style="font-size:30px" color=#ffffff face="黑体">简约不简单-我的留言本</font></p>
            </td>
        <tr><td height=25>
                <p align="center"><a href="manage.php">[返回管理]</a></p>
            </td></tr>
        <tr><td height=178>
                <form method="POST" action="reply.php?id=<?php echo $msgid;?>">
                    <table border="1" width="95%" id="table1" cellspacing="0" cellpadding="0" bordercolor="#808080" style="border-collapse: collapse" height="154">
                        <tr>
                            <td colspan="2" height="29">
                                <p align="center">管理员回复留言</td>
                        </tr>
                        <tr>
                            <td width="32%">
                                <p align="right">留言ID</td>
                            <td width="67%"><?php echo $msg['id'];?></td>
                        </tr>
                        <tr>
                            <td width="32%">
                                <p align="right">留言人</td>
                            <td width="67%"><?php echo $msg['author'];?></td>
                        </tr>
                        <tr>
                            <td width="32%">
                                <p align="right">留言时间</td>
                            <td width="67%"><?php echo $msg['addtime'];?></td>
                        </tr>
                        <tr>
                            <td width="32%">
                                <p align="right">留言内容</td>
                            <td width="67%"><?php echo nl2br($msg['content']);?></td>
                        </tr>
                        <tr>
                            <td width="32%">
                                <p align="right">请输入回复</td>
                            <td width="67%"><textarea rows="7" name="reply" cols="60"></textarea></td>
                        </tr>
                        <tr>
                            <td width="99%" colspan="2">
                                <p align="center"><input type="submit" value="确定" name="B1"></p>
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
<?php mysqli_close($id); ?>