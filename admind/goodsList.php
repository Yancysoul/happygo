<?php
    include("../inc/dbconn.php");
    include("init.inc.php");
    header("Content-type: text/html; charset=utf-8");
    date_default_timezone_set('PRC');//中国时区
    $pno = 0;
    if (isset($_GET["pno"])) {
        $pno = $_GET["pno"];
        $pno = 10 * ($pno - 1);
    }
    $pageSql = "select count(*) count from goods";
    // 总数据条数
    $totalRecords = mysqli_fetch_assoc($conn->query($pageSql))["count"];
    // 总页数
    $totalPage = ceil($totalRecords / 10);
    // echo $totalRecords;
    $str = "select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodssort,goodsssort,goodspic,goodsactive,goodsactivedesc from goods ";
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = $str."where id=".$id;
    } else {
        if (isset($_GET["goodssort"]) && isset($_GET["goodsactive"]) && isset($_GET["goodsssort"])) {
            $goodssort = $_GET["goodssort"];
            $goodsactive = $_GET["goodsactive"];
            $goodsssort = $_GET["goodsssort"];
            $sql = $str."where goodssort=".$goodssort."and goodsactive=".$goodsactive."and goodsssort=".$goodsssort;
        } elseif (isset($_GET["goodssort"]) && isset($_GET["goodsactive"])) {
            $goodssort = $_GET["goodssort"];
            $goodsactive = $_GET["goodsactive"];
            $sql = $str."where goodssort=".$goodssort."and goodsactive=".$goodsactive;
        } elseif (isset($_GET["goodssort"]) && isset($_GET["goodsssort"])) {
            $goodssort = $_GET["goodssort"];
            $goodsssort = $_GET["goodsssort"];
            $sql = $str."where goodssort=".$goodssort."and goodsssort=".$goodsssort;
        } elseif (isset($_GET["goodssort"])) {
            $goodssort = $_GET["goodssort"];
            $sql = $str."where goodssort=".$goodssort;
        } elseif (isset($_GET["goodsactive"])) {
            $goodsactive = $_GET["goodsactive"];
            $sql = $str."where goodsactive=".$goodsactive;
        } else {
            $sql = $str."limit ".$pno.",10";
        }
    }
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    $smarty->assign("goods", $arr);
    $smarty->display("goodsList.html");
?>