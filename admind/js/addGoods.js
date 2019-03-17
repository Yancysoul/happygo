$("#sub").click(function () {
    if ($("#goodsname").val() == "" || $("#goodsdesc").val() == "" || $("#goodsnewsprice").val() == "" || $("#goodspic").val() == "") {
        $(".promptMsg").html("请将信息输入完整");
        return false;
    }
});
$(".goodsssort").css({display: "none"}).eq(0).css({display: "inline-block"});
$(".goodssort input").click(function () {
    $(".goodsssort").eq($(this).index()).css({display: "inline-block"}).siblings(".goodsssort").css({display: "none"});
    $(".goodsssort").eq($(this).index()).children().eq(0).prop("checked", true).siblings().prop("checked", false);
});