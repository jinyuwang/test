<?php header("Content-Type:text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/5/31
 * Time: 20:18
 */
echo "//////////////////////////4-28，29,类的定义和对象的创建,类的同名函数做构造函数<br/>";
class point
{
    //public $x;      //点x的坐标
    private $x;
    //public $y;      //点x的坐标
    private $y;
    function point()  //类的同名函数做构造函数
    {
        $this->x=6;   //初始化点x的值
        $this->y=6;   //初始化点y的值
    }
    function setx($set_x)
    {
        $this->x=$set_x;
    }
    function sety($set_y)
    {
        $this->y=$set_y;
    }

    function print_point()
    {
        echo "坐标为：（".$this->x.",".$this->y."）";
    }
}
if ($point1=new point){
    echo "对象\$point1创建成功！<br>";
}
$point1->print_point();///29，有了构造函数，新的实例已经被赋了初始值。
echo "<br>";
$point1->setx(6);
//$point1->x=6;
$point1->sety(8);
//$point1->y=6;
$point1->print_point();
echo "<br>";
echo "//////////////////////////4-30，类的继承<br/>";
class circle extends point{
    private $radius;
    function circle()
    {
        $this->point();//派生类构造函数中先执行父类的构造函数
        $this->radius=6;
    }
    function setradius($r){
        $this->radius=$r;
    }
    function print_radius()
    {
        echo "半径为：".$this->radius;
    }
}
$circle1=new circle;
echo "重新初始化前的坐标、半径：";
$circle1->print_point();
$circle1->print_radius();
echo "<br>";
$circle1->setx(6);
$circle1->sety(8);
$circle1->print_point();
$circle1->setradius(9);
echo "<br>";
$circle1->print_radius();
echo "//////////////////////////4-16,改为用对象实现<br/>";
class showday
{
    public $day;
    function showday()
    {
        $this->day=date("D");
    }
    function printday()
    {
        switch($this->day)
        {
            case "Mon":
                echo "今天星期一";
                break;
            case "Tue":
                echo "今天星期二";
                break;
            case "Wed":
                echo "今天星期三";
                break;
            case "Thu":
                echo "今天星期四";
                break;
            case "Fri":
                echo "今天星期五";
                break;
            default:
                echo "今天放假";
                break;
        }
        echo "<br>";
    }
}
$sd1=new showday();
$sd1->printday();

$sd1->day="Tue";
$sd1->printday();

echo "//////////////////////////4-5，预定义常量<br/>";
echo(__LINE__);    //输出xx
echo "<p>";
echo(__FILE__);
echo "<p>";
echo(__LINE__);    //输出xx+4
echo "<p>";
echo PHP_VERSION;
echo "<p>";
echo PHP_OS;
echo "<p>";
echo "//////////////////////////4-6，自定义常量<br/>";
define("COPYRIGHT", "Copyright &copy; 2006, www.rzpt.cn");
echo COPYRIGHT;
echo "<p>";
echo "//////////////////////////4-7，PHP变量的使用之一<br/>";
$string1="输出字符串变量类型的内容！";
echo $string1;           //输出字符串变量“$string”的内容
echo "<br>";             //输出换行
$string2="输出特殊字符：";
echo $string2."\\";
echo "\$";
echo '\'';
echo "\"";
echo "\x52";
echo "<br>";
$int1=01234;    //八进制整数
$int2=0x1234;
echo "输出整型变量的值：";
echo $int1;       //输出668
echo "\t";        //输出一个制表位
echo $int2;       //输出4660
echo "<br>";
$float1=6.6666e2;
echo "输出浮点型变量的值：";
echo $float1;      //输出666.66
echo "<br>";
echo "输出布尔型变量的值：";
echo (boolean)($int1);     //输出转换后的布尔变量-“1”
echo "<br>";
echo "//////////////////////////4-8，用array()函数创建PHP数组<br/>";
$arr=array
(
    0=>6,
    2=>6.666e2,
    1=>"我爱PHP",
    "str"=>"string",
);
for ($i=0;$i<count($arr);$i++)///count()
{
    $print=each($arr);///each()
    echo "$print[value]<br>";
    echo "$print[key]=$print[value]<br>";
}
foreach($arr   as   $key=>$val)   /////////////////////////////////////////////
{
    print   $key.'=>'.$val.'<br>';
}
echo "//////////////////////////4-9,逐一给数组元素赋值<br/>";
$arr1[0]=6;
$arr1[2]=6.666e2;
$arr1[1]="我爱PHP";
$arr1["str"]="string";
for ($i=0;$i<count($arr1);$i++)///count()
{
    $print=each($arr1);///each()
    echo "$print[value]<br>";
    echo "$print[key]=$print[value]<br>";
}
foreach($arr1   as   $key=>$val)   ///////////////////////////////////////
{
    print   $key.'=>'.$val.'<br>';
}
echo "//////////////////////////4-10,数组元素简洁赋值<br/>";
$arr=array(6,6.666e2,"我爱PHP","string");
for ($i=0;$i<4;$i++)
{
    echo $arr[$i]."<br>";
}
foreach($arr   as   $key=>$val)   ////////////////////////////////////////
{
    print   $key.'=>'.$val.'<br>';
}
echo "//////////////////////////5-<br/>";
echo "<br/>var_dump(\$GLOBALS)<br/>";
var_dump($GLOBALS);
echo "<br/>var_dump(\$_SERVER)<br/>";
var_dump($_SERVER);
// var_dump($HTTP_SERVER_VARS); //obsolete
echo "<br/>var_dump(\$_GET)<br/>";
var_dump($_GET); //$HTTP_GET_VARS
echo "<br/>var_dump(\$_POST)<br/>";
var_dump($_POST); //$HTTP_POST_VARS
echo "<br/>var_dump(\$_COOKIE)<br/>";
var_dump($_COOKIE); //$HTTP_COOKIE_VARS
echo "<br/>var_dump(\$_REQUEST)<br/>";
var_dump($_REQUEST); //$HTTP_ENV_VARS ///与前三的关系：GET,POST,COOKIES
echo "<br/>var_dump(\$_FILES)<br/>";
var_dump($_FILES); //$HTTP_POST_FILES
echo "<br/>var_dump(\$_ENV)<br/>";
var_dump($_ENV); //$HTTP_ENV_VARS
echo "<br/>var_dump(\$_SESSION)<br/>";
var_dump($_SESSION); //$HTTP_SESSIONS_VARS
echo "<br/>var_dump(\$php_errormsg)<br/>";
var_dump($php_errormsg); //前一个错误消息,track_errors选项打开后才有效


echo "//////////////////////////4-39<br/>";
echo "//////////////////////////4-40<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";
echo "//////////////////////////4-17<br/>";