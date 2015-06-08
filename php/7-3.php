<!--文件7-3.php：遍历图片显示-->
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>遍历图片显示</title>
</head>
<body>
<?php
$addr="../image/";
$dir=dir($addr);
while($file_name=$dir->read()){
    if (!($file_name=="." or $file_name=="..")){
        echo "<img src=".$addr.$file_name." width=200 heigh=200>&nbsp;&nbsp;";
    }
}
?>
</body>
</html>