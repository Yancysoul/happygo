// 懒加载
load();
function load() {
    var scrollH = $(window).scrollTop();
    var clientH = $(window).height();
    $(".mryh_goods img").each(function () {
        var top = $(this).offset().top;
        if (scrollH + clientH >= top) {
            flag = true;
            i = 0;
            $(this).attr("src", $(this).attr("load-url"));
        }
    })
}
$(window).scroll(function () {
    load();
})
var t;
window.addEventListener("resize",function(){
    clearTimeout();  
    t = setTimeout(function () {
        load();
    }, 200)
},false)


$(".mryh_goods li").each(function(i){   
    if(i%4 == 3){
        $(this).addClass("no_marginR");
    }
})