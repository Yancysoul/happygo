<?php
include("inc/dbconn.php");
$username=$_COOKIE["username"];
$userpwd=$_COOKIE["userpwd"];
$sql="select username,userpwd from user where username='$username' and userpwd='$userpwd'";
$res=$conn->query($sql);
if($res->num_rows>0){
    // 用户名和密码在数据库中匹配正确，跳转到欢迎页面。
    header("location:theorder.php");
}else{
    header("location:logon.html");
}
?>
