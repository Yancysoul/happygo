<?php
    include("../inc/dbconn.php");
    $id = $_GET["id"];
    $sql = "delete from goods where id=".$id;
    $conn->query($sql);
    header("location:goodsList.php");
?>