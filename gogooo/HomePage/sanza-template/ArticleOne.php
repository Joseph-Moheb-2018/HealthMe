<?php
session_start();
$UserID= $_SESSION['userId'];
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Healthy Food</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
Welcome <?echo $UserID;?>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>

						<li>
							<a class="page-scroll" href="../sanza-template">Home</a>
						</li>

						<li>
							<a class="page-scroll" href="../sanza-template">Logout</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
		<header>
			<!-- <div class="container">
				<div class="slider-container"> -->
					<div class="intro-text">
						<!-- <div class="intro-lead-in">Welcome To Health Me!</div>
						<div class="intro-heading">YOUR WAY TO HEALTHY LIFE</div>
						<a href="#about" class="page-scroll btn btn-xl">Tell Me More</a> -->

						<h1>How to Build Your Own Workout Routine for Weight Loss</h1>
						<p>If you want to lose weight, there are two questions that immediately come to mind: What should I eat? and What should my workouts look like? For those who are the "diet starts on Monday" type, figuring out the fitness part of the weight-loss equation might seem like a good place to start. Deciding on the best plan of attack is easier said than done, though, since even fitness experts aren't unanimous on how to lay out the perfect week of workouts. But there are some general guidelines that can help if you're trying to piece together your own program.</p><p>First things first: Even if you are working out to lose weight, you still want to include some weight training instead of going overboard on cardio. "When you get done with weight training, your metabolism is up for up to 24 hours afterward, which is great for losing weight," says Erin Oprea, trainer to Carrie Underwood and Kelsea Ballerini and author of The 4x4 Diet.  (BTW, Oprea is referring to what's called the afterburn effect.) "But when you do cardio, it doesn't stay up as long." </p> <p> The Total-Body Strengthening Weight Loss Workout Plan
A sample weight-loss routine from Calabrese includes full-body strength on Monday and Friday, cardio and abs on Tuesday and Saturday, legs and butt on Wednesday, and rest or active recovery on Sunday. (You might also be interested in Calabrese's body-toning dumbbell exercises.)
</p>
					</div>
				<!-- </div> -->
			</div>
		</header>


		<!-- <section id="contact" class="dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Contact Us</h2>
							<p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for your Business</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="section-text">
							<h4>Our Business Office</h4>
							<p>3422 Street, Barcelona 432, Spain, New Building North, 15th Floor</p>
							<p><i class="fa fa-phone"></i> +101 377 655 22125</p>
							<p><i class="fa fa-envelope"></i> mail@yourcompany.com</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-text">
							<h4>Business Hours</h4>
							<p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>9am to 8pm</span></p>
							<p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span>9am to 2pm</span></p>
							<p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span>Closed</span></p>
						</div>
					</div>
					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section> -->
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>Weight Loss!</p>
			</div>
		</footer>

<?php
echo ("<script>location.href = '../HomePage/sanza-template?userid=$row[".'."uidUsers']&id=$row['idUsers']';</script>"');
?>
		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/SmoothScroll.min.js"></script>
		<script src="js/mooz.themes.scripts.js"></script>
	</body>
</html>
