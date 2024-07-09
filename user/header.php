<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$title = 'Your Page Title'; // Define your title dynamically
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
	
	<style>
		/* Dropdown container - needed to position the dropdown content */
		.dropdown {
			position: relative;
			display: inline-block;
		}

		/* Dropdown content (hidden by default) */
		.dropdown-content {
			display: none;
			position: absolute;
			right: 0;
			background-color: #fff;
			min-width: 250px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			border-radius: 10px;
			overflow: hidden;
		}

		/* Show the dropdown menu on hover */
		.dropdown:hover .dropdown-content {
			display: block;
		}

		/* Card styles */
		.card {
			background-color: #f9f9f9;
			padding: 20px;
			text-align: center;
			font-family: 'Poppins', sans-serif;
		}

		.card h1 {
			font-size: 22px;
			margin: 10px 0;
		}

		.card p.title {
			color: #888;
			font-size: 16px;
			margin: 5px 0;
		}

		.card p {
			margin: 5px 0;
		}

		.card .social-icons a {
			margin: 0 10px;
			color: #333;
			font-size: 20px;
			transition: color 0.3s;
		}

		.card .social-icons a:hover {
			color: #007bff;
		}

		.card .btn {
			display: inline-block;
			border: none;
			outline: 0;
			padding: 10px;
			color: white;
			background-color: #007bff;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
			margin-top: 20px;
			border-radius: 5px;
			transition: background-color 0.3s;
			text-decoration: none;
		}

		.card .btn:hover {
			background-color: #0056b3;
		}

	</style>
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
					<li class="nav-item <?php echo isActive('contact.php'); ?>"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item dropdown">
						<a href="profile.php" class="nav-link dropbtn"><i class="fa fa-user-circle-o" style="font-size:24px"></i></a>
						<div class="dropdown-content">
							<div class="card">
								<h1>John Doe</h1>
								<p class="title">ali@gmail</p>
								<p>John(Username)</p>
								<a href="logout-user.php" class="btn">Log Out</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
</body>
</html>
