<?php
header('Content-Type: text/html; charset=utf-8');//强制输出utf8
/**
 * test
 * @author kenny
 * @date   2015-04-16
 */
echo date('Y-m-d h:i:s',1378998000)."<br/>";
/////////////////////////////////////////////////////////////
function foo(&$val1, $val2) {
    $val1 += 1;
    $val2 += 1;
}
$a=5;
$b=10;
foo($a,$b);
echo $a."<br/>";
echo $b."<br/>";
/////////////////////////////////////////////////////////////
function &chhua()
{
    static $b="www.jb51.net";//申明一个静态变量
    $b=$b."WEB开发";
    echo $b;
    return $b;
}

$a=chhua();//这条语句会输出　$b的值　为“www.jb51.netWEB开发”
$a="PHP";
echo "<br/>";
$a=chhua();//这条语 句会输出　$b的值　为“www.jb51.netWEB开发WEB开发”
echo "<br/>";
$a=&chhua();//这条语句会输出　$b的值　为“www.jb51.netWEB开发WEB开发WEB开发” ///$a和$b指向同一个地址
echo "<br/>";
$a="JS"; ///$a和$b指向同一个地址，$b也是"JS"
$a=chhua(); //这条语句会输出　$b的值　为"JSWEB开发"
echo "<br/>";

function &test()
{
    static $b=0;//申明一个静态变量
    $b=$b+1;
    echo $b;
    return $b;
}

$a=test();//这条语句会输出　$b的值　为１
$a=5;
$a=test();//这 条语句会输出　$b的值　为2
$a=&test();//这条语句会输出　$b的值　为3 ///$a指向$b的同一个地址
$a=5;///$a指向$b的同一个地址,$b=5
$a=test(); //这条语句会输出　$b的值　为6
phpinfo();
