$(document).ready(function() {

	var h1Class = $("h1").attr("class");
	$("body").addClass(h1Class);

	function windowGradient() {
		$(".gradient").css("background-image","linear-gradient(gray,lightgray)");
	}

	windowGradient();
	$(window).resize(windowGradient);

});