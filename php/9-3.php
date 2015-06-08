<html>
<head lang="en"><meta charset="UTF-8">
<title>php+mysql-建表、插入</title>
</head>
<body>
<?php header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/6/7
 * Time: 17:49
 */
$id=mysqli_connect("localhost","root","");// root/空密码; test/test
var_dump($id);
$ok=mysqli_select_db($id,"test");
if($ok){
    echo "OK,选择数据库成功！<br/>";
}else{
    echo "OH,选择数据库失败，请确认数据库是否存在。<br/>";
}
//mysqli_query($id,"set character set gb2312");
mysqli_query($id,"CREATE TABLE `testtable` (
  `xm` varchar(50) NOT NULL,
  `nl` int(11) DEFAULT NULL,
  PRIMARY KEY (`xm`)
) ENGINE=MyISAM AUTO_INCREMENT=32"); //DEFAULT CHARSET=gb2312
for($i=1;$i<50;$i++){
    $nl=20+$i;
    $xm="姓名".$i;
    $sql="insert into testtable VALUES ('".$xm."',".$nl.")";
    $excu=mysqli_query($id,$sql);
    if($excu){
        echo $sql;
        echo "第".$i."条数据插入成功!<br/>";
    }else{
        echo $sql;
        echo "<br/>数据插入失败，错误信息";
        echo mysqli_errno($id)."<br/>";
    }
}
if(mysqli_close($id)){
    echo "关闭数据库成功！";
}else{
    echo "关闭数据库失败！";
}
?>
</body>
</html>
