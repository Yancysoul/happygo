//获取cookie值的函数 
function getValue(key) {
    var cookieStr = document.cookie;//
    // console.log(cookieStr);
    var arr1 = cookieStr.split("; ");//cookie返回的是以分号和空格作为分隔的
    for (var i = 0; i < arr1.length; i++) {
        var arr2 = arr1[i].split("=");
        if (arr2[0] == key) {
            console.log(arr2[1]);
            return arr2[1];
        }
    }
    return false;
}
var userphone = getValue("userphone");
var username = getValue("username");
var userpwd = getValue("userpwd");
if (username && userpwd) {
    $(".al_login").show();
    $(".no_login").hide();
    var unameCookie = getValue("username");
    $(".loginUser").html(unameCookie);
}
// 点击退出
$(".a_quit").click(function(){
    $(".al_login").hide();
    $(".no_login").show();
    var date = new Date();
    date.setDate(date.getDate() - 1);
    document.cookie = "username=''; userpwd=''; expires=" + date.toGMTString();
    var cookieStr = document.cookie;//
    console.log(cookieStr);
})