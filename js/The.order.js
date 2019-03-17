$(".order_tab_ul").on("click","li",function(){
    $(this).addClass("on").siblings().removeClass("on");
    var index=$(this).index();
    $(this).parent().parent().parent().children().eq(2).children().eq(index).css("display","block").siblings().css("display","none");

})
$(".box").on("mouseenter",".container",function(){
    $(this).children(".layer").animate({
        height:300
    })
 })
 $(".box").on("mouseleave",".container",function(){
    $(this).children().eq(1).animate({
        height:0
    })
 })
 $(".select_div").mouseenter(function(){
    $(this).children(".select_list").css("display","block");
 })
 $(".select_div").mouseleave(function(){
    $(this).children(".select_list").css("display","none");
 })

 //点击侧边导航
 $(".uc_left").on("click","li",function(){
     $(this).children("a").addClass("color").siblings().removeClass("color");
     $(this).siblings().children("a").removeClass("color");
     var index=$(this).index(0);
    //  console.log($(this).children("a").html());
    //给右侧顶部添加相应的导航
    $(".a").html($(this).children("a").html());
     $(".uc_right").children().eq(0).css("display","block");
    $(".uc_right").children().eq(1).children().eq(index).css("display","block").siblings().css("display","none");
    // $(".uc_right").children().siblings().css("display","none");
})

//删除收藏
$(".sc").click(function(){
    var delete_id=$(this).parent().children(".delete_id").text();
    console.log(delete_id);
    var _this=this;
    $.get("delete1.php", {id: delete_id}, function(data){
       
        if(data=="-1"){
            $(_this).parent().remove();
        }else{
            console.log("===");
        }
    })
})

var app_li = document.querySelectorAll(".app_ul li");
var on_btm = document.querySelectorAll(".on_btm div");
var cur = 0;
$(".app_ul").on("click","li",function(){
    var index=$(this).index();
    $(this).addClass("on").siblings().removeClass("on");
    
    $(this).css("borderBotoom","#94193f").siblings().css("borderBotoom","none");

})

