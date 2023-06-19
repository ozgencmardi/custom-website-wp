<?php

function enqueue_smooth_scroll() {
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_smooth_scroll');


function enqueue_mobile_menu() {
    wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_mobile_menu' );


add_filter('https_ssl_verify', '__return_false');


?>

