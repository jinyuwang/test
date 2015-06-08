<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>数学函数使用举例</TITLE>
</HEAD>
<BDOY>
    <?php
    echo "<br><br>///////////////////////////////////////////////////////////rand(n1,n2)随机数,pi(),sqrt()开方,round()四舍五入,ceil()进一,floor()舍去<br>";
    $s = rand(100,200);
    $pi=pi();
    $r=sqrt($s/$pi);
    $qz1=round($r);   //四舍五入取整
    $qz2=ceil($r);    //进一法取整
    $qz3=floor($r);   //舍去法取整

    echo "随机产生的圆的面积为：".$s."<br>";
    echo "通过除法和开方计算出的圆的半径为：".$r."<br>";
    echo "四舍五入取整后：".$qz1."<br>";
    echo "进一法取整后：".$qz2."<br>";
    echo "舍去法取整后：".$qz3."<br>";
    ?>
</BDOY>
</HTML>
