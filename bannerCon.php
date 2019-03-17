<?php
    include("inc/dbconn.php");
    include("init.inc.php");
    date_default_timezone_set('PRC');
        $sql="select goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 ";
        $res=$conn->query($sql);
        while($row=mysqli_fetch_assoc($res)){
            $foodsArr[]=$row;
        }
        $smarty->assign("freshFoods",$foodsArr);
        $smarty->display("bannerCon.html");
?>