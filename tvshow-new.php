<?php
    include("inc/dbconn.php");
    include("inc/upload.php");
    include("init.inc.php");
    header("content-type:text/html;charset=utf-8;");
     //设置时区
    date_default_timezone_set('PRC');//中国时区
    //今日推荐(个护美妆的热销)
    $sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=0";
    $resP=$conn->query($sql);//结果集
    while($row=mysqli_fetch_assoc($resP)){
        $today[]=$row;
    }
    // var_dump($today);
    //使用smarty
    $smarty->assign("today",$today);
    $smarty->display("tvshow-new.html");
?>