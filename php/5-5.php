<!--文件5-5：服务器信息的获取-->
<HTML lang="en"><meta charset="UTF-8">
<HEAD>
    <TITLE>服务器信息的获取</TITLE>
</HEAD>
<BODY>
<?php
var_dump($_SERVER);
echo "<pre/><br/><br/><pre/>";
echo "1、".$_SERVER["PHP_SELF"]."<br>";
echo "2、".$_SERVER["argv"]."<br>";
echo "3、".$_SERVER["argc"]."<br>";
echo "4、".$_SERVER["SERVER_NAME"]."<br>";
echo "5、".$_SERVER["SERVER_SOFTWARE"]."<br>";
echo "6、".$_SERVER["SERVER_PROTOCOL"]."<br>";
echo "7、".$_SERVER["REQUEST_METHOD"]."<br>";
echo "8、".$_SERVER["REQUEST_TIME"]."<br>";
echo "9、".$_SERVER["QUERY_STRING"]."<br>";
echo "10、".$_SERVER["DOCUMENT_ROOT"]."<br>";
echo "11、".$_SERVER["HTTP_ACCEPT"]."<br>";
echo "12、".$_SERVER["HTTP_ACCEPT_ENCODING"]."<br>";
echo "13、".$_SERVER["HTTP_ACCEPT_LANGUAGE"]."<br>";
echo "14、".$_SERVER["HTTP_CONNECTION"]."<br>";
echo "15、".$_SERVER["HTTP_HOST"]."<br>";
echo "16、".$_SERVER["HTTP_USER_AGENT"]."<br>";
echo "17、".$_SERVER["HTTPS"]."<br>";
echo "18、".$_SERVER["REMOTE_ADDR"]."<br>";
echo "19、".$_SERVER["REMOTE_HOST"]."<br>";
echo "20、".$_SERVER["SCRIPT_FILENAME"]."<br>";
echo "21、".$_SERVER["SERVER_PORT"]."<br>";
echo "22、".$_SERVER["PATH_TRANSLATED"]."<br>";
echo "23、".$_SERVER["SCRIPT_NAME"]."<br>";
echo "24、".$_SERVER["REQUEST_URI"]."<br>";
?>
</BODY>
</HTML>

