$(".menu_right ul li").not($(".menu_li")).each(function () {
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
