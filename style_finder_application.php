<?php 





?>





<!DOCTYPE html>
<html>
<head>
	<title>Style-Finder Application</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- ROBOTO -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- OSWALD -->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<!-- BIORHYME -->
	<link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">
	<!-- RALEWAY -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- UBUNTU -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<!-- ASAR -->
	<link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">

	<!-- Inline CSS Style -->
	<style>
		h1 {
			text-align: center;
			font-size: 5vw;
		}

		.invisible {
			font-size: 1vw;
		}

		.roboto {
			font-family: 'Roboto', sans-serif;
		}

		.oswald {
			font-family: 'Oswald', sans-serif;
		}

		.bioRhyme {
			font-family: 'BioRhyme', serif;
		}

		.raleway {
			font-family: 'Raleway', sans-serif;
		}

		.ubuntu {
			font-family: 'Ubuntu', sans-serif;
		}

		.asar {
			font-family: 'Asar', serif;
		}

		.fontButtons {
			border-radius: 10px;
			background-color: #383836;
			color: white;
			outline: none;
			border: none;
			font-size: 2vw;
			text-align: center;
			padding: 15px;
			cursor: pointer;
		}

		.information {
			background-color: #0B4F6C;
			border-radius: 20px;
			text-align: center;
			color: white;
			font-size: 3vw;
			padding: 10px;
		}

		.fontFamily {
			color: white;
			font-size: 2vw;
		}

		.stylesheet {
			color: white;
			font-size: 2vw;
		}
	</style>
</head>
<body>

	<h1>Font Styles (powered by <a href="https://fonts.google.com/">Google Fonts</a>)</h1>
	<div class="invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus corporis nobis, vel totam impedit mollitia. Assumenda dignissimos non, quos sunt nobis exercitationem eum voluptatibus obcaecati, iusto possimus repellat sequi totam.</div>

	<div class="col-xs-12">

		<div class="col-xs-2 roboto fontButtons">
			Roboto
		</div>

		<div class="col-xs-2 oswald fontButtons">
			Oswald
		</div>

		<div class="col-xs-2 bioRhyme fontButtons">
			BioRhyme
		</div>

		<div class="col-xs-2 raleway fontButtons">
			Raleway
		</div>

		<div class="col-xs-2 ubuntu fontButtons">
			Ubuntu
		</div>

		<div class="col-xs-2 asar fontButtons">
			Asar
		</div>

	</div>

	<div class="col-xs-12 invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nobis, soluta neque at culpa earum iure sit quo. Dolores laborum fugiat vel ea iste nam magni distinctio amet dicta aperiam.</div>

	<div class="col-xs-12">
		<div class="col-xs-6 information">
			Stylesheet Reference:
			<hr>
			<div class="col-xs-12 stylesheet">
				&lt;link href=&quot;https://fonts.googleapis.com/css?family=Roboto&quot; rel=&quot;stylesheet&quot;&gt;
			</div>
		</div>

		<div class="col-xs-6 information">
			CSS Font-Family:
			<hr>
			<div class="col-xs-12 fontFamily">
				font-family: 'Roboto', sans-serif;
			</div>
		</div>
	</div>

	
	<!-- Font Awesome-->
	<script src="https://use.fontawesome.com/788edc112b.js"></script>
	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

	<script> 

		$('.roboto').click(function () {
			$('.stylesheet').text('<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">');
			$('.fontFamily').text('font-family: \'Roboto\', sans-serif;');
		}).hover(function () {
			$(this).css('background-color', '#0B4F6C');
		}, function () {
			$(this).css('background-color', '#383836');
		});

		$('.oswald').click(function () {
			$('.stylesheet').text('<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">');
			$('.fontFamily').text('font-family: \'Oswald\', sans-serif;');
		}).hover(function () {
			$(this).css('background-color', '#0B4F6C');
		}, function () {
			$(this).css('background-color', '#383836');
		});

		$('.bioRhyme').click(function () {
			$('.stylesheet').text('<link href="https://fonts.googleapis.com/css?family=BioRhyme" rel="stylesheet">');
			$('.fontFamily').text('font-family: \'BioRhyme\', serif;');
		}).hover(function () {
			$(this).css('background-color', '#0B4F6C');
		}, function () {
			$(this).css('background-color', '#383836');
		});

		$('.raleway').click(function () {
			$('.stylesheet').text('<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">');
			$('.fontFamily').text('font-family: \'Raleway\', sans-serif;');
		}).hover(function () {
			$(this).css('background-color', '#0B4F6C');
		}, function () {
			$(this).css('background-color', '#383836');
		});

		$('.ubuntu').click(function () {
			$('.stylesheet').text('<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">');
			$('.fontFamily').text('font-family: \'Ubuntu\', sans-serif;');
		}).hover(function () {
			$(this).css('background-color', '#0B4F6C');
		}, function () {
			$(this).css('background-color', '#383836');
		});

		$('.asar').click(function () {
			$('.stylesheet').text('<link href="https://fonts.googleapis.com/css?family=Asar" rel="stylesheet">');
			$('.fontFamily').text('font-family: \'Asar\', serif;');
		}).hover(function () {
			$(this).css('background-color', '#0B4F6C');
		}, function () {
			$(this).css('background-color', '#383836');
		});


	</script>



</body>
</html>