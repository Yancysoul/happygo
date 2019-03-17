//获取焦点的文字变化
$("#userphone").focus(function(){
    $(".szy_phone").css("display","block");
    var curValue=$(this).val();
    // console.log(this.defaultValue);
    if(curValue==this.defaultValue){
        $(this).val("");
        $(".szy_phone").css("display","block");
    }
        
});
$("#usernote").focus(function(){
    $(".szy_note").css("display","block");
    var curValue=$(this).val();
    // console.log(curValue);
    if(curValue==this.defaultValue){
        $(this).val("");
        $(".szy_note").css("display","block");
    }
});
$("#Txtidcode").focus(function(){
    $(".szy_verify").css("display","block");
    var curValue=$(this).val();
    // console.log(curValue);
    if(curValue==this.defaultValue){
        $(this).val("");
        $(".szy_verify").css("display","block");
    }
});
//失去焦点的文字变化
$("#userphone").blur(function(){
    var curValue=$("#userphone").val();
    if($.trim(curValue)==""){
        $(this).val(this.defaultValue);
        $(".szy_phone").css("display","none");
    }
    if(curValue!=""){
        $(".szy_phone").css("display","none");
    }
});
$("#usernote").blur(function(){
    var curValue=$("#usernote").val();
    if($.trim(curValue)==""){
        $(this).val(this.defaultValue);
        $(".szy_note").css("display","none");
    }
    if(curValue!=""){
        $(".szy_note").css("display","none");
    }
});
$("#Txtidcode").blur(function(){
    var curValue=$("#Txtidcode").val();
    if($.trim(curValue)==""){
        $(this).val(this.defaultValue);
        $(".szy_verify").css("display","none");
    }
    if(curValue!=""){
        $(".szy_verify").css("display","none");
    }
});

//失去焦点和获取焦点的文字变化
$("#userpwd").focus(function(){
    $(".szy_pwd").css("display","none");
}).blur(function(){
    // $(".szy_pwd").css("display","block");
    var curPwd=$("#userpwd").val();
    if(curPwd==this.defaultValue){
        $(".szy_pwd").css("display","block");
    }
    if(curPwd!=this.defaultValue){
        $(".szy_pwd").css("display","none");
    }
})
$(".szy_pwd").click(function(){
    $("#userpwd").focus();
    $(this).css("display","none");
})
$(".szy_pwd2").click(function(){
    $("#userpwd2").focus();
    $(this).css("display","none");
})
$("#userpwd2").focus(function(){
    $(".szy_pwd2").css("display","none");
}).blur(function(){
    // $(".szy_pwd").css("display","block");
    var curPwd=$("#userpwd2").val();
    if(curPwd==this.defaultValue){
        $(".szy_pwd2").css("display","block");
    }
    if(curPwd!=this.defaultValue){
        $(".szy_pwd2").css("display","none");
    }
})
