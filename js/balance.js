// // 地址四级联动
var pro = document.getElementById("statename");
var city = document.getElementById("city");
var area = document.getElementById("county");
// // var sumcity=document.getElementById("sumcity");
// var sel=document.getElementById("sel");
// var sure=document.getElementById("sure");
// var cancel=document.getElementById("cancel");
// 显示省:默认显示河南省
appendOption(pro, place);
// 点击省,让其他跟着改变
pro.onchange = function () {
    changeCity();
    changeArea();
    // changeRoad();
}
// 点击市,让后面其他跟着变
city.onchange = function () {
    changeArea();
    // changeRoad();
}
// // 点击区,让街道跟着改变
// area.onchange = function () {
//     changeRoad();
// }
// 显示市,默认显示郑州市
// console.log(pro.value);
// console.log(place[pro.value]);//是个数组
// console.log(place[pro.value] instanceof Array);//true
// console.log(place[pro.value][0]);//取第0个,取到郑州市
changeCity();

function changeCity() {
    city.innerHTML = "";
    for (var i in place[pro.value][0]) {
        var op = document.createElement("option");
        var val = document.createTextNode(i);
        op.appendChild(val);
        city.appendChild(op);
    }
}

// 显示区:
// console.log(place[pro.value][0]);//取第0个,取到郑州市
// console.log(city.value);
changeArea();
function changeArea() {
    area.innerHTML = "";
    // console.log(place[pro.value][0][city.value]);//数组
    var areaArr = place[pro.value][0][city.value];
    for (var i = 0; i < areaArr.length; i++) {
        // console.log(areaArr[i]);
        for (var j in areaArr[i]) {
            // console.log(j);
            var op = document.createElement("option");
            var val = document.createTextNode(j);
            op.appendChild(val);
            area.appendChild(op);
        }
    }

}
// // 显示街道 
// changeRoad();
// function changeRoad() {
//     road.innerHTML = "";
//     var areaArr = place[pro.value][0][city.value];
//     for (var i = 0; i < areaArr.length; i++) {
//         // console.log(areaArr[i]);
//         for (var j in areaArr[i]) {
//             // console.log(j);
//             // console.log(areaArr[i][j]);//是字符串
//             if (area.value == j) {
//                 var roadStr = areaArr[i][j];
//                 var roadArr = roadStr.split("、");
//                 // console.log(roadArr);
//                 for (var k = 0; k < roadArr.length; k++) {
//                     // console.log(thereArr[i]);
//                     var op = document.createElement("option");
//                     var val = document.createTextNode(roadArr[k]);
//                     op.appendChild(val);
//                     road.appendChild(op);
//                 }
//             }
//         }
//     }
// }
// 添加option节点方法
function appendOption(obj, json) {
    for (var i in json) {
        var op = document.createElement("option");
        var val = document.createTextNode(i);
        op.appendChild(val);
        obj.appendChild(op);
    }
}
// sel.onclick=function(){
//     sumcity.style.display = "block";
// }
// sure.onclick = function() {
//     writeCity();
//     sumcity.style.display = "none";
// }
// cancel.onclick = function() {
//     sumcity.style.display = "none";
// }
// 将地址信息填写到指定框中
// writeCity();
// function writeCity() {
//     var proValue = pro.value;
//     var cityValue = city.value;
//     var areaValue = area.value;
//     var roadValue = road.value;
//     sel.innerHTML = proValue + cityValue + areaValue + roadValue;
// }