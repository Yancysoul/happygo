$(".menu_lia div").css({bottom: -5});
$(".menu_right ul li").not($(".menu_lia")).each(function () {
    $(this).mouseenter(function () {
        $(this).children("div").stop(true, true).animate({bottom: -5}, 100);
        $(this).children("a").css({color: "#fff"});
    });
    $(this).mouseleave(function () {
        $(this).children("div").stop(true, true).animate({bottom: -68}, 100);
        $(this).children("a").css({color: "#000"});
    });
});
var index = 0;
var timmer;
move();
function move() {
    $("#bannerDot").children().eq(index).css({backgroundColor: "rgba(0, 0, 0)"}).siblings().css({backgroundColor: "rgba(172, 136, 100, .7)"});
    $("#bannerPic").stop(true, true).animate({left: -1200 * index}, function () {
        clearTimeout(timmer);
        timmer = setTimeout(function () {
            index++;
            if (index == 2) {
                index = 0;
            }
            move();
        }, 3000);
    });
}
$("#bannerDot").children().each(function () {
    $(this).mouseenter(function () {
        index = $(this).index();
        clearTimeout(timmer);
        move();
    });
});
// 验证码
$.idcode.setCode();
$("#btns").click(function () {
    var IsBy = $.idcode.validateCode();
    alert(IsBy);
});
// news列表
newsMove();
var newsT;
function newsMove() {
    $(".news_center ul").stop(true, true).animate({top: -25}, function () {
        $(this).append($(this).children().eq(0).clone(true)).css({top: 0}).children().eq(0).remove();
        clearTimeout(newsT);
        newsT = setTimeout(newsMove, 1000);
    });
}
$(".news_center ul").mouseenter(function () {
    clearTimeout(newsT);
}).mouseleave(newsMove);
// 欢乐指数
$(".home_tab ul li").each(function () {
    console.log($(this).index());
    $(this).mouseenter(function () {
        $(this).css({
            backgroundColor: "#39b6f0",
            color: "#fff",
            height: 23
        }).siblings().css({
            backgroundColor: "#f4f4f4",
            color: "#000",
            height: 25
        });
        $(".home_tabs").children().eq($(this).index()).css({display: "block"}).siblings().css({display: "none"});
    });
});
// 常见问题
$("#checkInput").mouseover(function () {
    $(this).css({color: "#646464"});
});
$("#checkInput").mouseleave(function () {
    $(this).css({color: "#e1e1e1"});
});
$("#checkInput").focus(function () {
    if ($(this).val() == "请输入想搜索内容的关键词") {
        $(this).val("");
        $(this).css({color: "#646464"});
    }
});
$("#checkInput").blur(function () {
    if ($(this).val() == "") {
        $(this).val("请输入想搜索内容的关键词");
        $(this).css({color: "#e1e1e1"});
    }
});