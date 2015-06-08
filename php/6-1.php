<HTML lang="en"><meta charset="UTF-8">
<HEAD>
    <TITLE>array-函数的使用</TITLE>
<BODY>
</HEAD>
<?php
//array, count, each,   reset, current, next, prev
$arr = array("name"=>"Bob","age"=>20,"sex"=>"male","postcode"=>"100000");

For($i=0;$i<count($arr);$i++){
    $keyAndValue=Each($arr);
    Echo $keyAndValue["key"]."=>".$keyAndValue["value"];
    echo "<br>";
}
echo "0-".reset($arr)."<br/>";
echo "1-".next($arr)."<br/>";
echo "2-".next($arr)."<br/>";
echo "3-".prev($arr)."<br/>";
echo "4-".current($arr)."<br/>";
echo "5-".next($arr)."<br/>";
?>
</BODY>
</HTML>
