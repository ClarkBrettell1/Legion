<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<title>Legion - Artist</title>
	</head>
	<div class="nav-wrap">
		<a href="index"><img src="assets/img/logo.png" alt="Logo"></a>
		<h1>LEGION</h1>
		<div id="nav-social-wrap">
			<a href="https://open.spotify.com/artist/2uHQBKGT8cy3qDHuIqYX2z"><i class="lni lni-spotify icon"></i></a>
			<a href="https://www.facebook.com/LegionOfficialUK/"><i class="lni lni-facebook-oval icon"></i></a>
			<a href="index.php"><i class="lni lni-instagram icon"></i></a>
		</div>
		<div id="nav-link-wrap">
			<a href="index">Home</a>
			<a href="listen">Listen</a>
			<a href="about">About</a>
			<a href="contact">Contact</a>
			<a href="dates">Show Dates</a>
		</div>
		<i class="lni lni-menu icon hamburger"></i>
	</div>
	
	<div>
		<div class="mobile-menu hide">
			<i class="lni lni-close cross icon"></i>
			<a href="listen">Listen</a>
			<a href="about">About</a>
			<a href="contact">Contact</a>
			<a href="dates">Show Dates</a>
		</div>
		<div class="hero-section">
		</div>
	</div>

<script>
	$('.cross').on("click", function(){
	 	$(".mobile-menu").addClass('hide').removeClass('show');
	 	$(".hamburger").addClass('show').removeClass('hide');
	})

    $('.hamburger').on("click", function(){
        $(".mobile-menu").addClass('show').removeClass('hide');
        $(".hamburger").removeClass('show').addClass('show');
    })
</script>