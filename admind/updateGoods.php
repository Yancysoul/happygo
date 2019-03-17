<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/addgoods.css">
</head>
<body>
    <?php
        include("../inc/dbconn.php");
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $sql = "select id,goodsname,goodsdesc,goodsnewsprice,goodsoldprice,goodssort,goodsssort,goodspic,goodsactive,goodsactivedesc from goods where id=".$id;
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            if (isset($row["goodssort"])) {
                $goodssort = $row["goodssort"];
                // echo $goodssort;
            }
            if (isset($row["goodsssort"])) {
                $goodsssort = $row["goodsssort"];
                // echo $goodsssort;
            }
            if (isset($row["goodsactive"])) {
                $goodsactive = $row["goodsactive"];
                // echo $goodsactive;
            }
        }
    ?>
    <form action="doUpdateGoods.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>修改商品信息</legend>
            <input type="hidden" name="id" value="<?php if (isset($row['id'])) {echo $row['id'];}?>">
            <div><label for="goodsname"><span>*</span>商品名称：</label><input type="text" name="goodsname" id="goodsname" value="<?php if (isset($row['goodsname'])) {echo $row['goodsname'];}?>"></div>
            <div><label for="goodsdesc"><span>*</span>商品描述：</label><input type="text" name="goodsdesc" id="goodsdesc" value="<?php if (isset($row['goodsdesc'])) {echo $row['goodsdesc'];}?>"></div>
            <div><label for="goodsnewsprice"><span>*</span>商品当前价格：</label><input type="text" name="goodsnewsprice" id="goodsnewsprice" value="<?php if (isset($row['goodsnewsprice'])) {echo $row['goodsnewsprice'];}?>"></div>
            <div><label for="goodsoldprice">商品历史价格：</label><input type="text" name="goodsoldprice" id="goodsoldprice" value="<?php if (isset($row['goodsoldprice'])) {echo $row['goodsoldprice'];}?>"></div>
            <div style="position:relative;"><label for="goodspic"><span>*</span>商品图片：</label><img style="height:45px; position:absolute; top:-7px; left:150px;" src="../images/<?php if (isset($row['goodspic'])) {echo $row['goodspic'];}?>" alt="图片加载中"><div style="position:absolute; top:3px; left:200px; width:60px; height:23px; overflow:hidden; ;"><input id="fileImg" type="file" name="goodspic" id="goodspic" title="修改图片"></div><span id="reviseImg" style="color:#000;font-size:14px;position:absolute; top:4px; left:260px;">修改图片</span></div>
            <div><label for="goodssort"><span>*</span>商品分类：</label>
                <div class="sort goodssort">
                    <input type="radio" name="goodssort" value="1" checked>个护美妆 
                    <input type="radio" name="goodssort" value="2">食品健康 
                    <input type="radio" name="goodssort" value="3">餐厨日用 
                    <input type="radio" name="goodssort" value="4">服装配饰 
                    <input type="radio" name="goodssort" value="5">布艺家纺 
                    <input type="radio" name="goodssort" value="6">家电数码
                    <input type="radio" name="goodssort" value="7">品牌馆
                </div>
            </div>
            <div><label for="goodsssort"><span>*</span>商品二级分类：</label>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0" checked>无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">面部护理
                    <input type="radio" name="goodsssort" value="3">香水彩妆
                    <input type="radio" name="goodsssort" value="4">美妆护发
                    <input type="radio" name="goodsssort" value="5">身体护理
                    <input type="radio" name="goodsssort" value="6">美容工具
                    <input type="radio" name="goodsssort" value="7">口腔护理
                </div>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0">无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">饮料冲调
                    <input type="radio" name="goodsssort" value="3">粮油调味
                    <input type="radio" name="goodsssort" value="4">酒水茗茶
                    <input type="radio" name="goodsssort" value="5">休闲食品
                    <input type="radio" name="goodsssort" value="6">营养保健
                    <input type="radio" name="goodsssort" value="7">生鲜食品
                </div>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0">无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">烹饪锅具
                    <input type="radio" name="goodsssort" value="3">生活用品
                    <input type="radio" name="goodsssort" value="4">厨房电器
                    <input type="radio" name="goodsssort" value="5">清洁收纳
                    <input type="radio" name="goodsssort" value="6">厨房用具
                    <input type="radio" name="goodsssort" value="7">厨房配件
                    <input type="radio" name="goodsssort" value="8">家装建材
                </div>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0">无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">女士服装
                    <input type="radio" name="goodsssort" value="3">男士服装
                    <input type="radio" name="goodsssort" value="4">内衣
                    <input type="radio" name="goodsssort" value="5">鞋靴
                    <input type="radio" name="goodsssort" value="6">箱包
                    <input type="radio" name="goodsssort" value="7">眼睛配饰
                    <input type="radio" name="goodsssort" value="8">运动/户外
                    <input type="radio" name="goodsssort" value="9">钟表
                    <input type="radio" name="goodsssort" value="10">珠宝藏品
                </div>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0">无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">床品套装
                    <input type="radio" name="goodsssort" value="3">布艺软饰
                    <input type="radio" name="goodsssort" value="4">抱枕靠垫
                    <input type="radio" name="goodsssort" value="5">毛巾浴巾
                </div>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0">无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">生活家电
                    <input type="radio" name="goodsssort" value="3">大家电
                    <input type="radio" name="goodsssort" value="4">手机通讯
                    <input type="radio" name="goodsssort" value="5">电脑影音
                </div>
                <div class="sort goodsssort">
                    <input type="radio" name="goodsssort" value="0">无
                    <input type="radio" name="goodsssort" value="1">热销
                    <input type="radio" name="goodsssort" value="2">个护美妆
                    <input type="radio" name="goodsssort" value="3">食品健康
                    <input type="radio" name="goodsssort" value="4">餐厨日用
                </div>
            </div>
            <div><label for="goodsactive"><span>*</span>商品状态：</label>
                <div class="goodsactive">
                    <input type="radio" name="goodsactive" value="0" checked>无
                    <input type="radio" name="goodsactive" value="1">限时抢购
                    <input type="radio" name="goodsactive" value="2">新品推荐
                    <input type="radio" name="goodsactive" value="3">精品活动
                </div>
            </div>
            <div><label for="goodsactivedesc">商品状态描述：</label><input type="text" name="goodsactivedesc" id="goodsactivedesc" value="<?php if (isset($row['goodsactivedesc'])) {echo $row['goodsactivedesc'];}?>"></div>
            <div class="btn">
                <a href="goodsList.php">取消更新</a>
                <input type="submit" value="更新" id="sub">
            </div>
            <div class="promptMsg"></div>
        </fieldset>
    </form>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="js/addGoods.js"></script>
    <script src="js/updategoods.js"></script>
    <script>
        if (i = "<?php echo $goodssort;?>") {
            $(".goodssort").children().eq(i-1).prop("checked", true).siblings().prop("checked", false);
            $(".goodsssort").eq(i).css({display: "inline-block"}).siblings(".goodsssort").css({display: "none"});
            if (k = "<?php echo $goodsssort;?>") {
                $(".goodsssort").eq(i).children().eq(k).prop("checked", true).siblings().prop("checked", false);
            }
            console.log(i);
        }
        if (j = "<?php echo $goodsactive;?>") {
            $(".goodsactive").children().eq(j).prop("checked", true).siblings().prop("checked", false);
            console.log(j);
        }
        // 获取文件名加路径
        // $("#fileImg").change(function () {
        //     $("#reviseImg").html($("#fileImg").val());
        // });
        // 只获取文件名
        $("#fileImg").on('change', function (e) {
            $("#reviseImg").html(e.currentTarget.files[0].name);
        });
    </script>
</body>
</html>