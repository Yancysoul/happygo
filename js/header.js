$(".down_load_hpg").mouseenter(function () {
    $(this).children().eq(2).css({ 'display': 'block' });
})
$(".down_load_hpg").mouseleave(function () {
    $(this).children().eq(2).css({ 'display': 'none' });
})
$(".cus_box").mouseenter(function () {
    $(this).children().eq(1).css({ 'display': 'block' });
})
$(".cus_box").mouseleave(function () {
    $(this).children().eq(1).css({ 'display': 'none' });
})

$(".ewm_hideen").mouseenter(function () {
    $(this).children().eq(1).css({ 'display': 'block' });
})
$(".ewm_hideen").mouseleave(function () {
    $(this).children().eq(1).css({ 'display': 'none' });
})
$(".online_info_hidden").mouseenter(function () {
    $(this).children().eq(1).css({ 'display': 'block' });
})
$(".online_info_hidden").mouseleave(function () {
    $(this).children().eq(1).css({ 'display': 'none' });
})

$(".rnuc_item").each(function () {
    var rnuc_err_msg = $(this).children().eq(1).children().eq(0);
    $(this).children().eq(0).focus(function () {
        $(rnuc_err_msg).css({ 'display': 'block', 'color': '#767676' })
    })
    $(this).children().eq(0).blur(function () {
        $(rnuc_err_msg).css({ 'display': 'none' });
    })
})

$(".rnuc_close").click(function () {
    $(".r_n_user_cen").css({ 'display': 'none' })
})
// 登录的移入与移出
$(".rn_user_box").mouseenter(function(){
    $(this).children().eq(0).css({
        "background":"url(imgs/icon_list.png)  0px -619px"
    })
    $(this).children().eq(1).css({
        'display':'block'
    })
})
$(".rn_user_box").mouseleave(function(){
    $(".nameIpt").val("");
    $(".pwdIpt").val("");
    $(".codeIpt").val("");
    $(".tipInfo").html("");
    $(this).children().eq(0).css({
        "background":""
    })
    $(this).children().eq(1).css({
        'display':'none'
    })
})




// 回到顶部
$(document).ready(function () {
    $('.go_top').click(function () {
        $('html,body').animate({ scrollTop: 0 }, 'fast');
    });
});

//生成随机验证码
// var num = document.getElementsByClassName('num');
// console.log(num);
// var btn = document.getElementById("change");
// var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "T", "S", "T", "U", "V", "W", "X", "Y", "Z"];
// function random(n, m) {
//     return parseInt(Math.random() * (m - n + 1) + n);
// }
// function getCode() {
//     var code = [];
//     var str = "";
//     var i = 0;
//     while (code.length < 4) {
//         var index = random(1, 61);
//         if (code.indexOf(index) == -1) {
//             code.push(index);
//             num[i].innerHTML = arr[index];
//             i++;
//         }
//     }
// }

// getCode();
// btn.onclick = function () {
//     getCode();
// }
// var strCode = "";
// $(".yzm_pic .num").each(function () {
//     // var w=parseInt(Math.random()*(50-20+1)+20);
//     $(this).css("color", "rgb(" + parseInt(Math.random() * 255) + "," + parseInt(Math.random() * 255) + "," + parseInt(Math.random() * 255) + ")");
//     strCode += this.innerHTML;
// })

// 验证用户名
function username() {
    var p = /^\w+$/;
    var str = $(".nameIpt").val().trim();
    if (str == "") {
        return true;
    } else if (!p.test(str)) {
        return true;
    } else {
        return false;
    }
}
function userpwd() {
    var p = /\w+/;
    var str = $(".pwdIpt").val().trim();
    if (str == "") {
        return true;
    } else if (!p.test(str)) {
        return true;
    } else {
        return false;
    }
}
function Code() {
    var str = $(".codeIpt").val().trim();
    if (strCode != str) {
        return true;
    } else {
        return false;
    }
}

$(".rnuc_sub").click(function () {
    $(".tipInfo").html("");
    if (username() || userpwd() || Code()) {
        $(".tipInfo").html("<span>输入信息格式不正确，请重新输入</span>");
        return false;
    }
    $.ajax({
        url: "islogin.php",
        type: "post",
        data: { "username": $(".nameIpt").val(), "userpwd": $(".pwdIpt").val() },
        success: function (response) {
            console.log(response);
            $(".tipInfo").html("<span>信息格式正确，等待验证请稍候...</span>");
            if (response == "ok") {
                var date = new Date();
                var expireTime = 1;
                date.setDate(date.getDate() + expireTime);
                document.cookie = "username=" + $(".nameIpt").val() + ";expires=" + date.toGMTString();
                document.cookie = "userpwd=" + $(".pwdIpt").val() + ";expires=" + date.toGMTString();
                location.href = "index.php";
            }
            if (response == "no") {
                $(".tipInfo").html("<span>用户不存在，请注册</span>");
            }
        }
    })
})


// $(".iflogin").click(function(){
//     if(document.cookie){
//         console.log("自动登录");
//     }else{
//         $(".layer").show();
//         $(".logbtn").click(function(){
//             location.href="login.html";
//         })
//     }
// })


// $(".cart_iflogin").click(function () {
//     if (document.cookie) {
//         location.href = "mycart.php";
//     } else {
//         $(".mhl_layer").show();
//         $(".logBtn").click(function () {
//             location.href = "logon.html";
//         })
//     }
// })


// $(".collect_iflogin").click(function () {
//     // if (document.cookie) {
//     //     location.href = "mycart.php";
//     // } else
//      {
//         $(".mhl_layer").show();
//         $(".logBtn").click(function () {
//             location.href = "logon.html";
//         })
//     }
// })




