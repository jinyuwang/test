<!--文件5-2.php：URL附加数据传递-->
<HTML>
<HEAD lang="en"><meta charset="utf-8">
    <TITLE>URL附加数据传递</TITLE>
</HEAD>
<BODY>
<!--
<a href="5-2.php?show_tag=1&show_date=date">显示图片</a>
<a href="5-2.php?show_tag=2">隐藏图片</a><br><br>
-->
<a href="?show_tag=1&show_date=date">显示图片</a>
<a href="?show_tag=2">隐藏图片</a><br><br>
<?php
$show_tag=$_GET["show_tag"];
if ($show_tag==1){
    echo "<img src=..\image\ditu.jpg width=1280 height=960 align=left>";
}
?>

</BODY>
</HTML>

