<?php
    header("Content-type: text/html; charset=utf-8");   //防止中文乱码
    include("inc/dbconn.php");
    // 面部护理
    $face = "select * from goods where goodssort='1' and goodsactive='2'";
    $faceResult = $conn->query($face);
    while($row = mysqli_fetch_assoc($faceResult)) {
        $faceArr[] = $row;
    }
    // var_dump($faceArr);
    // 香水彩妆
    $scent = "select * from goods where goodssort='1' and goodsactive='3'";
    $scentResult = $conn->query($scent);
    while($row = mysqli_fetch_assoc($scentResult)) {
        $scentArr[] = $row;
    }
    // var_dump($scentArr);
    // 美妆护发
    $hair = "select * from goods where goodssort='1' and goodsactive='4'";
    $hairResult = $conn->query($hair);
    while($row = mysqli_fetch_assoc($hairResult)) {
        $hairArr[] = $row;
    }
    // 身体护理
    $health = "select * from goods where goodssort='1' and goodsactive='5'";
    $healthResult = $conn->query($health);
    while($row = mysqli_fetch_assoc($healthResult)) {
        $healthArr[] = $row;
    }
    // 美容工具
    $cosmetology = "select * from goods where goodssort='1' and goodsactive='6'";
    $cosmetologyResult = $conn->query($cosmetology);
    while($row = mysqli_fetch_assoc($cosmetologyResult)) {
        $cosmetologyArr[] = $row;
    }
    // 口腔护理
    $mouth = "select * from goods where goodssort='1' and goodsactive='7'";
    $mouthResult = $conn->query($mouth);
    $mouthArr = array();
    while($row = mysqli_fetch_assoc($mouthResult)) {
        $mouthArr[] = $row;
    }
    // echo $mouthArr;
    $arr = array();
    array_push($arr, $faceArr, $scentArr, $hairArr, $healthArr, $cosmetologyArr, $mouthArr);
    echo json_encode($arr);
    // echo json_encode(array_merge($faceArr, $scentArr, $hairArr, $healthArr, $cosmetologyArr, $mouthArr));
?>