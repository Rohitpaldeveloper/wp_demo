<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title><?php bloginfo('name'); ?><?php wp_title() ?><?php if (is_front_page()) { echo "|"; bloginfo('desciption'); } ?></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();
                                ?>/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();
                                ?>/css/style.css?v=1.0">
   <!-- Responsive-->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();
                                ?>/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="<?php echo get_template_directory_uri();
                                ?>/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();
                                ?>/css/jquery.mCustomScrollbar.min.css">
                                <script src="<?php echo get_template_directory_uri();
                                ?>/js/jquery.min.js"></script>
   <script src="<?php echo get_template_directory_uri();
                                ?>/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo get_template_directory_uri();
                                ?>/js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="<?php echo get_template_directory_uri();
                                ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="<?php echo get_template_directory_uri();
                                ?>/js/custom.js"></script>
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <?php wp_head(); ?>
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <!-- <div class="loader_bg">
      <div class="loader"><img src="<?php echo get_template_directory_uri();
                                ?>/images/loading.gif" alt="#" /></div>
   </div> -->
   <!-- end loader -->
   <!-- header -->
   <header class="full_bg">
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <?php
                        $logoimg = get_header_image();
                        ?>
                        <div class="logo">
                           <a href="<?php echo site_url();?>">
                            <img src="<?php echo $logoimg;
                                ?>" alt="#" width="100px" />
                                
                            </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <!-- <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="index.html">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.html">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="classes.html">classes</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="pricing.html">pricing</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.html">Contact Us</a>
                           </li>
                        </ul> -->
                        <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'))
                        ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
