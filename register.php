<?php
include("inc/dbconn.php");
session_start();
if (!empty($_GET["userphone"]) && empty($_GET["userpwd"])) {
    $userphone = $_GET["userphone"];
    $sql = "select id,userphone from user where userphone='$userphone' limit 1";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        // 手机号已存在
        echo 'false';
    } else {
        echo 'true';
    }
} elseif (!empty($_GET["userpwd"]) && !empty($_GET["userphone"])) {
    $userphone = $_GET["userphone"];
    $userpwd = $_GET["userpwd"];
    $sql = "insert into user (userphone,userpwd) value('$userphone','$userpwd')";
    if($conn->query($sql)){
        header("location:logon.html");
    }
}
// elseif (!empty($_GET["usernote"]) && !empty($_GET["userphone"]) && empty($_GET["userpwd"])) {
//     $code = $_GET['usernote'];
//     if ($code == $_SESSION['code']) {
//         echo 'true';
//     } else {
//         echo 'false';
//     }
// }
// !empty($_GET["usernote"]) && 
?>