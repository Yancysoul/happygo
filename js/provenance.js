$(".mjy_goods li").on("mouseenter", ".pro_a_list", function() {
    $(this).css({
        opacity: 0.9
    });
});
$(".mjy_goods li").on("mouseleave", ".pro_a_list", function() {
    $(this).css({
        opacity: 1
    });
});