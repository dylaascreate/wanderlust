<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	// $title = 'Your Page Title'; // Define your title dynamically
	echo '<title>' . $title . '</title>';
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<?php
	function isActive($page) {
		$current_file = basename($_SERVER['PHP_SELF']);
		return $current_file == $page ? 'active' : '';
	}
	?>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">N. WanderLust<span>Travel & Tour</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item <?php echo isActive('about.php'); ?>"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item <?php echo isActive('destination.php'); ?>"><a href="destination.php" class="nav-link">Destination</a></li>
					<li class="nav-item <?php echo isActive('hotel.php'); ?>"><a href="hotel.php" class="nav-link">Hotel</a></li>
					<!-- <li class="nav-item <?php echo isActive('blog.php'); ?>"><a href="blog.php" class="nav-link">Blog</a></li> -->
					<li class="nav-item <?php echo isActive('contact.php'); ?>"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a style="color: white !important;" href="user/login-user.php" class="btn btn-primary nav-link"><i class="fa fa-sign-in"></i>&nbsp;Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
</body>
</html>
