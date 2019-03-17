<?php
    include("inc/dbconn.php");
    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $sql = "select * from hbp where username = '".$username."'";
        $row = mysqli_fetch_assoc($conn->query($sql));
        if ($row) {
            echo 0;
        } else {
            echo 1;
        }
    }
?>