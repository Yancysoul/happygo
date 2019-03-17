<?php
    include("inc/dbconn.php");
    $username=$_COOKIE["username"];
    $userpwd=$_COOKIE["userpwd"];
    $sql="select userphone,userpwd from user where userphone='$username' and userpwd='$userpwd'";
    $res=$conn->query($sql);
    if($res->num_rows>0){
        // 用户名和密码在数据库中匹配正确，跳转到购物车页面。
        header("location:mycart.php");
    }else{
        header("location:logon.html");
    }
?>