$(".help_ul").on("mouseover","li",function(){
    $(this).addClass("active").siblings().removeClass("active");
    var index=$(this).index();
    var cur_h_r_con=$(this).parent().parent().parent().children(".help_r").children().eq(index);
    $( cur_h_r_con).css("display","block").siblings().css("display","none");

})