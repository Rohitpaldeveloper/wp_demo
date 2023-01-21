<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Rtech-IT Multi-Purpose" />
    <meta name="description" content="Rtech-IT - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title><?php bloginfo('name'); ?><?php wp_title() ?><?php if (is_front_page()) { echo " | "; bloginfo('desciption'); } ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/bootstrap-icons.css"> -->

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/lity.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib/swiper.min.css" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->


    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-1">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="top-links">
                            <div class="text text-white">
                                <i class="fas fa-bullhorn"></i>
                                <strong>We are best:</strong>
                                <span>Are you a looking for IT JOB <a href="#" class="p-0"><u>1st Line IT Support
                                            Engineer?</u></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="r-side">
                            <div class="socail-icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->


    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-1">
        <div class="container">
            <?php $logoimg = get_header_image();?>
            <a class="navbar-brand" href="<?php echo site_url();?>">
                <img src="<?php echo $logoimg; ?>" alt="" width="160px">
                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/Rtech-IT.png" alt="" width="160px"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="index.html" id="navbarDropdown1" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="our-projects.html" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="our-projects.html">Our Projects</a></li>
                            <li><a class="dropdown-item" href="project.html">Project One</a></li>
                            <li><a class="dropdown-item" href="career.html">Careers</a></li>
                            <li><a class="dropdown-item" href="career-details.html">Careers Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">
                            About
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="career.html" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="career.html">IT Consultation</a></li>
                            <li><a class="dropdown-item" href="career.html">Data Security</a></li>
                            <li><a class="dropdown-item" href="career.html">Website Developemnt</a></li>
                            <li><a class="dropdown-item" href="career.html">UI/UX Design</a></li>
                            <li><a class="dropdown-item" href="career.html">Cloud Services</a></li>
                            <li><a class="dropdown-item" href="career.html">Game Development</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">
                            Contact
                        </a>
                    </li>
                </ul> -->
                <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'))?>
                <div class="nav-side">
                    <div class="hotline pe-4">
                        <div class="icon me-3">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="cont">
                            <small class="text-muted m-0">Support 24/7</small>
                            <h6>+91 1234567890</h6>
                        </div>
                    </div>
                    <div class="qoute-nav ps-4">
                        <a href="page-contact-5.html" class="btn sm-butn butn-gard border-0 text-white">
                            <span>Free Quote</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/jquery.fancybox.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/lity.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/swiper.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/jquery.counterup.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/pace.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/lib/scrollIt.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>