<?php
    $username = "root";
    $userpwd = "root";
    $dbname = "happygo";
    $servername = "localhost";
    $conn = new mysqli($servername, $username, $userpwd, $dbname);
    if ($conn->connect_error) {
        die("数据库连接失败！");
    }
?>