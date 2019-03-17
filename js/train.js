$(".menu_lic div").css({bottom: -5});
$(".menu_right ul li").not($(".menu_lic")).each(function () {
    $(this).mouseenter(function () {
        $(this).children("div").stop(true, true).animate({bottom: -5}, 100);
        $(this).children("a").css({color: "#fff"});
    });
    $(this).mouseleave(function () {
        $(this).children("div").stop(true, true).animate({bottom: -68}, 100);
        $(this).children("a").css({color: "#000"});
    });
});
//banner开始
var contTop = 0;
$(".v2_ad_nav a").eq(0).css({
    opacity: "1"
});
var timer = setInterval(changeImg, 3000);
var index;
$(".v2_ad_nav").on("mouseenter", "a", function(){
    clearInterval(timer);
    $(this).siblings().css({
        opacity: "0.8"
    });
    $(this).css({
        opacity: "1"
    });
    index = $(this).index();
    contTop = index*-348;
    $(".v2_ad_cont").stop(true, false).animate({
        top: contTop
    });
});
$(".v2_ad_nav").on("mouseleave", "a", function(){
    clearInterval(timer);
    timer = setInterval(changeImg, 3000);
});
function changeImg(){
    contTop -= 348;
    index = contTop / -348;
    if(index == 3){
        index = 0;
    }
    $(".v2_ad_nav a").css({
        opacity: "0.8"
    });
    $(".v2_ad_nav a").eq(index).css({
        opacity: "1"
    });
    if(contTop == -1044){
        contTop = 0;
    }
    $(".v2_ad_cont").stop(true, false).animate({
        top: contTop
    })
}
//分类开始
$(".classify").on("mouseenter", "a", function(){
    $(this).siblings().css({
        color: "rgb(57, 57, 57)"
    });
    $(this).css({
        color: "red"
    });
    var ind = $(this).index();
    $(".term").css({
        display: "none"
    });
    $(".term").eq(ind).css({
        display: "block"
    });
})
$(".term").on("mouseenter", "a", function(){
    $(".term a").css({
        color: "rgb(57, 57, 57)"
    });
    var inx = $(this).index();
    $(this).css({
        color: "red"
    });
    $(".present").css({
        display: "none"
    });
    $(".present").eq($(this).parent().index()-1).css({
        display: "block"
    });
    $(".present div").css({
        display: "none"
    });
    $(".present").eq($(this).parent().index()-1).children().eq(inx).css({
        display: "block"
    })
})
//培训课程
$(".courTab").on("mouseenter", "li", function(){
    var indx = $(this).index();
    $(this).siblings().removeClass("hit");
    $(this).addClass("hit");
    $(".panes").css({
        display:"none"
    })
    $(".panes").eq(indx).css({
        display:"block"
    })
    $(".panes").stop().animate({
        opacity:"0"
    });
    $(".panes").eq(indx).stop().animate({
        opacity:"1"
    });
})