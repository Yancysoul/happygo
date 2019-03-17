<?php
/* Smarty version 3.1.30, created on 2019-01-04 17:35:33
  from "E:\niuniu\WWW\happygo\templates\tvshow-new.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c2f28e5bacbe2_27285111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1510447b18c6808f5365fc79e69089f122894f94' => 
    array (
      0 => 'E:\\niuniu\\WWW\\happygo\\templates\\tvshow-new.html',
      1 => 1546594517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f28e5bacbe2_27285111 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/tvshow.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/jquery.idcode.css">
</head>

<body>
    
    <div class="wr">
        <div class="l_r_top">
            <ul class="l_r_top_ul">
                <li >
                    <a href="tvshow.php">看直播</a>
                    <i></i>
                </li>
                <li class="on">
                    <a href="tvshow-new.php">今日推荐</a>
                    <i></i>
                </li>
                <li>
                    <a href="tvshow-old.php">昨日热销榜</a>
                    <i></i>
                </li>
            </ul>
        </div>
         <!-- 商品展示 -->
         <ul class="groUlOut">
             <!-- 每行的第四个 都有一个类名 no_margin -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['today']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li class="pro_list">
                       
                        <a href="goodsDetail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="pro" target="_blank">
                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy" >
                        </a>
                        <p class="box_glay">
                            <a href="#" class="pro_text" target="_blank">
                                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</span>
                            </a>
                        </p>
                        <p class="p_num"><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsdesc"];?>
</p>
                        <div class="now_price">
                            <div class="price_l fl">
                                <span class="bigfont">
                                    <span class="f_14">￥</span>
                                    <span><?php echo $_smarty_tpl->tpl_vars['val']->value["goodsnewsprice"];?>
</span>
                                </span>
                                <span>
                                    <del>￥<?php echo $_smarty_tpl->tpl_vars['val']->value["goodsoldprice"];?>
</del>
                                </span>
                            </div>
                            <div class="zk">7.0折</div>
                        </div>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

               
         </ul>
            <!-- 商品展示结束 -->
    </div>

   
        <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="js/header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.idcode.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/tvshow.js"><?php echo '</script'; ?>
>
   
   
</body>

</html><?php }
}
