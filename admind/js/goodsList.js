// 获取中数据条数，页数
var totalPage, totalRecords;
$.ajax({
	url: "page.php",
	type: "GET",
	success: function (msg) {
		var arr = msg.split("&");
		totalRecords = arr[0].split("=")[1];
		totalPage = arr[1].split("=")[1];
		function getParameter(name) {
			var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
			var r = window.location.search.substr(1).match(reg);
			if (r != null) return unescape(r[2]); return null;
		}
		//init
		$(function () {
			totalRecords = totalRecords;
			totalPage = totalPage;
			var pageNo = getParameter('pno');
			if (!pageNo) {
				pageNo = 1;
			}
			//初始化分页控件
			//有些参数是可选的，比如lang，若不传有默认值
			kkpager.init({
				pno: pageNo,
				//总页码
				total: totalPage,
				//总数据条数
				totalRecords: totalRecords,
				//链接前部
				hrefFormer: 'goodsList',
				//链接尾部
				hrefLatter: '.php',
				getLink: function (n) {
					return this.hrefFormer + this.hrefLatter + "?pno=" + n;
				},
				lang: {
					prePageText: '上一页',
					nextPageText: '下一页',
					totalPageBeforeText: '共',
					totalPageAfterText: '页',
					totalRecordsAfterText: '条数据',
					gopageBeforeText: '转到',
					gopageButtonOkText: '确定',
					gopageAfterText: '页',
					buttonTipBeforeText: '第',
					buttonTipAfterText: '页'
				}
			});
			//生成
			kkpager.generPageHtml();
		});
	}
});