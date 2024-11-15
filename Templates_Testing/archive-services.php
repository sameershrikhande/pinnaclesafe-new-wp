<?php
/**
 * Template Name: Services_Tpl
 */
get_header();
?>

<!--=====HERO AREA START =======-->
<div class="common-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="main-heading">
                    <h1>Our Service</h1>
                    <div class="pages-intro">
                        <a href="index-2.html">Home </a>
                        <span><i class="fa-regular fa-angle-right"></i></span>
                        <p>Our Service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====HERO AREA END=======-->

<!--=====SERVICE AREA START=======-->
<div class="service1 service-page-service sp">
    <div class="container">
        <div class="row">
            <!-- Service Items -->
            <div class="col-lg-4 col-md-6">
                <div class="service1-box">
                    <div class="image overlay-anim">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/service/service1-img1.png" alt="">
                    </div>
                    <div class="hover-area">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/icons/service1-icon1.png" alt="">
                        </div>
                        <div class="space16"></div>
                        <div class="heading1-w">
                            <h4><a href="service-details.html">Executive Search Services</a></h4>
                            <div class="space16"></div>
                            <p>Whether you're looking for temporary staffing, direct hire placements,</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Additional service items go here (exactly as provided in the original structure) -->
            
            <!-- Service Items Example -->
            <?php for ($i = 2; $i <= 9; $i++) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="service1-box">
                    <div class="image overlay-anim">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/service/service1-img<?php echo $i; ?>.png" alt="">
                    </div>
                    <div class="hover-area">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/icons/service1-icon<?php echo $i; ?>.png" alt="">
                        </div>
                        <div class="space16"></div>
                        <div class="heading1-w">
                            <h4><a href="service-details.html">Service Title <?php echo $i; ?></a></h4>
                            <div class="space16"></div>
                            <p>Short description of service <?php echo $i; ?>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>

        <div class="space60"></div>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="theme-pagination text-center">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li><a class="active" href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li>...</li>
                        <li><a href="#">12</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====SERVICE AREA END=======-->




<?php
get_footer();
?>
