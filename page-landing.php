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
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/bg/hero1-main-bg.png'); ?>"
                            alt="Background Image">
                    </div>
                    <div class="image2 overlay-anim" data-aos="zoom-in-up" data-aos-duration="700">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/hero/hero1-main-img.png'); ?>"
                            alt="Hero Image">
                    </div>
                    <div class="image3 shape-animaiton2" data-aos="zoom-in-up" data-aos-duration="700">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/shapes/review-img.png'); ?>"
                            alt="Review Shape">
                    </div>
                    <div class="image4 shape-animaiton3">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/shapes/hero1-shape.png'); ?>"
                            alt="Hero Shape">
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
                    foreach ($logos as $logo):
                        ?>
                        <div class="single-slider">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/logo/' . $logo); ?>"
                                alt="Slider Logo">
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
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/choose1-icon1.png'); ?>"
                                alt="Client Success Icon">
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
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/choose1-icon2.png'); ?>"
                                alt="Team Advisors Icon">
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
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/choose1-icon3.png'); ?>"
                                alt="Years Experience Icon">
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
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/others/choose1-img.png'); ?>"
                        alt="Why Choose Us Image">
                </div>
            </div>

            <!-- Text Content Section -->
            <div class="col-lg-5">
                <div class="heading1 choose1-heading">
                    <span class="span" data-aos="fade-left" data-aos-duration="700">Why Choose Us</span>
                    <h2 class="text-anime-style-3">Choose Excellence Elevate Your Hiring Experience</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">
                        Our team of industry experts is dedicated to understanding your unique needs and delivering
                        tailored solutions that propel your business forward.
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
                        <a class="theme-btn1" href="<?php echo esc_url(site_url('/about')); ?>">About Us <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!--=====ABOUT AREA END=======-->



<!--=====SERVICE AREA START=======-->
<!-- Service Area Start -->
<div class="service1 sp">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-lg-8 m-auto text-center">
                <div class="heading1-w">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Service</span>
                    <h2 class="text-anime-style-3">Tailored Solutions for Your Hiring Needs</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="800">
                        With our proven track record and commitment to excellence, we're here to support your
                        <br> organization's growth and help you achieve your hiring goals.
                    </p>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
            <!-- Service Box 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service1-box" data-aos="zoom-in-up" data-aos-duration="700">
                    <div class="image overlay-anim">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/service/service1-img1.png'); ?>"
                            alt="Executive Search Services Image">
                    </div>
                    <div class="hover-area">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/service1-icon1.png'); ?>"
                                alt="Executive Search Icon">
                        </div>
                        <div class="space16"></div>
                        <div class="heading1-w">
                            <h4><a href="<?php echo esc_url(site_url('/service-details')); ?>">Executive Search
                                    Services</a></h4>
                            <div class="space16"></div>
                            <p>Whether you're looking for temporary staffing, direct hire placements, </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Box 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service1-box active" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="image overlay-anim">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/service/service1-img2.png'); ?>"
                            alt="HR Consulting & Staffing Image">
                    </div>
                    <div class="hover-area">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/service1-icon2.png'); ?>"
                                alt="HR Consulting Icon">
                        </div>
                        <div class="space16"></div>
                        <div class="heading1-w">
                            <h4><a href="<?php echo esc_url(site_url('/service-details')); ?>">HR Consulting &
                                    Staffing</a></h4>
                            <div class="space16"></div>
                            <p>Whether you're looking for temporary staffing, direct hire placements, </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Box 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service1-box" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="image overlay-anim">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/service/service1-img3.png'); ?>"
                            alt="Temporary Staffing Services Image">
                    </div>
                    <div class="hover-area">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/service1-icon3.png'); ?>"
                                alt="Temporary Staffing Icon">
                        </div>
                        <div class="space16"></div>
                        <div class="heading1-w">
                            <h4><a href="<?php echo esc_url(site_url('/service-details')); ?>">Temporary Staffing
                                    Services</a></h4>
                            <div class="space16"></div>
                            <p>Whether you're looking for temporary staffing, direct hire placements, </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space50"></div>

            <!-- Call to Action Button -->
            <div class="col-lg-12">
                <div class="text-center" data-aos="zoom-in-up" data-aos-duration="700">
                    <a class="theme-btn3" href="<?php echo esc_url(site_url('/service')); ?>">
                        Let’s get started <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End -->


<!--=====SERVICE AREA END=======-->


<!--=====PROJECT AREA START=======-->

<!-- Project Area Start -->
<section class="project-two d-none d-lg-block">
    <div class="project-two__bottom">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Project</span>
                        <h2 class="text-anime-style-3">Successes A Look at Our Projects</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="800">
                            Explore our portfolio of successful projects that showcase the impact we've made
                            <br> in connecting top talent with leading organizations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="space60"></div>

            <!-- Carousel Start -->
            <div class="project-two__carousel-container" data-aos="fade-up" data-aos-duration="900">
                <div
                    class="project-two__carousel owl-carousel owl-theme thm-owl__carousel project-style1-carousel owl-dot-style1">
                    <?php
                    // Define project items as an array of associative arrays
                    $projects = [
                        [
                            'image' => 'project1-img1.png',
                            'title' => 'Demonstrating Our Expertise',
                            'description' => 'Staffing Service',
                            'link' => site_url('/project-details')
                        ],
                        [
                            'image' => 'project1-img2.png',
                            'title' => 'Demonstrating Our Expertise',
                            'description' => 'Staffing Service',
                            'link' => site_url('/project-details')
                        ],
                        [
                            'image' => 'project1-img3.png',
                            'title' => 'Demonstrating Our Expertise',
                            'description' => 'Staffing Service',
                            'link' => site_url('/project-details')
                        ]
                    ];

                    // Loop through the projects to create slides
                    foreach ($projects as $project): ?>
                        <div class="project-two__single-box">
                            <ul class="project-two__box list-unstyled">
                                <li>
                                    <div class="project-two__box-content">
                                        <div class="single-project-two__bg"
                                            style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/project/' . $project['image']); ?>');">
                                        </div>
                                        <div class="img-holder-img-bg"></div>
                                        <div class="project-two__box-content-inner-icon">
                                            <a href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/service/service1-img1.png'); ?>"
                                                class="img-popup"><i class="icon-next"></i></a>
                                        </div>
                                        <div class="project-two__box-content-inner">
                                            <div class="project-two__box-content-inner-wrapper">
                                                <p><?php echo esc_html($project['description']); ?></p>
                                                <h4><a
                                                        href="<?php echo esc_url($project['link']); ?>"><?php echo esc_html($project['title']); ?></a>
                                                </h4>
                                            </div>
                                            <div class="icon">
                                                <a href="<?php echo esc_url($project['link']); ?>"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
    </div>
</section>
<!-- Project Area End -->



<!--=====PROJECT AREA END=======-->




<!--=====PROJECT AREA START=======-->

<!-- Project Area Start -->
<section class="project-two d-lg-block d-lg-none">
    <div class="project-two__bottom">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Our Project</span>
                        <h2 class="text-anime-style-3">Successes A Look at Our Projects</h2>
                        <div class="space16"></div>
                        <p>Explore our portfolio of successful projects that showcase the impact we've made
                            <br> in connecting top talent with leading organizations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="space60"></div>

            <!-- Carousel Start -->
            <div class="project-two__carousel-container">
                <div
                    class="project-two__carousel owl-carousel owl-theme thm-owl__carousel project-style1-carousel owl-dot-style1">
                    <?php
                    // Define project items as an array for dynamic content
                    $projects = [
                        [
                            'image' => 'project1-img1.png',
                            'title' => 'Demonstrating Our Expertise',
                            'description' => 'Staffing Service',
                            'link' => site_url('/project-details')
                        ],
                        [
                            'image' => 'project1-img2.png',
                            'title' => 'Demonstrating Our Expertise',
                            'description' => 'Staffing Service',
                            'link' => site_url('/project-details')
                        ],
                        [
                            'image' => 'project1-img3.png',
                            'title' => 'Demonstrating Our Expertise',
                            'description' => 'Staffing Service',
                            'link' => site_url('/project-details')
                        ]
                    ];

                    // Loop through the project items to create slides
                    foreach ($projects as $project): ?>
                        <div class="project-two__single-box">
                            <ul class="project-two__box project-two__box2 list-unstyled">
                                <li class="active">
                                    <div class="project-two__box-content project-two__box-content2">
                                        <div class="single-project-two__bg"
                                            style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/project/' . $project['image']); ?>');">
                                        </div>
                                        <div class="img-holder-img-bg"></div>
                                        <div class="project-two__box-content-inner-icon">
                                            <a href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/service/service1-img1.png'); ?>"
                                                class="img-popup"><i class="icon-next"></i></a>
                                        </div>
                                        <div class="project-two__box-content-inner">
                                            <div class="project-two__box-content-inner-wrapper">
                                                <p><?php echo esc_html($project['description']); ?></p>
                                                <h4><a
                                                        href="<?php echo esc_url($project['link']); ?>"><?php echo esc_html($project['title']); ?></a>
                                                </h4>
                                            </div>
                                            <div class="icon">
                                                <a href="<?php echo esc_url($project['link']); ?>"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
    </div>
</section>
<!-- Project Area End -->


<!--=====PROJECT AREA END=======-->



<!--=====WORK AREA START=======-->

<!-- Work Area Start -->
<div class="work1 sp">
    <div class="container">
        <div class="row align-items-center">
            <!-- Work Image Section -->
            <div class="col-lg-6">
                <div class="work-img reveal overlay-anim">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/work/work1-image.png'); ?>"
                        alt="Work Image">
                </div>
            </div>

            <!-- Work Content Section -->
            <div class="col-lg-6">
                <div class="heading1 work1-heading">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Recruitment Technologies</span>
                    <h2 class="text-anime-style-3">Solving Recruitment Using Technology</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="900">
                        Whether you're seeking temporary assignments, placements, or executive-level positions, our
                        curated solutions provide expertise in staffing.
                    </p>

                    <div class="space10"></div>

                    <!-- Work Boxes -->
                    <div class="" data-aos="fade-left" data-aos-duration="900">
                        <div class="work1-box">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/work1-icon1.png'); ?>"
                                    alt="Sourcing the Best Icon">
                            </div>
                            <div class="heading1">
                                <h4><a href="<?php echo esc_url(site_url('/service-details')); ?>">Sourcing the Best</a>
                                </h4>
                                <p>Stay tuned for regular updates and valuable insights from our team of staffing
                                    experts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="" data-aos="fade-left" data-aos-duration="700">
                        <div class="work1-box">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/work1-icon2.png'); ?>"
                                    alt="Volume Hiring Icon">
                            </div>
                            <div class="heading1">
                                <h4><a href="<?php echo esc_url(site_url('/service-details')); ?>">Volume Hiring</a>
                                </h4>
                                <p>Remember to keep your blog content informative, engaging, and relevant to your target
                                    audience.</p>
                            </div>
                        </div>
                    </div>

                    <div class="" data-aos="fade-left" data-aos-duration="1100">
                        <div class="work1-box">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/work1-icon3.png'); ?>"
                                    alt="Partners in Team Building Icon">
                            </div>
                            <div class="heading1">
                                <h4><a href="<?php echo esc_url(site_url('/service-details')); ?>">Partners in Team
                                        Building</a></h4>
                                <p>This will help drive traffic to your website & establish your agency as a trusted
                                    authority.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Work Area End -->


<!--=====WORK AREA END=======-->


<!--=====TESTIMONIAL AREA START=======-->

<!-- Testimonial Area Start -->
<div class="tes1 sp">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="heading1">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="800">Testimonial</span>
                    <h2 class="text-anime-style-3">Real Stories, Real Results</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="800">
                        Discover why businesses trust us to find the right talent and candidates trust us to find the
                        perfect fit.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="tes7-buttons" data-aos="fade-right" data-aos-duration="900">
                    <button class="testimonial-prev-arrow1"><i class="fa-regular fa-arrow-left"></i></button>
                    <button class="testimonial-next-arrow1"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="space30"></div>

        <div class="row">
            <div class="tes1-slider" data-aos="fade-up" data-aos-duration="900">
                <?php
                // Array of testimonials
                $testimonials = [
                    [
                        'name' => 'Amir Jamil',
                        'position' => 'Vp, Daily Naws',
                        'image' => 'tes1-img1.png',
                        'feedback' => "“But don't just take our word for it—hear what our satisfied clients have to say. From Fortune 500 companies to small.”",
                        'stars' => 5
                    ],
                    [
                        'name' => 'Usman Khan',
                        'position' => 'Co Founder',
                        'image' => 'tes1-img2.png',
                        'feedback' => "“Our dedication to excellence, and commitment to building long-lasting partnerships have.”",
                        'stars' => 5
                    ]
                ];

                // Loop through each testimonial and output the HTML
                foreach ($testimonials as $testimonial): ?>
                    <div class="single-slider">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="stars">
                                    <?php for ($i = 0; $i < $testimonial['stars']; $i++): ?>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    <?php endfor; ?>
                                </ul>
                                <div class="pera">
                                    <p><?php echo esc_html($testimonial['feedback']); ?></p>
                                </div>
                                <div class="bottom-heading">
                                    <h4><a href="#"><?php echo esc_html($testimonial['name']); ?></a></h4>
                                    <p><?php echo esc_html($testimonial['position']); ?></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="tes1-image">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/testimonial/' . $testimonial['image']); ?>"
                                        alt="<?php echo esc_attr($testimonial['name']); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->



<!--=====TESTIMONIAL AREA END=======-->


<!--=====CONTACT AREA START=======-->

<!-- Contact Area Start -->
<div class="contact1 sp">
    <div class="container">
        <div class="row align-items-center">
            <!-- Contact Information -->
            <div class="col-lg-6">
                <div class="heading1-w">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Contact Us</span>
                    <h2 class="text-anime-style-3">Get in Touch Let's Start the Conversation</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="900">
                        We're here to help you find the right staffing solutions for your needs. Whether you're a
                        company looking to hire top talent or a candidate seeking your next career opportunity.
                    </p>

                    <!-- Contact Box 1 -->
                    <div class="" data-aos="fade-right" data-aos-duration="800">
                        <div class="contact1-box">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/contact-icon1.png'); ?>"
                                    alt="Phone Icon">
                            </div>
                            <div class="heading">
                                <p>Gives us a Call</p>
                                <a href="tel:123-456-7890">123-456-7890</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Box 2 -->
                    <div class="" data-aos="fade-right" data-aos-duration="1100">
                        <div class="contact1-box">
                            <div class="icon">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/contact-icon2.png'); ?>"
                                    alt="Email Icon">
                            </div>
                            <div class="heading">
                                <p>Send me Mail</p>
                                <a href="mailto:recrute@hotmail.com">recrute@hotmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact1-form" data-aos="zoom-out" data-aos-duration="900">
                    <div class="heading1">
                        <h3>Send us a Message</h3>
                        <div class="space16"></div>
                        <p>
                            Feel free to reach out to us with any questions, inquiries, or staffing requirements you may
                            have. Our experienced team is here to assist you.
                        </p>
                    </div>
                    <div class="space10"></div>

                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="number" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <textarea rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="button">
                                    <button type="submit" class="theme-btn1">
                                        Submit Now <span><i class="fa-solid fa-arrow-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->











<!--=====CONTACT AREA END=======-->

<!--=====TEAM AREA START=======-->
<!-- Team Area Start -->
<div class="team1 sp">
    <div class="container">
        <!-- Team Section Heading -->
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="heading1">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="800">Our Team</span>
                    <h2 class="text-anime-style-3">Get to Know Our Professionals</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-up" data-aos-duration="700">
                        We take pride in fostering a collaborative environment where innovation <br>
                        thrives and clients receive personalized attention at every step.
                    </p>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
            <?php
            // Array of team members
            $team_members = [
                [
                    'name' => 'Sameer Rizvi',
                    'position' => 'Senior Consultant',
                    'image' => 'team1-img1.png',
                    'social_links' => [
                        'instagram' => '#',
                        'facebook' => '#',
                        'linkedin' => '#',
                        'twitter' => '#'
                    ]
                ],
                [
                    'name' => 'Arshin Kulkarni',
                    'position' => 'VP, Finance',
                    'image' => 'team1-img2.png',
                    'social_links' => [
                        'instagram' => '#',
                        'facebook' => '#',
                        'linkedin' => '#',
                        'twitter' => '#'
                    ]
                ],
                [
                    'name' => 'Rachin Ravindra',
                    'position' => 'Senior Consultant',
                    'image' => 'team1-img1.png',
                    'social_links' => [
                        'instagram' => '#',
                        'facebook' => '#',
                        'linkedin' => '#',
                        'twitter' => '#'
                    ]
                ]
            ];

            // Loop through team members to output each one
            foreach ($team_members as $index => $member): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="team1-box overlay-anim" data-aos="zoom-in-up"
                        data-aos-duration="<?php echo 700 + ($index * 200); ?>">
                        <div class="image">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/team/' . $member['image']); ?>"
                                alt="<?php echo esc_attr($member['name']); ?>">
                        </div>
                        <div class="heading-area">
                            <div class="heading1">
                                <h4><a href="#"><?php echo esc_html($member['name']); ?></a></h4>
                                <p><?php echo esc_html($member['position']); ?></p>
                            </div>
                            <div class="icons">
                                <ul>
                                    <li><a href="<?php echo esc_url($member['social_links']['instagram']); ?>"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="<?php echo esc_url($member['social_links']['facebook']); ?>"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo esc_url($member['social_links']['linkedin']); ?>"><i
                                                class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="<?php echo esc_url($member['social_links']['twitter']); ?>"><i
                                                class="fa-brands fa-x-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Team Area End -->

<!--=====TEAM AREA END=======-->


<!--=====BLOG AREA START=======-->

<!-- Blog Area Start -->
<div class="blog1 sp">
    <div class="container">
        <!-- Blog Section Heading -->
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="heading1">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="800">Our Blog</span>
                    <h2 class="text-anime-style-3">Flash Your Source for Industry Updates</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-up" data-aos-duration="800">
                        Our blog serves as a valuable resource for both job seekers and employers, offering insightful
                        <br>
                        articles, industry trends, and expert tips on everything from resume building to interview
                        techniques.
                    </p>
                </div>
            </div>
        </div>

        <div class="space30"></div>

        <!-- Blog Posts Static -->
        <div class="row">
            <!-- First Blog Post -->
            <div class="col-lg-6">
                <div class="blog1-box overlay-anim" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="image">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/blog/blog1-img1.png'); ?>"
                            alt="Blog Post 1">
                    </div>
                    <div class="heading-area">
                        <div class="tags">
                            <a href="#"><img
                                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/date.png'); ?>"
                                    alt="Date Icon"> Apl 2, 2024</a>
                            <a href="#"><img
                                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/user.png'); ?>"
                                    alt="User Icon"> By Ethan Smith</a>
                        </div>
                        <div class="heading1">
                            <h4><a href="#">Get the Scoop: Our Latest News & Announcements</a></h4>
                            <div class="space16"></div>
                            <p>Whether you're looking to navigate your career path or enhance.</p>
                            <div class="blog1-border"></div>
                            <a href="#" class="learn">Learn More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Blog Post -->
            <div class="col-lg-6">
                <div class="blog1-box overlay-anim" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="image">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/blog/blog1-img2.png'); ?>"
                            alt="Blog Post 2">
                    </div>
                    <div class="heading-area">
                        <div class="tags">
                            <a href="#"><img
                                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/date.png'); ?>"
                                    alt="Date Icon"> Apl 2, 2024</a>
                            <a href="#"><img
                                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/user.png'); ?>"
                                    alt="User Icon"> By Ethan Smith</a>
                        </div>
                        <div class="heading1">
                            <h4><a href="#">Industry Insights: Latest News & Developments</a></h4>
                            <div class="space16"></div>
                            <p>Our blog serves as a valuable resource for both job seekers and employers.</p>
                            <div class="blog1-border"></div>
                            <a href="#" class="learn">Learn More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->



<!--=====BLOG AREA END=======-->


<!-- CTA Area Start -->
<div class="cta">
    <div class="container">
        <div class="row cta-border align-items-center">
            <!-- CTA Text Section -->
            <div class="col-lg-6">
                <div class="heading1-w">
                    <h2>Ready to Power up your Savings and Reliability?</h2>
                    <div class="space16"></div>
                    <p>
                        Feel free to customize this paragraph to better reflect the <br>
                        specific services offered by your IT solution & the unique benefits.
                    </p>
                </div>
            </div>

            <!-- Subscription Form Section -->
            <div class="col-lg-6">
                <div class="subscribe-area">
<form action="#">
                            <input type="email" placeholder="Email Address">
                          
                            <button type="submit" class="theme-btn1">Subscribe Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                          
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA Area End -->




<?php get_footer(); ?>