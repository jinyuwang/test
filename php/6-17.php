<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>获取Unix时间戳</TITLE>
</HEAD>
<BDOY>
    <?php
    echo "<br>///////////////////////////////////////////////////////////time()<br>";
    $tm= time();
    echo "当前时间的Unix时间戳为：".$tm."<br>";
    ?>

    <?php
    echo "<br>///////////////////////////////////////////////////////////mktime(时,分,秒,月,日,年),strtotime(\"yyyy-mm-dd hh24:mi:ss\")<br>";
    //用mktime()返回时间戳
    $tm= mktime(23,56,59,12,20,1999);
    echo "1999年12月20日23点56分59秒的Unix时间戳为：".$tm;
    //用strtotime()返回时间戳
    $tm2= strtotime("1999-12-20 23:56:59");
    echo "<br>用strtotime获得的同一时间的时间戳：".$tm2;
    ?>

    <?php
    echo "<br><br>///////////////////////////////////////////////////////////getdate(timestamp)<br>";
    //首先假设一个时间
    $dt= "2007-07-01 08:30:00";
    echo "时间：".$dt."<br>";
    //将此时间格式化为Unix时间戳
    $tm= strtotime($dt);
    echo "此时间的Unix时间戳：".$tm."<br>";

    //获取该时间的详细信息
    $arr = getdate($tm);
    //输出详细信息
    echo "秒：".$arr["seconds"]."<br>";
    echo "分：".$arr["minutes"]."<br>";
    echo "时：".$arr["hours"]."<br>";
    echo "日：".$arr["mday"]."<br>";
    echo "月：".$arr["mon"]."/".$arr["month"]."<br>";
    echo "年：".$arr["year"]."<br>";
    echo "星期：".$arr["wday"]."/".$arr["weekday"]."<br>";
    echo "该日期是该年中的第".$arr["yday"]."天<br>";
    ?>

    <?php
    echo "<br><br>///////////////////////////////////////////////////////////date(format,timestamp)<br>";
    //设置一个时间（如采用当前时间可用time()）
    $tm = strtotime("2006-09-09 10:30:40");
    echo "初始化设置的时间为：2006-09-09 10:30:40<br>";
    //使用不同的格式化字符串测试输出效果
    echo date("Y-M-D H:I:S A",$tm)."<br>";
    echo date("y-m-d h:i:s a",$tm)."<br>";
    echo date("Y年m月d日[l] H点i分s秒",$tm)."<br>";
    echo date("F,d,Y l",$tm)."<br>";
    echo date("Y-M-D H:I:S",$tm)."<br>";
    echo date("Y-M-D H:I:S",$tm)."<br>";
    echo date("所在时区：T，与格林威治时间相差：O小时",$tm)."<br>";
    //输出详细信息
    ?>
</BDOY>
</HTML>
