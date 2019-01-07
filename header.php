<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid site-header">
    <div class="container flex-header">
        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="Vista Patio Doors"></a></div>
        <div class="stickylogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-sticky.png" alt="Vista Patio Doors"></a></div>
        <div class="header-block">
            <div class="inner-block">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#popForm" class="gps button invert"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gps-icon.png" alt="GPS Icon" width="16px"> Find a Dealer</a> <div class="phone"><a href="tel:19056692636">Call (905) 669-2636</a></div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container padding0">
                  <div class="mobile-icons">
                    <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
                        <i class="fa fa-bars"></i>
                        <span>MENU</span>
                    </a>
                    <a href="tel:19056692636" class="nav-phone">
                        <i class="fa fa-phone"></i>
                        <span>CALL</span>
                    </a>

                    <a href="<?php echo home_url(); ?>/contact/" class="nav-contact">
                        <i class="fa fa-envelope"></i>
                        <span>CONTACT</span>
                    </a>
                </div>
                <nav id="mainNav" class="mobile-nav" role="navigation">
                  <a href="<?php echo home_url(); ?>/become-a-dealer/" class="get-quote" >Become a Dealer</a>
                   <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<main>
