<!--文件5-4.php：SESSION实现用户登录的表单-->
<HTML lang="en"><meta charset="UTF-8">
<HEAD>
    <TITLE>SESSION实现用户登录的表单</TITLE>
</HEAD>
<BODY>
<form name="form1" method="post" action="5-4action.php">
    <table width="280" height="96" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
        <tr>
            <td colspan="2" align="center" bgcolor="#FFFFFF">用户登录</td>
        </tr>
        <tr>
            <td align="right" bgcolor="#FFFFFF">用户名:</td>
            <td align="left" bgcolor="#FFFFFF">
                <input type="text" name="user_name" size="12">
            </td>
        </tr>
        <tr>
            <td align="right" bgcolor="#FFFFFF">口令:</td>
            <td align="left" bgcolor="#FFFFFF">
                <input type="password" name="user_pw" size="12"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" bgcolor="#FFFFFF">
                <input type="submit" name="Submit" value="提交">&nbsp;
                <input type="reset" name="Submit2" value="重置"></td>
        </tr>
    </table>
</form>
</BODY>
</HTML>