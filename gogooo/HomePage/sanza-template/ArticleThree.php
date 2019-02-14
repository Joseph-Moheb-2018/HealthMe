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

						<h1>The 5 Best Running Shoes for Plantar Fasciitis</h1>
						<p>Plantar fasciitis is one of the most common triggers for heel pain, especially among runners. Regularly stretching is a good start, but you may also want to invest in a running sneaker that helps alleviate foot pain.
While there aren't plantar fasciitis-specific running shoes, there are some smart features to look for when shopping. Experts recommend choosing sneakers with good arch support, supportive cushioning, shock-absorbing soles, and a deep heel cup to keep plantar fasciitis symptoms at bay.
It's generally smart to choose a heavier shoe, since lightweight sneakers don't deliver much support, says New York-based podiatrist Hillary Brenner, DPM. "You don’t want to bend the shoe in half like a burrito," she explains.
Here are the best running shoes for plantar fasciitis (as well as insoles!) you should add to your workout wardrobe if you're suffering from this foot condition.</p><p>New Jersey-based podiatrist and American Podiatric Medical Association spokesperson Alan Bass, DPM, is a fan of Brooks Running shoes for those with plantar fasciitis. This breathable, cushioned roadrunner makes moving from heel to toe incredibly smooth. It has two-way stretch for a customized fit and plush, removable insoles for comfort and support. Take note: The arch support on this sneaker is considered "neutral", meaning it doesn't provide extra support for those with low arches. </p> <p>Dr. Bass recommends adding insoles to support your foot. These plush, supportive ones by Superfeet have a deep heel cup and retain their shape for up to 12 months or 500 miles—whichever comes first.</p>
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
