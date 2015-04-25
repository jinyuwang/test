<?php
$fp=fopen('hello.txt','r')or die("can't open file");
while ($s = fgets($fp, 1024)) {
    $fields[1] = substr($s, 0, 10);
    $fields[2] = substr($s, 10, 5);
    $fields[3] = substr($s, 15, 12);
    print_r($fields);
    var_dump($fields);
}
fclose($fp) or die("can't close file");
?>