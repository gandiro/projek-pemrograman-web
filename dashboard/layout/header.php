<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Sistem Infomasi Laboratorium</title>
	
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="assets/plugins/jquery-gritter/css/jquery.gritter.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/plugins/icheck/skins/square/blue.css">
	<link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="assets/plugins/select2/select2.css">
	<link rel="stylesheet" href="assets/plugins/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-slider/css/slider.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-summernote/summernote.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-summernote/summernote-bs3.css">
	<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.print.css">
	<link rel="stylesheet" href="assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="assets/plugins/jquery-datatables/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="assets/plugins/jquery-niftymodal/css/component.css">

	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/skins.css">
	<!-- END CSS TEMPLATE -->
</head>

<body class="skin-dark">
	<!-- BEGIN HEADER -->
	<header class="header">
		<!-- BEGIN LOGO -->
		<a href="index-2.html" class="logo">
		</a>
		<!-- END LOGO -->
		<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars fa-lg"></span>
			</a>
			
			<div class="navbar-right">
				<ul class="nav navbar-nav">					
					<li class="dropdown profile-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog fa-lg"></i>
							<span class="username">Setting</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu box profile">
							<li><div class="up-arrow"></div></li>
							<li class="border-top">
								<a href="?profile=<?php echo $_SESSION['id']; ?>"><i class="fa fa-user"></i><?php echo $_SESSION['name']; ?></a>
							</li>
							<li>
								<a href="../logout.php"><i class="fa fa-power-off"></i>Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- END NAVBAR -->
	</header>
	<!-- END HEADER -->