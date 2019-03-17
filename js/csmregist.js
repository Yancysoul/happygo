$(".landing div").mouseenter(function () {
    $(this).addClass("cur_landing_hover");
}).mouseleave(function () {
    $(this).removeClass("cur_landing_hover");
}).click(function () {
    $(this).addClass("cur_landing_focus").siblings().removeClass("cur_landing_focus");
});
$(".form_have input").focus(function () {
    $(this).addClass("focus_ipt").parent().parent().siblings().children("div").children("input").removeClass("focus_ipt");
});
$("#user_have").click(function () {
    $(".form_have").children(".user_dis").css({display: "block"});
});
$("#user_no").click(function () {
    $(".form_have").children(".user_dis").css({display: "none"});
});
// 验证码
$.idcode.setCode();
// $("#next").click(function () {
//     var IsBy = $.idcode.validateCode();
//     alert(IsBy);
// });
$(".form_have>div>div>div.ipt").css({display: "none"});
$("#next").click(function () {
    $(".form_have input").each(function () {
        if ($(this)[0].type == "text") {
            checkSpace($(this));
        } else {
            // console.log($(this).prop("checked"));
        }
    });
});
function checkSpace(obj) {
    if (obj.val() == "") {
        obj.addClass("err_ipt").siblings(".ipt").css({display: "block"}).html("请输入" + obj.parent().siblings().children("span").html());
    }
}
// 表单验证
// 用户名验证
$("#username").focus(function () {
    checkSpace($(this));
}).keyup(function () {
    checkUsername($(this));
    checkSpace($(this));
});
function checkUsername(obj) {
    var _this = obj;
    if (obj.val().trim().length < 3) {
        obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("不能小于3个字符");
    } else {
        $.ajax({
            type: "POST",
            url: "csmregist.php",
            data: obj.serialize(),
            success: function (msg) {
                if (msg == 0) {
                    _this.removeClass("true_ipt").addClass("err_ipt").siblings(".ipt").css({display: "block"}).html("用户名已经存在");
                } else if (msg == 1) {
                    _this.css({backgroundColor:"#fff"}).addClass("true_ipt").siblings(".ipt").css({display: "none"});
                }
            }
        });
    }
}
// 密码验证
// 第一次输入密码
$("#userpwd").focus(function () {
    checkSpace($(this));
}).keyup(function () {
    checkUserpwd($(this));
    checkUserpwds($("#userpwds"));
    checkSpace($(this));
});
function checkUserpwd(obj) {
    if (obj.val().trim().length < 6) {
        obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("密码不能小于6个字符");
    } else {
        obj.css({backgroundColor:"#fff"}).addClass("true_ipt").siblings(".ipt").css({display: "none"});
    }
}
// 第二次输入密码
$("#userpwds").focus(function () {
    checkSpace($(this));
}).keyup(function () {
    checkUserpwds($(this));
    checkSpace($(this));
}).blur(function () {
    checkUserpwds($(this));
});
function checkUserpwds(obj) {
    if (obj.val().trim().length < 6) {
        obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("密码不能小于6个字符");
    } else {
        if (obj.val() != $("#userpwd").val()) {
            obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("两次输入密码不一致");
        } else {
            obj.css({backgroundColor:"#fff"}).addClass("true_ipt").siblings(".ipt").css({display: "none"});
        }
    }
}
// 电子邮箱验证
$("#email").focus(function () {
    checkSpace($(this));
}).keyup(function () {
    checkEmail($(this));
    checkSpace($(this));
}).blur(function () {
    checkEmail($(this));
});
function checkEmail(obj) {
    var patt = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;
    if (!patt.test(obj.val())) {
        obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("输入有效的邮箱");
    } else {
        obj.css({backgroundColor:"#fff"}).addClass("true_ipt").siblings(".ipt").css({display: "none"});
    }
}
// 验证手机号
$("#phone").focus(function () {
    checkSpace($(this));
}).keyup(function () {
    checkPhone($(this));
    checkSpace($(this));
}).blur(function () {
    checkPhone($(this));
});
function checkPhone(obj) {
    var patt = /^1(3|4|5|7|8)\d{9}$/;
    if (!patt.test(obj.val())) {
        obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("请输入合法的手机号码");
    } else {
        obj.css({backgroundColor:"#fff"}).addClass("true_ipt").siblings(".ipt").css({display: "none"});
    }
}
// 验证验证码
$("#Txtidcode").focus(function () {
    checkSpace($(this));
}).keyup(function () {
    checkCode($(this));
    checkSpace($(this));
}).blur(function () {
    checkCode($(this));
});
function checkCode(obj) {
    if (obj.val().trim().length < 4) {
        obj.addClass("err_ipt").removeClass("true_ipt").siblings(".ipt").css({display: "block"}).html("不能小于4个字符");
    } else {
        obj.css({backgroundColor:"#fff"}).addClass("true_ipt").siblings(".ipt").css({display: "none"});
    }
}
$("#next").click(function () {
    var IsBy = $.idcode.validateCode();
    // alert(IsBy);
    if (IsBy) {
        
    }
});