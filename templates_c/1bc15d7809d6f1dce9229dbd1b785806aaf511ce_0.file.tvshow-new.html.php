<?php
/* Smarty version 3.1.30, created on 2018-12-30 16:27:16
  from "D:\phpStudy\WWW\happygo\templates\tvshow-new.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c288164a18341_73956208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bc15d7809d6f1dce9229dbd1b785806aaf511ce' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\happygo\\templates\\tvshow-new.html',
      1 => 1546149363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c288164a18341_73956208 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    
        <!-- nav导航开始 -->
        <!-- <div class="full_nav">
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
        </div> -->
        <!-- nav导航结束 -->
    
        <!-- 右侧导航开始 -->
        <!-- <div class="rihgt_slider r_s_fixed">
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
        </div> -->
        <!-- 右侧导航结束 -->
    <div class="wr">
        <div class="l_r_top">
            <ul class="l_r_top_ul">
                <li >
                    <a href="tvshow.html">看直播</a>
                    <i></i>
                </li>
                <li class="on">
                    <a href="tvshow-new.html">今日推荐</a>
                    <i></i>
                </li>
                <li>
                    <a href="tvshow-old.html">昨日热销榜</a>
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
                       
                        <a href="#" class="pro" target="_blank">
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
