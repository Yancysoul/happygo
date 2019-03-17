<?php
include("../inc/dbconn.php");
if(!empty($_GET["userphone"]) && empty($_GET["userpwd"])){
    $userphone=$_GET["userphone"];
    $sql="select id,tel from user where tel='$userphone' limit 1";
    $res=$conn->query($sql);
    if($res->num_rows>0){
        // 手机号已经被注册
        echo 'false';
    }else{
        echo 'true';
    }
}elseif(!empty($_GET["userpwd"]) && !empty($_GET["userphone"])){
    $userphone=$_GET["userphone"];
    $userpwd=$_GET["userpwd"];
    $sql="insert into user (tel,userpwd) value('$userphone','$userpwd')";
    $conn->query($sql);
    header("location:../login.html");
}
?>