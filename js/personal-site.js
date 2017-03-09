
$("document").ready(function(){

	"use strict";

	function hideAll(){
		$(".languages").hide();
		$(".contact").hide();
		$(".faq").hide();
		$(".skills").hide();
		$(".experience").hide();
		$(".education").hide();
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

	$(".objectiveButton").click(function(){
		$(".objective").fadeToggle(1200);
		$(".skills").hide();
		$(".experience").hide();
		$(".education").hide();
	});

	$(".skillsButton").click(function(){
		$(".skills").fadeToggle(1200);
		$(".objective").hide();
		$(".experience").hide();
		$(".education").hide();
	});

	$(".educationButton").click(function(){
		$(".education").fadeToggle(1200);
		$(".objective").hide();
		$(".experience").hide();
		$(".skills").hide();
	});

	$(".experienceButton").click(function(){
		$(".experience").fadeToggle(1200);
		$(".objective").hide();
		$(".education").hide();
		$(".skills").hide();
	})

	$(".languagesButton").click(function(){
		$(".languages").fadeToggle(800);
		$(".aboutMe").hide();
		$(".contact").hide();
		$(".faq").hide();
	});

	$(".aboutMeButton").click(function(){
		$(".aboutMe").fadeToggle(800);
		$(".contact").hide();
		$(".faq").hide();
		$(".languages").hide();
	});

	$(".contactButton").click(function(){
		$(".contact").fadeToggle(800);
		$(".aboutMe").hide();
		$(".languages").hide();
		$(".faq").hide();
	});

	$(".faqButton").click(function(){
		$(".faq").fadeToggle(800);
		$(".languages").hide();
		$(".aboutMe").hide();
		$(".contact").hide();
	});

});