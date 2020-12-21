<?php 
	session_start();
	require_once('config/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Sistem Infomasi Laboratorium</title>
	
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="dashboard/html/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="dashboard/html/assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="dashboard/html/assets/plugins/jquery-magnific-popup/magnific-popup.css">
	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- END CSS TEMPLATE -->
</head>

<body>
	<!-- BEGIN NAVIGATION -->
	<section id="navbar-top">
		<nav class=" navbar-inverse navbar-light navbar-fixed-top" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="#">Sistem Informasi Laboratorium</a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<spannavbar class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> 
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
					<?php 
						if (isset($_SESSION['access'])) {						
							if ($_SESSION['access'] == 'admin' or 'guru' or 'siswa') {
					?>
								<li class="active">
									<a href="#home">Home</a>
								</li>
								<li>
									<a href="#about">Information</a>
								</li>
								<li>
									<a href="#top-footer">About Us</a>
								</li>
								<li>
									<a href="dashboard/">Dashboard</a>
								</li>
								<li>
									<a href="logout.php">Logout</a>
								</li>
					<?php
							}
						}else {
					?>
							<li class="active">
								<a href="#home">Home</a>
							</li>
							<li>
								<a href="#about">Information</a>
							</li>
							<li>
								<a href="#top-footer">About Us</a>
							</li>
							<li>
								<a href="#top-footer">Sign In</a>
							</li>
					<?php
						}
					?>																	
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!-- END NAVIGATION -->