<!--文件7-2.php：目录输出-->
<html>
<head lang="en"><meta charset="UTF-8">
<title>目录输出</title>
    <?php
/*//这个开始也是可以成功的。
class dir{
        public $path;
        public $handle;
        function dir(string $directory){
            $this->path=$directory;
            $this->handle=opendir($directory);
        }
        function read(){
            return readdir($this->path);
        }
        function rewind(){
            rewinddir($this->handle);
        }
        function close(){
            closedir($this->handle);
        }
    }*/
    ?>
</head>
<body>
<?php
$dir=getcwd();//获取当前路径
echo getcwd()."<br/>";//输出当前目录
$files1=scandir($dir);//列出指定路径中的文件和目录
$files2=scandir($dir,1);//~~,降序
print_r($files1);
echo "<br/><br/>================================<br/><br/>";
print_r($files2);
echo "<br/><br/>================================<br/><br/>";
var_dump($files1);
echo "<br/><br/>================================<br/><br/>";
var_dump($files2);
echo "<br/><br/>================================<br/><br/>";
$dir=dir($dir); //////////////////////////////////////////////////系统已经有dir类了
echo gettype($dir)."<br/>";
echo "目录句柄".$dir->handle."<br/>";
echo "目录路径".$dir->path."<br/>";
while($entry=$dir->read())
    echo $entry.";<br/>";
$dir->close();
if(chdir("d:/windows")){
    echo "当前目录更改成功：d:/windows<br/>";
}else{
    echo "当前目录更改失败！<br/>";
}
?>
</body>
</html>
