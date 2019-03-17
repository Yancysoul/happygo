<?php
/* Smarty version 3.1.30, created on 2019-01-02 09:41:04
  from "D:\WWW\happygo\templates\tvshow-old.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c2c16b0370f50_30739514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c7921687d76073e9badd2b93131b78da69c7ea' => 
    array (
      0 => 'D:\\WWW\\happygo\\templates\\tvshow-old.html',
      1 => 1546161834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2c16b0370f50_30739514 (Smarty_Internal_Template $_smarty_tpl) {
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
 <!-- 头部开始 -->
 <div class="header">
        <div class="header_top">
            <div class=" wr clearfix">
                <div class="header_top_left fl">
                    <span>欢迎来到欢乐购</span>
                    <a href="logon.html" class="a_login">[登录]</a>
                    <a href="register.html" class="a_reg">[注册]</a>
                    <div class="reg_tips">
                        <div class="reg_tips_arr"></div>
                        <p>注册即得新人专享288元购物红包 </p>
                       
                    </div>
                </div>
                <div class="header_top_right fr">
                    <ul>
                        <li><a href="csmIndex.html">合作招商</a><span class="line">|</span></li>
                        <li><a href="logon.html">订单查询</a><span class="line">|</span></li>
                        <li><a href="#">我的快乐购</a><span class="line">|</span></li>
                        <li>
                            <span class="tel_icon"></span>
                            400-705-1111
                            <span class="line">|</span>
                        </li>
                        <li class="down_load_hpg">
                            <a href="#">下载快乐购app</a>
                            <span class="line">|</span>
                            <div class="down_load_border">
                                <b class="icon_top"></b>
                                <img src="imgs/ewm.png" alt="">
                                <p class="icon_word">快乐生活 快乐购</p>
                            </div>
                        </li>
                        <li class="cus_box">
                            <a href="#">客服中心<b class="arrow_down"></b></a>

                            <div class="cus_center">
                                <a href="#">帮助中心</a>
                                <a href="#">会员反馈</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_con clearfix">
            <div class="wr ">
                <div class="logo_box fl">
                    <img src="imgs/logo.jpg" alt="" class="logo">
                    <img src="imgs/top_center1.jpg" alt="" class="top_center1">
                </div>
                <div class="search_box fl">
                    <div class="search ">
                        <input type="text" placeholder="口红" class="search_ipt">
                        <input type="button" value="搜索" class="search_btn">
                    </div>
                    <p>
                        <a href="">大衣</a>
                        <a href="">面膜</a>
                        <a href="">京城之霜</a>
                        <a href="">牛奶</a>
                        <a href="">手表</a>
                        <a href="">严选</a>
                        <a href="">康宁</a>
                        <a href="">鞋</a>
                        <a href="">方太</a>
                        <a href="">洗发水</a>
                        <a href="">兰芝</a>
                        <a href="">双立人</a>
                        <a href="">冰箱</a>
                        <a href="">手机</a>
                        <a href="">韩束</a>
                    </p>
                </div>

                <div class="h_c_right fr">
                    <a href="" class="h_c_r_car">
                        <b class="icon_car"></b>
                        <span>我的购物车</span>
                        <b class="icon_arrow_left"></b>
                        <b class="i_car_num">0</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 头部结束 -->

    <!-- nav导航开始 -->
    <div class="full_nav">
        <div class="wr">
            <ul class="mhl_nav clearfix">
                <li class="all_kinds ">全部分类
                    <span class="kind_arr"></span>
                </li>
                <li class="home"><a href="">首页</a></li>
                <li><a href="">TV直播</a></li>
                <li><a href="">网易严选</a></li>
                <li><a href="">一县一品</a></li>
            </ul>
        </div>
    </div>
    <!-- nav导航结束 -->

    <!-- 右侧导航开始 -->
    <div class="rihgt_slider r_s_fixed">
        <div class="r_s_f_center">
            <div class="f_c_top">
                <div class="f_c_t_list f_c_t_por rn_user_box">
                    <a href="javascript:;" class="a_account clearcompatility">
                        <i class="clearcompatility icon_user"></i>
                        <p>账号</p>
                    </a>
                    <div class="r_n_user_cen">
                        <div class="rnuc_r_arr"></div>
                        <div class="rnuc_close"></div>
                        <div class="rnuc_info_box">
                            <form action="">
                                <div class="uc_title_we">欢迎来到快乐购！</div>
                                <div class="rnuc_uname rnuc_item">
                                    <input type="text" class="itxt" placeholder="已验证手机/邮箱或用户名">
                                    <div class="rnuc_err_box">
                                        <div class="rnuc_err_msg">登录名可能是您的手机号、邮箱或用户名</div>
                                    </div>
                                </div>
                                <div class="rnuc_pwd rnuc_item">
                                    <input type="text" class="itxt" placeholder="请输入密码">
                                    <div class="rnuc_err_box">
                                        <div class="rnuc_err_msg">您的密码可能为字母、数字或符号的组合</div>
                                    </div>
                                </div>
                                <div class="rnuc_yzm rnuc_item">
                                    <input type="text" class="itxt" id="Txtidcode" placeholder="请输入验证码">
                                    <span id="idcode" class="yzm_pic clearcompatility"></span>
                                    <div class="rnuc_err_box">
                                        <div class="rnuc_err_msg">请输入右侧验证码，不区分大小写</div>
                                    </div>
                                </div>
                                <div class="rnuc_sub rnuc_item">
                                    <a href="javascript:;" id="rnuc_btns" class="itxt">立即登录</a>
                                </div>
                                <div class="rnuc_reg rnuc_item">
                                    <a href="javascript:;" class="rnuc_forpwd rnuc_comstyle">忘记密码</a>
                                    <a href="javascript:;" class="rnuc_reg rnuc_comstyle">立即注册</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="f_c_t_list">
                    <a href="logon.html">
                        <i class="clearcompatility icon_car"></i>
                        <p class="r_n_c_wd">购物车</p>
                        <span class="a_car_num clearcompatility">0</span>
                    </a>

                </div>
                <div class="f_c_t_list">
                    <a href="logon.html">
                        <i class="clearcompatility icon_collect"></i>
                        <p class="collect_wd">收藏</p>
                    </a>
                </div>
            </div>
            <div class="f_c_bottom">
                <div class="f_c_t_list f_c_t_por ewm_hideen">
                    <a href="javascript:;">
                        <div class="two_code"></div>
                    </a>
                    <div class="ewm_bg_box">
                        <div class="ewm_bg">
                            <div class="ewmapp_icon_arr"></div>
                            <img src="imgs/down_app_ewm.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="f_c_t_list f_c_t_por online_info_hidden">
                    <a href="javascript:;">
                        <div class="call_center"></div>
                    </a>
                    <div class="online_info_box">
                        <div class="online_cus_bg">
                            <div>
                                <div class="cus_icon_arr"></div>
                                <p class="kf_title">商品/订单</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">商品咨询</a>
                                    <a href="javascript:;">订单支付</a>
                                    <a href="javascript:;">配送查询</a>
                                    <a href="javascript:;">订单查询</a>
                                </p>
                                <p class="kf_title">优惠/政策</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">个账查询</a>
                                    <a href="javascript:;">活动咨询</a>
                                </p>
                                <p class="kf_title">账户服务</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">账号咨询</a>
                                    <a href="javascript:;">密码找回</a>
                                </p>
                                <p class="kf_title">售后服务</p>
                                <p class="kf_con_box">
                                    <a href="javascript:;">退款查询</a>
                                    <a href="javascript:;">取消/退换货</a>
                                    <a href="javascript:;">售后处理</a>
                                    <a href="javascript:;">投诉建议</a>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="f_c_t_list">
                    <a href="javascript:;" class="go_top">
                        <div class="to_top"></div>
                        <p>TOP</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 右侧导航结束 -->
    <div class="wr">
       <!-- 浮层开始 -->
       <div class="fixed_data" style="display:none;">
            <!-- 选择日期 -->
            <div class="f_v_data">
                <div class="v_d_list">
                    <ul class="l_data_ul l_list" style="width:960px;">        
                            <li  hc="7" class="curr">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1"> TV热销</span> 
                                        </div>
                                    </a>
                            </li>
                            <li  hc="6">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">个护美妆</span> 
                                        </div>
                                    </a>
                            </li>
                            <li  hc="5" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">食品健康</span> 
                                        </div>
                                    </a>
                            </li>
                            <li  hc="4" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">餐厨日用</span> 
                                        </div>
                                    </a>
                            </li>
                            <li hc="3" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">服装配饰</span> 
                                        </div>
                                    </a>
                            </li>
                            <li  hc="2" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">布艺家纺</span> 
                                        </div>
                                    </a>
                            </li>
                            <li  hc="1" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="#" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">家电数码</span> 
                                        </div>
                                    </a>
                            </li>
                            <li  hc="0">
                                   
                                    <!-- <div class="vedio_line"></div> -->
                                    <a href="#" hc="0" onclick="">
                                        <div class="vedio_text">
                                                <span class="v_t1">母婴呵护</span> 
                                        </div>
                                    </a>
                            </li>

                    </ul>
                </div>
                
            </div>
        </div>
        <!-- 浮层结束 -->

        <div class="l_r_top">
            <ul class="l_r_top_ul old_l_r_top_ul">
                <li>
                    <a href="tvshow.php">看直播</a>
                    <i></i>
                </li>
                <li>
                    <a href="tvshow-new.php">今日推荐</a>
                    <i></i>
                </li>
                <li class="on">
                    <a href="#">昨日热销榜</a>
                    <i></i>
                </li>
            </ul>
            <ul class="floor_type ul_type_list">
                <li class="on">
                    <a href="javascript:void(0)">TV热销</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">个护美妆</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">食品健康</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">厨具日用</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">服装配饰</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">布艺家纺</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">家电数码</a>
                    <span></span>
                    <b></b>
                </li>
                <li>
                    <a href="javascript:void(0)">母婴呵护</a>
                    <span></span>
                    <b></b>
                </li>
            </ul>
        </div>
        <!-- 商品展示 -->
        <div class="wr wra">
            <!-- TV热销 -->
                <ul class="groUlOut dis both">
                      <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds1']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <li class="pro_list">
                            <div class="x">
                                <i class="time_icon"></i>
                                23:20~00:11
                            </div>
                            <a href="#" class="pro" target="_blank">
                                <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                <!-- 个护美妆 -->
                <ul class="groUlOut dis">
                     <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds2']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <li class="pro_list">
                            <div class="x">
                                <i class="time_icon"></i>
                                23:20~00:11
                            </div>
                            <a href="#" class="pro" target="_blank">
                                <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                <!-- 食品健康 -->
                <ul class="groUlOut dis">
                         <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds3']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                     <li class="pro_list">
                         <div class="x">
                             <i class="time_icon"></i>
                             23:20~00:11
                         </div>
                         <a href="#" class="pro" target="_blank">
                             <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                <!-- 厨具日用 -->
                <ul class="groUlOut dis">
                          <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds4']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                     <li class="pro_list">
                         <div class="x">
                             <i class="time_icon"></i>
                             23:20~00:11
                         </div>
                         <a href="#" class="pro" target="_blank">
                             <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                <!-- 服装配饰 -->
                <ul class="groUlOut dis">
                       <!-- 每行的第四个 都有一个类名 no_margin -->
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds5']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                       <li class="pro_list">
                           <div class="x">
                               <i class="time_icon"></i>
                               23:20~00:11
                           </div>
                           <a href="#" class="pro" target="_blank">
                               <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                <!-- 布艺家纺 -->
                <ul class="groUlOut dis">
                          <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds6']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                     <li class="pro_list">
                         <div class="x">
                             <i class="time_icon"></i>
                             23:20~00:11
                         </div>
                         <a href="#" class="pro" target="_blank">
                             <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                <!-- 家电数码 -->
                <ul class="groUlOut dis">
                         <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds7']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                     <li class="pro_list">
                         <div class="x">
                             <i class="time_icon"></i>
                             23:20~00:11
                         </div>
                         <a href="#" class="pro" target="_blank">
                             <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
                  <!-- 母婴呵护 -->
                  <ul class="groUlOut dis">
                          <!-- 每行的第四个 都有一个类名 no_margin -->
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds8']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                     <li class="pro_list">
                         <div class="x">
                             <i class="time_icon"></i>
                             23:20~00:11
                         </div>
                         <a href="#" class="pro" target="_blank">
                             <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['goodspic'];?>
" alt="" class="lazy">
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
        </div>
       
        <!-- 商品展示结束 -->
    </div>
    <?php echo '<script'; ?>
 src="./js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/tvshow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.idcode.js"><?php echo '</script'; ?>
>
   
</body>

</html><?php }
}
