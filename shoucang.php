<?php
include("inc/dbconn.php");
include("init.inc.php");
header("content-type:text/html;charset=utf-8");
// 设置时区
date_default_timezone_set('PRC');
session_start();
ob_start();
$pid=$_GET["id"];//得到收藏物品的id
$goodsName=$_GET['goodsName'];
$goodsNewPrice=$_GET['goodsNewPrice'];
$goodsOldPrice=$_GET['goodsOldPrice'];
$arr=$_SESSION['shoucang'];
if(is_array($arr)){
    // 如果是数组,说明以前收藏东西
    // 如果买过东西,又分为两种情况
    if(array_key_exists($pid,$arr)){
        //1、array_key_exists($pid,$arr)判断$arr中是否存在键值为$pid的一个一维数组，如果存在的话，就说明此商品以前购买过，只需要把数量加1
        $uu=$arr[$pid]; //从二维数组里拿出对应的一维数组，该一维数组包括id name num ,goodsNewPrice三个值
        // $uu["num"]=$uu["num"]+1;  //改变数量，将数量加1
        $arr[$pid]=$uu; //改完后再将此一维数组放回二维数组中
    } else{
        //2.此商品第一次购买，就将得到的id和name值组成一个一维数组
          $arr[$pid]=array("pid"=>$pid,"goodsName"=>$goodsName,"goodsNewPrice"=>$goodsNewPrice,"goodsOldPrice"=>$goodsOldPrice);
    }  
}else{
    //还没有买过东西
    $arr[$pid]=array("pid"=>$pid,"goodsName"=>$goodsName,"goodsNewPrice"=>$goodsNewPrice,"goodsOldPrice"=>$goodsOldPrice);
    }
    $_SESSION["shoucang"]=$arr;//购买完后，将此数组重新放入session中，便可以在各个页面看到此session
    ob_clean();//清空缓存
    header("location:theorder.php");//跳转到购物车界面(theorder.php)
    //var_dump($_SESSION);
?>