<?php
    $servername="localhost";
    $uname="root";
    $upwd="root";
    $dbname="happygo";
    $conn = new mysqli($servername,$uname,$upwd,$dbname);

    $username=$_POST["username"];
    $userpwd=$_POST["userpwd"];

    $sql="select * from user where username='$username' and userpwd='$userpwd'";

    $result=$conn->query($sql);

    if($result->num_rows>0){
         
        echo  "ok";
         //直接存cookie
        setcookie("username", $username, time()+60*60*24);//expire过期时间,秒
    }else{
        echo  "no";
    }

?>