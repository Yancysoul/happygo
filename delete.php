<?php
session_start();
ob_start();
$pid=$_GET["id"];//得到通过get方式传过来的id
// echo $pid;
// echo 1;
$arr=$_SESSION["mycar"];//拿出session里的二维数组
foreach($arr as $key=>$proId)//遍历该二维数组中的键值，这里也就是商品的id
{
    if($key==$pid)//判断键值等于传过来的商品id
    {
            //  echo "-1";
            unset($arr[$key]);//清除该一维数组
    }
}
$_SESSION["mycar"]=$arr;//将清除之后的二维数组重新放到session里
ob_clean();//清除缓存
echo -1;
// header("location:mycart.php");//跳转到购物车
?>