<?php
 include("inc/dbconn.php");
 include("inc/upload.php");
 include("init.inc.php");
 header("content-type:text/html;charset=utf-8;");
  //设置时区
 date_default_timezone_set('PRC');//中国时区
 // 食品健康 热销 1
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=0";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind1[]=$row;
}
//食品健康 饮料冲调 2
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=1";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind2[]=$row;
}
//食品健康  身体护理 3
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=4";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind3[]=$row;
}
//食品健康 休闲美食 4
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=5";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind4[]=$row;
}
//食品健康 生鲜食品 5
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=7";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind5[]=$row;
}
//食品健康 营养保健  6
$sql="select goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=6";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind6[]=$row;
}
// 个护美妆 面部护理 7
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=1";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind7[]=$row;
}
//个护美妆 香水彩妆  1
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=2";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind8[]=$row;
}
//个护美妆 美发护发  2
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=3";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind9[]=$row;
}
//个护美妆 身体护理  3
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=4";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind10[]=$row;
}
//个护美妆 空腔护理  4
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=6";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind11[]=$row;
}
//个护美妆 美容工具  5
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=5";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind12[]=$row;
}
//餐厨日用  6
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=3";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind13[]=$row;
}
//餐厨日用  7
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=4";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kind14[]=$row;
}
// var_dump($today);
//使用smarty
$smarty->assign("kind1",$kind1);
$smarty->assign("kind2",$kind2);
$smarty->assign("kind3",$kind3);
$smarty->assign("kind4",$kind4);
$smarty->assign("kind5",$kind5);
$smarty->assign("kind6",$kind6);
$smarty->assign("kind7",$kind7);
$smarty->assign("kind8",$kind8);
$smarty->assign("kind9",$kind9);
$smarty->assign("kind10",$kind10);
$smarty->assign("kind11",$kind11);
$smarty->assign("kind12",$kind12);
$smarty->assign("kind13",$kind13);
$smarty->assign("kind14",$kind14);
$smarty->display("tvshow.html");
?>