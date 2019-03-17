$(".gd_bigImg img").css({
    width: 800,
    height: 800
});
$(".gd_smaImg").mouseenter(function () {
    $(".gd_zoom").css({ "display": "block" });
    $(".gd_bigImg").css({ "display": "block" });
})
$(".gd_smaImg").mouseleave(function () {
    $(".gd_zoom").css({ "display": "none" });
    $(".gd_bigImg").css({ "display": "none" });
})

var MAX_LEFT = $(".gd_smaImg").innerWidth() - $(".gd_zoom").outerWidth(true);
var MAX_TOP = $(".gd_smaImg").innerHeight() - $(".gd_zoom").outerHeight(true);
$(".gd_smaImg").mousemove(function (e) {
    var rect = $(".gd_smaImg").offset();
    var left = e.pageX - rect.left - $(".gd_zoom").outerWidth(true) / 2 - 2;
    var top = e.pageY - rect.top - $(".gd_zoom").outerHeight(true) / 2 - 2;
    left = left > MAX_LEFT ? MAX_LEFT : left;
    left = left < 0 ? 0 : left;
    top = top > MAX_TOP ? MAX_TOP : top;
    top = top < 0 ? 0 : top;
    $(".gd_zoom").css({ "left": left, "top": top });
    $(".bigImg").css({ "left": -left * (800 / 380), "top": -top * (800 / 380) });
})

$(".als-wrapper").on("mouseenter", "li", function () {
    $(this).addClass("gdzoomActive").siblings().removeClass("gdzoomActive");
    $(".gd_smaImg").children("img").attr("src", $(this).children().children("img").attr("src").replace("small", "big"));
    $(".bigImg").attr("src", $(this).children().children("img").attr("src").replace("small", "big"));
})
// ============================================放大镜结束

var flag = true;
$(window).scroll(function () {
    var windowH = $(window).scrollTop();
    $(".gd_detal_con .detal_con_list").each(function () {
        var T = $(this).offset().top;
        var index = $(this).index();
        if (windowH >= T && flag) {
            $(".gd_nav_box").children().eq(index).addClass("on").siblings().removeClass("on");
        }
        // 这里windowH>=T写成windowH - T > 0会出错
    })
    var scrollT = $(".gd_details").offset().top;
    if (windowH >= scrollT) {
        $(".gd_hid_nav").css({ "display": "block" });
        $(".gd_hid_nav .gd_nav_box  a").css({ "color": "#fff" });
        $(".gd_hid_nav .gd_nav_box  .on a").css({ "color": "#c41f3a" });
    } else {
        $(".gd_hid_nav").css({ "display": "none" });
    }
})

$(".gd_nav_box").on("click", "li", function () {
    $(this).addClass("on").siblings("li").removeClass("on");
    flag = false;//等于false的时候，滚动失效
    var index = $(this).index();
    console.log($(".gd_detal_con").children().eq(index).offset().top);
    var h = $(".gd_detal_con").children().eq(index).offset().top;
    $("body,html").animate({
        "scrollTop": h
    }, 500, function () {
        flag = true;
    })
})
// =============================================详情页滚动事件结束


$(".gd_wrap_input").on("click", "button", function (e) {
    var val=parseInt($(".gds_num_box input").val());
    var _val=$(e.target).parent().children(".gds_num_box");
    if (e.target.className.indexOf("gd_btn_reduce")!=-1) {
        if (val <= 1) {
            $(e.target).prop("disabled", true);
        }else{
            val=val-1;
            $(_val).html('<input type="text" value="' + val + '" >'+$(_val).html() );
        }
    }else{
        if(val < 1){
            $(".gd_btn_reduce").prop("disabled", true);
        }else{
            $(".gd_btn_reduce").prop("disabled", false);
        }
        val+=1;
        $(_val).html('<input type="text" value="' + val + '" >'+$(_val).html() );
    }  
})
// ==============================================详情页加减按钮


// 尺码颜色点击事件
$(".color_ul").on("click","li",function(){
    console.log("============");
    $(this).addClass("on").siblings().removeClass("on");
})

// 飞入购物车特效
var a_car_num = $(".a_car_num").offset();
var Null = 0;
// 点击加到购物车
$(".a_add_car").click(function () {
    var goodsName = $(".del_r_tit").html();
    var goodsDesc = $(".gd_tit_desc").html();
    var goodsNewPrice = $(".gd_now_price_a").html();
    var goodsId = $(".goodsId").text();
    var val = $(".gds_num_box input").val();
    var goodsPic = $("#goodsPic").html();
    url="action.html?id="+goodsId+"&goodsName="+ goodsName+"&goodsDesc="+goodsDesc+"&goodsPic="+goodsPic+"&goodsNewPrice="+goodsNewPrice+"&val="+val;
    console.log(url);
    url=decodeURI(url);
    location.href=url;
    // $.get(url,  function(data){
    //  console.log(data);
    // })

    // 飞入购物车效果
    var offsetTop1 = $(".move_circle").offset().top;
    var offsetTop2 = $(".flyBird").offset().top;
    var offsetTop=offsetTop1-offsetTop2;
    var innerWidth1= $(".move_circle").offset().left;
    var innerWidth2= $(".flyBird").offset().left;
    var innerWidth=innerWidth1-innerWidth2;
    var circle_left=parseInt($(".move_circle").css("left")) ;
    var circle_top=parseInt($(".move_circle").css("top")) ;
    Null++;
    var _this = $(this);
    $(".move_circle").css({
        'z-index': 99999,
        'border': '3px solid #FFFFFF',
        'position': 'absolute',
        'height':$(this).height() + 'px',
        'width':$(this).width() + 'px',
        'top': $(this).offset().top + 'px',
        'left': $(this).offset().left + 'px',
    })
    $(".move_circle").animate({
        'width': 50 + 'px',
        'height': 50 + 'px',
    }, function () {
        $(".move_circle").animate({
            'top': circle_top-offsetTop + 'px',
            'left': circle_left-innerWidth + 'px',
            'width': 20,
            'height': 20,
        }, 1500, function () {
            // $(".move_circle").remove();
            $('.a_car_num').html(Null);
        })
    })
    return false;

})



//点击收藏
$(".gd_collect").toggle(
    function () {
        var cur = $(this).children(".gd_coll_icon")[0];
        cur.style.background = "url('imgs/detail_icon_list.png') no-repeat -0px -309px";
        // console.log(cur);
        // console.log($(this)[0].style.background);
        var goodsName = $(".del_r_tit").html();
        var goodsNewPrice = $(".gd_now_price_a").html();
        var goodsOldPrice = $(".gd_del").html();
        var goodsId = $(".goodsId").text();
        var url = "shoucang.php?id=" + goodsId + "&goodsName=" + goodsName + "&goodsNewPrice=" + goodsNewPrice + "&goodsOldPrice=" + goodsOldPrice;
        url = decodeURI(url);
        $.get(url, function (data) {

        })
    },
    function () {
        var cur = $(this).children(".gd_coll_icon")[0];
        cur.style.background = "url('imgs/detail_icon_list.png') no-repeat -30px -309px";
        var delete_id = $(".gd_bh").text();
        // console.log(delete_id);
        var _this = $(".sc");
        $.get("delete1.php", { id: delete_id }, function (data) {

            if (data == "-1") {
                console.log("------");
                $(_this).parent().remove();
            } else {
                console.log("===");
            }
        })


    }
)
