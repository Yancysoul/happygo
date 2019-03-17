<?php
    include("../inc/dbconn.php");
    $tel = $_POST["tel"];
    $userpwd = $_POST["userpwd"];
    $sql = "select * from user where tel=".$tel;
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        $insert = "insert into user (tel,userpwd) value ('$tel','$userpwd');";
        $conn->query($insert);
        echo 1;
    } else {
        echo 0;
    }
?>