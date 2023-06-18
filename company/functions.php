<?php

// Register the header widget area
function register_header_widget_area() {
    register_sidebar( array(
        'name'          => __( 'Header Widget Area', 'shop-local' ),
        'id'            => 'header-widget-area',
        'description'   => __( 'Add widgets for the header area', 'shop-local' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'register_header_widget_area' );


// Register the footer widget area
function register_footer_widget_area() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'shop-local' ),
        'id'            => 'footer-widget-area',
        'description'   => __( 'Add widgets for the footer area', 'shop-local' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'register_footer_widget_area' );


function enqueue_smooth_scroll() {
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_smooth_scroll');


function enqueue_mobile_menu() {
    wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_mobile_menu' );


function register_my_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('after_setup_theme', 'register_my_menu');


add_action('http_api_debug', 'my_http_api_debug', 10, 5);
function my_http_api_debug($response, $type, $class, $args, $url) {
    error_log(print_r($response, true));
    error_log(print_r($args, true));
}

add_filter('https_ssl_verify', '__return_false');


function register_primary_menu() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'shop.local' ),
        )
    );
}
add_action( 'after_setup_theme', 'register_primary_menu' );


add_theme_support( 'woocommerce' );


// Register a custom walker class for submenu
class Submenu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}

// Modify the primary menu to include submenu
function add_submenu_to_primary_menu($args) {
    if (has_nav_menu('primary-menu')) {
        $args['walker'] = new Submenu_Walker();
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'add_submenu_to_primary_menu');

?>

