<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?><?php wp_title() ?><?php if (is_front_page()) { echo " | "; bloginfo('desciption'); } ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_template_directory_uri();?>/assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animated-text.css" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/all.min.css" type="text/css" media="all" />
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/theme-default.css" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.transitions.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/venobox/venobox.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" type="text/css" media="all" />
	<!-- modernizr js -->
	<script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
	<!--==================================================-->
	<!-- Start Main Menu Area -->
	<!--==================================================-->
	<div id="sticky-header" class="itsoft_nav_manu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="logo">
						<?php $logoimg = get_header_image();?>
						<a class="logo_img" href="<?php echo site_url();?>" title="Bittu-IT">
							<img src="<?php echo $logoimg; ?>" alt="" />
						</a>
						<a class="main_sticky" href="<?php echo site_url();?>" title="Bittu-IT">
							<img src="<?php echo $logoimg; ?>" alt="" />
						</a>
					</div>
				</div>
				<div class="col-lg-9 pl-0 pr-0">
					<nav class="itsoft_menu">
						<!-- <ul class="nav_scroll">
							<li><a href="index.html">Home</a>
							</li>
							<li><a href="about.html">About Us</a>
							</li>
							<li><a href="pricing.html">Pages <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="team.html">Our Team</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
									<li><a href="portfolio-details.html">Fortfolio Details</a></li>
								</ul>
							</li>
							<li><a href="service.html">Services <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
									<li><a href="service.html">Services</a></li>
									<li><a href="web-development.html">Web Development</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul> -->
						<?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'))?>
						<div class="header-button">
							<a href="contact.html">Connect US</a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile Menu Area -->
	<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="itsoft_menu">
				<!-- <ul class="nav_scroll">
					<li><a href="index.html">Home</a>
					</li>
					<li><a href="about.html">About Us</a>
					</li>
					<li><a href="pricing.html">Pages <span><i class="fas fa-angle-down"></i></span></a>
						<ul class="sub-menu">
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="team.html">Our Team</a></li>
							<li><a href="blog-details.html">Blog Details</a></li>
							<li><a href="portfolio-details.html">Fortfolio Details</a></li>
						</ul>
					</li>


					<li><a href="service.html">Services <span><i class="fas fa-angle-down"></i></span></a>
						<ul class="sub-menu">
							<li><a href="service.html">Services</a></li>
							<li><a href="web-development.html">Web Development</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul> -->
				<?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'))?>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Main Menu Area -->
	<!--==================================================-->