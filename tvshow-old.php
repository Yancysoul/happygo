<?php
include("inc/dbconn.php");
include("inc/upload.php");
include("init.inc.php");
header("content-type:text/html;charset=utf-8;");
 //设置时区
date_default_timezone_set('PRC');//中国时区
//tv热销
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=0";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds1[]=$row;
}
//个护美妆
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds2[]=$row;
}
//食品健康
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds3[]=$row;
}
//厨具日用
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds4[]=$row;
}
//服装配饰
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds5[]=$row;
}
//布艺家纺
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=5";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds6[]=$row;
}
//家电数码
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=6";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds7[]=$row;
}
//母婴呵护
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=4";
$resP=$conn->query($sql);//结果集
while($row=mysqli_fetch_assoc($resP)){
    $kinds8[]=$row;
}
// var_dump($today);
//使用smarty
$smarty->assign("kinds1",$kinds1);
$smarty->assign("kinds2",$kinds2);
$smarty->assign("kinds3",$kinds3);
$smarty->assign("kinds4",$kinds4);
$smarty->assign("kinds5",$kinds5);
$smarty->assign("kinds6",$kinds6);
$smarty->assign("kinds7",$kinds7);
$smarty->assign("kinds8",$kinds8);
$smarty->display("tvshow-old.html");
?>