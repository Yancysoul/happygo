// 验证cookie是否存在，是否登陆
function checkCookie(url) {
    if (document.cookie) {
        return true;
    } else {
        location.href = url;
    }
}