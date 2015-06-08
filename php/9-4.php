<html>
<head lang="en"><meta charset="UTF-8">
    <title>php+mysql-查询显示</title>
</head>
<body>
<?php
$id=mysqli_connect("localhost","root","");
mysqli_select_db($id,"test");
//mysqli_query($id,"SET CHARACTER SET gb2312");
$query="select * from testtable";
$result=mysqli_query($id,$query);
echo "<table border=1 width=200><tr><td>姓名</td><td>年龄</td></tr>";
$datanum=mysqli_num_rows($result);
echo "<tr><td colspan='2'>表testtable中共有".$datanum."条数据</td></tr>";
for($i=1;$i<=$datanum;$i++){
    $info=mysqli_fetch_array($result,MYSQL_ASSOC);
    echo "<tr><td>".$info['xm']."</td>";
    echo "<td>".$info['nl']."</td></tr>";
}
echo "</table>";
mysqli_close($id);
?>
</body>
</html>