<!-- page-landing.php -->

<?php
/**
 * Template Name: Landing Page
 */
get_header();
?>

<!--=====HERO AREA START =======-->
<!-- Hero Section -->
<div class="hero-area1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="main-heading">
                    <span class="span" data-aos="fade-right" data-aos-duration="800">
                        Staffing Power Your Success
                    </span>
                    <h1 class="text-anime-style-3">
                        Growth Exceptional Talent Let's Build Success Together
                    </h1>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="1000">
                        Our tailored staffing solutions streamline the hiring process, <br> 
                        saving you time and resources while ensuring the perfect fit.
                    </p>

                    <div class="space30"></div>
                    <div class="hero1-buttons" data-aos="fade-right" data-aos-duration="1200">
                        <a class="theme-btn1" href="<?php echo esc_url(site_url('/service')); ?>">
                            Start Your Search <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a class="theme-btn2" href="<?php echo esc_url(site_url('/discover')); ?>">
                            Discover More <span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero1-images">
                    <div class="image1">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/bg/hero1-main-bg.png'); ?>" alt="Background Image">
                    </div>
                    <div class="image2 overlay-anim" data-aos="zoom-in-up" data-aos-duration="700">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/hero/hero1-main-img.png'); ?>" alt="Hero Image">
                    </div>
                    <div class="image3 shape-animaiton2" data-aos="zoom-in-up" data-aos-duration="700">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/shapes/review-img.png'); ?>" alt="Review Shape">
                    </div>
                    <div class="image4 shape-animaiton3">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/shapes/hero1-shape.png'); ?>" alt="Hero Shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====HERO AREA END=======-->

<!--=====HERO SLIDER AREA END=======-->
<!-- Hero Slider Section -->
<div class="hero1-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-slider">
                    <?php
                    // Array of logo images to loop through
                    $logos = [
                        'slider-logo1.png',
                        'slider-logo2.png',
                        'slider-logo3.png',
                        'slider-logo4.png',
                        'slider-logo5.png',
                        'slider-logo6.png',
                        'slider-logo7.png',
                        'slider-logo1.png', // Repeat logos for continuous slider effect
                        'slider-logo2.png',
                        'slider-logo3.png',
                        'slider-logo4.png',
                        'slider-logo5.png',
                        'slider-logo6.png',
                        'slider-logo7.png'
                    ];

                    // Loop through each logo image
                    foreach ($logos as $logo) :
                        ?>
                        <div class="single-slider">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/logo/' . $logo); ?>" alt="Slider Logo">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====HERO SLIDER AREA END=======-->

        <!--=====ABOUT AREA START=======-->

<!-- About Area Start -->
<div class="chosse1 sp">
    <div class="container">
        <div class="row align-items-center">
            <!-- Icon Boxes -->
            <div class="col-lg-2">
                <div data-aos="zoom-in-up" data-aos-duration="700">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/choose1-icon1.png'); ?>" alt="Client Success Icon">
                        </div>
                        <div class="heading1">
                            <h3><span class="counter">98</span>%</h3>
                            <div class="space10"></div>
                            <p>Successful Client</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/choose1-icon2.png'); ?>" alt="Team Advisors Icon">
                        </div>
                        <div class="heading1">
                            <h3><span class="counter">79</span>%</h3>
                            <div class="space10"></div>
                            <p>Team Advisors</p>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="icon-box icon-box2">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/choose1-icon3.png'); ?>" alt="Years Experience Icon">
                        </div>
                        <div class="heading1">
                            <h3><span class="counter">12</span>+</h3>
                            <div class="space10"></div>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-lg-5">
                <div class="image reveal overlay-anim">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/others/choose1-img.png'); ?>" alt="Why Choose Us Image">
                </div>
            </div>

            <!-- Text Content Section -->
            <div class="col-lg-5">
                <div class="heading1 choose1-heading">
                    <span class="span" data-aos="fade-left" data-aos-duration="700">Why Choose Us</span>
                    <h2 class="text-anime-style-3">Choose Excellence Elevate Your Hiring Experience</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">
                        Our team of industry experts is dedicated to understanding your unique needs and delivering tailored solutions that propel your business forward.
                    </p>

                    <div class="space10"></div>
                    <div class="row" data-aos="fade-left" data-aos-duration="800">
                        <div class="col-lg-6">
                            <ul class="icon-list">
                                <li><span><i class="fa-solid fa-check"></i></span> Range Of Services</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="icon-list">
                                <li><span><i class="fa-solid fa-check"></i></span> Professional Expertise</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="icon-list">
                                <li><span><i class="fa-solid fa-check"></i></span> Online Resources</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="icon-list">
                                <li><span><i class="fa-solid fa-check"></i></span> Client Success Stories</li>
                            </ul>
                        </div>
                    </div>

                    <div class="space30"></div>
                    <div data-aos="fade-left" data-aos-duration="1100">
                        <a class="theme-btn1" href="<?php echo esc_url(site_url('/about')); ?>">About Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

        <!--=====ABOUT AREA END=======-->






<!-- Additional sections like Services, Projects, etc. -->
<div class="service1 sp">
    <div class="container">
        <!-- Example Service Section Content -->
        <h2>Tailored Solutions for Your Hiring Needs</h2>
        <p>We support your organization's growth and hiring goals.</p>
        <!-- Add remaining service, project, and other sections from your HTML here -->
    </div>
</div>

<?php get_footer(); ?>
