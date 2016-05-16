$(document).ready(function(){
	
	$("body").append("<div class='foot-menu'></div>");
	function updateResizeFmenu(){
		var data = [
			{url: "tel:", text: "电话", img: "fphone.png"},
			{url: "#", text: "地图", img: "fmap.png"},
			{url: "sms:", text: "短信", img: "fsms.png"},
			{url: "mailto:", text: "邮箱", img: "fmail.png"}
		];

		var color = "#c40d0b"

		if(window.innerWidth < 1000){
				$(".foot-menu").show();
				$.each(data, function(i, val){
					$(".foot-menu").append("<div><a href='"+val.url+"'><img src='img/"+val.img+"'/>"+val.text+"</a></div>");
				});
				$("body").css("padding-bottom","60px");
				$("head").append("<style>.foot-menu{background: "+color+"; position: fixed; width: 100%; z-index: 999; height: 60px; line-height: 60px; left: 0; bottom: 0;} .foot-menu div{float: left; width: 25%}	.foot-menu a{text-indent: -10px; display: block; color: #FFF; text-align: center}	.foot-menu a:hover{background: rgba(0,0,0,0.2)}	.foot-menu img{vertical-align: middle; width: auto}	</style>");
		}else{
			$(".foot-menu").html("");
			$(".foot-menu").hide();		
			$("body").removeAttr("style");
		}
	};
	$(window).resize(function(){
		updateResizeFmenu();
	});
	updateResizeFmenu();
})