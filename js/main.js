// Pre Loader Js
$(window).on("load", function () {
	// console.log("test");
	$("#preloader").fadeOut(1000);
});
// Pre Loader Js

// Mobile Header Js
$("header .canvas_btn").click(function () {
	$(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
	$(".mobile_header").removeClass("show");
});
// Mobile Header Js
