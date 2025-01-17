<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Romantic Reservation</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Pickadate CSS -->
	<link rel="stylesheet" href="css/classic.css">
	<link rel="stylesheet" href="css/classic.date.css">
	<link rel="stylesheet" href="css/classic.time.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> -->
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<?php if (!empty($_SESSION['user'])) {?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown">
								<?php $details = $_SESSION['user']; echo $details['first_name'] ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="my_acc.php">My Account</a>
								<a class="dropdown-item" href="php/logout.php">Logout</a>
							</div>
						</li>
						<?php } else{
						echo "<li class='nav-item active'><a class='nav-link' href='register.php'>Register</a></li>";
						echo "<li class='nav-item'><a class='nav-link' href='my_acc.php'>My Account</a></li>";
							echo isset($_SESSION['login']);
							} ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Register</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<div class='form-container'>
		<div class='msg'>
			
		</div>
		<!-- Start Registration Form -->
		<form method="post" action=""  id="form-info">
			<fieldset>
				<legend>Register</legend>
				<div class="form-group">
					<label for="fname">First Name</label>
					<input class="form--input" type="text" name="fname" required>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form--input" type="text" name="lname" required>
				</div>
				<div class="form-group">
					<label for="cnum">Contact Number</label>
					<input class="form--input" type="text" name="cnum" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form--input" type="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="password1">Password</label>
					<div class="pword-container">
						<input class="form--input" type="password" id="password1" name="password1" required>
						<i class="far fa-eye icon" id="togglePassword" onclick="togglePword('password1')"></i>
					</div>
					<!-- <div>
						<input type="checkbox" onclick="togglePword('password1')"> Show Password
					</div> -->
					<small id="pwordHelp" class="form-text text-muted">Password must be at least 4 characters long, contain at least ONE uppercase letter and numbers.</small>
					<!-- An element to toggle between password visibility -->
					
				</div>
				<div class="form-group">
					<label for="password2">Confirm Password</label>
                    <div class="pword-container">
                        <input class="form--input" type="password" id="password2" name="password2" required>
                        <i class="far fa-eye icon" id="togglePassword2" onclick="togglePword('password2','#togglePassword2')"></i>
					</div>
				</div>

				<div class="alert alert-dismissible alert-danger" id="form-alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Oh snap!</strong> 
				</div>
				<div class="alert alert-success" role="alert">
					Registered successfully. Click <a href="my_acc.php" class="alert-link">here to sign in</a>.
				</div>
				<div class="submit-button text-center">
                    <p><a href="my_acc.php">Already have an account? Login here</a></p>
					<button type="submit" class="btn" name="reg">Register</button>
				</div>
			</fieldset>
		</form>
		<!-- End Registration Form -->
	</div>


	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>We want to hear from you!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Angielyn
										Morales</strong></h5>
								<h6 class="text-dark m-0">Customer</h6>
								<p class="m-0 pt-3">Yaaaay. My first korean bbq experience after quarantine (though it
									is not really over yet hehe) went here for lunch! Romantic baboy is one of my
									favorite korean bbq & grill and during our visit, some meats weren’t available but
									it’s okay, we just tried the other options. My family and I always have korean bbq
									at home but it really feels different when you’re in a restaurant hehe. Would love
									to dine again soon!</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Rochkirstin
										Sioco</strong></h5>
								<h6 class="text-dark m-0">Customer</h6>
								<p class="m-0 pt-3">Romantic Baboy plies quite an extensive menu of traditional Korean
									grill barbecue meat (pork and beef) in a no-frills atmosphere. Seats aren’t cramped
									but rather comfortable for large groups. Rightly so, each table is fitted with an
									exhaust grill hood. The restaurant looks spacious despite being packed, and the vibe
									exudes a feel-good facotor where everything feels right. Casual, convenient, and
									friendly, this is the spot to be.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Symon Chan</strong>
								</h5>
								<h6 class="text-dark m-0">Customer</h6>
								<p class="m-0 pt-3">We went there friday lunch time that's why we got seats but when you
									go there during weekends or dinner time, there are a lot of people.
									Service was good, they were very attentive.
									Meat was good and well prepared.
									The place is also neat.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+02 8374 7948
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							romanticbaboy.ph
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Double Dragon Plaza, Pasay, Metro Manila
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Romantic Baboy is a restaurant chain in Metro Manila that serves unlimited Korean BBQ since 2019.
						Their main menu includes ready-to-grill meats and assorted side dishes!</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday - Sunday : </span>Closed</p>
					<p><span class="text-color">Hours :</span> 11:00 AM - 2:00 AM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ground Level, Double Dragon Plaza, Pasay, Metro Manila</p>
					<p class="lead"><a href="contact.php">(02) 8374 7948</a></p>
					<p><a href="contact.php"> romanticbaboy@gmail.ph</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>SOCIALS</h3>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href=""><i
									class="fa fa-facebook" aria-hidden="true"></i></a></li>

					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a
								href="">Romantic Baboy Restaurant</a>
						</p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/main.js"></script>
</body>
<?php
	include 'php/reg.php';
?>
</html>