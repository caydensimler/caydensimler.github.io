
$("document").ready(function(){

	"use strict";

	function hideAll(){
		$(".languages").hide();
		$(".aboutMe").hide();
		$(".contact").hide();
		$(".faq").hide();
	}

	hideAll()

	$(".homepageButton").hover(function(){
		$(this).css({
			"color": "#383838",
			"backgroundColor": "#F5F1ED",
			"fontWeight": "bold"
		});

		}, function() {
		$(this).css({
			"color": "#F5F1ED",
			"backgroundColor": "#383838",
			"fontWeight": "normal"
		});
	});

	$(".languagesButton").click(function(){
		$(".languages").fadeToggle(800);
	})

	$(".aboutMeButton").click(function(){
		$(".aboutMe").fadeToggle(800);
	})

	$(".contactButton").click(function(){
		$(".contact").fadeToggle(800);
	})

	$(".faqButton").click(function(){
		$(".faq").fadeToggle(800);
	})

});