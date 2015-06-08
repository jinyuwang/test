<?php header("content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','test','test','test'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
echo 'Connection OK'; mysqli_close($link); 
echo 'Connection OK你好！<br/>';
echo 'Connection OK<br/>'; 
echo 'Connection OK<br/>'; 
echo 'Connection OK<br/>'; 
echo 'Connection OK<br/>'; 
echo 'Connection OK<br/>'; 
echo 'Connection OK<br/>';

$ar = array('a','b','c','1','2');
var_dump($ar);
print_r($ar);

$ar[]='d';
var_dump($ar);
print_r($ar);

