<?php
// Function to register menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'), // Name of the menu
        )
    );
}
add_action('init', 'register_my_menus');
