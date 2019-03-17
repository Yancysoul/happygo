/*
el:对象,要获取的元素
type:属性
获取el的type的当前的属性值

传递的type是字符串
*/
function getStyle(el, type) {

    if (el.currentStyle) {
        return el.currentStyle[type];
    } else {
        return getComputedStyle(el, null)[type];
    }

}

/**
 * 获取parent的子元素节点
 * 返回的数组是子元素节点
 * 
 */
function getTagChild(parent) {
    var arr = [];
    var child = parent.children;
    for (var i = 0; i < child.length; i++) {
        if (child[i].nodeType == 1) {
            arr.push(child[i]);
        }
    }
    return arr;

}

function firstChild(parent) {
    var child = parent.children;
    for (var i = 0; i < child.length; i++) {
        if (child[i].nodeType == 1) {
            return child[i];
        }
    }

}
function lastChild(parent) {
    var child = parent.children;
    for (var i = child.length - 1; i >= 0; i--) {
        if (child[i].nodeType == 1) {
            return child[i];
        }
    }

}
//判断parent里面是不是有元素节点
function hasChildNodes(parent) {
    var child = parent.children;
    for (var i = 0; i < child.length; i++) {
        if (child[i].nodeType == 1) {
            return true;
        }
    }
    return false;
}
//获取obj的下一个兄弟节点
function nextSibling(obj) {
    return obj.nextElementSibling || obj.nextSibling

}
//获取obj的上一个兄弟节点
function previousSibling(obj) {
    return obj.previousElementSibling || obj.previousSibling
}

/*
   参数:
       给谁添加
       事件类型
       处理函数

       标准浏览器和IE低版本
   */
function addEvent(target, type, handler) {
    if (target.addEventListener) {
        target.addEventListener(type, handler, false);
    } else {
        window[handler] = function () {
            handler.call(target);
        }
        target.attachEvent("on" + type, window[handler]);
    }
}
//删除事件
function removeEvent(target, type, handler) {
    if (target.removeEventListener) {
        target.removeEventListener(type, handler, false);
    } else {
        console.log("remove");
        target.detachEvent("on" + type, window[handler]);
    }
}
/**
 * 
 * @param {事件源} target 
 * @param {属性} attr 
 * @param {属性值} value 
 * @param {结束条件} end 
 */
function getTarget(target,attr,value,end){
    while(target!=end){
        if(target[attr]==value){
            //target就是class为red的li
            return target;
        }
        target=target.parentNode;
    }
    //如果没有返回值,默认返回的是undefined
}

function animate(el,endObj,cb,time){
    var startObj={};
    var _startObj={};
    var speed={};
    time=time?time:1000;//1000毫秒
    for(var i in endObj){
        startObj[i]=parseInt(getStyle(el,i));
        _startObj[i]=startObj[i];
        speed[i]=16.7*(endObj[i]-startObj[i])/time;
    }
   console.log(endObj);
    var flag=false;
    var t=setInterval(function(){
        for(var j in endObj){
            startObj[j]+=speed[j];
            console.log(speed["height"]);
            if(endObj[j]>_startObj[j]?startObj[j]>=endObj[j]:startObj[j]<=endObj[j]){
                startObj[j]=endObj[j];
                clearInterval(t);
                flag=true;
            }
            if(j=="opacity"){
                el.style[j]=startObj[j];
            }else{
                el.style[j]=startObj[j]+"px";
            }
        
            //监听到动画执行结束再执行回调函数
            //动画结束
            if(flag && cb){
                cb();
            }
        }
        
    },16.7)
    return t;
}
function $(sel){
    return document.querySelector(sel);
}
//取消冒泡
function cancelBubble(e){
    if(e.stopPropagation){
        e.stopPropagation();
    }else{
        e.cancelBubble=true;
    }

}
//阻止浏览器默认行为
function preventDefault(e){
    if(e.preventDefault){
        e.preventDefault();
    }else{
        e.returnValue=false;
    }
}