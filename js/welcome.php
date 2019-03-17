<?php
header('Content-Type: text/html; charset=utf-8');
//如果cookie中有用户名,
$username=$_COOKIE["username"];
echo "欢迎你,".$username;
?>