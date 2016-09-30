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
    require_once('assets/wp_bootstrap_navwalker.php');
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
	wp_register_script( 'jQuery-Knob', get_template_directory_uri() . '/assets/js/jQuery-Knob/js/jquery.knob.js', array( 'jquery' ) );
    wp_register_script( 'wcb', get_template_directory_uri() . '/assets/js/wcb.js', array( 'jquery' ) );

    // For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_script( 'jQuery-Knob' );
    wp_enqueue_script( 'wcb' );
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

function twitter_widgets_init() {

    register_sidebar( array(
        'name'          => 'Twitter Area',
        'id'            => 'twitter_area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}

add_action( 'widgets_init', 'twitter_widgets_init' );

// Add Boxer Custom Post Type

add_action( 'init', 'register_cpt_boxer' );
function register_cpt_boxer() {
    $labels = array(
        'name' => _x( 'boxers', 'boxer' ),
        'singular_name' => _x( 'boxer', 'boxer' ),
        'all_items'           => __( 'All Boxers', 'boxer' ),
        'add_new' => _x( 'Add New', 'boxer' ),
        'add_new_item' => _x( 'Add New boxer', 'boxer' ),
        'edit_item' => _x( 'Edit boxer', 'boxer' ),
        'new_item' => _x( 'New boxer', 'boxer' ),
        'view_item' => _x( 'View boxer', 'boxer' ),
        'search_items' => _x( 'Search boxers', 'boxer' ),
        'not_found' => _x( 'No boxers found', 'boxer' ),
        'not_found_in_trash' => _x( 'No boxers found in Trash', 'boxer' ),
        'parent_item_colon' => _x( 'Parent boxers:', 'boxer' ),
        'menu_name' => _x( 'Boxers', 'boxer' ),
    );
    
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag', 'page-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'public'              => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'page'
    );
    register_post_type( 'boxer', $args );
};

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
    
    function cmb_sample_metaboxes( array $meta_boxes ) {
      // Start with an underscore to hide fields from custom fields list
      $prefix = '_cmb_';
      /**
       * Sample metabox to demonstrate each field type included
       */
      $meta_boxes['boxer_one_metabox'] = array(
        'id'         => 'boxer_one_metabox',
        'title'      => __( 'Boxer Info', 'cmb' ),
        'pages'      => array( 'boxer' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
        'fields'     => array(
                array(
                    'name' => 'Height',
                    'id' => $prefix . 'height',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Weight',
                    'id' => $prefix . 'weight',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Team',
                    'id' => $prefix . 'team',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Position',
                    'id' => $prefix . 'position',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Bio',
                    'desc' => 'Enter Boxers Bio',
                    'id' => $prefix . 'bio',
                    'type' => 'wysiwyg',
                    'options' => array(),
                ),
                array(
                    'name' => 'Headshot',
                    'desc' => 'Upload Boxer Picture',
                    'id' => $prefix . 'headshot',
                    'type' => 'file',
                    'allow' => array( 'attachment' ) // limit to just attachments with array( 'attachment' )
                ),
            ),
        );
        return $meta_boxes;
    }

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

  if ( ! class_exists( 'cmb_Meta_Box' ) )
    require_once 'Custom-Metaboxes-and-Fields-for-WordPress-master/init.php';

}

    

