$(".menu_lid div").css({bottom: -5});
$(".menu_right ul li").not($(".menu_lid")).each(function () {
    $(this).mouseenter(function () {
        $(this).children("div").stop(true, true).animate({bottom: -5}, 100);
        $(this).children("a").css({color: "#fff"});
    });
    $(this).mouseleave(function () {
        $(this).children("div").stop(true, true).animate({bottom: -68}, 100);
        $(this).children("a").css({color: "#000"});
    });
});
$(".happy_k_right ul").on("click","li",function(){
    $(this).addClass("cli_act").siblings().removeClass("cli_act");
    var curLibox=$(this).parent().parent().parent().parent().children(".h_k_detail");
    var indexLi=$(this).index();
    $(curLibox).children().eq(indexLi).css("display","block").siblings().css("display","none");
})
// tab切换结束


$(".dR_Left_con").each(function(){
    var curDrCon=$(this).children(".imgUl").children();
    $(curDrCon).hide();
    var index = 0;
    $(this).children(".pre_page").hide();
    var curImg;
    curImg= $(curDrCon).eq(index);
    curImg.show();
    var len = $(curDrCon).length;
    $(this).children(".next_page").each(function(){
        $(this).click(function(){
            if(index==len-2){
                $(this).hide();
            }
            if(index>=0 && index<len-1){
                curImg.fadeOut();
                index++;
                curImg = $(curDrCon).eq(index);
                curImg.fadeIn();
                $(this).parent().children(".pre_page").show();
            }
        })
    })   
    $(this).children(".pre_page").each(function(){
        $(this).click(function(){  
            if(index==1){
                $(this).hide();
            }
            if(index>0 && index<=len-1){
                curImg.fadeOut();
                index--;
                curImg = $(curDrCon).eq(index);
                curImg.fadeIn();
                $(this).parent().children(".next_page").show();
            }
        
        })
    })
})

// ====================
$(".pane_list ul").on("click","li",function(){
    var cur_dR_par=$(this).parent().parent().parent().parent().parent();
    var dRIndex=$(this).index();
    var dRcon= $(cur_dR_par).children().children(".dR_Left_con").eq(dRIndex);
    $(dRcon).css("display","block").siblings(".dR_Left_con").css("display","none");
    $(dRcon).children(".imgUl").css("display","block");
})

// ================================
$(".date_more").click(function(){
    // // $(this).css("back")
    // var classNameStr=document.getElementsById("#d_m_con").className;
    // console.log(classNameStr);
    // // if()

  
        $(".d_m_con").toggleClass("dm_con_dis");

    // $(".d_m_con").css("display","block");

})






























// ================================
// $(".imgUl li").hide();
// var index = 0;
// $(".pre_page").hide();
// var curImg;
// curImg= $(".imgUl li").eq(index);
// curImg.show();
// var len = $(".imgUl li").length;
// $(".dR_Left .next_page").each(function(){
//     $(this).click(function(){
//         if(index==len-2){
//             $(this).hide();
//         }
//         if(index>=0 && index<len-1){
//             curImg.fadeOut();
//             index++;
//             console.log(index);
//             curImg = $(".imgUl li").eq(index);
//             curImg.fadeIn();
//             $(this).parent().children(".pre_page").show();
//         }
//     })
// })

// $(".dR_Left .pre_page").each(function(){
//     $(this).click(function(){  
//         if(index==1){
//             $(this).hide();
//         }
//         if(index>0 && index<=len-1){
//             curImg.fadeOut();
//             index--;
//             console.log(index);
//             curImg = $(".imgUl li").eq(index);
//             curImg.fadeIn();
//             $(this).parent().children(".next_page").show();
//         }
    
//     })
// })

// $(".pre_page").click(function(){  
//     if(index==1){
//         $(this).hide();
//     }
//     if(index>0 && index<=len-1){
//         curImg.fadeOut();
//         index--;
//         console.log(index);
//         curImg = $(".imgUl li").eq(index);
//         curImg.fadeIn();
//         $(this).parent().children(".next_page").show();
//     }

// })


