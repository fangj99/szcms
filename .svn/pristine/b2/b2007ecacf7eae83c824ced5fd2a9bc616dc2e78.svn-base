$(document).ready(function(){
	$("#loginbtn").on("click",function(){
		var modal = $(".loginModal")
		modal.addClass("show");
		setTimeout(function(){
			modal.addClass("open");
		},0)
	})
	$("#forgot-btn").on("click",function(){
		var forgot = $("#forgot")
		var login = $("#login")
		login.removeClass("on");
		setTimeout(function(){
			login.removeClass("show").addClass("hide");
			forgot.addClass("show").removeClass("hide");
		},350)
		setTimeout(function(){
				forgot.addClass("on");
		},400)
	})
	$(".close-modal").on("click",function(){
		var modal = $(".loginModal")
		var forgot = $("#forgot")
		var login = $("#login")
		modal.removeClass("open");
		setTimeout(function(){
			modal.removeClass("show");
			login.addClass("show on").removeClass("hide");
			forgot.addClass("hide").removeClass("show on");
		},350)
	});
	$("#product-link").on("click",function(e){
		e.preventDefault();$("#loginbtn").trigger("click")
	})
})