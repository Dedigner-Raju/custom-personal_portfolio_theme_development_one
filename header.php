<?php wp_head(); ?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from preview.colorlib.com/theme/personalportfolio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 04:19:31 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo the_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slicknav.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
   </head>

   <body>
    <!-- Preloader Start 
    /<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
  Preloader end -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                   <?php 
                                   
                                   if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                   }
                                   
                                   ?>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <?php 

                                       wp_nav_menu( array( 
                                        'header-menu' => __( 'Header Menu' ),
                                        'extra-menu' => __( 'Extra Menu' )
                                           
                                           ) );

                                      ?>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                        <a href="#" class="btn header-btn">Get Free Consultent</a>
                                    </div>
                                </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
