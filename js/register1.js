// 自定义手机号验证
jQuery.validator.addMethod("isMobile", function (value, element) {
    var length = value.length;
    var mobile = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/;
    return this.optional(element) || (length == 11 && mobile.test(value));
}, "请填写正确的手机号码");
// 自定义密码
console.log($("#usernote").val());
jQuery.validator.addMethod("isPassword", function (value, element) {
    var pass = /^[a-zA-Z0-9_]+$/;
    return this.optional(element) || pass.test(value);
}, "只能包括英文字母、数字、下划线");
$(function () {
    $("#signupForm").validate({
        onfocusout: function (element) {
            $(element).valid();
        },
        submitHandler: function (form) {
            form.submit();
        },
        rules: {
            userphone: {
                required: true,
                isMobile: true,
                remote: {
                    url: "register.php",
                    type: "get",
                    dataType: "json",
                    data: {
                        userphone: function () {
                            return $("#userphone").val();
                        }
                    }
                }
            },
            // usernote:{
            //     required: true,
            //     remote: {
            //         url: "register.php",
            //         type: "get",
            //         dataType: "json",
            //         data: {
            //             usernote: function () {
            //                 return $("#usernote").val();
            //             }
            //         }
            //     }
            // },
            userpwd: {
                required: true,
                minlength: 6,
                maxlength: 18,
                isPassword: true
            },
            userpwd2: {
                required: true,
                minlength: 6,
                maxlength: 18,
                equalTo: "#userpwd"
            },
            agree: "required"
        },
        messages: {
            userphone: {
                required: "请输入11位手机号码",
                isMobile: "手机号码不合法",
                remote: "手机号已存在"
            },
            // usernote:{
            //     required: '请输入验证码',
            //     remote: '验证码错误'
            // },
            userpwd: {
                required: "请输入密码",
                minlength: "密码长度不能小于6位",
                maxlength: "密码长度不能超过18位",
                isPassword: "密码只能由数字字母下划线组成"
            },
            userpwd2: {
                required: "请确认密码",
                minlength: "密码长度不能小于6位",
                maxlength: "密码长度不能超过18位",
                equalTo: "两次密码输入不一致"
            },
            agree: "请接受我们的声明",
        },
    });
});
$("#btns").submit(function(){

})