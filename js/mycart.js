//导航固定    
$(window).scroll(function () {
    var top = $(window).scrollTop();
    var orobj = $(".order_shop");
    var h = orobj.offset().top + orobj.height() - $(this).height() + $(".order_sum").height();
    //  console.log(h + "," + top)
    if (top >= h) $(".order_sum").removeClass("bgfixed");
    else $(".order_sum").addClass("bgfixed");
});

$(function () {
    $(".cb_s_goods").on("click", function () {
        if ($(this).attr("checked")) {
            $(this).parents(".item_form").addClass("item_selected");
        }
        else {
            $(this).parents(".item_form").removeClass("item_selected");
        }
    })


    //最近浏览 买了的人还买了 切换
    $(".d_h2 ul li").click(function () {
        $(".d_h2 ul li").removeClass("on");
        $(this).addClass("on");
        $(".slideBox").hide();
        $(".slideBox:eq(" + $(this).index() + ")").show();
    });

    //列表滚动切换
    // $(".detail_l_con4 .slideBox1").slide({ titCell: ".hd ul", mainCell: ".d_l_con4_list ul", autoPage: true, effect: "left", autoPlay: false, vis: 5, scroll: 5, pnLoop: false });
    // $(".detail_l_con4 .slideBox2").slide({ titCell: ".hd ul", mainCell: ".d_l_con4_list ul", autoPage: true, effect: "left", autoPlay: false, vis: 5, scroll: 5, pnLoop: false });

    //购物车 商品赠品信息
    $(".depreciate_box,.present_box").hover(function () {
        $(this).find(".discount_box").toggle();
    });

    //优惠券
    $(".mycar_get_yhj").hover(function () {
        $(this).addClass("yhj_selected");
    }, function () {
        $(this).removeClass("yhj_selected");
    })

})


$(".a_add").on("click",function(){
    var num=$(this).prev().val();    //获取商品初始数量1
    $(this).prev().val(Number(num)+1);
    var buynum=$(this).prev().val();   //得到加1之后的数量 购买数量
    var price=$(this).parent().parent().prev().children(0).children("span").text();     //获取商品单价
    var SubTotal= parseFloat(price * buynum);//小计
    $(this).parent().parent().next().children(0).children("em").text((SubTotal).toFixed(2));
    allPrice();
    checkNum();
});

$(".a_decrease").on("click",function(){
    var num=$(this).next().val();           //获取此时商品数量
    if(num>1){
    $(this).next().val(Number(num)-1);//此时已将数字直接写入标签内，是动作
    var buynum=$(this).next().val();   //得到-1之后的商品数量，即购买数量
    var price=$(this).parent().parent().prev().children(0).children("span").text();     //获取商品单价
    // console.log(price);
    var SubTotal= parseFloat(price * buynum);//小计
    $(this).parent().parent().next().children(0).children("em").text((SubTotal).toFixed(2));
    }else{
        $(this).next().attr("disabled","true");
    }
    allPrice();
    checkNum();
});


//全选
$(".jdcheckbox").click(function(){
    if(this.checked==true){
        $(".cb_s_goods").prop("checked",true);
        $("#select_shop").prop("checked",true);
        $(".jdcheckbox").prop("checked",true);
    }else{
        $(".cb_s_goods").prop("checked",false);
        $("#select_shop").prop("checked",false);
        $(".jdcheckbox").prop("checked",false);
    }
    allPrice();
    checkNum();
});
//单选
$(".cb_s_goods").click(function(){
    var check=$(".cb_s_goods").length;
    var checked=$(".cb_s_goods:checked").length;
    if(check==checked){
        $(".jdcheckbox").prop("checked",true);
    }else{
        $(".jdcheckbox").prop("checked",false);
    }
    allPrice();
    checkNum();
});

// 总件数
function checkNum(){
    var num=0;
    $(".cb_s_goods").each(function(){
        if(this.checked==true){
            console.log($(this).parent().siblings(".p_quantity").children(0).children(".itxt").val());
            var b=$(this).parent().siblings(".p_quantity").children(0).children(".itxt").val();
            num+=Number(b);
        }
    });
    $("#sunm").html(num);
}

// 总钱数
function allPrice(){
    var sum=0;
    $(".cb_s_goods").each(function(){
        if(this.checked==true){
           var a=$(this).parent().siblings(".p_sum").children(0).children().html();    //单类商品数量
           sum+=Number(a);
        }
    });
    $("#cartTotal").html(sum);
}
// 删除操作
$(".car_remove").click(function(){
    var _this = this;
    $(this).parent().parent().remove();
    var delete_id=$(this).parent().children(".delete_id").text();
    console.log(delete_id);
    $.get("delete.php?", {id: delete_id}, function(data){
        console.log("===" + data);
        if(data=="-1"){
            console.log("+++");
            $(_this).parent().parent().remove();
        }else{
            // console.log("////;");
        }
    })
})