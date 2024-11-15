<!-- footer.php -->

<!--===== FOOTER AREA START =======-->

<footer class="footer1 _relative">
    <div class="container">
        <div class="row">
            <!-- Footer Logo and Social Links -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer-items footer-logo-area">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/logo/footer-logo1.png'); ?>"
                                alt="Footer Logo">
                        </a>
                    </div>
                    <div class="space20"></div>
                    <div class="heading1-w">
                        <p>Our goal is to demystify the process, address your concerns, and empower you with the
                            knowledge to embark.</p>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg col-md-6 col-12">
                <div class="single-footer-items">
                    <h3>Quick Links</h3>
                    <ul class="menu-list">
                        <li><a href="#">Staff Management</a></li>
                        <li><a href="#">Leadership Training</a></li>
                        <li><a href="#">Corporate Program</a></li>
                        <li><a href="#">Staffing Solutions</a></li>
                        <li><a href="#">Blog Standard</a></li>
                    </ul>
                </div>
            </div>

            <!-- Explore Links -->
            <div class="col-lg col-md-6 col-12">
                <div class="single-footer-items pl-5">
                    <h3>Explore</h3>
                    <ul class="menu-list">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(site_url('/about')); ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url(site_url('/service')); ?>">Service</a></li>
                        <li><a href="<?php echo esc_url(site_url('/testimonial')); ?>">Testimonial</a></li>
                        <li><a href="<?php echo esc_url(site_url('/contact')); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer-items">
                    <h3>Contact Us</h3>
                    <div class="contact-box">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/footer-icon1.png'); ?>"
                                alt="Phone Icon">
                        </div>
                        <div class="pera">
                            <a href="tel:+880123456789">+880 123 456 789</a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/footer-icon2.png'); ?>"
                                alt="Email Icon">
                        </div>
                        <div class="pera">
                            <a href="mailto:info@mail.com">info@mail.com</a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/icons/footer-icon3.png'); ?>"
                                alt="Address Icon">
                        </div>
                        <div class="pera">
                            <a href="#">8502 Preston Rd. <br> Inglewood, Maine 98380</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space70"></div>
    </div>

    <!-- Copyright Area -->
    <div class="copyright-area _relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="coppyright">
                        <p>© Copyright <?php echo date('Y'); ?> - Recrute. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<!--===== FOOTER AREA END =======-->


<?php wp_footer(); ?>
</body>

</html>