<!-- header.php -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/titel1.png" type="image/x-icon">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/titel1.png" alt="Preloader Icon">
        </div>
    </div>
</div>
<!-- Preloader End -->

<!-- Main Header -->
<header id="header" class="header-area header-area1 header-area-all d-none d-lg-block">
    <div class="container">
        <div class="header-elements">
            <div class="site-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/header-logo1.png" alt="Site Logo">
                </a>
            </div>

            <!-- Main Menu -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'main-menu-ex main-menu-ex1',
                ));
            ?>

            <!-- Header Buttons -->
            <div class="header2-buttons">
                <a class="theme-btn1" href="<?php echo site_url('/contact'); ?>">Get A Quote <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
</header>
