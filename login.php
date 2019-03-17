<?php
    include("inc/dbconn.php");
    if (isset($_POST["username"]) && isset($_POST["userpwd"])) {
        $username = $_POST["username"];
        $userpwd = $_POST["userpwd"];
    }
    $flag = 0;
    if (preg_match("/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/",$username)) {
        $sql = "select count(*) count from user where tel='".$username."'";
        $flag = 1;
    } elseif (preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/",$username)) {
        $sql = "select count(*) count from user where email='".$username."'";
        $flag = 2;
    } else {
        $sql = "select count(*) count from user where username='".$username."'";
        $flag = 3;
    }
    $result = $conn->query($sql);
    if (mysqli_fetch_assoc($result)["count"]) {
        if ($flag == 1) {
            $pwd = "select userpwd from user where tel='".$username."'";
        } elseif($flag == 2) {
            $pwd = "select userpwd from user where email='".$username."'";
        } else {
            $pwd = "select userpwd from user where username='".$username."'";
        }
    }
    $pwd = $conn->query($pwd);
    $pwd = mysqli_fetch_assoc($pwd)["userpwd"];
    if ($pwd == $userpwd) {
        echo 1;
    } else {
        echo 0;
    }
?>