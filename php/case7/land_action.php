<html>
<head lang="en"><meta charset="UTF-8">
<title>用户登入</title>
</head>
<body>
<?php
$user_name=$_POST["user_name"];
$user_pw=$_POST["user_pw"];
$user_name2=$user_name."\n";
$user_pw2=$user_pw."\n";
$tag=0; //登入是否成功标志位 0-不成功;1-成功
$file=fopen("user_info.txt","r");
if($file){
    while(!feof($file)){//循环，文件指针下移
        $buffer=fgets($file,4096);//取一行文本
        echo $buffer."<br/>";/////////////debug
        if($buffer==$user_name2){
            @next($file);
            $buffer=fgets($file,4096);
            echo $buffer."<br/>";/////////////debug
            if($buffer==$user_pw2){
                echo "您输入的用户名密码正确，登入成功！<br/>";
                @next($file);
                $image=fgets($file,4096);
                echo $image."<br/>";/////////////debug
                echo "您的头像：<img src=".$image." align=middle><br/>";
                $tag=1;
                break;
            }else{//密码不对...user_pw
                @next($file);
                @next($file);
            }
        }else{//用户名不对...user_name
            @next($file);
            @next($file);
            @next($file);
        }
    }
    if($tag==0){
        echo "您输入的用户名和密码不正确，请<a href=land.html>返回</a>重新输入";
    }
    fclose($file);
}
?>
</body>
</html>