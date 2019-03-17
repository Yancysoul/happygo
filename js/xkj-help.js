$(".menu_lie div").css({bottom: -5});
$(".menu_right ul li").not($(".menu_lie")).each(function () {
    $(this).mouseenter(function () {
        $(this).children("div").stop(true, true).animate({bottom: -5}, 100);
        $(this).children("a").css({color: "#fff"});
    });
    $(this).mouseleave(function () {
        $(this).children("div").stop(true, true).animate({bottom: -68}, 100);
        $(this).children("a").css({color: "#000"});
    });
});
$(".help_list").mouseenter(function(){
    $(this).addClass("help_list_hover");
});
$(".help_list").mouseleave(function(){
    $(".help_list").removeClass("help_list_hover");
});
var flag = true;
$(".help_list").click(function(){
    if($(this).get(0).className.indexOf("help_list_link") == -1){
        $(".help_list_link").children("div").css({
            display: "none"
        });
        flag = true;
    }
    if(flag){
        $(".cliThing").css({
            display: "none"
        });
        $(".help_list").removeClass("help_list_link");
        $(this).addClass("help_list_link");
        if($(this).get(0).className.indexOf("orders") != -1){
            $(".cliThing").css({
                display: "block"
            });
        }
        flag = false;
    }else{
        $(".cliThing").css({
            display: "none"
        });
        $(this).removeClass("help_list_link");
        flag = true;
    }
});
$(".hide-items").mouseenter(function(){
    $(this).addClass("hide-items-hover");
});
$(".hide-items").mouseleave(function(){
    $(".hide-items").removeClass("hide-items-hover");
});
$(".hide-items").click(function(){
    $(".hide-items").removeClass("hide-items-link");
    $(this).addClass("hide-items-link");
});
// 热门帮助的开始
$(".mjy_seach input").click(function(){
    $(this).get(0).placeholder = "";
    $(this).css({
        border: "1px solid #4e9df6",
        borderRadius: "10px"
    });
});
$(".mjy_seach input").blur(function(){
    $(this).get(0).placeholder = "请输入想搜索问题的关键词";
    $(this).css({
        border: "0"
    });
});
$(".hotHelp_list ul").on("mouseenter", "li", function(){
    $(this).children().css({
        color:"red"
    })
})
$(".hotHelp_list ul").on("mouseleave", "li", function(){
    $(".hotHelp_list ul li").children().css({
        color:"#707070"
    })
})
// 多行文本框的开始
$(".answer textarea").click(function(){
    $(this).get(0).placeholder = "";
    $(this).css({
        border: "1px solid #4e9df6",
        borderRadius: "10px"
    });
});
$(".answer textarea").blur(function(){
    $(this).get(0).placeholder = "输入您要咨询的内容，我们将于1个工作日内在答疑专区回复。";
    $(this).css({
        border: "1px solid white"
    });
});
$(".mjy_code div").each(function(i){
    $(".mjy_code div").eq(i).html(parseInt(Math.random() * 10));
    $(".mjy_code div").eq(i).css({
        left: 12.5*i,
        top: parseInt(Math.random() * 13)
    });
});
$(".mjy_code").css({
    backgroundColor: "rgb("+parseInt(Math.random() * 256)+","+parseInt(Math.random() * 256)+","+parseInt(Math.random() * 256)+")"
});
for(var j = 0; j < 21; j++){
    $(".mjy_code").append("<p></p>");
}
$(".mjy_code p").each(function(x){
    $(".mjy_code p").eq(x).css({
        left: parseInt(Math.random() * 49),
        top: parseInt(Math.random() * 21)
    });
});
$(".mjy_code").click(function(){
    $(".mjy_code").css({
        backgroundColor: "rgb("+parseInt(Math.random() * 256)+","+parseInt(Math.random() * 256)+","+parseInt(Math.random() * 256)+")"
    });
    $(".mjy_code p").each(function(x){
        $(".mjy_code p").eq(x).css({
            left: parseInt(Math.random() * 49),
            top: parseInt(Math.random() * 21)
        });
    });
    $(".mjy_code div").each(function(i){
        $(".mjy_code div").eq(i).html(parseInt(Math.random() * 10));
        $(".mjy_code div").eq(i).css({
            left: 12.5*i,
            top: parseInt(Math.random() * 13)
        });
    });
});
$(".mjy_sub").click(function(){
    var str = $.trim($(".help_dyzq_margin input").val());
    var str1 = $(".mjy_code1").html() + $(".mjy_code2").html() + $(".mjy_code3").html() + $(".mjy_code4").html();
    if(str.length == 4){
        if(str == str1){
            $(".help_dyzq_margin input").val("");
            return true;
        }else{
            $(".help_dyzq_margin input").val("");
            $(".code_tit").css({
                display: "block"
            })
            return false;
        }
    }else{
        $(".help_dyzq_margin input").val("");
        $(".code_tit").css({
            display: "block"
        })
        return false;
    }
});
//最新最热开始
$(".up_to_date").mouseenter(function(){
    $(".hottest").children().removeClass("newHotBg");
    $(this).children().addClass("newHotBg");
});
$(".hottest").mouseenter(function(){
    $(".up_to_date").children().removeClass("newHotBg");
    $(this).children().addClass("newHotBg");
})