<?php

if (! function_exists('webstorm_setup')){
    function webstorm_setup(){
        add_theme_support( 'title-tag' );
	    add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'webstorm_setup' );
}

// Подключение стилей и скриптов
function webstorm_scripts() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_script( 'webstorm-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', array( 'in_footer' => true, 'strategy'  => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'webstorm_scripts' );


// SVG icons functions and filters
require get_parent_theme_file_path( '/inc/icon-functions.php' );

// Remove unusable WP features
require get_parent_theme_file_path( '/inc/clean-wp-functions.php' );