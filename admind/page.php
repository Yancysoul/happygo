<?php
    include("../inc/dbconn.php");
    $pageSql = "select count(*) count from goods";
    // 总数据条数
    $totalRecords = mysqli_fetch_assoc($conn->query($pageSql))["count"];
    // 总页数
    $totalPage = ceil($totalRecords / 10);
    echo "num=".$totalRecords."&page=".$totalPage;
?>