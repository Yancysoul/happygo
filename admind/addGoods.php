<?php
    include("../inc/dbconn.php");
    include("../inc/upload.php");
    date_default_timezone_set('PRC');//中国时区
    $goodsname = $_POST["goodsname"];
    $goodsdesc = $_POST["goodsdesc"];
    $goodsnewsprice = $_POST["goodsnewsprice"];
    $goodsoldprice = $_POST["goodsoldprice"];
    $goodssort = $_POST["goodssort"];
    $goodsssort = $_POST["goodsssort"];
    $goodsactive = $_POST["goodsactive"];
    $goodsactivedesc = $_POST["goodsactivedesc"];
    $file = $_FILES["goodspic"];
    $pic = upload($file,"../images/")["msg"];
    $sql = "insert into goods (goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic,goodssort,goodsssort,goodsactive,goodsactivedesc) value ('$goodsname','$goodsdesc','$goodsnewsprice','$goodsoldprice','$pic','$goodssort','$goodsssort','$goodsactive','$goodsactivedesc');";
    $conn->query($sql);
    header("location:goodsList.php");
?>