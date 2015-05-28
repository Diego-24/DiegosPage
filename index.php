<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="parallax-window" data-parallax="scroll" data-image-src="img/color-background.jpg">
		<br>
		<div class="button animated bounceInLeft">Diego Sanchez</div>
		<div class="button animated bounceInRight">Web Designer</div>
		<br><br><br>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="img/grey-background.png">
		<div class="button animated flipInX">My Projects</div>
		<div class="container">
			<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

				  <div class="item active">
				    <img src="img/portfolio.png" alt="portfolio" width="460" height="345">
				    <div class="carousel-caption">
				      <h1>Portfolio</h1>
				      <h3>I created a portfolio for my very first project using html.</h3>
				    </div>
				  </div>

				  <div class="item">
				    <img src="img/dorado.png" alt="Dorado" width="460" height="345">
				    <div class="carousel-caption">
				      <h1>Business Project</h1>
				      <h3>I remade a website for DORADO Design & Construction Inc.</h3>
				    </div>
				  </div>

				  <div class="item">
				    <img src="img/project2.png" alt="Dorado" width="460" height="345">
				    <div class="carousel-caption">
				      <h1>Business Project</h1>
				      <h3>Another slide of the Dorado project.</h3>
				    </div>
				  </div>

				  <div class="item">
				    <img src="img/awesomenauts.png" alt="Awesomenauts" width="460" height="345">
				    <div class="carousel-caption">
				      <h1>Awesomenauts</h1>
				      <h3>Using melon.js, I made a version of the game Awesomenauts.</h3>
				    </div>
				  </div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<br>
	</div>
	<div class="parallax-window" data-parallax="scroll" data-image-src="img/tech-background.jpg">
		<div class="button animated bounceInUp">Contact Me</div>
		<br>
		<address>
			Send me an <a href="sanchezdiegoamazing@gmail.com">email</a> if you like what you see.<br>
		</address>
		<br>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="js/main.js"></script>
</body>
</html>