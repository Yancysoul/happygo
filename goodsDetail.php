<?php
include("inc/dbconn.php");
include("inc/upload.php");
header("content-type:text/html;charset=utf-8");
// 先获取商品的信息
$id=$_GET["id"];
$sql="select goodsname,goodsdesc,goodsnewsprice,goodsoldprice,color,size,goodspic,id from goods where id=$id";
$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/jquery.idcode.css">
    <link rel="stylesheet" href="css/goodsDetail.css">
    <title>Document</title>
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
                        <div class="close_r_tips" onclick="$(this).parent().css('display','none')">
                            x
                        </div>
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
                <li class="home"><a href="index.html">首页</a></li>
                <li><a href="tvshow.html">TV直播</a></li>
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
                    <a href="javascript:void(0);" class="a_account clearcompatility">
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
                                    <a href="javascript:void(0);" id="rnuc_btns" class="itxt">立即登录</a>
                                </div>
                                <div class="rnuc_reg rnuc_item">
                                    <a href="javascript:void(0);" class="rnuc_forpwd rnuc_comstyle">忘记密码</a>
                                    <a href="javascript:void(0);" class="rnuc_reg rnuc_comstyle">立即注册</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="f_c_t_list flyBird">
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
                    <a href="javascript:void(0);">
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
                    <a href="javascript:void(0);">
                        <div class="call_center"></div>
                    </a>
                    <div class="online_info_box">
                        <div class="online_cus_bg">
                            <div>
                                <div class="cus_icon_arr"></div>
                                <p class="kf_title">商品/订单</p>
                                <p class="kf_con_box">
                                    <a href="javascript:void(0);">商品咨询</a>
                                    <a href="javascript:void(0);">订单支付</a>
                                    <a href="javascript:void(0);">配送查询</a>
                                    <a href="javascript:void(0);">订单查询</a>
                                </p>
                                <p class="kf_title">优惠/政策</p>
                                <p class="kf_con_box">
                                    <a href="javascript:void(0);">个账查询</a>
                                    <a href="javascript:void(0);">活动咨询</a>
                                </p>
                                <p class="kf_title">账户服务</p>
                                <p class="kf_con_box">
                                    <a href="javascript:void(0);">账号咨询</a>
                                    <a href="javascript:void(0);">密码找回</a>
                                </p>
                                <p class="kf_title">售后服务</p>
                                <p class="kf_con_box">
                                    <a href="javascript:void(0);">退款查询</a>
                                    <a href="javascript:void(0);">取消/退换货</a>
                                    <a href="javascript:void(0);">售后处理</a>
                                    <a href="javascript:void(0);">投诉建议</a>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="f_c_t_list">
                    <a href="javascript:void(0);" class="go_top">
                        <div class="to_top"></div>
                        <p>TOP</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 右侧导航结束 -->

    <!-- 商品详情页开始 -->
    <div class="wr">
        <div class="location">
            <a href="index.php">首页</a><span>></span>
            <a href="">食品健康</a><span>></span>
            <a href="">生鲜食品</a><span>></span>
            <span><?php echo $row["goodsname"];?></span>
        </div>
        <div class="gd_hid_nav">
            <div class="wr">
                <ul class="gd_nav_box  clearfix">
                    <li class="on bor_l"><a href="javascript:void(0);">商品参数</a></li>
                    <li><a href="javascript:void(0);">详情</a></li>
                    <li><a href="javascript:void(0);">售后</a></li>
                    <li><a href="javascript:void(0);">评价</a></li>
                </ul>
            </div>
        </div>
        <div class="gd_content">
            <div class="gd_c_top clearfix">
                <div class="gd_c_t_left">
                    <div class="gd_smaImg">
                        <span id="goodsPic" style="display:none"><?php echo $row['goodspic'];?></span>
                        <img src="images/<?php echo $row['goodspic'];?>" alt="">
                        <div class="gd_zoom"></div>
                    </div>
                    <div class="gd_bigImg">
                        <!-- <img src="images/goodDetail/big/mm_main_241845_60.jpg" class="bigImg" alt=""> -->
                        <img src="images/<?php echo $row['goodspic'];?>" class="bigImg" alt="">
                    </div>
                    <div class="gd_tab_pic">
                        <ul class="als-wrapper clearfix">
                            <li class="gdzoomActive">
                                <a href="javascript:void(0);">
                                    <img src="images/<?php echo $row['goodspic'];?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/<?php echo $row['goodspic'];?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/<?php echo $row['goodspic'];?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/<?php echo $row['goodspic'];?>" alt="">
                                </a>
                            </li>
                            <li class="gd_nmr">
                                <a href="javascript:void(0);">
                                    <img src="images/<?php echo $row['goodspic'];?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="gd_share clearfix">
                        <div class="gd_bh">编号：9248135</div>
                        <div class="gd_collect">
                            <i class="gd_coll_icon"></i>
                            收藏商品
                        </div>
                    </div>
                </div>
                <div class="gd_c_t_r">
                    <div class="gd_det_r_con">
                        <div class="del_r_tit">
                            <?php echo $row["goodsname"];?>
                        </div>
                        <div class="gd_tit_desc">
                        <?php echo $row["goodsdesc"];?>
                        </div>
                        <div class="gd_price_wrap clearfix">
                            <span class="pop_tit title1">快乐价</span>
                            <div class="gd_price_box">
                                <span class="gd_now_price">
                                    <em class="em_sign">￥</em>
                                    <span class="gd_now_price_a"><?php echo $row["goodsnewsprice"];?></span>
                                   
                                </span>
                                <del class="gd_del">￥ <?php echo $row["goodsoldprice"];?></del>
                            </div>
                        </div>
                        <div class="gd_freight">
                            <!-- frigth:运费 -->
                            <span class="pop_tit">运费</span>
                            <span class="pop_black">运费</span>
                        </div>
                        <div class="gd_op_chose">
                            <div class="model_wrap color_wrap">
                                <span class="pop_tit">颜色</span>
                                <ul class="color_ul">
                                    <li class="on">
                                        <a href="javascript:void(0);">黑色</a>
                                        <b></b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">军绿色</a>
                                        <b></b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">灰色</a>
                                        <b></b>
                                    </li>
                                </ul>
                            </div>
                            <div class="model_wrap color_wrap">
                                <span class="pop_tit">颜色</span>
                                <ul class="color_ul">
                                    <li class="on">
                                        <a href="javascript:void(0);">L</a>
                                        <b></b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">XL</a>
                                        <b></b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">XXL</a>
                                        <b></b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">XXXL</a>
                                        <b></b>
                                    </li>
                                </ul>
                            </div>
                            <div class="model_wrap count_wrap">
                                <span class="pop_tit">数量</span>
                                <div class="gd_wrap_input clearfix">
                                    <button  class="gd_btn_reduce gd_btn_common ">-</button>
                                    <div class="gds_num_box">
                                        <input type="text" value="1">
                                    </div>
                                    <button href="javascript:void(0);" class="gd_btn_add gd_btn_common ">+</button>
                                </div>
                            </div>
                            <div class="model_wrap">
                                <div class="model_in_stock">
                                    <p style="border:1px solid red">
                                        <a href="javascript:void(0);" class="a_buy_now mm_lljm">立即购买</a>
                                        <button class="a_add_car mm_lljm">加入购物车</button>
                                        <div class="move_circle"></div>
                                    </p>
                                    <div class="gd_tips">
                                        直播商品在线实付优惠多多哦！
                                    </div>
                                </div>
                            </div>
                            <div class="goodsId" style="display:none">
                                <?php echo $id;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 商品详情右侧开始 -->
        <div class="gd_details clearfix">
            <!-- 为您推荐开始 -->
            <div class="gd_details_l">
                <div class="tj_tit">为您推荐</div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
                <div class="gd_tj_goods">
                    <a href="javascript:void(0);" class="a_tj_goods">
                        <img src="images/goodDetail/mm_05932756112936645_240.jpg" alt="">
                    </a>
                    <p class="tj_goods_name">卡帝乐鳄鱼时尚针织开衫三件组 套组 190</p>
                    <p class="tj_goods_price">
                        <span class="tj_price_now">
                            <em>￥</em>378.00
                        </span>
                        <span class="tj_price_old"><del>698.00</del></span>
                    </p>
                </div>
            </div>
            <!-- 为您推荐结束 -->
            <!-- 商品详细介绍开始 -->
            <div class="gd_details_r">
                <div class="gd_detail_nav  clearfix">
                    <ul class="gd_nav_box clearfix">
                        <li class="on"><a href="javascript:void(0);">商品参数</a></li>
                        <li><a href="javascript:void(0);">详情</a></li>
                        <li><a href="javascript:void(0);">售后</a></li>
                        <li><a href="javascript:void(0);">评价</a></li>
                    </ul>
                </div>
                <div class="gd_detal_con">
                    <div id="parameter_box" class="detal_con_list">
                        <div class="detail_lists parameter_box">
                            <div class="para_h2">
                                <h2>商品参数</h2>
                            </div>
                            <div class="para_con">
                                <ul class="para_list clearfix">
                                    <li>商品名称：SaintDyfan男士升级款95%白鹅绒服（加厚）</li>
                                    <li>商品名称：SaintDyfan男士升级款95%白鹅绒服（加厚）</li>
                                    <li>商品名称：SaintDyfan男士升级款95%白鹅绒服（加厚）</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="gd_goodsiInfo_box" class="detal_con_list">
                        <div class="gd_info detail_lists">
                            <div class="para_h2">
                                <h2>商品详情</h2>
                            </div>
                            <div class="gd_center_img">
                                <img src="images/goodDetail/mm_desc_245971_01_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_02_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_03_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_04_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_05_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_06_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_08_1280.jpg" alt="">
                                <img src="images/goodDetail/mm_desc_245971_12_1280.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="service_sale_box" class="detal_con_list">
                        <div class="detail_lists parameter_box">
                            <div class="para_h2">
                                <h2>配送与售后</h2>
                            </div>
                            <div class="para_con clearfix">
                                <img src="images/goodDetail/mmkefu_01.png" alt="">
                                <img src="images/goodDetail/mmpeisong_01.png" alt="">
                                <img src="images/goodDetail/mmfahuo_01.png" alt="">
                                <img src="images/goodDetail/mmtuihuo_01.png" alt="">
                                <img src="images/goodDetail/mmfapiao_01.png" alt="">
                                <img src="images/goodDetail/mmjiage_01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="gd_user_review" class="detal_con_list">
                        <div class="detail_lists user_review_box">
                            <div class="para_h2">
                                <h2>用户评价</h2>
                            </div>
                            <div class="user_review_con">
                                <div class="user_review_tit clearfix">
                                    <div class="u_r_t1">用户评价</div>
                                    <div class="u_r_t2">用用户满意度</div>
                                    <div class="u_r_t3">用户信息</div>
                                </div>
                                <div class="gd_com_list clearfix">
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com_list_l gd_com_list">
                                            <div class="review_con">值得购买，衣服厚保暖，出去东北玩就不冷了</div>
                                            <div class="review_time">2018-12-21 12:13</div>
                                        </div>
                                        <div class="com_list_m gd_com_list">
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                            <i class="user_csi"></i>
                                        </div>
                                        <div class="com_list_r gd_com_list">
                                            <img src="images/goodDetail/m2447427_100_100.jpg" alt=""><br>
                                            <span>WX***</span>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- 商品详细介绍结束 -->


        </div>
    </div>
    <!-- 商品详情页结束 -->

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

    <script src="js/jquery-1.8.3.min.js"></script>

    <script src="js/goodsDetail.js"></script>
    <!-- <script src="js/header.js"></script> -->
    <script src="js/jquery.idcode.js"></script>
  
    <script>
        $.idcode.setCode();
        $("#rnuc_btns").click(function () {
            var IsBy = $.idcode.validateCode();
            if (IsBy) {
                console.log("验证码正确");
            }
        });
            // 验证码插件，非得在html文件才生效？？？？？
    </script>
</body>

</html>

