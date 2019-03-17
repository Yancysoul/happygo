$.ajax({
    url: "classify.php",
    type: "GET",
    success: function (data) {
        console.log(data);
        var json = JSON.parse(data);
        // 面部护理
        for (var i = 0; i < 4; i++) {
            var facialCare
            $(".facialCare").append($("<li class='tv_li'></li>").append("<a href='javascript:void(0)' class='pro'><img src='images/" + json[0][i].goodspic + "'></a>").append($("<p class='p_span01'></p>").append("<a href='javascript:void(0)'><span>" + json[0][i].goodsname + "</span></a>")).append("<p class='p_span02'>" + json[0][i].goodsdesc + "</p>").append($("<div class='p_f'></div>").append($("<span></span>").append("<span class='f_14'>￥</span><span class='f_20'>" + json[0][i].goodsnewsprice + "</span>")).append($("<span class='f_del'></span>").append("<del>￥" + json[0][i].goodsoldprice + "</del>"))).attr("jsonId", json[0][i].Id).click(function () {
                location.href = "goodsDetail.php?id=" + $(this).attr("jsonId");
            }));
        }
        // 香水彩妆
        for (var i = 0; i < 4; i++) {
            $(".makeup").append($("<li class='tv_li'></li>").append("<a href='javascript:void(0)' class='pro'><img src='images/" + json[1][i].goodspic + "'></a>").append($("<p class='p_span01'></p>").append("<a href='javascript:void(0)'><span>" + json[1][i].goodsname + "</span></a>")).append("<p class='p_span02'>" + json[1][i].goodsdesc + "</p>").append($("<div class='p_f'></div>").append($("<span></span>").append("<span class='f_14'>￥</span><span class='f_20'>" + json[1][i].goodsnewsprice + "</span>")).append($("<span class='f_del'></span>").append("<del>￥" + json[1][i].goodsoldprice + "</del>"))).attr("jsonId", json[1][i].Id).click(function () {
                location.href = "goodsDetail.php?id=" + $(this).attr("jsonId");
            }));
        }
        // 美发护发
        for (var i = 0; i < 4; i++) {
            $(".hairdressing").append($("<li class='tv_li'></li>").append("<a href='javascript:void(0)' class='pro'><img src='images/" + json[2][i].goodspic + "'></a>").append($("<p class='p_span01'></p>").append("<a href='javascript:void(0)'><span>" + json[2][i].goodsname + "</span></a>")).append("<p class='p_span02'>" + json[2][i].goodsdesc + "</p>").append($("<div class='p_f'></div>").append($("<span></span>").append("<span class='f_14'>￥</span><span class='f_20'>" + json[2][i].goodsnewsprice + "</span>")).append($("<span class='f_del'></span>").append("<del>￥" + json[2][i].goodsoldprice + "</del>"))).attr("jsonId", json[2][i].Id).click(function () {
                location.href = "goodsDetail.php?id=" + $(this).attr("jsonId");
            }));
        }
        // 身体护理
        for (var i = 0; i < 4; i++) {
            $(".bodyCare").append($("<li class='tv_li'></li>").append("<a href='javascript:void(0)' class='pro'><img src='images/" + json[3][i].goodspic + "'></a>").append($("<p class='p_span01'></p>").append("<a href='javascript:void(0)'><span>" + json[3][i].goodsname + "</span></a>")).append("<p class='p_span02'>" + json[3][i].goodsdesc + "</p>").append($("<div class='p_f'></div>").append($("<span></span>").append("<span class='f_14'>￥</span><span class='f_20'>" + json[3][i].goodsnewsprice + "</span>")).append($("<span class='f_del'></span>").append("<del>￥" + json[3][i].goodsoldprice + "</del>"))).attr("jsonId", json[3][i].Id).click(function () {
                location.href = "goodsDetail.php?id=" + $(this).attr("jsonId");
            }));
        }
        // 美容工具
        for (var i = 0; i < 4; i++) {
            $(".beautyTools").append($("<li class='tv_li'></li>").append("<a href='javascript:void(0)' class='pro'><img src='images/" + json[4][i].goodspic + "'></a>").append($("<p class='p_span01'></p>").append("<a href='javascript:void(0)'><span>" + json[4][i].goodsname + "</span></a>")).append("<p class='p_span02'>" + json[4][i].goodsdesc + "</p>").append($("<div class='p_f'></div>").append($("<span></span>").append("<span class='f_14'>￥</span><span class='f_20'>" + json[4][i].goodsnewsprice + "</span>")).append($("<span class='f_del'></span>").append("<del>￥" + json[4][i].goodsoldprice + "</del>"))).attr("jsonId", json[4][i].Id).click(function () {
                location.href = "goodsDetail.php?id=" + $(this).attr("jsonId");
            }));
        }
        // 口腔护理
        for (var i = 0; i < 4; i++) {
            $(".oralCare").append($("<li class='tv_li'></li>").append("<a href='javascript:void(0)' class='pro'><img src='images/" + json[5][i].goodspic + "'></a>").append($("<p class='p_span01'></p>").append("<a href='javascript:void(0)'><span>" + json[5][i].goodsname + "</span></a>")).append("<p class='p_span02'>" + json[5][i].goodsdesc + "</p>").append($("<div class='p_f'></div>").append($("<span></span>").append("<span class='f_14'>￥</span><span class='f_20'>" + json[5][i].goodsnewsprice + "</span>")).append($("<span class='f_del'></span>").append("<del>￥" + json[5][i].goodsoldprice + "</del>"))).attr("jsonId", json[5][i].Id).click(function () {
                location.href = "goodsDetail.php?id=" + $(this).attr("jsonId");
            }));
        }
    }
});