<!--文件4-31.php-->
<HTML>
<head lang="en">
    <meta charset="UTF-8">
    <TITLE>类的继承与多态</TITLE>
</HEAD>
<BODY>
<?php
class point
{
    public $x;    //点的x坐标
    public $y;    //点的y坐标
    function Point($x=0,$y=0)    //构造函数，初始化x值和y值
    {
        $this->x=$x;
        $this->y=$y;
    }
    function setx($px=0)    //设置x坐标值
    {
        $this->x=$px;
    }
    function sety($py=0)    //设置y坐标值
    {
        $this->y=$py;
    }
    function getx()    //得到x坐标值
    {
        return $this->x;
    }
    function gety()    //得到x坐标值
    {
        return $this->y;
    }
    function moveto($x,$y)    //移动点
    {
        if ($x<0||$y<0)
        {
            echo "Point-圆心移动失败!<br>";
            return;
        }
        $this->x=$x;
        $this->y=$y;
        echo "Point-圆心移动成功!<br>";
    }
}

class circle extends point
{
    public $radius;
    function Circle($x=10,$y=10,$r=5)    //构造函数，初始化
    {
        $this->x=$x;    //圆心x坐标
        $this->y=$y;    //圆心y坐标
        $this->radius=$r;    //圆半径
    }
    function setradius($r)
    {
        $this->radius=$r;
    }
    function getradius($r)
    {
        return $this->radius;
    }
    function moveto($x,$y)    //移动圆
    {
        if ($x<($this->radius)||$y<($this->radius))
        {
            echo "Circle-圆心移动失败!<br>";
            return;
        }
        $this->x = $x;
        $this->y = $y;
        echo "Circle-圆心移动成功!<br>";
    }
}
$mypoint=new point(20, 20);  //定义一个处于(20,20)的点
$mycircle=new circle(20, 20, 10);  //定义一个圆心处于(20,20)，半径为10的圆
$mycircle->setx(30);  //调用父类函数，改变圆心坐标x值
$mypoint->moveto(5,5);  //移动点，成功
$mycircle->moveto(5,5);  //移动圆，失败 ,moveto函数父子类都有，属于多态。

class table
{
    private $x;
    function table($px=9)
    {
        $this->x=$px;
    }
    function setx($vx)
    {
        $this->x=$vx;
    }
    function print_table()
    {
        for($i=1;$i<=$this->x;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo $j." * ".$i." = ".$j*$i."&nbsp;";
            }
            echo "<br/>";
        }
    }
}
$table1=new table;
$table1->print_table();
$table1->setx(11);
$table1->print_table();
?>
</BODY>
</HTML>