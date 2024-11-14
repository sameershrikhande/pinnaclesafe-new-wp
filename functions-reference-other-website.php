<?php
/**
 * Functions and definitions for Kadence Child Theme
 */
 
// Enqueue Styles and Scripts
function pinnacle_safe_enqueue_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap', false);
    
    // Enqueue CSS files from the child theme directory
    wp_enqueue_style('font-awesome-all', get_stylesheet_directory_uri() . '/assets/css/font-awesome-all.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/font-awesome-all.css'));
    wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/assets/css/flaticon.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/flaticon.css'));
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/owl.css'));
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/bootstrap.css'));
    wp_enqueue_style('fancybox', get_stylesheet_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/jquery.fancybox.min.css'));
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/animate.css'));
    wp_enqueue_style('color', get_stylesheet_directory_uri() . '/assets/css/color.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/color.css'));
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css'));
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/responsive.css'));

    


    // Enqueue JS files from the child theme directory
    wp_enqueue_script('jquery'); // WordPress includes jQuery by default
    wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/assets/js/owl.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow-js', get_stylesheet_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('validation-js', get_stylesheet_directory_uri() . '/assets/js/validation.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fancybox-js', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('appear-js', get_stylesheet_directory_uri() . '/assets/js/appear.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('countto-js', get_stylesheet_directory_uri() . '/assets/js/jquery.countTo.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'pinnacle_safe_enqueue_styles');


// Register Custom Post Types and Taxonomies
function pinnacle_safe_register_custom_post_types() {

    // Register 'Services' Custom Post Type
    $services_labels = array(
        'name' => __('Services', 'pinnaclesafe'),
        'singular_name' => __('Service', 'pinnaclesafe'),
        'menu_name' => __('Services', 'pinnaclesafe'),
        'add_new' => __('Add New Service', 'pinnaclesafe'),
        'edit_item' => __('Edit Service', 'pinnaclesafe'),
        'view_item' => __('View Service', 'pinnaclesafe'),
    );
    $services_args = array(
        'labels' => $services_labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true, // Enable Gutenberg editor
    );
    register_post_type('services', $services_args);

    // Register 'Solutions' Custom Post Type
    $solutions_labels = array(
        'name' => __('Solutions', 'pinnaclesafe'),
        'singular_name' => __('Solution', 'pinnaclesafe'),
        'menu_name' => __('Solutions', 'pinnaclesafe'),
        'add_new' => __('Add New Solution', 'pinnaclesafe'),
        'edit_item' => __('Edit Solution', 'pinnaclesafe'),
        'view_item' => __('View Solution', 'pinnaclesafe'),
    );
    $solutions_args = array(
        'labels' => $solutions_labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'solutions'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );
    register_post_type('solutions', $solutions_args);

    // Register 'Products' Custom Post Type
    $products_labels = array(
        'name' => __('Products', 'pinnaclesafe'),
        'singular_name' => __('Product', 'pinnaclesafe'),
        'menu_name' => __('Products', 'pinnaclesafe'),
        'add_new' => __('Add New Product', 'pinnaclesafe'),
        'edit_item' => __('Edit Product', 'pinnaclesafe'),
        'view_item' => __('View Product', 'pinnaclesafe'),
    );
    $products_args = array(
        'labels' => $products_labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true, // Enable Gutenberg editor
    );
    register_post_type('products', $products_args);

    // Register 'Projects' Custom Post Type
    $projects_labels = array(
        'name' => __('Projects', 'pinnaclesafe'),
        'singular_name' => __('Project', 'pinnaclesafe'),
        'menu_name' => __('Projects', 'pinnaclesafe'),
        'add_new' => __('Add New Project', 'pinnaclesafe'),
        'edit_item' => __('Edit Project', 'pinnaclesafe'),
        'view_item' => __('View Project', 'pinnaclesafe'),
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

    // Register 'Knowledge Hub' Custom Post Type
    $knowledge_labels = array(
        'name' => __('Knowledge Hub', 'pinnaclesafe'),
        'singular_name' => __('Article', 'pinnaclesafe'),
        'menu_name' => __('Knowledge Hub', 'pinnaclesafe'),
        'add_new' => __('Add New Article', 'pinnaclesafe'),
        'edit_item' => __('Edit Article', 'pinnaclesafe'),
        'view_item' => __('View Article', 'pinnaclesafe'),
    );
    $knowledge_args = array(
        'labels' => $knowledge_labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'knowledge-hub'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );
    register_post_type('knowledge_hub', $knowledge_args);

    // Register 'Expert Content' Custom Post Type
    $expert_content_labels = array(
        'name' => __('Expert Content', 'pinnaclesafe'),
        'singular_name' => __('Expert Content', 'pinnaclesafe'),
        'menu_name' => __('Expert Content', 'pinnaclesafe'),
        'add_new' => __('Add New Expert Content', 'pinnaclesafe'),
        'edit_item' => __('Edit Expert Content', 'pinnaclesafe'),
        'view_item' => __('View Expert Content', 'pinnaclesafe'),
    );
    $expert_content_args = array(
        'labels' => $expert_content_labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'expert-content'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );
    register_post_type('expert_content', $expert_content_args);

    // Register Custom Taxonomies for Projects, Knowledge Hub, and Expert Content

    // Register Project Category
    register_taxonomy('project_category', array('projects'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Project Categories', 'pinnaclesafe'),
            'singular_name' => __('Project Category', 'pinnaclesafe'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'project-category'),
        'show_in_rest'      => true,
    ));

    // Register Project Tag
    register_taxonomy('project_tag', array('projects'), array(
        'hierarchical'          => false,
        'labels'                => array(
            'name'              => __('Project Tags', 'pinnaclesafe'),
            'singular_name'     => __('Project Tag', 'pinnaclesafe'),
        ),
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'project-tag'),
        'show_in_rest'          => true,
    ));

    // Register Knowledge Hub Category
    register_taxonomy('knowledge_hub_category', array('knowledge_hub'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Knowledge Hub Categories', 'pinnaclesafe'),
            'singular_name' => __('Knowledge Hub Category', 'pinnaclesafe'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'knowledge-hub-category'),
        'show_in_rest'      => true,
    ));

    // Register Knowledge Hub Tag
    register_taxonomy('knowledge_hub_tag', array('knowledge_hub'), array(
        'hierarchical'          => false,
        'labels'                => array(
            'name'              => __('Knowledge Hub Tags', 'pinnaclesafe'),
            'singular_name'     => __('Knowledge Hub Tag', 'pinnaclesafe'),
        ),
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'knowledge-hub-tag'),
        'show_in_rest'          => true,
    ));

    // Register Expert Content Category
    register_taxonomy('expert_content_category', array('expert_content'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Expert Content Categories', 'pinnaclesafe'),
            'singular_name' => __('Expert Content Category', 'pinnaclesafe'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'expert-content-category'),
        'show_in_rest'      => true,
    ));

    // Register Expert Content Tag
    register_taxonomy('expert_content_tag', array('expert_content'), array(
        'hierarchical'          => false,
        'labels'                => array(
            'name'              => __('Expert Content Tags', 'pinnaclesafe'),
            'singular_name'     => __('Expert Content Tag', 'pinnaclesafe'),
        ),
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'expert-content-tag'),
        'show_in_rest'          => true,
    ));



}
add_action('init', 'pinnacle_safe_register_custom_post_types');


// Register Sidebars
function pinnaclesafechild_widgets_init() {
    // Service Sidebar
    register_sidebar( array(
        'name'          => __('Service Sidebar', 'pinnaclesafe'),
        'id'            => 'service-sidebar',
        'description'   => __('Widgets in this area will be shown on service pages.', 'pinnaclesafe'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
    
    // Solutions Sidebar
    register_sidebar( array(
        'name'          => __('Solutions Sidebar', 'pinnaclesafe'),
        'id'            => 'solutions-sidebar',
        'description'   => __('Widgets in this area will be shown on solutions pages.', 'pinnaclesafe'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );

    // Products Sidebar
    register_sidebar( array(
        'name'          => __('Products Sidebar', 'pinnaclesafe'),
        'id'            => 'products-sidebar',
        'description'   => __('Widgets in this area will be shown on product pages.', 'pinnaclesafe'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );

    // Projects Sidebar
    register_sidebar( array(
        'name'          => __('Projects Sidebar', 'pinnaclesafe'),
        'id'            => 'projects-sidebar',
        'description'   => __('Widgets in this area will be shown on project pages.', 'pinnaclesafe'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>',
    ) );
    
    // Knowledge Hub Sidebar (existing)
    register_sidebar(array(
        'name'          => __('Knowledge Hub Sidebar', 'pinnaclesafe'),
        'id'            => 'knowledge-hub-sidebar',
        'description'   => __('Widgets in this area will be shown on Knowledge Hub pages.', 'pinnaclesafe'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>',
    ));

    // Expert Content Sidebar (existing)
    register_sidebar(array(
        'name'          => __('Expert Content Sidebar', 'pinnaclesafe'),
        'id'            => 'expert-content-sidebar',
        'description'   => __('Widgets in this area will be shown on Expert Content pages.', 'pinnaclesafe'),
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>',
    ));
}
add_action( 'widgets_init', 'pinnaclesafechild_widgets_init' );


// Register Navigation Menus
function pinnaclesafe_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu Desktop', 'pinnaclesafe'),
        'mobile'  => __('Mobile Menu', 'pinnaclesafe'),
    ));
}
add_action('init', 'pinnaclesafe_register_menus');


// Include the Custom Walker Class : Menu Walker
// require_once get_stylesheet_directory() . '/inc/class-custom-walker.php';


function custom_excerpt($length = 30, $more = '...') {
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

function pinnaclesafe_add_cpt_archives_to_menu($items, $args) {
    // ... existing code ...
}
add_filter('wp_nav_menu_items', 'pinnaclesafe_add_cpt_archives_to_menu', 10, 2);
*/
?>
