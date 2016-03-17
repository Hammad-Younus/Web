<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>EXCEPTION – Responsive Business HTML Template</title>
		<meta name="description" content="EXCEPTION – Responsive Business HTML Template">
		<meta name="author" content="EXCEPTION">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="<?php echo base_url() ?>images/favicon.ico">

		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/prettyPhoto.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/slick.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/responsive.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="<?php echo base_url() ?>css/ie.css">
	    	<script type="text/javascript" src="<?php echo base_url() ?>js/html5.js"></script>
	    <![endif]-->


		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" href="<?php echo base_url() ?>css/skins/default.css">

	</head>
	<body>

	    <!-- site preloader start -->
	    <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div>
	    <!-- site preloader end -->

	    <div class="pageWrapper">

		    <!-- login box start -->
			<div class="login-box">
				<a class="close-login" href="#"><i class="fa fa-times"></i></a>
				<form action="<?php echo site_url("login/check") ?>" method="post">
					<div class="container">
						<p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
						<div class="login-controls">
							<div class="skew-25 input-box left">
								<input type="text" name="username" class="txt-box skew25" placeholder="User name Or Email" />
							</div>
							<div class="skew-25 input-box left">
								<input type="password" name="password" class="txt-box skew25" placeholder="Password" />
							</div>
							<div class="left skew-25 main-bg">
								<input type="submit" name="submit" class="btn skew25" value="Login" />
							</div>
							<div class="check-box-box">
								<input type="checkbox" class="check-box" /><label>Remember me !</label>
								<a href="#">Forgot your password ?</a>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- login box End -->

			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">

		    	<!-- top bar start -->
		    	<div class="top-bar">
				    <div class="container">
						<div class="row">
							<div class="cell-5">
							    <ul>
								    <li><a href="#"><i class="fa fa-envelope"></i>info@it-rays.com</a></li>
								    <li><span><i class="fa fa-phone"></i> Call Us: +1 (888) 000-0000</span></li>
							    </ul>
							</div>
							<div class="cell-7 right-bar">
					    		<ul class="right">
						    	    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>0 item(s) - $0.00</a></li>
						    	    <li><a href="siteMap.html"><i class="fa fa-sitemap"></i>Site Map</a></li>
						    	    <li><a href="<?php echo site_url("registration"); ?>"><i class="fa fa-user"></i>Register</a></li>
						    	    <li><a href="#" class="login-btn"><i class="fa fa-unlock-alt"></i> Login</a></li>
						        </ul>
							</div>
						</div>
				    </div>
			    </div>
			    <!-- top bar end -->

			    <header class="top-head" data-sticky="true">
				    <div class="container">
					    <div class="row">
					    	<div class="logo cell-3">
						    	<a href="index.php"></a>
						    </div>
						    <div class="cell-9 top-menu">
