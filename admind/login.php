<?php
    include("../inc/dbconn.php");
    $tel = $_POST["tel"];
    $userpwd = $_POST["userpwd"];
    $sql = "select userpwd from user where tel=".$tel;
    $result = $conn->query($sql);
    if($result->num_rows == 1) {
        if (mysqli_fetch_assoc($result)["userpwd"] == $userpwd) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
?>