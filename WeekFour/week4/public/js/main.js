$(document).ready(function() {

	var h1Class = $("h1").attr("class");
	$("body").addClass(h1Class);

	function windowGradient() {
		$(".gradient").css("background-image","linear-gradient(darkgray,black)");
	}

	windowGradient();
	$(window).resize(windowGradient);

	function showTab() {
		var h2s = $(".home-form-container > h2");
		var className = $(this).attr("class");
		// console.log(className);
		if ($(this).hasClass("is-active")) {
			// do nothing
		} else {
			h2s.removeClass("is-active");
			$(this).addClass("is-active");

			if ($(this).hasClass("login-label")) {
				$(".home-form-container").removeClass("register-tab").addClass("login-tab");
			} else if ($(this).hasClass("register-label")) {
				$(".home-form-container").removeClass("login-tab").addClass("register-tab");
			}
		}
	}
	$(".home-form-container > h2").on("click",showTab);

});