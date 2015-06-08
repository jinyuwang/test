<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>php实现数据分页</title>
</head>
<body>
<?php
$id=mysqli_connect("localhost","root","");
mysqli_select_db($id,"test");
//mysqli_query($id,"SET CHARACTER SET gb2312");
$query="select * from testtable";
$result=mysqli_query($id,$query);
$totalnum=mysqli_num_rows($result);
$pagesize=15;
$page=$_GET["page"];
if($page==""){
    $page=1;
}
$begin=($page-1)*$pagesize;//根据第几页，就跳过相应的记录数
$totalpage=ceil($totalnum/$pagesize);

echo "<table border=1 width=200 align='center'><tr><td>姓名</td><td>年龄</td></tr>";
echo "<p align='center'>"; //begin - p
echo "<br/>表testtable中共有".$totalnum."条数据。每页显示".$pagesize."条，共".$totalpage."页<br/><br/>";
for($j=1;$j<=$totalpage;$j++){
    echo "<a href=9-5.php?page=".$j.">[".$j."]&nbsp;</a>";
}
echo "</p>"; //end - p
$query="select * from testtable limit ".$begin.",".$pagesize;
//echo $query."<br/>";
$result=mysqli_query($id,$query);
$datanum=mysqli_num_rows($result);
for($i=1;$i<=$datanum;$i++){
    $info=mysqli_fetch_array($result,MYSQL_ASSOC);
    echo "<tr><td>".$info['xm']."</td><td>".$info['nl']."</td></tr>";
}
echo "</table>";
mysqli_close($id);
?>
</body>
</html>