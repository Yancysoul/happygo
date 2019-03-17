//获取焦点的文字变化
$("#userphone").focus(function () {
    $(".userphone_ipt").html("请输入手机号码").addClass("userphone_ipt").removeClass("userphone_ipt_err");
    var curValue = $(this).val();
    if (curValue == this.defaultValue) {
        $(this).val("");
        $(".szy_phone").css("display", "block");
    }
});
$("#usernote").focus(function () {
    $(".usernote_ipt").html("请输入您的短信验证码").removeClass("usernote_ipt_err").addClass("usernote_ipt");
    var curValue = $(this).val();
    if (curValue == this.defaultValue) {
        $(this).val("");
        $(".szy_note").css("display", "block");
    }
});
//失去焦点的文字变化
$("#userphone").blur(function () {
    $(".userphone_ipt").html("");
});
$("#usernote").blur(function () {
    $(".usernote_ipt").html("");
});
// 通过快捷登陆时的登陆按钮验证
$(".lj_iogin").click(function () {
    var patt = /^1[34578]\d{9}$/;
    if (!(patt.test($("#userphone").val()))) {
        $(".userphone_ipt").html("您输入的手机号码有误").addClass("userphone_ipt_err");
    } else {
        $(".userphone_ipt").html("");
        if ($("#usernote").val() == "") {
            $(".usernote_ipt").html("您输入的短信验证码格式有误").addClass("usernote_ipt_err");
        }
    }
});
//获取焦点的文字变化
$("#userphone2").focus(function () {
    $(".szy_phone2").html("登录名可能是您的手机号、邮箱或用户名").css("color", "#8c8c8c");
});
$("#Txtidcode").focus(function () {
    $(".szy_note2").html("请输入右侧验证码，不区分大小写").css("color", "#8c8c8c");
});
//失去焦点的文字变化
$("#userphone2").blur(function () {
    $(".szy_phone2").html("");
});
$("#Txtidcode").blur(function () {
    $(".szy_note2").html("");
});
// 普通登陆
//失去焦点和获取焦点的文字变化
$("#userpwd").focus(function () {
    $(".password_ipt").html("您的密码可能为字母、数字或符号的组合").css("color", "#8c8c8c");
}).blur(function () {
    $(".password_ipt").html("");
})
$(".szy_pwd").click(function () {
    $("#userpwd").focus();
    $(this).css("display", "none");
})
$(".ks_login").click(function () {
    $(".iogin_input2").css("display", "none");
    $(".iogin_input").css("display", "block");
})
$(".margin").click(function () {
    $(".iogin_input").css("display", "none");
    $(".iogin_input2").css("display", "block");
})
if ($(".ks_login input").prop("checked")) {
    $(".iogin_input2").css("display", "none");
    $(".iogin_input").css("display", "block");
} else {
    $(".iogin_input").css("display", "none");
    $(".iogin_input2").css("display", "block");
}
$(".hq_box").click(function () {
    var curValue = $("#userphone").val();
    if (curValue == "") {
        $(".szy_hidden").css("display", "block");
    }
})
$("#btns").click(function () {
    var patt = /^1[34578]\d{9}$/;
    if ($("#userphone2").val() == "") {
        $(".szy_phone2").html("undefined").css("color", "#c4203b");
    } else if ($("#userpwd").val() == "") {
        $(".password_ipt").html("密码不能为空").css("color", "#c4203b");
    } else if (!$.idcode.validateCode()) {
        $(".szy_note2").html("验证码错误").css("color", "#c4203b");
    } else {
        $.ajax({
            url: "login.php",
            type: "post",
            data: "username="+$("#userphone2").val()+"&userpwd="+$("#userpwd").val(),
            success: function (msg) {
                // console.log(msg);
                if (msg == 0) {
                    $(".szy_phone2").html("用户名或密码错误").css("color", "#c4203b");
                } else {
                    var username = encodeURI($("#userphone2").val());
                    var userpwd = encodeURI($("#userpwd").val());
                    if ($("#remomber").prop("checked")) {
                        var date = new Date();
                        date.setDate(date.getDate() + 7);
                        document.cookie = "username=" + username + ";expires=" + date.toGMTString();
                        document.cookie = "userpwd=" + userpwd + ";expires=" + date.toGMTString();
                    } else {
                        document.cookie = "username=" + username;
                        document.cookie = "userpwd=" + userpwd;
                    }
                    loginSuccess();
                }
            }
        });
    }
    $.idcode.setCode();
});
// 验证cookie是否存在，如果存在就将相关内容填写在对应的文本呢框中
checkCookie("#userphone2", "username");
checkCookie("#userpwd", "userpwd");
function checkCookie(sel, val) {
    var cookie = document.cookie;
    var arr = cookie.split("; ");
    for (var i = 0; i < arr.length; i++) {
        if (arr[i].split("=")[0] == val) {
            $(sel).val(arr[i].split("=")[1]);
        }
    }
}
// 获取短信验证码
var flag = true;
$(".hq_box").click(function () {
    var patt = /^1[34578]\d{9}$/;
    if (!(patt.test($("#userphone").val()))) {
        $(".userphone_ipt").html("您输入的手机号码有误").addClass("userphone_ipt_err");
    } else if (flag) {
        var num = Math.ceil(Math.random()*899999 + 100000);
        console.log(num);
        $.ajax({
            url: "inc/smsyzm.php",
            type: "POST",
            data: "phone=" + $("#userphone").val() + "&code=" + num,
            success: function (msg) {
                console.log(msg);
                $(".lj_iogin").click(function () {
                    if($("#usernote").val() == num) {
                        alert("登陆成功");
                        // 获取要跳转的url路径
                        loginSuccess();
                    }
                });
            }
        });
        flag = false;
        setTimeout(function () {flag = true;}, 120000);
        countdown(".hq_box", 120, "获取验证码");
    }
});
// 倒计时

function countdown(sel, s, msg) {
    $(sel).html("等待" + s + "秒后重新发送");
    var t = setTimeout(function () {
        s--;
        countdown(sel, s, msg);
        if (s <= 0) {
            clearTimeout(t);
            $(sel).html(msg);
        }
    }, 1000);
}
// 登陆成功后的跳转功能
function loginSuccess() {
    var url;
    var str = location.search;
    str = str.substr(1);
    var arr = str.split("&");
    for (var i = 0; i < arr.length; i++) {
        if (arr[i].split("=")[0] == "url") {
            url = arr[i].split("=")[1];
        }
    }
    if (!url) {
        location.href = "index.php";
    } else {
        location.href = url + location.search;
    }
}