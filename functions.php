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
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css', array(), false );
	wp_enqueue_script( 'webstorm-script', get_template_directory_uri() . '/assets/js/main.js', array(), false, array( 'in_footer' => true, 'strategy'  => 'defer' ) );
    wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&family=Roboto:wght@400;700&display=swap', false, null);
	wp_enqueue_style('fonts');
}
add_action( 'wp_enqueue_scripts', 'webstorm_scripts' );


// SVG icons functions and filters
require get_parent_theme_file_path( '/inc/icon-functions.php' );

// Remove unusable WP features
require get_parent_theme_file_path( '/inc/clean-wp-functions.php' );