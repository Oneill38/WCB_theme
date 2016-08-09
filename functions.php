<?php

if ( ! function_exists( 'oneill_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Shape 1.0
 */
function boxing_setup() {
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );

    // add post-formats to post_type 'page'
	add_post_type_support( 'page', 'post-formats' );
 
    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'main_menu' ),
    ) );
}
endif; // oneill_setup
add_action( 'after_setup_theme', 'boxing_setup' );

function wpbootstrap_scripts_with_jquery()
{
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style(get_template_directory_uri() . '/assets/css/wcb.css');
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Countdown Area',
        'id'            => 'countdown_area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


    

