<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo/titel1.png"
        type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo/titel1.png"
                    alt="Preloader Icon">
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Progress Circle -->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <!-- Desktop Header -->
    <header id="header" class="header-area header-area1 header-area-all d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <!-- Site Logo -->
                        <div class="site-logo">
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo/header-logo1.png"
                                    alt="Site Logo">
                            </a>
                        </div>

                        <!-- Main Menu -->
                        <div class="main-menu-ex main-menu-ex1">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => false,
                            ));
                            ?>
                        </div>

                        <!-- Header Button -->
                        <div class="header2-buttons">
                            <a class="theme-btn1" href="<?php echo esc_url(site_url('/contact')); ?>">
                                Get A Quote <span><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Header -->
    <div class="mobile-header mobile-header-main d-block d-lg-none">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">
                    <div class="mobile-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo/header-logo1.png"
                                alt="Mobile Logo">
                        </a>
                    </div>
                    <div class="mobile-nav-icon">
                        <i class="fa-duotone fa-bars-staggered"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-sidebar d-block d-lg-none">
        <div class="logo-m">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo/header-logo1.png"
                    alt="Mobile Sidebar Logo">
            </a>
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="mobile-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => false,
            ));
            ?>

            <div class="mobile-button">
                <a class="theme-btn1" href="<?php echo esc_url(site_url('/service')); ?>">
                    Learn More <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>

            <div class="single-footer-items">
                <h3>Contact Us</h3>
                <div class="contact-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/icons/footer-icon1.png"
                            alt="">
                    </div>
                    <div class="pera">
                        <a href="tel:+880123456789">+880 123 456 789</a>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/icons/footer-icon2.png"
                            alt="">
                    </div>
                    <div class="pera">
                        <a href="mailto:info@mail.com">info@mail.com</a>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/icons/footer-icon3.png"
                            alt="">
                    </div>
                    <div class="pera">
                        <a href="#">8502 Preston Rd. <br> Inglewoo Maine 98380</a>
                    </div>
                </div>
            </div>
            <div class="contact-infos">
                <h3>Our Location</h3>
                <ul class="social-icon">
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>