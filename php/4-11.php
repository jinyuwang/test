<?php header('Content-Type: text/html; charset=utf-8');//强制输出utf8
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/5/31
 * Time: 13:36
 */
echo "//////////////////////////4-11<br/>";
$arr[0][0]=6;
$arr[0][1]=6.666e2;
$arr[1][0]= "我爱PHP";
$arr[1]["str"]="string";
for ($i =0;$i<count($arr);$i++)
{
    for ($j = 0;$j<count($arr[$i]);$j++)
    {
        $print=each($arr[$i]);
        echo "$print[value]<br>";
    }
}
echo "//////////////////////////4-12<br/>";
$arr=array
(
    0=>array
    (
        0=>6,
        2=>6.666e2,
    ),                 //此处应该是“,”，而不是“;”
    1=>array
    (
        0=>"我爱PHP",
        "str"=>"string"
    )
);
for ($i =0;$i<count($arr);$i++)
{
    for ($j = 0;$j<count($arr[$i]);$j++)
    {
        $print=each($arr[$i]);
        echo "$print[value]<br>";
    }
}
echo "//////////////////////////4-13<br/>";
$a=10;
$b=3;
echo $a."+".$b."=";
echo $a+$b."<br>";
echo $a."-".$b."=";
echo $a-$b."<br>";
echo $a."*".$b."=";
echo $a*$b."<br>";
echo $a."/".$b."=";
echo $a/$b."<br>";
echo $a."%".$b."=";
echo $a%$b."<br>";
echo $a."++=";
echo $a++."<br>";
$a=10;
echo "++".$a."=";
echo ++$a."<br>";
$a=10;
echo $a."--=";
echo $a--."<br>";
$a=10;
echo "--".$a."=";
echo --$a."<br>";
$c="b";
echo "\"b\"++=";
$c++;
echo "\"".$c."\"<br>";
echo "//////////////////////////4-14<br/>";
$int1=2;
$int2=0;
$str1="PHP 5";
$str2="功能强大";
echo $str1.".".$int1.".".$int2.$str2." ==>我爱PHP 5";
echo "//////////////////////////4-15<br/>";
//本程序测试时，请更改测试服务器的系统时间查看效果
echo "今天是：".date("D")."<br>";
if (date("D")=="Sat")
    echo "周末了，我们要去狂欢。<br>";
if (date("D")=="Sat"){
    echo "再次声明，周末了，我们要去狂欢，好高兴！<br>";
}else{
    echo "今天不是周末，我们要学习PHP 5，多么有意义啊！！^_^!!!<br/>";
}
if (date("D")=="Sun"){
    echo "今天是星期天。";
}
else if (date("D")=="Mon"){
    echo "今天是星期一。";
}
else if (date("D")=="Tue"){
    echo "今天是星期二。";
}
else if (date("D")=="Wed"){
    echo "今天是星期三。";
}
else if (date("D")=="Thu"){
    echo "今天是星期四。";
}
else if (date("D")=="Fri"){
    echo "今天是星期五。";
}
else{
    echo "今天是星期六（只可能是星期六了^_^）。";
}
echo "<br/>";
echo "//////////////////////////4-16<br/>";
//本程序测试时，请更改测试服务器的系统时间查看效果
switch (date("D")) {
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
echo "<br/>";
echo "//////////////////////////4-17<br/>";
//本程序测试时，请更改两处$i的初始值为11
//观看效果，分析区别
$i=1;
while($i<=10){
    print $i++;
    echo ". 以后不敢了<br>\n";
}
echo "第二次……<br>";
$i=1;
do{
    print $i++;
    echo ". 以后不敢了<br>\n";
} while($i<=10);
//本程序测试时，请更改两处$i的初始值为11
//观看效果，分析区别
$i=11;
while($i<=10){
    print $i++;
    echo ". 以后不敢了<br>\n";
}
echo "第二次……<br>";
$i=11;
do{
    print $i++;
    echo ". 以后不敢了<br>\n";
} while($i<=10);
////////////////////////for
for ($i=1;$i<=10;) {
    echo $i . ". 以后不敢了for<br>";
    $i++;
}
for ($i=1;;$i++){
    if ($i>10)  break;    //循环标志结束，跳出循环
    echo $i.". 以后不敢了for<br>";
}
$i=1;
for (;$i<=10;$i++){
    echo $i.". 以后不敢了for<br>";
}

echo "//////////////////////////4-18,break/continue<br/>";
echo "使用break的输出效果：<br>";
$i=0;
while ($i<10) {
    if ($i%2==1) {
        break;
    }
    echo $i."&nbsp;";
    $i++;
}
echo "<br>使用contine的输出效果：<br>";
for($i=0;$i<10;$i++){
    if ($i%2){
        continue;
    }
    echo $i."&nbsp;";
}
echo "<br>";
echo "//////////////////////////4-19，自定义函数，求阶乘<br/>";
function factorial($n)
{
    $result=1;
    for ($i=2;$i<=$n;$i++)
        $result*= $i;
    return $result;
}
for ($i=1;$i<=6;$i++)
{
    $num=factorial($i);
    echo $i."!=".$num."<br>";
}
echo "//////////////////////////4-20<br/>";
function myfun1($var1)
{   //值传递测试函数
    $var1=88;
}
function myfun2(&$var1)
{   //第一种引用传递测试函数
    $var1=88;
}
function myfun3(&$var1)
{   //第二种引用传递测试函数
    $var1=99;
}
function myfun4($string,$color="red")
{   //默认参数传递测试函数
    echo "<font color=".$color.">".$string."</font>";
}
$var1=66;
$string="这是红色字体！<br>";
echo "初始值:\$var=".$var1."<br>";
myfun1($var1);
echo "值传递结束后:\$var=".$var1."<br>";
myfun2($var1);
echo "第一种引用传递结束后:\$var=".$var1."<br>";
myfun3($var1);
echo "第二种引用传递结束后:\$var=".$var1."<br>";
echo "默认参数的效果为:";
@myfun4($string);//@屏蔽函数错误信息
myfun4($string);
$ff="myfun2";//用函数的同名变量实现可变函数
$ff($var1);//myfun2($var1)
echo "第一种引用传递结束后:\$var=".$var1."<br>";
$ff="myfun3";//用函数的同名变量实现可变函数
$ff($var1);//myfun3($var1)
echo "第二种引用传递结束后:\$var=".$var1."<br>";
echo "//////////////////////////4-21，函数的同名变量实现可变函数<br/>";
function myfun()
{
    return "函数的同名变量实现可变函数成功！";
}
$var="myfun";
echo $var();
echo "<br>";
$var="myfun()";
echo $var;
echo "<br>";
echo "//////////////////////////4-22，函数递归实现阶乘运算<br/>";
function factor($n)
{
    if ($n==1)
        return 1;
    return $n*factor($n-1);
}
for ($i=1;$i<=6;$i++)
{
    $num=factor($i);
    echo $i."!=".$num."<br>";
}
echo "50! = ".factor(50)."<br/>";
echo "//////////////////////////4-23，使用递归求解斐波那契数列<br/>";
function fib($n)
{
    if ($n<0)
        return 0;
    if ($n<=2)
        return 1;
    return fib($n-1)+fib($n-2);
}
echo "斐波那契数列的前10项：";
for ($i=1;$i<=20;$i++)
{
    $Var=fib($i);
    echo $Var."&nbsp;";
}
echo "<br>";
echo "//////////////////////////4-24，函数嵌套求闰年<br/>";
function div4($a)  //判断是否能为4整除
{
    if ($a%4==0)
        return true;
    else
        return false;
}
function div100($a)  //判断是否能为100整除
{
    if ($a%100==0)
        return true;
    else
        return false;
}
function div400($a)  //判断是否能为400整除
{
    if ($a%400==0)
        return true;
    else
        return false;
}

function isleapyear($a)
{
    if (!div4($a))
        echo "$a 年不是闰年。<br>";
    elseif (div100($a)&&!div400($a))
        echo "$a 年不是闰年。<br>";
    else
        echo "$a 年是闰年。<br>";
}
function isleapyear2($a)
{
    if (!($a%4==0))
        echo "$a 年不是闰年。<br>";
    elseif (($a%100==0)&&!($a%400==0))
        echo "$a 年不是闰年。<br>";
    else
        echo "$a 年是闰年。<br>";
}
isleapyear(1900);
isleapyear(1996);
isleapyear(1999);
isleapyear(2000);
isleapyear2(1900);
isleapyear2(1996);
isleapyear2(1999);
isleapyear2(2000);
echo "//////////////////////////4-25<br/>";
var_dump($GLOBALS); //打印本程序的预定义全局变量数据

$var1=6;  //定义一个局部变量
echo "定义局部变量\$var=".$var1."<br/>";
include ("../testmysql.php");
function myfun11(){
    echo "<br>在myfun11()函数中输出局部变量"."<br/>";
    echo "\$var1=".$var1;
}
myfun11();
function myfun12(){
    echo "<br>在myfun12()函数中输出局部变量";
    echo "\$var1=".$GLOBALS["var1"];
}
myfun12();
global $var2;
$var2=8;
function myfun13(){
    global $var3;
    $var3=9;
    echo "<br>在myfun3()函数中输出全局变量";
    echo "\$var2=".$var2;
    echo " \$var3=".$var3;
}
myfun13();
echo "<br>在函数外输出全局变量";
echo "\$var2=".$var2;
echo " \$var3=".$var3;
echo "<br>";
echo "//////////////////////////4-26，静态变量与动态变量<br/>";
function fun21()
{
    $int1=0;        //定义普通变量
    echo $int1."&nbsp;";
    $int1++;
}
fun21();    //输出0
fun21();    //输出还是0
echo "<br>*************<br>";
function fun22()
{
    static $int2=0;       //定义静态变量
    echo $int2."&nbsp;";
    $int2++;
}
fun22();    //输出0
fun22();    //输出1
fun22();    //输出2
echo "<br>*************<br>";
$int=6;
$var="int";/// 与   函数的同名变量  实现可变函数  类似
echo $$var;   //输出动态变量
$$var=8;
echo "&nbsp;".$int;
echo "<br>*************<br>";
echo "//////////////////////////4-27，引用变量<br/>";
$int1=8;
$int2=&$int1;//$int2指向$int1同一个位置
$int2++;
echo $int1;
echo "<br>*************<br>";

