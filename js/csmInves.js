$(".menu_lib div").css({bottom: -5});
$(".menu_right ul li").not($(".menu_lib")).each(function () {
    $(this).mouseenter(function () {
        $(this).children("div").stop(true, true).animate({bottom: -5}, 100);
        $(this).children("a").css({color: "#fff"});
    });
    $(this).mouseleave(function () {
        $(this).children("div").stop(true, true).animate({bottom: -68}, 100);
        $(this).children("a").css({color: "#000"});
    });
});
// tab切换
$(".policy_title ul").children().eq(0).addClass("policyTli").css({backgroundColor: "#f4f4f4"}).children().eq(0).css({color: '#c5000f'});
$(".policy_content").children().eq(0).css({display: "block"});
$(".policy_title ul").children().each(function () {
    $(this).mouseenter(function () {
        $(this).addClass("policyTli").css({backgroundColor: "#f4f4f4"}).children().eq(0).css({color: '#c5000f'})
        $(this).siblings().each(function () {
            $(this).removeClass("policyTli").css({backgroundColor: "#fff"}).children().eq(0).css({color: '#303030'});
        });
        $(".policy_content").children().eq($(this).index()).css({display: "block"}).siblings().css({display: "none"});
    });
});
// 合作标准begin
$(".norm_class").children("ul").css({display: "none"}).eq(0).css({display: "block"}).children().eq(0).css({borderTop: "1px #ebebeb dashed"});
$(".norm_class").children("div").eq(0).addClass("light_div");
$(".norm_class li").eq(0).addClass("light_li");
$(".norm_class").children("div").click(function () {
    $(this).addClass("light_div").siblings().removeClass("light_div");
    $(".norm_class").children("ul").eq($(this).index() / 2).css({display: "block"}).siblings("ul").css({display: "none"});
});
$(".norm_class li").click(function () {
    $(".norm_class li").removeClass("light_li");
    $(this).addClass("light_li");
});