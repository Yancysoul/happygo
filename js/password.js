//获取焦点的文字变化
$("#username").focus(function(){
        $(".szy_loginName").css("display","block");
        var curValue=$(this).val();
        // console.log(this.defaultValue);
        if(curValue==this.defaultValue){
            $(this).val("");
            $(".szy_loginName").css("display","block");
        }
            
    });
    $("#Txtidcode").focus(function(){
        $(".szy_loginCode").css("display","block");
        var curValue=$(this).val();
        // console.log(curValue);
        if(curValue==this.defaultValue){
            $(this).val("");
            $(".szy_loginCode").css("display","block");
        }
    });
//失去焦点的文字变化
    $("#username").blur(function(){
        var curValue=$("#username").val();
        if($.trim(curValue)==""){
            $(this).val(this.defaultValue);
            $(".szy_loginName").css("display","none");
        }
        if(curValue!=""){
            $(".szy_loginName").css("display","none");
        }
    });
    $("#Txtidcode").blur(function(){
        var curValue=$("#Txtidcode").val();
        if($.trim(curValue)==""){
            $(this).val(this.defaultValue);
            $(".szy_loginCode").css("display","none");
        }
        if(curValue!=""){
            $(".szy_loginCode").css("display","none");
        }
    });
    