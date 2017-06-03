<!DOCTYPE html>
<html>
<head>
	<title>Custom Button Hover</title>

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">

		.animationTest {
			padding-top: 100px;
		}

		.text {
			text-align: center;
			top: 40%;
			font-size: 20px;
			color: white;
			opacity: .1;
		}

		.boxBody {
			background-color: #383836;
			width: 100%;
			height: 100px;
			border: 1px solid blue;
		}

		.border { 
			background: silver; 
			position: absolute; 
		}

		.borderh { 
			height: 0px; 
			border: 0px solid red; 
		}
		  
		.borderv { 
			width: 0px; 
			border: 0px solid red; 
		}

		#topbar {   
			left: 0px; top: 0px;
		}

		#bottombar {   
			right: 0px; bottom: 0px;
		}

		#rightbar {   
		    right: 0px; top: 0px;
		}

		#leftbar {
		    left: 0px; bottom: 0px;
		}

	</style>

</head>
<body>
	
	<div class="col-xs-12 animationTest">
		<div class="col-xs-offset-1 col-xs-3">

			
			<div class="col-xs-12 boxBody">
				<div class="col-xs-3 textD text">D</div>
				<div class="col-xs-3 textR text">R</div>
				<div class="col-xs-3 textA text">A</div>
				<div class="col-xs-3 textW text">W</div>
				<div class="border borderh" id="topbar"></div>
				<div class="border borderh" id="bottombar"></div>
				<div class="border borderv" id="rightbar"></div>
				<div class="border borderv" id="leftbar"></div>
			</div>

		</div>

		<div class="col-xs-offset-1 col-xs-3"></div>
	</div>


	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/788edc112b.js"></script>
	
	<script type="text/javascript">

		$(document).ready(function(){

			"use strict";

			$('.boxBody').hover(function(){

				$('.textD').animate({
					opacity: "1"
				}, 250, function(){
					$('.textR').animate({
						opacity: "1"
					}, 250, function(){
						$('.textA').animate({
							opacity: "1"
						}, 250, function(){
							$('.textW').animate({
								opacity: "1"
							}, 250);
						});
					});
				});

				$('.borderh').animate({
					borderWidth: "1px"
				}, 10, function(){
					$('.borderv').animate({
						borderWidth: "1px"
					}, 10);
				});


		    	$("#topbar").animate({
		    		width: "100%"
		        }, 500, function(){
		        	$("#leftbar").animate({
		        		height: "100%"
		        	}, 500);
		        });

		        $("#bottombar").animate({
		        	width: "100%"
		        }, 500, function(){
		        	$("#rightbar").animate({
		        		height: "100%"
		        	}, 500);
		        });

			}, function(){

		    	$("#rightbar").animate({
		    		height: "0%"
		        }, 500, function(){
		        	$("#topbar").animate({
		        		width: "0%"
		        	}, 500);
		        });

		        $('.textW').animate({
					opacity: ".1"
				}, 250, function(){
					$('.textA').animate({
						opacity: ".1"
					}, 250, function(){
						$('.textR').animate({
							opacity: ".1"
						}, 250, function(){
							$('.textD').animate({
								opacity: ".1"
							}, 250);
						});
					});
				});

		        $("#leftbar").animate({
		        	height: "0%"
		        }, 500, function(){
		        	$("#bottombar").animate({
		        		width: "0%"
		        	}, 500);
		        });

				$('.borderv').animate({
					borderWidth: "0px"
				}, 10, function(){
					$('.borderh').animate({
						borderWidth: "0px"
					}, 10);
				});

			});

		});

	</script>

</body>
</html>