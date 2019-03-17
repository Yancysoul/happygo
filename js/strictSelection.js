//懒加载


//商品上面的上一页与下一页
$(".head_next").css({
    color: "black"
})
$(".head_pre").click(function(){
    var num = parseInt($(".sp_red").html());
    if(num != 1){
        num--;
        if(num == 1){
            $(this).css({
                color: "#999"
            });
        }else{
            $(this).css({
                color: "black"
            });
            if(num < parseInt($(".sp_sum").html())){
                $(".head_next").css({
                    color: "black"
                })
            }
        }
        $(".sp_red").html(num+"/");
    }else{
        $(this).css({
            color: "#999"
        });
    }
});
$(".head_next").click(function(){
    var num = parseInt($(".sp_red").html());
    if(num < parseInt($(".sp_sum").html())){
        num++;
        if(num == parseInt($(".sp_sum").html())){
            $(this).css({
                color: "#999"
            });
        }else{
           $(this).css({
                color: "black"
            })
            if(num > 1){
                $(".head_pre").css({
                    color: "black"
                })
            } 
        }
        $(".sp_red").html(num+"/");
    }else{
        $(this).css({
            color: "#999"
        });
    }
});


//鼠标进入与移出
$(".sl_list ul li").on("mouseenter", ".list_goods", function() {
    $(this).parent().css({
        border: "1px solid #fff"
    });
});
$(".sl_list ul li").on("mouseleave", ".list_goods", function() {
    $(this).parent().css({
        border: "1px solid #e4e4e4"
    });
});


//分页
function getParameter(name) { 
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); 
    var r = window.location.search.substr(1).match(reg); 
    if (r!=null) return unescape(r[2]); return null;
}

//init
$(function(){
    var totalPage = 17;
    var totalRecords = 671;
    var pageNo = getParameter('pno');
    if(!pageNo){
        pageNo = 1;
    }
    //初始化分页控件
    //有些参数是可选的，比如lang，若不传有默认值
    kkpager.init({
        pno : pageNo,
        //总页码
        total : totalPage,
        //是否显示总页数
        isShowTotalPage : false,
        //是否显示总记录数
        isShowTotalRecords : false,
        //是否显示页码跳转输入框
        isGoPage : false,
        //总数据条数
        totalRecords : totalRecords,
        //链接前部
        hrefFormer : '',
        //链接尾部
        hrefLatter : '',
        getLink : function(n){
            return this.hrefFormer + this.hrefLatter + "?pno="+n;
        },
        lang : {
            prePageText : '上一页',
            nextPageText : '下一页',
            totalPageBeforeText : '共',
            totalPageAfterText : '页',
            totalRecordsAfterText : '条数据',
            gopageBeforeText : '转到',
            gopageButtonOkText : '确定',
            gopageAfterText : '页',
            buttonTipBeforeText : '第',
            buttonTipAfterText : '页'
        }
    });
    //生成
    kkpager.generPageHtml();
});