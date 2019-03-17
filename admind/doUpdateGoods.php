<?php
    include("../inc/dbconn.php");
    include("../inc/upload.php");
    header("content-type:text/html;charset=utf-8;");
    date_default_timezone_set('PRC');//中国时区
    $goodsname = $_POST["goodsname"];
    $goodsdesc = $_POST["goodsdesc"];
    $goodsnewsprice = $_POST["goodsnewsprice"];
    $goodsoldprice = $_POST["goodsoldprice"];
    $goodssort = $_POST["goodssort"];
    $goodsssort = $_POST["goodsssort"];
    $goodsactive = $_POST["goodsactive"];
    $goodsactivedesc = $_POST["goodsactivedesc"];
    $id = $_POST["id"];
    $file = $_FILES["goodspic"];
    if ($file["name"]) {
        $pic = upload($file,"../images/")["msg"];
        $sql = "update goods set goodsname='".$goodsname."',goodsdesc='".$goodsdesc."',goodsnewsprice='".$goodsnewsprice."',goodsoldprice='".$goodsoldprice."',goodssort='".$goodssort."',goodsssort='".$goodsssort."',goodsactive='".$goodsactive."',goodsactivedesc='".$goodsactivedesc."',goodspic='".$pic."' where id=".$id;
    } else {
        $sql = "update goods set goodsname='".$goodsname."',goodsdesc='".$goodsdesc."',goodsnewsprice='".$goodsnewsprice."',goodsoldprice='".$goodsoldprice."',goodssort='".$goodssort."',goodsssort='".$goodsssort."',goodsactive='".$goodsactive."',goodsactivedesc='".$goodsactivedesc."' where id=".$id;
    }
    $conn->query($sql);
    header("location:goodsList.php");
?>