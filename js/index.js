// 轮播图左边导航隐藏与显示
$(".index_type_ul").on("mouseover", ".li_has_down", function () {
    $(this).addClass("li_border").siblings(".li_has_down").removeClass("li_border");
    $(this).children(".type_color").css("color", "#ce4261");
    $(this).children(".nav_type_list").addClass("disp");
})
$(".index_type_ul").on("mouseout", ".li_has_down", function () {
    $(this).addClass("li_border").siblings(".li_has_down").removeClass("li_border");
    $(this).children(".type_color").css("color", "#333");
    $(this).children(".nav_type_list").removeClass("disp");
})
// 轮播图左边二级导航
$(".se_type li a").hover(function () {
    $(this).css("color", "rgba(241,19,35,1)");
}, function () {
    $(this).css("color", "#666");
});
// 轮播图
$(".big_eye_pic li").hide();
var index = 0;
var curPic = $(".big_eye_pic li").eq(index);
curPic.show();
var timmer;
var flag = true;
var len = $(".big_eye_pic li").length;
for (var i = 0; i < len; i++) {
    $(".btn_ball").append("<li></li>");
}
move();
function move() {
    curPic.fadeOut();
    if (index == len) {
        index = 0;
    }
    if (index == -1) {
        index = len - 1;
    }
    dotChange(index);
    curPic = $(".big_eye_pic li").eq(index);
    curPic.fadeIn("", function () {
        clearTimeout(timmer);
        timmer = setTimeout(function () {
            flag = true;
            index++;
            move();
        }, 2000);
    });
}
function dotChange(index) {
    $(".btn_ball li").css("backgroundColor", "white");
    $(".btn_ball li").eq(index).css("backgroundColor", "red");
}
$(".btn_ball li").click(function () {
    clearTimeout(timmer);
    index = $(this).index();
    move();
});
// 鼠标悬停事件
$("#indexBanner").hover(function () {
    clearInterval(timmer);//鼠标悬停时清除定时器
}, function () {
    timmer = setInterval(function () {
        index++;
        move();
    }, 2000);//鼠标移出时开始定时器
})

// 楼层切换
var flag = true;
$(".ul_l_s li").click(function () {
    flag = false;
    $(this).addClass("fl_on").siblings().removeClass("fl_on").siblings().removeClass("fl_hover");
    var index = $(this).index()//获取当前点击元素的索引  
    var top = $(".louceng").eq(index).offset().top - 100;//获取每个楼层到顶部的距离  
    // console.log(top);
    $("html,body").stop(true).animate({ "scrollTop": top }, function () { flag = true })
})
// 鼠标悬停
$(".ul_l_s li").mouseover(function () {
    if ($(this).get(0).className == "menuItem") {
        $(this).addClass("fl_hover").siblings().removeClass("fl_hover");
    }
})
// 滚轮滑动切换楼层
// 滚动实现懒加载
load();
// 防抖动
var t;
$(window).resize(function () {
    console.log($(window).width());
    if ($(window).width() < 1438) {
        console.log("====");
    }
    clearTimeout(t);
    t = setTimeout(function () {
        load();
    }, 200);
})
$(window).scroll(function () {
    if (flag) {
        load();
        var scrollT = $(window).scrollTop();
        if (scrollT > 500) {
            $(".search_fixed").css("display", "block");
        }
        if (scrollT < 500) {
            $(".search_fixed").css("display", "none");
        }
        if (scrollT < 814) {
            $(".left_slider").css("display", "none");
        }
        if (scrollT > 814) {
            $(".left_slider").css("display", "block");
        }
        var len = $(".louceng").size();
        for (var i = 0; i < len; i++) {
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= $(".louceng")[i].offsetTop - $(".louceng").height()) {
                $(".ul_l_s li").eq(i).addClass("fl_on").siblings().removeClass("fl_on");
            }
        }
    }
})
function load() {
    // 1.获取页面滚动的高度
    var scroTop = $(document).scrollTop();
    // 2.获取页面的可视高度
    var windowH = $(window).height();
    // 3.获取每一个box距离页面顶部的高度
    $(".louceng").each(function () {
        //  判断是否到达
        var top = $(this).offset().top;
        if (scroTop + windowH < top) {
            $(this).children(".fl_loading").css("display", "block");
            $(this).children(".floor_list").css("display", "none");
        } else {
            $(this).children(".fl_loading").css("display", "none");
            $(this).children(".floor_list").css("display", "block");
        }
    })
}
// tab切换
$(".floor_type").on("mouseover", "li", function () {
    var i = $(this).index();
    $(this).addClass('on').siblings().removeClass('on');
    var curUl = $(this).parent().parent().siblings(".floor_list").children("ul").eq(i);
    curUl.css("display", "block").siblings().css("display", "none");
    var curDiv = $(this).parent().parent().siblings("div").children(".xsqg_list").eq(i);
    curDiv.css("display", "block").siblings().css("display", "none");
})


// 今日直播左右键消失与出现
$(".pro_hot").hover(function () {
    $(this).children(".pro_con").children().children(".hd").css("display", "block");
}, function () {
    $(this).children(".pro_con").children().children(".hd").css("display", "none");
})

// 限时抢购左右键消失与出现
$(".xsqg_list").hover(function () {
    $(this).children(".hd").css("display", "block");
}, function () {
    $(this).children(".hd").css("display", "none");
})
// 限时抢购左右键滑动
var i = 0;
// 左分页
$(".prev").click(function () {
    var moveUl = $(this).parent().siblings(".tempWrap").children();
    var liWidth = moveUl.children("li").outerWidth();
    console.log(liWidth);
    var liLen = moveUl.children("li").size();
    if (i > 0 && i <= liLen - 1) {
        i = i - 5;
        move_btn(moveUl, liLen, liWidth);
    }
})
// 点击右分页
$(".next").click(function () {
    var moveUl = $(this).parent().siblings(".tempWrap").children();
    var liLen = moveUl.children("li").size();
    var liWidth = moveUl.children("li").outerWidth();
    if (i >= 0 && i <= liLen - 1) {
        i = i + 5;
        move_btn(moveUl, liLen, liWidth);
    }
    if (i > liLen - 1) {
        i = liLen - 1;
    }
})
//移动事件
function move_btn(moveUl, liLen, liWidth) {
    if (i < liLen) {
        if (i == liLen) {
            moveUl.stop();
            moveUl.css({ left: -(liLen - 1) * liWidth })
            i = liLen - 1;
        }
        if (i <= -1) {
            moveUl.stop();
            moveUl.css({ left: 0 });
            i = 0;
        }
        moveUl.stop().animate({ left: -i * liWidth }, 590);
    }
}
// 限时抢购悬浮图片加阴影
$("#floor1").on("mouseover", ".li_start", function () {
    $(this).children(".xsqg_img").stop().animate({
        opacity: .5
    })
})
$("#floor1").on("mouseout", ".li_start", function () {
    $(this).children(".xsqg_img").stop().animate({
        opacity: 1
    })
})

// 大图片悬浮时图片加阴影
$(".li_first").mouseover(function () {
    $(this).stop().animate({
        opacity: .5
    })
})
$(".li_first").mouseout(function () {
    $(this).stop().animate({
        opacity: 1
    })
})
// 悬浮加边框
// $(".mryh_goods").on("mouseover",".bor",function(){
//     $(this).css("border","3px solid #c4193f");
// })
// $(".mryh_goods").on("mouseout",".bor",function(){
//     $(this).css("border","3px solid #fff");
// })


$(".mryh_goods").on("mouseover", "li", function () {
    $(this).css("border", "3px solid #c4193f");
})
$(".mryh_goods").on("mouseout", "li", function () {
    $(this).css("border", "3px solid #fff");
})
// 鼠标悬停时图片放大,并且加红色的边框
$(".groUlOut li").hover(function () {
    var change_img = $(this).children("a").children();
    var img_w = change_img.width();
    var img_h = change_img.height();
    $(this).addClass("border_color").siblings().removeClass("border_color");
    change_img.stop().animate({ height: img_h + 20, width: img_w + 20, left: "-10px", top: "-10px" }, 16.7);
}, function () {
    $(this).siblings().removeClass("border_color");
    var change_img = $(this).children("a").children();
    change_img.stop().animate({ height: 220, width: 220, left: "0px", top: "0px" }, 16.7);
});

// 今日直播,昨日疯抢
$(".pro_menu").on("click", ".pro_li", function () {
    // console.log($(this));
    var i = $(this).index();
    console.log(i);
    $(this).addClass("current").siblings().removeClass("current");
    if (i % 2 == 0) {
        i = i / 2;
        var curdivs = $(".pro_con").eq(i);
        curdivs.css("display", "block").siblings(".pro_con").css("display", "none");
    }
})

// 换一批功能实现
var change_index = 0
$("#every_day_switch").click(function () {
    pages = $(".new_tuijian").size();//4
    if (change_index < pages - 1) {
        change_index++;
    } else {
        change_index = 0;
    }
    $(".new_tuijian").eq(change_index).show().siblings(".new_tuijian").hide();
})
// 给楼层切换对应的div里面的li添加类名
$(".floor_list .mryh_goods").each(function () {
    // console.log($(this).children("li").eq(2));
    $(this).children("li").eq(2).addClass("nomargin");
    $(this).children("li").eq(7).addClass("nomargin");
})
$(".new_tuijian").each(function () {
    // console.log($(this).children("li").eq(5));
    $(this).children("li").eq(5).addClass("nomargin");
})

$("#floor2 .mryh_goods").each(function () {
    console.log($(this));
    $(this).children("li").eq(4).addClass("nomargin");
})


// 点击我的购物车的事件
var cookieStr = document.cookie;//username=jack; userpwd=1234
var username = getValue("username");
var userpwd = getValue("userpwd");
function getValue(key) {
    var arr = cookieStr.split("; ");
    for (var i = 0; i < arr.length; i++) {
        // console.log(arr[i]);
        var arr2 = arr[i].split("=");
        if (arr2[0] == key) {
            return arr2[1];
        }
    }
}
// 点击我的购物车事件
$(".h_c_right ").click(function () {
    console.log(username);
    console.log(userpwd);
    if (username && userpwd) {
        location.href = "check.php";
    } else {
        location.href="logon.html?url=mycart.php";
    }
   
})

// 点击右侧我的购物车
$(".f_c_t_list ").click(function () {
    console.log(username);
    console.log(userpwd);
    if (username && userpwd) {
        location.href = "check.php";
    } else {
        location.href="logon.html?url=mycart.php";
    }
})

//点击收藏
$(".f_c_t_list1 ").click(function () {
    var cookieStr = document.cookie;//username=jack; userpwd=1234
    var username = getValue("username");
    console.log(username);
    var userpwd = getValue("userpwd");
    console.log(userpwd);
    if (username && userpwd) {
        location.href = "check1.php";
    } else {
        location.href = "theorder.php";
    }
    function getValue(key) {
        var arr = cookieStr.split("; ");
        for (var i = 0; i < arr.length; i++) {
            console.log(arr[i]);
            var arr2 = arr[i].split("=");
            if (arr2[0] == key) {
                return arr2[1];
            }
        }
    }
})
