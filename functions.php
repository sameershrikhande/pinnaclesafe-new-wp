<?php
/**
 * Functions and definitions for PinnacleSafe Child Theme
 */



// Enqueue Parent and Child Theme Styles
function childpinnaclesafe_enqueue_styles()
{
    // Load the parent theme stylesheet
    wp_enqueue_style('kadence-parent-style', get_template_directory_uri() . '/style.css');

    // Load the child theme stylesheet, making it dependent on the parent style
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('kadence-parent-style'));
}
add_action('wp_enqueue_scripts', 'childpinnaclesafe_enqueue_styles');



// Enqueue Styles and Scripts
function pinnaclesafe_enqueue_styles()
{
    // Enqueue Google Fonts
    // wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap', false);

    // Enqueue CSS files from the child theme directory

    // wp_enqueue_style('example', get_stylesheet_directory_uri() . '/assets/css/example.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/example.css'));

    // Enqueue CSS files from the child theme directory
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/assets/css/fontawesome.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/fontawesome.css'));
    wp_enqueue_style('magnific-popup-css', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/magnific-popup.css'));
    wp_enqueue_style('nice-select-css', get_stylesheet_directory_uri() . '/assets/css/nice-select.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/nice-select.css'));
    wp_enqueue_style('slick-slider-css', get_stylesheet_directory_uri() . '/assets/css/slick-slider.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/slick-slider.css'));
    wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/assets/css/aos.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/aos.css'));
    wp_enqueue_style('mobile-menu-css', get_stylesheet_directory_uri() . '/assets/css/mobile-menu.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/mobile-menu.css'));
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/main.css'));


    // Enqueue JS files from the child theme directory
    // wp_enqueue_script('jquery'); // WordPress includes jQuery by default
    wp_enqueue_script('jquery-3.6.0', get_stylesheet_directory_uri() . '/assets/js/jquery-3-6-0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('aos-js', get_stylesheet_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fontawesome-js', get_stylesheet_directory_uri() . '/assets/js/fontawesome.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mobile-menu-js', get_stylesheet_directory_uri() . '/assets/js/mobile-menu.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup-js', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick-slider-js', get_stylesheet_directory_uri() . '/assets/js/slick-slider.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gsap-js', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('countup-js', get_stylesheet_directory_uri() . '/assets/js/jquery.countup.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scrolltrigger-js', get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('splittext-js', get_stylesheet_directory_uri() . '/assets/js/Splitetext.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('smoothscroll-js', get_stylesheet_directory_uri() . '/assets/js/SmoothScroll.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('text-animation-js', get_stylesheet_directory_uri() . '/assets/js/text-animation.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('lineprogressbar-js', get_stylesheet_directory_uri() . '/assets/js/jquery.lineProgressbar.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tilt-js', get_stylesheet_directory_uri() . '/assets/js/tilt.jquery.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);


    // // Enqueue JS files from the child theme directory
    // wp_enqueue_script('jquery'); // WordPress includes jQuery by default
    // wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/assets/js/owl.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('wow-js', get_stylesheet_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('validation-js', get_stylesheet_directory_uri() . '/assets/js/validation.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('fancybox-js', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('appear-js', get_stylesheet_directory_uri() . '/assets/js/appear.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('countto-js', get_stylesheet_directory_uri() . '/assets/js/jquery.countTo.js', array('jquery'), '1.0.0', true);
    // wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'pinnaclesafe_enqueue_styles');






// Enqueue Styles and Scripts
// function companyname_enqueue_styles() {
//     // Enqueue Google Fonts
//     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap', false);

//     // Enqueue CSS files from the child theme directory

//     wp_enqueue_style('example', get_stylesheet_directory_uri() . '/assets/css/example.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/example.css'));


//     // Enqueue JS files from the child theme directory
//     wp_enqueue_script('jquery'); // WordPress includes jQuery by default
//     wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/assets/js/owl.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('wow-js', get_stylesheet_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('validation-js', get_stylesheet_directory_uri() . '/assets/js/validation.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('fancybox-js', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('appear-js', get_stylesheet_directory_uri() . '/assets/js/appear.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('countto-js', get_stylesheet_directory_uri() . '/assets/js/jquery.countTo.js', array('jquery'), '1.0.0', true);
//     wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'companyname_enqueue_styles');


// Register Custom Post Types and Taxonomies
function companyname_register_custom_post_types()
{



    register_post_type('products', $products_args);

    // Register 'Projects' Custom Post Type
    $projects_labels = array(
        'name' => __('Projects', 'companyname'),
        'singular_name' => __('Project', 'companyname'),
        'menu_name' => __('Projects', 'companyname'),
        'add_new' => __('Add New Project', 'companyname'),
        'edit_item' => __('Edit Project', 'companyname'),
        'view_item' => __('View Project', 'companyname'),
    );
    $projects_args = array(
        'labels' => $projects_labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );
    register_post_type('projects', $projects_args);

    // Register Custom Taxonomies for Projects, Knowledge Hub, and Expert Content

    // Register Project Category
    register_taxonomy('project_category', array('projects'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Project Categories', 'companyname'),
            'singular_name' => __('Project Category', 'companyname'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-category'),
        'show_in_rest' => true,
    ));

    // Register Project Tag
    register_taxonomy('project_tag', array('projects'), array(
        'hierarchical' => false,
        'labels' => array(
            'name' => __('Project Tags', 'companyname'),
            'singular_name' => __('Project Tag', 'companyname'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-tag'),
        'show_in_rest' => true,
    ));


}
add_action('init', 'companyname_register_custom_post_types');


// Register Sidebars
function companyname_widgets_init()
{

    // Projects Sidebar
    register_sidebar(array(
        'name' => __('Projects Sidebar', 'companyname'),
        'id' => 'projects-sidebar',
        'description' => __('Widgets in this area will be shown on project pages.', 'companyname'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title"><h4>',
        'after_title' => '</h4></div>',
    ));

}
add_action('widgets_init', 'companyname_widgets_init');


// Register Navigation Menus
function companyname_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu Desktop', 'companyname'),
        'mobile' => __('Mobile Menu', 'companyname'),
    ));
}
add_action('init', 'companyname_register_menus');


// Include the Custom Walker Class : Menu Walker
// require_once get_stylesheet_directory() . '/inc/class-custom-walker.php';


function custom_excerpt($length = 30, $more = '...')
{
    $excerpt = get_the_excerpt(); // Get the excerpt
    $excerpt = wp_trim_words($excerpt, $length, $more); // Trim words and add custom more text
    return $excerpt;
}





// Remove the filter functions if not needed anymore
// Comment out or remove the following lines
/*
function add_custom_post_type_archives_to_menu($items, $args) {
    // ... existing code ...
}
add_filter('wp_nav_menu_items', 'add_custom_post_type_archives_to_menu', 10, 2);

function pinnaclesafecompanyname_add_cpt_archives_to_menu($items, $args) {
    // ... existing code ...
}
add_filter('wp_nav_menu_items', 'companyname_add_cpt_archives_to_menu', 10, 2);
*/
?>