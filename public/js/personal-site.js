
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

	///////////////////
	// Homepage Buttons
	///////////////////
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

	/////////////////
	// Resume Buttons
	/////////////////
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

	/////////////////
	// Resume Buttons
	/////////////////
	$(".objectiveButton").click(function(){
		$(".skills").fadeOut(800);
		$(".experience").fadeOut(800);
		$(".education").fadeOut(800);

		setTimeout(function(){
			$(".objective").fadeToggle(800);
		}, 800);
	});

	$(".skillsButton").click(function(){
		$(".objective").fadeOut(800);
		$(".experience").fadeOut(800);
		$(".education").fadeOut(800);

		setTimeout(function(){
			$(".skills").fadeToggle(800);
		}, 800);
	});

	$(".educationButton").click(function(){
		$(".objective").fadeOut(800);
		$(".experience").fadeOut(800);
		$(".skills").fadeOut(800);

		setTimeout(function(){
			$(".education").fadeToggle(800);
		}, 800);
	});

	$(".experienceButton").click(function(){
		$(".objective").fadeOut(800);
		$(".education").fadeOut(800);
		$(".skills").fadeOut(800);

		setTimeout(function(){
			$(".experience").fadeToggle(800);
		}, 800);
	})

	///////////////////
	// Homepage Buttons
	///////////////////
	$(".languagesButton").click(function(){
		$(".aboutMe").fadeOut(800);
		$(".contact").fadeOut(800);
		$(".faq").fadeOut(800);

		setTimeout(function(){
			$(".languages").fadeToggle(800);
		}, 800);
	});

	$(".aboutMeButton").click(function(){
		$(".contact").fadeOut(800);
		$(".faq").fadeOut(800);
		$(".languages").fadeOut(800);

		setTimeout(function(){
			$(".aboutMe").fadeToggle(800);
		}, 800);
	});

	$(".contactButton").click(function(){
		$(".aboutMe").fadeOut(800);
		$(".languages").fadeOut(800);
		$(".faq").fadeOut(800);

		setTimeout(function(){
			$(".contact").fadeToggle(800);
		}, 800);
	});

	$(".faqButton").click(function(){
		$(".languages").fadeOut(800);
		$(".aboutMe").fadeOut(800);
		$(".contact").fadeOut(800);

		setTimeout(function(){
			$(".faq").fadeToggle(800);
		}, 800);
	});

});