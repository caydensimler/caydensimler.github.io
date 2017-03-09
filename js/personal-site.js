
$("document").ready(function(){

	"use strict";

	function hideAll(){
		$(".languages").hide();
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

	$(".resumeButton").hover(function(){
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
		$(".aboutMe").hide();
		$(".contact").hide();
		$(".faq").hide();
	})

	$(".aboutMeButton").click(function(){
		$(".aboutMe").fadeToggle(800);
		$(".contact").hide();
		$(".faq").hide();
		$(".languages").hide();

	})

	$(".contactButton").click(function(){
		$(".contact").fadeToggle(800);
		$(".aboutMe").hide();
		$(".languages").hide();
		$(".faq").hide();
	})

	$(".faqButton").click(function(){
		$(".faq").fadeToggle(800);
		$(".languages").hide();
		$(".aboutMe").hide();
		$(".contact").hide();
	})

});