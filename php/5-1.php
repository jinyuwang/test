<!--文件5-1.php：表单数据传递-->
<HTML>
<head lang="en">
    <meta charset="UTF-8">
    <TITLE>表单数据传递</TITLE>
</HEAD>
<BODY>
<?php
$tag=$_POST["tag"];
if ($tag==1){
    $addend1=$_POST["addend1"];
    $addend2=$_POST["addend2"];
}else{
    $addend1=0;
    $addend2=0;
}
$sum=$addend1+$addend2;
?>
清在下面的表单中输入两数以求其和
<form name="form1" method="post" action="#">
    <input type="hidden" name="tag" size="4" value="1">
    <input type="text" name="addend1" size="4" value="<?php echo $addend1;?>">
    +
    <input type="text" name="addend2" size="4" value="<?php echo $addend2;?>">
    =
    <?php echo $sum;?><br>
    <br><input type="submit" name="Submit" value="计算">
    <input type="reset" name="Submit2" value="重置">
</form>

</BODY>
</HTML>