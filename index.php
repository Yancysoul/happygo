<?php
include("inc/dbconn.php");
include("init.inc.php");
header("content-type:text/html;charset=utf-8");
// 设置时区
date_default_timezone_set('PRC');
// 今日直播
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsssort=0";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $today[]=$row;
}
// 昨日疯抢
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $yestoday[]=$row;
}
// 限时抢购
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=1 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $timeSale1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=1 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $timeSale2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=1 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $timeSale3[]=$row;
}
// 新品推荐
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=2 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $newGoods1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=2 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $newGoods2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=2 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $newGoods3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodsactive=2 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $newGoods4[]=$row;
}
// 个护美妆
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=7";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr0[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr4[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=5";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr5[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=1 and goodsssort=6";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $makeupArr6[]=$row;
}
// 食品健康
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr4[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=5";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr5[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=6";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr6[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=2 and goodsssort=7";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $healthArr7[]=$row;
}
// 餐厨日用
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=10";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen0[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen4[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=5";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen5[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=6";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen6[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=7";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen7[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=8";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen8[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=3 and goodsssort=9";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $kitchen9[]=$row;
}
// 服装配饰
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth4[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=5";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth5[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=6";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth6[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=7";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth7[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=8";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth8[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=4 and goodsssort=9";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $cloth9[]=$row;
}
// 布艺家纺
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=5 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $clothArt1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=5 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $clothArt2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=5 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $clothArt3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=5 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $clothArt4[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=5 and goodsssort=5";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $clothArt5[]=$row;
}
// 家电数码
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=6 and goodsssort=1";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $digit1[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=6 and goodsssort=2";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $digit2[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=6 and goodsssort=3";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $digit3[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=6 and goodsssort=4";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $digit4[]=$row;
}
$sql="select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodspic from goods where goodssort=6 and goodsssort=5";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res)){
    $digit5[]=$row;
}
// smarty模板
// 今日直播
$smarty->assign("today",$today);
// 昨日疯抢
$smarty->assign("yestoday",$yestoday);
// 限时抢购
$smarty->assign("timeSale1",$timeSale1);
$smarty->assign("timeSale2",$timeSale2);
$smarty->assign("timeSale3",$timeSale3);
// 新品推荐
$smarty->assign("newGoods1",$newGoods1);
$smarty->assign("newGoods2",$newGoods2);
$smarty->assign("newGoods3",$newGoods3);
$smarty->assign("newGoods4",$newGoods4);
// 个护美妆
$smarty->assign("makeup0",$makeupArr0);
$smarty->assign("makeup1",$makeupArr1);
$smarty->assign("makeup2",$makeupArr2);
$smarty->assign("makeup3",$makeupArr3);
$smarty->assign("makeup4",$makeupArr4);
$smarty->assign("makeup5",$makeupArr5);
$smarty->assign("makeup6",$makeupArr6);
// 食品健康
$smarty->assign("health1",$healthArr1);
$smarty->assign("health2",$healthArr2);
$smarty->assign("health3",$healthArr3);
$smarty->assign("health4",$healthArr4);
$smarty->assign("health5",$healthArr5);
$smarty->assign("health6",$healthArr6);
$smarty->assign("health7",$healthArr7);
// 餐厨日用
// $smarty->assign("kitchen0",$kitchen0);
$smarty->assign("kitchen1",$kitchen1);
$smarty->assign("kitchen2",$kitchen2);
$smarty->assign("kitchen3",$kitchen3);
$smarty->assign("kitchen4",$kitchen4);
$smarty->assign("kitchen5",$kitchen5);
$smarty->assign("kitchen6",$kitchen6);
$smarty->assign("kitchen7",$kitchen7);
$smarty->assign("kitchen8",$kitchen8);
$smarty->assign("kitchen9",$kitchen9);
// 服装配饰
$smarty->assign("cloth1",$cloth1);
$smarty->assign("cloth2",$cloth2);
$smarty->assign("cloth3",$cloth3);
$smarty->assign("cloth4",$cloth4);
$smarty->assign("cloth5",$cloth5);
$smarty->assign("cloth6",$cloth6);
$smarty->assign("cloth7",$cloth7);
$smarty->assign("cloth8",$cloth8);
$smarty->assign("cloth9",$cloth9);
// 布艺家纺
$smarty->assign("clothArt1",$clothArt1);
$smarty->assign("clothArt2",$clothArt2);
$smarty->assign("clothArt3",$clothArt3);
$smarty->assign("clothArt4",$clothArt4);
$smarty->assign("clothArt5",$clothArt5);
// 家电数码
$smarty->assign("digit1",$digit1);
$smarty->assign("digit2",$digit2);
$smarty->assign("digit3",$digit3);
$smarty->assign("digit4",$digit4);
$smarty->assign("digit5",$digit5);
$smarty->display("index.html");
?>