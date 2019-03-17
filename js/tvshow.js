
// 轮播
//获取图片数量，li的宽度
var len=$(".als-wrapper li").length,w=$(".als-wrapper li").width();
var index=0;
//将第一张图片复制到最后
$(".als-wrapper li").eq(0).clone().appendTo(".als-wrapper");
//获取ul的总宽度
$(".als-wrapper").css("width",w*(len+1));
var flag=true;
//图片自己动
var time=setTimeout(function(){
    index++;
    move();
},2000);
function move(){
    if(index==len+1){
        $(".als-wrapper").css("left",0);
        index=1;
    }
    if(index==-1){
        $(".als-wrapper").css("left",-w*len);
        index=len-1;
    }
    $(".als-wrapper").stop().animate({
        left:-w*index
    },1000,function(){
        clearTimeout(time);
        time=setTimeout(function(){
            index++;
            move();
        },2000);
    })
}
//点击右边的按钮
//今日推荐按钮
// $(".l_r_top_ul").on("click","li",function(){
//     $(this).addClass("on").siblings().removeClass("on");

// })
//浮层的js
$(window).scroll(function(){
    // console.log($(window).scrollTop());
    if($(window).scrollTop()>50){
        $(".fixed_data").css("display","block");
    }else{
        $(".fixed_data").css("display","none");
    }    
})
//tvshow的浮层的左右点击
$(".next").on("click",function(){
    $(".l_data_ul1").animate({
        left:-1133
    })
    $(".s1").animate({
        left:-938
    })
})
$(".prev").on("click",function(){
    $(".l_data_ul1").animate({
        left:0
    })
    $(".s1").animate({
        left:0
    })
})
//对应浮层的日期点击
$(".next1").on("click",function(){
    $(".s1").animate({
        left:-938
    })
    $(".l_data_ul1").animate({
        left:-1133
    })

})
$(".prev1").on("click",function(){
    $(".s1").animate({
        left:0
    })
    $(".l_data_ul1").animate({
        left:0
    })
})
//点击浮层的日期，对应的日期背景改变
$(".l_data_ul1").on("click","li",function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".s1").children().eq(index).addClass("cur").siblings().removeClass("cur");
     //出现对应的内容
     $(".wra1").children().eq(index).css("display","block").siblings().css("display","none");
})
//点击日期，对应的日期字体改变,让对应的浮层的日期的背景色改变
$(".s1").on("click","li",function(){
    var index=$(this).index();
    $(this).addClass("cur").siblings().removeClass("cur");
    $(".l_data_ul1").children().eq(index).addClass("cur").siblings().removeClass("cur");
    //出现对应的内容
    $(".wra1").children().eq(index).css("display","block").siblings().css("display","none");


})
// tvshow-old的tab切换
$(".floor_type").on("click","li",function(){
    // console.log(this);
    $(this).addClass("on").siblings().removeClass("on");
    index=$(this).index();
    // console.log($(".wra").children().eq(index)); 
    $(".wra").children().eq(index).css("display","block").siblings().css("display","none");
    // $(".wra").children().eq(index).addClass("both").siblings().removeClass("both");
    $(".l_list").children().eq(index).siblings().children("a").children("div").css("backgroundColor","#242424");
    $(".l_list").children().eq(index).children("a").children("div").css("backgroundColor","#c4193f");
})
//tvshow-old的浮层切换
$(".l_list").on("click","li",function(){  
    index=$(this).index();
    $(this).addClass("curr").siblings().removeClass("curr");
    $(".floor_type").children().eq(index).addClass("on").siblings().removeClass("on");

})

//获取日期
$(window).load(function(){
    var day=new Date();//获取当前时间
    //获取月
    var mouth=day.getMonth()+1;
    //获取日
    var date=day.getDate();
    //获取周几
    var weekday=day.getDay();
    // console.log("月"+mouth,"日"+date,"周几"+weekday);
    // console.log($(".s1").children().eq(0).children().eq(1).children().eq(0));
    var t;
    var s;
    for(var i=13;i>=0;i--){
        var t=$(".s1").children().eq(i).children().eq(1).children().eq(0);
        var s=$(".aa").children().eq(i).children().eq(1).children().eq(0);
        if(weekday==1){
            weekday="一";
        }else if(weekday==2){
            weekday="二";
        }else if(weekday==3){
            weekday="三";
        }else if(weekday==4){
            weekday="四";
        }else if(weekday==5){
            weekday="五";
        }else if(weekday==6){
            weekday="六";
        }else if(weekday==7){
            weekday="日";
        }
        t.children().eq(0)[0].innerHTML=mouth+"-"+date;
        s.children().eq(0)[0].innerHTML=mouth+"-"+date;
        date--;
        t.children().eq(1)[0].innerHTML="星期"+weekday;
        s.children().eq(1)[0].innerHTML="星期"+weekday;
        if(weekday=="一"){
            weekday=1;
        }else if(weekday=="二"){
            weekday=2;
        }else if(weekday=="三"){
            weekday=3;
        }else if(weekday=="四"){
            weekday=4;
        }else if(weekday=="五"){
            weekday=5;
        }else if(weekday=="六"){
            weekday=6;
        }else if(weekday=="日"){
            weekday=7;
        }
        weekday--;
        if(weekday<=0){
            weekday=7;
        }
    }
})

//商品展示部分，每一行的第四个没有no_margin
$(".groUlOut li").each(function(i){   
    if(i%4 == 3){
        $(this).addClass("no_margin");
    }
})



