<?php
add_action( 'wp_enqueue_scripts', 'screenmed_styles' );
add_action( 'wp_enqueue_scripts', 'screenmed_scripts' );

function screenmed_styles() {
    wp_enqueue_style( 'slider-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    /* wp_enqueue_style( 'childhood-style', get_stylesheet_uri() ); */
    wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css');
}

function screenmed_scripts() {
    wp_enqueue_script( 'screenmed-scripts', get_template_directory_uri() . './assets/js/bundle.js', array(), '1.0.0', true );
}
add_theme_support( 'custom-logo' );
?>