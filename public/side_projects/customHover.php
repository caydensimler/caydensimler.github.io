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
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-3">

			
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

		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-3 svgComputer">
			<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357.07 357.07">
				<circle cx="178.53" cy="178.53" r="176.53" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:4px" class="outerCircle"/>
				<circle cx="178.81" cy="178.53" r="160.49" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:8px"/>
				<circle cx="188.34" cy="231.7" r="2.24" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:0.25px"/>
				<rect x="78.18" y="99.97" width="200.71" height="150.17" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/>
				<polygon points="178.23 276.24 158.29 262.89 158.59 236.78 178.84 224.03 198.78 237.38 198.47 263.49 178.23 276.24" style="stroke:#000;stroke-miterlimit:10;stroke-width:3px"/>
				<rect x="102.28" y="264.68" width="152.5" height="12.68" style="stroke:#000;stroke-miterlimit:10"/>
				<path d="M361.6,370c-2.81-3.84-9-3.72-10.62,1.22a7.56,7.56,0,0,0,1,6.64,5.75,5.75,0,0,0,2.51,2c1.42,0.6,5.68.61,4.82,3.15l2.95,0.4-0.43-12.61c-0.07-1.93-3.07-1.93-3,0l0.43,12.61a1.51,1.51,0,0,0,2.95.4c1.32-3.91-2.4-5.63-5.46-6.4a3.8,3.8,0,0,1-3-4.66,2.93,2.93,0,0,1,5.31-1.19C360.14,373.08,362.74,371.59,361.6,370Z" transform="translate(-181.82 -142.63)"/>
				<rect x="78.18" y="213.27" width="200.71" height="36.86" style="stroke:#000;stroke-miterlimit:10"/>
				<circle cx="169.71" cy="231.7" r="2.24" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:0.25px"/>
				<circle cx="199.59" cy="231.7" r="2.24" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:0.25px"/>
				<circle cx="179.15" cy="231.7" r="9.44" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:8px"/>
				<circle cx="193.96" cy="231.7" r="2.24" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:0.25px"/>
			</svg>
		</div>
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

			$('.svgComputer').hover(function(){
				$('.outerCircle').css({
					fill: "green", 
					transition: "1.0s"
				});
			}, function(){
				$('.outerCircle').css({
					fill: "white", 
					transition: "1.0s"
				});
			});

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