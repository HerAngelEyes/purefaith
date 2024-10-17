<?php
// Function to register menus
function register_my_menus() {
    register_nav_menus(
        array(
              'primary' => __('Primary Menu'),
            'footer'  => __('Footer Menu')   // Register the footer menu
        )
    );
}
add_action('init', 'register_my_menus');
function enqueue_slick() {
    // Enqueue Slick Carousel CSS
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/path/to/slick.css');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/path/to/slick-theme.css');

    // Enqueue jQuery (if not already included)
    wp_enqueue_script('jquery');

    // Enqueue Slick Carousel JS
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/path/to/slick.min.js', array('jquery'), null, true);
    
    // Custom script to initialize Slick Carousel
    wp_enqueue_script('custom-slick-init', get_template_directory_uri() . '/path/to/custom-slick-init.js', array('slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick');
