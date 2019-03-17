<?php
/* Smarty version 3.1.30, created on 2019-01-07 15:14:29
  from "E:\WWW\happygo\admind\templates\goodsList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c32fc5534a710_34287103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0bc7f87527bb63908d5e85e2f93d1f8ab2678a' => 
    array (
      0 => 'E:\\WWW\\happygo\\admind\\templates\\goodsList.html',
      1 => 1545899997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c32fc5534a710_34287103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kkpager.css">
    <link rel="stylesheet" href="css/goodsList.css">
</head>

<body>

    <table style="width:1200px;margin:0 auto;" class="table table-striped table-bordered">
        <caption>商品列表:<a href="goodsList.php">全部类别</a><a href="goodsList.php?goodssort=1">个护美妆</a><a href="goodsList.php?goodssort=2">食品健康</a><a href="goodsList.php?goodssort=3">餐厨日用</a><a href="goodsList.php?goodssort=4">服装配饰</a><a href="goodsList.php?goodssort=5">布艺家纺</a><a href="goodsList.php?goodssort=6">家电数码</a><a href="goodsList.php?goodssort=7"><a>严选</a><a class="add" href="addGoods.html">添加商品</a></caption>
        <thead>
            <tr>
                <th style="width: 80px;">商品Id</th>
                <th>商品名称</th>
                <th>商品描述</th>
                <th style="width: 110px;">商品当前价格</th>
                <th style="width: 110px;">商品历史价格</th>
                <th style="width: 80px;">商品类别</th>
                <th style="width: 80px;">二级类别</th>
                <th style="width: 80px;">商品状态</th>
                <th style="width: 110px;">商品状态描述</th>
                <th style="width: 80px;">商品图片</th>
                <th style="width: 80px;">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'val', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["id"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsdesc"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsnewsprice"];?>
元</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsoldprice"];?>
元</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodssort"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsssort"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsactive"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsactivedesc"];?>
</td>
                <td><img style="height:30px" src="../images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt=""></td>
                <td><a href="updateGoods.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">更新</a>/<a href="delGoods.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a></td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'val', false, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['totalRecords'];?>
" id="totalRecords">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['totalPage'];?>
" id="totalPage">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 -->
    <div id="kkpager" style="text-align:center"></div>
    <div class="desc" style="width:1200px;margin:0 auto;padding-top: 20px">
        商品类别说明：1表示个护美妆，2表示食品健康，3表示餐厨日用，4表示服装配饰，5表示布艺家纺，6表示家电数码，7表示品牌馆<br><br>
        商品状态说明：0表示无，1表示限时抢购，2表示新品推荐，3表示精选活动<br><br>
        个护美妆中：0表示无，1表示热销，2表示面部护理，3表示香水彩妆，4表示美妆护发，5表示身体护理，6表示美容工具，7表示口腔护理<br><br>
        食品健康中：0表示无，1表示热销，2表示饮料冲调，3表示粮油调味，4表示酒水茗茶，5表示休闲食品，6表示营养保健，7表示生鲜食品<br><br>
        餐厨日用中：0表示无，1表示热销，2表示烹饪锅具，3表示生活用品，4表示厨房电器，5表示清洁收纳，6表示厨房用具，7表示厨房配件，8表示家装建材<br><br>
        服装配饰中：0表示无，1表示热销，2表示女士服装，3表示男士服装，4表示内衣，5表示鞋靴，6表示箱包，7表示眼睛配饰，8表示运动/户外，9表示钟表，10表示珠宝藏品<br><br>
        布艺家纺中：0表示无，1表示热销，2表示床品套装，3表示布艺软饰，4表示抱枕靠垫，5表示毛巾浴巾<br><br>
        家电数码中：0表示无，1表示热销，2表示生活家电，3表示大家电，4表示手机通讯，5表示电脑影音<br><br>
        品牌馆中：0表示无，1表示热销，2表示个护美妆，3表示食品健康，4表示餐厨日用
    </div>
    <?php echo '<script'; ?>
 src="../js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/kkpager.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/goodsList.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
