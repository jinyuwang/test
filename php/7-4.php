<!--文件7-5.php：文件上传实例-->
<!--为了能正确运行，请在本文件的同目录下新建一文件夹，名为“upfile”-->
<?php header("content-type:text/html;charset=utf-8");
if ($_POST["add"]=="上传"){
    //根据现在的时间产生一个随机数
    $rand1=rand(0,9);
    $rand2=rand(0,9);
    $rand3=rand(0,9);
    $filename=date("Ymdhms").$rand1.$rand2.$rand3;
    if(empty($_FILES['file_name']['name'])){
        //$_FILES['file_name']['name']为获取客户端机器文件的原名称
        echo "<script language=javascript>";
        echo "alert('文件名不能为空！');";
        echo "location.href='7-4.php?';";
        echo "</script>";
        exit;
    }
    $oldfilename=$_FILES['file_name']['name'];
    echo "<br>原文件名为：".$oldfilename;
    $filetype=substr($oldfilename,strrpos($oldfilename,"."),strlen($oldfilename)-strrpos($oldfilename,"."));
    echo "<br>原文件的类型为：".$filetype;
    if(($filetype!='.doc')&&($filetype!='.xls')&&($filetype!='.DOC')&&($filetype!='.XLS')&&($filetype!='.DOCX')&&($filetype!='.XLSX')&&($filetype!='.docx')&&($filetype!='.xlsx')){
        echo "<script>alert('文件类型或地址错误');</script>";
        echo "<script>location.href='7-4.php';</script>";
        exit;
    }
    echo "<br>上传文件的大小为（字节）：".$_FILES['file_name']['size'];
    //$_FILES['file_name']['size']为获取客户端机器文件的大小，单位为B
    if ($_FILES['file_name']['size']>1000000) {
        echo "<script>alert('文件太大，不能上传');</script>";
        echo "<script>location.href='7-4.php';</script>";
        exit;
    }
    echo "<br>文件上传服务器后的临时文件名为：".$_FILES['file_name']['tmp_name'];
    //取得保存文件的临时文件名（含路径）
    $filename=$filename.$filetype;
    echo "<br>新文件名为：".$filename;
    $savedir="upfile/".$filename;
    if(move_uploaded_file($_FILES['file_name']['tmp_name'],$savedir)){
        $file_name=basename($savedir);       //取得保存文件的文件名（不含路径）
        echo "<br>文件上传成功！保存为：".$savedir;
    }else{
        echo "<script language=javascript>";
        echo "alert('错误，无法将附件写入服务器!\n本次发布失败！');";
        echo "location.href='7-4.php?';";
        echo "</script>";
        exit;
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Language" content="zh-cn">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>==文件上传实例==</title>
    <style>
        body{font-size:10pt};
        td{font-size:10pt};
        .style1 {color: #FF0000}
        .style2 {
            color: #000000;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div align="center">
</div>
<form  enctype="multipart/form-data" action="7-4.php" method="post">
    <!--此处一定要有enctype="multipart/form-data"//-->
    <table width="486" height="103" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#008080" id="AutoNumber1" style="border-collapse: collapse">
        <tr bgcolor="#CCCCCC">
            <td height="30" colspan="2" align="right"><div align="center" class="style2">文件上传实例</div>      </td>
        </tr>
        <tr>
            <td width="103" height="45" align="right"><div align="center"><span class="style1">*</span>文件上传地址：</div></td>
            <td width="377" height="45"><input type="file" name="file_name">
                （大小〈2M 为宜）</td>
        </tr>
        <tr>
            <td height="33" align="right" colspan="2">
                <p align="center"><input type="submit" value="上传" name="add">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置" name="B2"></td>
        </tr>
    </table>
</form>
</body>
</html>
