<?php

add_theme_support( 'title-tag' );

function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/dist/output.css', array(), filemtime(get_template_directory() . '/dist/output.css'), 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

  


function register_custom_menus() {
    register_nav_menu('top-links', 'Top Header Links');
}
add_action('init', 'register_custom_menus');
