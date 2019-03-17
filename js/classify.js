// 楼层切换
// 
$(window).scroll(function () {
    if ($(window).scrollTop() >= 300) {
        // $("#header").css("display","none");
        $(".sidebar").css("display", "block");
    }
    if ($(window).scrollTop() < 300) {
        // $("#header").css("display","block");
        $(".sidebar").css("display", "none");
    }
})
//点击时回到对应的地方
$(".sid").on("click", "li", function () {
    var index = $(this).index();
    console.log(index);
    // console.log(this);
    $(this).addClass("active").siblings().removeClass("active");
    var h = $("#main").children(0).eq(index).offset().top;

    // console.log(h);
    $("body,html").animate({
        "scrollTop": h
    }, 500)
})
//滑到对应的部分
$(window).scroll(function () {
    var h = $(window).scrollTop();

    var w = $(window).height();
    $("#main>div").each(function () {
        var t = $(this).offset().top;
        var index = $(this).index();
        if (h + w - t > w /2) {
            // console.log($(this));

            $(".sid").children().eq(index).addClass("active").siblings().removeClass("active");
        }
    })
})


        // var sidebarLi=document.querySelectorAll(".sidebar li");
        // var frist=document.querySelectorAll(".frist");
        // for(var i=0;i<sidebarLi.length;i++){   
        //     sidebarLi[i].index=i;
        //     sidebarLi[i].onclick=function(){
        //         setScrollTop(frist[this.index].offsetTop);
        //         changeBg(this);
        //     }
        // }
        // function changeBg(obj){
        //     for(var i=0;i<sidebarLi.length;i++){
        //         sidebarLi[i].style.backgroundColor="white";
        //         sidebarLi[i].children[0].style.color="black";
        //     }
        //     obj.style.backgroundColor="#c4193f";
        //     obj.children[0].style.color="white";
        //     console.log(obj.children[0]);
        // }
        // init();
        // function init(){
        //      var sidebar=document.querySelector(".sidebar");
        //     var scrollTop=getScrollTop();
        //      if(scrollTop<300){
        //         sidebar.style.display="none";
        //     }
        //     if(scrollTop>300){
        //         sidebar.style.display="block";
        //     }
        //     for(var i=0;i<frist.length;i++){
        //         if(scrollTop>=frist[i].offsetTop-300){
        //             changeBg(sidebarLi[i]);
        //         }
        //     }
        // }
        // window.onscroll=function(){
        //     init();
        // }
        // function getScrollTop(){
        //     return scrollTop=document.documentElement.scrollTop||
        //     window.pageYOffset||document.body.scrollTop;
        // }
        // function setScrollTop(nav){
        //     document.documentElement.scrollTop=nav;
        //     window.pageYOffset=nav;
        //     document.body.scrollTop=nav;
        // }