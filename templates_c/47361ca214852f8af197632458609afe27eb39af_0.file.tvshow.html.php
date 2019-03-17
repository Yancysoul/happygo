<?php
/* Smarty version 3.1.30, created on 2019-01-10 21:27:35
  from "E:\H5\WWW\happygo\happygo\templates\tvshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c374847925164_48526204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47361ca214852f8af197632458609afe27eb39af' => 
    array (
      0 => 'E:\\H5\\WWW\\happygo\\happygo\\templates\\tvshow.html',
      1 => 1547126851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c374847925164_48526204 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/jquery.idcode.css">
</head>
<body>
     <!-- 头部开始 -->
    <div class="header">
        <div class="header_top">
            <div class=" wr clearfix">
                <div class="header_top_left fl">
                    <div class="no_login">
                        <span>欢迎来到欢乐购</span>
                        <a href="logon.html" class="a_login">[登录]</a>
                        <a href="register.html" class="a_reg">[注册]</a>
                        <div class="reg_tips">
                            <div class="reg_tips_arr"></div>
                            <p>注册即得新人专享288元购物红包 </p>
                            <div class="close_r_tips" onclick="$(this).parent().css('display','none')">
                                <!-- <div class="close_r_tips" > -->
                                x
                            </div>
                        </div>
                    </div>
                    <div class="al_login">
                        <span>欢迎您，</span>
                        <span class="loginUser"></span>
                        <a href="javascript:;" class="a_quit">[退出]</a>
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
                    <a href="javascript:;" class="h_c_r_car">
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
                    <li class="home"><a href="index.php">首页</a></li>
                    <li><a href="">TV直播</a></li>
                    <li><a href="kitchenEssential.html">厨房必备</a></li>
                <li><a href="beautyMakeup.html">美妆个护</a></li>
                <li><a href="foodHealth.html">食品健康</a></li>
                <li><a href="clothingHomeTextile.html">服装家纺</a></li>
                <li><a href="householdAppliances.html">日用家电</a></li>
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
    <div class="wr clearfix">
        <!-- 浮层开始 -->
        <div class="fixed_data" style="display:none;">
            <!-- 选择日期 -->
            <div class="f_v_data">
                <div class="v_d_list">
                    <ul class="l_data_ul l_data_ul1 aa" style="width:2266px;left:-1133px;">
                            <li hc="13" >                                          
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-05</span>
                                            <span class="v_t2">星期三</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="12">
                                           
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-06</span>
                                            <span class="v_t2">星期四</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="11">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-07</span>
                                            <span class="v_t2">星期五</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="10">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-08</span>
                                            <span class="v_t2">星期六</span>
                                        </div>
                                    </a>
                            </li>
                            <li hc="9">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-09</span>
                                            <span class="v_t2">星期日</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="8">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-10</span>
                                            <span class="v_t2">星期一</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="7">
                                   
                                    <div class="vedio_line cu"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-11</span>
                                            <span class="v_t2">星期二</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="6">
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-12</span>
                                            <span class="v_t2">星期三</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="5" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-13</span>
                                            <span class="v_t2">星期四</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="4" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-14</span>
                                            <span class="v_t2">星期五</span>
                                        </div>
                                    </a>
                            </li>
                            <li hc="3" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-15</span>
                                            <span class="v_t2">星期六</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="2" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-16</span>
                                            <span class="v_t2">星期日</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="1" >
                                   
                                    <div class="vedio_line"></div>
                                    <a href="javascript:void(0);" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-17</span>
                                            <span class="v_t2">星期一</span>
                                        </div>
                                    </a>
                            </li>
                            <li  hc="0" class="cur">
                                   
                                    <div class="vedio_line cu"></div>
                                    <a href="javascript:void(0);" hc="0" onclick="">
                                        <div class="vedio_text">
                                            <span class="v_t1">12-18</span>
                                            <span class="v_t2">今日</span>
                                        </div>
                                    </a>
                            </li>

                    </ul>
                </div>
                <div class="hd">
                    <a href="javascript:void(0)" class="prev">
                        <div>&lt;</div>
                    </a>
                    <a href="javascript:void(0)" class="next">
                        <div>&gt;</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- 浮层结束 -->
        <div class="living_box clearfix">
            <!-- 左边分类 -->
            <div class="living_l fl">
                <div class="l_l_type">
                    <h2>TV直播</h2>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-50"></i>
                                个护美妆
                                <b></b>
                            </a>
                        </div>
                    </div>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-shipin"></i>
                                食品健康
                                <b></b>
                            </a>
                        </div>
                    </div>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-shipin"></i>
                                餐厨日用
                                <b></b>
                            </a>
                        </div>
                    </div>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-fuzhuangpeishifangzhi"></i>
                                服装配饰
                                <b></b>
                            </a>
                        </div>
                    </div>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-fuzhuangpeishifangzhi"></i>
                                布艺家纺
                                <b></b>
                            </a>
                        </div>
                    </div>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-dianshi"></i>
                                家电数码
                                <b></b>
                            </a>
                        </div>
                    </div>
                    <div class="first_type has_type">
                        <div class="li_h2">
                            <a href="#">
                                <i class="i_type iconfont icon-dianshi"></i>
                                母婴呵护
                                <b></b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 左边分类结束 -->
            <!-- 右边直播 -->
            <div class="living_r">
                    <div class="l_r_top">
                            <ul class="l_r_top_ul">
                                <li class="on">
                                    <a href="#">看直播</a>
                                    <i></i>
                                </li>
                                <li>
                                    <a href="tvshow-new.php">今日推荐</a>
                                    <i></i>
                                </li>
                                <li>
                                    <a href="tvshow-old.php">昨日热销榜</a>
                                    <i></i>
                                </li>
                            </ul>
                    </div>
                        <div class="l_r_bottom">
                            <div class="l_r_b_left">
                                <div class="living_vedio"></div>
                                <div class="living_tips">
                                    <i class="i_tips"></i>
                                    TV直播天天有优惠 档档有惊喜 订购直播商品在线支付(实付)满199立减10元
                                </div>
                            </div>
                            <div class="l_r_b_right">
                                <h2>
                                    <i class="i_zhibo"></i>
                                    正在播出商品
                                    <span>15:28-16:06</span>
                                </h2>
                                <div id="als-container_0" class="zhibo_goods als-container" data-id="als-container_0">
                                    <div class="hd">
                                        <a class="prev als-prev" data-id="als-prev_0">&lt;</a>
                                        <ul></ul>
                                        <a class="next als-next" data-id="als-next_0">&gt;</a>
                                    </div>
                                    <div class="d_l_con4_list als-viewport" data-id="als-viewport_0" style="width:383px;height:321px">
                                        <ul class="als-wrapper" data-id="als-wrapper_0" style="width:1915px;height:321px;">
                                            <li id="als-item_0_0" class="als-item" style="left:0px;">
                                                <a href="#" class="zhibo_img">
                                                    <img src="imgs/nn0.jpg" alt="" style="display:inline;">
                                                </a>
                                                <a class="zhibo_title" href="#">健力多氨糖软骨钙片 40.8g*6瓶 赠钙维生素D维生素K软胶囊30粒*3瓶</a>
                                                <div class="buy_box">
                                                    <div class="price">
                                                        ￥
                                                        <span class="price1">298</span>
                                                        <span class="price2">￥398</span>
                                                    </div>
                                                    <a href="" class="a_buy_now">立即购买</a>
                                                </div>
                                            </li>
                                            <li id="als-item_0_1" class="als-item" style="left:0px;">
                                                    <a href="#" class="zhibo_img">
                                                        <img src="imgs/nn1.jpg" alt="" style="display:inline;">
                                                    </a>
                                                    <a class="zhibo_title" href="#">曼龙3D立体魔力墙贴10片</a>
                                                    <div class="buy_box">
                                                        <div class="price">
                                                            ￥
                                                            <span class="price1">299</span>
                                                            <span class="price2">￥499</span>
                                                        </div>
                                                        <a href="#" class="a_buy_now">立即购买</a>
                                                    </div>
                                            </li>
                                            <li id="als-item_0_2" class="als-item" style="left:0px;">
                                                    <a href="#" class="zhibo_img">
                                                        <img src="imgs/nn3.jpg" alt="" style="display:inline;">
                                                    </a>
                                                    <a class="zhibo_title" href="#">鳄鱼恤头层牛皮休闲长毛绒男鞋套组</a>
                                                    <div class="buy_box">
                                                        <div class="price">
                                                            ￥
                                                            <span class="price1">368</span>
                                                            <span class="price2">￥798</span>
                                                        </div>
                                                        <a href="#" class="a_buy_now">立即购买</a>
                                                    </div>
                                            </li>
                                            <li id="als-item_0_3" class="als-item" style="left:0px;">
                                                    <a href="#" class="zhibo_img">
                                                        <img src="imgs/nn4.jpg" alt="" style="display:inline;">
                                                    </a>
                                                    <a class="zhibo_title" href="#">菲仕乐-瑞士原装进口多功能料理机173周年庆组（送专柜新品铸铁锅+全不锈钢滤水篮+水杯四只）</a>
                                                    <div class="buy_box">
                                                        <div class="price">
                                                            ￥
                                                            <span class="price1">1598</span>
                                                            <span class="price2">￥7020</span>
                                                        </div>
                                                        <a href="#" class="a_buy_now">立即购买</a>
                                                    </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            
            <!-- 右边直播结束 -->
            <!--视频列表开始  -->
            <div class="living_list fl">
                <div class="h2">
                    <span class="h2_text">TV节目表</span>
                    <!-- 选择日期 -->
                    <div class="vedio_data">
                        <div class="v_d_list">
                            <div class="tempWrap" style="overflow:hidden;position:relative;width:938px">
                                <ul class="l_data_ul s1" style="width:1876px;left:-938px;position:relative;overflow:hidden;padding:0px;margin:0px;">
                                 
                                    <li class="" hc="13" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-05</span>
                                                    <span class="v_t2">星期三</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="12" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-06</span>
                                                    <span class="v_t2">星期四</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="11" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-07</span>
                                                    <span class="v_t2">星期五</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="noborder" hc="10" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-08</span>
                                                    <span class="v_t2">星期六</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="9" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-09</span>
                                                    <span class="v_t2">星期日</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="8" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-10</span>
                                                    <span class="v_t2">星期一</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li  hc="7" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line cu"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-11</span>
                                                    <span class="v_t2">星期二</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="noborder" hc="6" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-12</span>
                                                    <span class="v_t2">星期三</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="5" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-13</span>
                                                    <span class="v_t2">星期四</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="4" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-14</span>
                                                    <span class="v_t2">星期五</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="3" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-15</span>
                                                    <span class="v_t2">星期六</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="noborder" hc="2" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-16</span>
                                                    <span class="v_t2">星期日</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li class="" hc="1" style="float:left;width:134px;">
                                           
                                            <div class="vedio_line"></div>
                                            <a href="javascript:void(0);" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-17</span>
                                                    <span class="v_t2">星期一</span>
                                                </div>
                                            </a>
                                    </li>
                                    <li  class="cur on"  hc="0" style="float:left;width:134px;">
                                            <div class="today_on"></div>
                                            <!-- <div class="vedio_line"></div> -->
                                            <a href="javascript:void(0);" hc="0" onclick="">
                                                <div class="vedio_text">
                                                    <span class="v_t1">12-18</span>
                                                    <span class="v_t2">今日</span>
                                                </div>
                                            </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="prev1">&lt;</div>
                        <div class="next1">&gt;</div>
                    </div>
                    <!-- 日期结束 -->
                </div>
                <!-- 商品展示 -->
                <div class="wr wra1">
                        <ul class="groUlOut dis">
                                <!-- 每行的第四个 都有一个类名 no_margin -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind14']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                                  <!-- 每行的第四个 都有一个类名 no_margin -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind13']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                                  <!-- 每行的第四个 都有一个类名 no_margin -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind12']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                                  <!-- 每行的第四个 都有一个类名 no_margin -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind11']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                                  <!-- 每行的第四个 都有一个类名 no_margin -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind10']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind9']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind8']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind7']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind6']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind5']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind4']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind3']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind2']->value, 'val', false, 'key');
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
                        <ul class="groUlOut dis both">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kind1']->value, 'val', false, 'key');
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
                </div>
                <!-- 商品展示结束 -->
            </div>
            <!-- 视频列表结束 -->
        </div>
    </div>

 <!-- footer开始 -->
 <div class="footer">
        <div class="footer_top">
            <div class="wr">
                <img src="imgs/foot_img1.jpg" alt="">
            </div>
        </div>
        <div class="footer_con">
            <div class="wr clearfix">
                <div class="footer_con_left fl">
                    <dl>
                        <dt>使用帮助</dt>
                        <dd><a href="">税费收取规则</a></dd>
                        <dd><a href="">新手指南</a></dd>
                        <dd><a href="">用户协议</a></dd>
                        <dd><a href="">常见问题</a></dd>
                    </dl>
                    <dl>
                        <dt>会员服务</dt>
                        <dd><a href="">快乐币政策</a></dd>
                        <dd><a href="">会员等级</a></dd>
                        <dd><a href="">会员权益</a></dd>
                    </dl>
                    <dl>
                        <dt>支付方式</dt>
                        <dd><a href="">快乐币支付</a></dd>
                        <dd><a href="">在线支付</a></dd>
                        <dd><a href="">货到付款</a></dd>
                        <dd><a href="">优惠券支付</a></dd>
                    </dl>
                    <dl>
                        <dt>配送方式</dt>
                        <dd><a href="">配送说明</a></dd>
                        <dd><a href="">包邮政策</a></dd>
                        <dd><a href="">费用说明</a></dd>
                    </dl>
                    <dl>
                        <dt>售后服务</dt>
                        <dd><a href="">电子发票</a></dd>
                        <dd><a href="">退货政策</a></dd>
                        <dd><a href="">售后咨询</a></dd>
                        <dd><a href="">退货办理</a></dd>

                    </dl>
                </div>
                <div class="footer_con_right fr">
                    <ul>
                        <li>
                            <h2>手机快乐购</h2>
                            <img src="imgs/footer_ewm_01.png" alt="">
                            <p>下载移动客户端</p>
                        </li>
                        <li>
                            <h2>快乐购微信</h2>
                            <img src="imgs/footer_ewm_02.png" alt="">
                            <p>快乐购官方微信</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_nav">
            <ul class="footer_nav_ul clearfix">
                <li><a href="">关于芒果超媒</a><span class="line"></span></li>
                <li><a href="">投资者关系</a><span class="line"></span></li>
                <li><a href="">自营品牌招商</a><span class="line"></span></li>
                <li><a href="">联系我们</a><span class="line"></span></li>
                <li><a href="">营业证照</a></li>
            </ul>
        </div>
        <div class="footer_copy">
            <div class="wr">
                <p class="copyright_des1">Copyright© 2006-2018 happigo. All Rights Reserved 免费服务热线: 400-705-1111 |
                    固话也可拨打: 400-705-8800
                </p>
                <p>湘ICP备17009657号 信息网络传播视听节目许可证号：1810530 <img src="imgs/jh.png" alt="">湘公网安备 43010502000556号</p>
                <p>
                    <a href="#">
                        <img src="imgs/footer_img4.png" alt="">
                    </a>
                    <a href="#">
                        <img src="imgs/brand_bottom_small.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="imgs/footer_shuidi.png" alt="">
                    </a>
                    <a href="#">
                        <img src="imgs/hy_124x47.png" alt="" style="height:40px">
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- footer结束 -->
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
    <?php echo '<script'; ?>
 src="js/iscookie.js"><?php echo '</script'; ?>
>
   
</body>

</html><?php }
}
