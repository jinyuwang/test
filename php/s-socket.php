<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/6/15
 * Time: 10:40
 */
set_time_limit(0);

$host = "127.0.0.1";
$port = 2046;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create	socket\n"); // 创建一个Socket

$result = socket_bind($socket, $host, $port) or die("Could not bind tosocket\n"); //绑定Socket到端口

$result = socket_listen($socket, 3) or die("Could not set up socket listener\n"); // 开始监听连接

$spawn = socket_accept($socket) or die("Could not accept incoming connection\n"); // 处理通信

$input = socket_read($spawn, 1024) or die("Could not read input\n"); // 数据传送 获得客户端的输入

$input = trim($input);
echo 'input:', $input, "\n";

if ($input == 'time') {
    $output = date("Y-m-d H:i:s"). "\n"; //处理客户端输入并返回结果
}else{
    $output = "input error \n"; //处理客户端输入并返回结果
}

echo "output:", $output, "\n";

//	数据传送 向客户端写入返回结果
socket_write($spawn, $output, strlen($output)) or die("Could not write output\n");

// 关闭sockets
socket_close($spawn);
socket_close($socket);
?>