$(document).ready(function() {

	// if ($("div.content > div").hasClass(""))
	switch ($("h1").attr("class")) {
		case "welcome":
			$("body").addClass("welcome");
			break;
		case "users":
			$("body").addClass("users");
			break;
		case "create":
			$("body").addClass("create");
			break;
		case "update":
			alert('update');
			$("body").addClass("update");
			break;
		case "delete":
			$("body").addClass("delete");
			break;
		default:
			break;
	}

});