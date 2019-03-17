
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>快乐购商城</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="./css/mycart.css">
    <link rel="stylesheet" href="./css/footer.css">
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
                        <div class="close_r_tips" onclick="$(this).parent().css({'display':'none'})">
                            x
                        </div>
                    </div>
                </div>
                <div class="header_top_right fr">
                    <ul>
                        <li>
                            <a href="csmIndex.html">合作招商</a>
                            <span class="line">|</span>
                        </li>
                        <li>
                            <a href="logon.html">订单查询</a>
                            <span class="line">|</span>
                        </li>
                        <li>
                            <a href="#">我的快乐购</a>
                            <span class="line">|</span>
                        </li>
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
                            <a href="#">客服中心
                                <b class="arrow_down"></b>
                            </a>

                            <div class="cus_center">
                                <a href="#">帮助中心</a>
                                <a href="#">会员反馈</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 头部结束 -->
    <!-- 订单流程 -->
    <div class="full_sc order_status">
        <div class="wr header_center clearfix">
            <div class="h_c_logo">
                <a href="javascript:void(0);">
                    <img src="./imgs/logo.jpg" alt="">
                </a>
            </div>
            <div class="h_c_right">
                <div class="csj_first circle"></div>
                <div class="csj_second lines"></div>
                <div class="csj_third circle"></div>
                <div class="csj_fourth lines"></div>
                <div class="csj_fivth circle"></div>
                <div class="word mychart">我的购物车</div>
                <div class="word banlance">确认订单信息</div>
                <div class="word success">成功提交订单</div>
            </div>
        </div>
    </div>
    <!-- 订单流程end -->
    <!-- 购物车主内容 -->
    <div class="mycart wr clearfix">
        <form action="" method="POST" id="form_buy" name="form_buy">
            <input type="hidden" value="1" name="ifcart">
            <div class="order_shop">
                <!-- 标题 -->
                <div class="shop_tit clearfix">
                    <div class="cart_checkbox">
                        <label class="cbox_djj">
                            <input type="checkbox" name="selectAll" class="jdcheckbox" id="selectAll">
                            <span>全选</span>
                        </label>
                        <span class="shop_s_name">商品</span>
                    </div>
                    <div class="column t_price">单价(元)</div>
                    <div class="column t_quantity">数量</div>
                    <div class="column t_sum">小计(元)</div>
                    <div class="column t_action">操作</div>
                </div>
                <!-- 标题end -->
                <div class="shop_list" id="shop1">
                    <!-- 店名 -->
                    <div class="shop_h2 clearfix">
                        <span class="s_allgoods fl">
                            <input type="checkbox" name="select_shop" class="jdcheckbox" value="1" id="select_shop">
                        </span>
                        <span class="shop_h2_zy">
                            <span>自营</span>
                        </span>
                        <a class="a_shopname" href="javascript:void(0);">快乐购商城</a>
                        <div class="order_tips clearfix">在线支付满129.00包邮</div>
                    </div>
                    <!-- 店名end -->
                    <!-- 购物车列表 -->
                    <div class="item_list">
                        <?php
                            session_start();//启用session
                            if(!empty($_SESSION['mycar'])){
                                $arr=array();
                                $arr=$_SESSION["mycar"];//从session中拿出二维数组
                            }
                            $sort = count($arr); 
                            include("inc/dbconn.php");
                        ?>
                        <?php
                            foreach($arr as $a)//遍历
                            {
                        ?>
                        <div  class="item_form">
                            <div class="cell p_checkbox">
                                <input type="checkbox" storeid="shop1" nc_type="eachGoodsCheckBox" value="13323846|1" id="cart_id13323846" name="cart_id[]"
                                    class="cb_s_goods">
                            </div>
                            <div class="cell p_goods">
                                <div class="goods_item">
                                    <div class="p_img">
                                        <a target="_blank" href="javascript:void(0)">
                                            <img src="./imgs/csj_mycart1.jpg" alt="美国苹果/Apple iPad mini 4 7.9英寸平板电脑128G/WiF版 金色">
                                        </a>
                                    </div>
                                    <div class="item_msg">
                                        <div class="p_name">
                                            <a target="_blank" href="javascript:void(0)"><?php echo $a["goodsName"]?></a>
                                        </div>
                                        <!-- 赠品 促销信息-->
                                        <div class="discount_info">
                                        </div>
                                        <!-- 赠品 促销信息 end-->
                                    </div>
                                </div>
                            </div>
                            <div class="cell p_prices">
                                <p class="p_prices2">￥
                                    <span><?php echo $a["goodsNewPrice"]?></span>
                                </p>
                            </div>
                            <div class="cell p_quantity">
                                <div class="quantity_form">
                                    <a class="a_decrease " href="javascript:void(0);">-</a>
                                    <input maxlength="3" type="text" value=<?php echo $a["val"]?> class="itxt">
                                    <a class="a_add" href="javascript:void(0);">+</a>
                                    <input value="145990" id="item13323846_goods_common_id" type="hidden">
                                </div>
                            </div>
                            <div class="cell p_sum">
                                <strong>￥
                                    <em id="item13323846_subtotal" nc_type="eachGoodsTotal">3688.00</em>
                                </strong>
                            </div>
                            <div class="cell p_ops">
                                <button class="car_remove">删除</button>
                                <span class="delete_id" style="display:none;"><?php echo $a['pid']?></span> 
                            </div> 
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <!-- 购物车列表end -->
                </div>
                <div class="h81">
                    <div class="order_sum ">
                        <div class="wr clearfix">
                            <div class="del_all">
                                <label class="cbox_djj">
                                    <input type="checkbox" class="jdcheckbox" name="selectAll" value="1" id="selectAll">
                                    <span>全选</span>
                                </label>
                            </div>
                            <div class="fr">
                                <div class="goods_num">已选商品
                                    <span>
                                        <em id="sunm"></em>
                                    </span>件</div>
                                <div class="goods_sum">
                                    <p class="sum_price">商品总价（不含运费）
                                        <span>￥
                                            <em id="cartTotal"></em>
                                        </span>
                                    </p>
                                </div>
                                <div class="btn_buy fl">
                                    <a href="balance.html" class="a_btn_buy" id="next_submit">去结算</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- 猜你喜欢 -->
            <div class="detail_lists recommend_box" id="recommend_box">
                <div class="d_h2">
                    <ul>
                        <li class="on">猜你喜欢</li>
                    </ul>
                </div>
                <div class="detail_l_con4">
                    <div class="noguess">暂无商品向您推荐</div>
                </div>
            </div>
            <!-- 猜你喜欢end -->
        </form>
    </div>
    <!-- 购物车主内容end -->
    <!-- 尾部开始 -->
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
                        <dd>
                            <a href="">税费收取规则</a>
                        </dd>
                        <dd>
                            <a href="">新手指南</a>
                        </dd>
                        <dd>
                            <a href="">用户协议</a>
                        </dd>
                        <dd>
                            <a href="">常见问题</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>会员服务</dt>
                        <dd>
                            <a href="">快乐币政策</a>
                        </dd>
                        <dd>
                            <a href="">会员等级</a>
                        </dd>
                        <dd>
                            <a href="">会员权益</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>支付方式</dt>
                        <dd>
                            <a href="">快乐币支付</a>
                        </dd>
                        <dd>
                            <a href="">在线支付</a>
                        </dd>
                        <dd>
                            <a href="">货到付款</a>
                        </dd>
                        <dd>
                            <a href="">优惠券支付</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>配送方式</dt>
                        <dd>
                            <a href="">配送说明</a>
                        </dd>
                        <dd>
                            <a href="">包邮政策</a>
                        </dd>
                        <dd>
                            <a href="">费用说明</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>售后服务</dt>
                        <dd>
                            <a href="">电子发票</a>
                        </dd>
                        <dd>
                            <a href="">退货政策</a>
                        </dd>
                        <dd>
                            <a href="">售后咨询</a>
                        </dd>
                        <dd>
                            <a href="">退货办理</a>
                        </dd>

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
                <li>
                    <a href="">关于芒果超媒</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">投资者关系</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">自营品牌招商</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">联系我们</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="">营业证照</a>
                </li>
            </ul>
        </div>
        <div class="footer_copy">
            <div class="wr">
                <p class="copyright_des1">Copyright© 2006-2018 happigo. All Rights Reserved 免费服务热线: 400-705-1111 | 固话也可拨打: 400-705-8800
                </p>
                <p>湘ICP备17009657号 信息网络传播视听节目许可证号：1810530
                    <img src="imgs/jh.png" alt="">湘公网安备 43010502000556号</p>
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
    <!-- 尾部结束 -->
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="./js/mycart.js"></script>     
</body>

</html>