<?php
/**
 * custom functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom
 */

/**
 * Includes
 */
require get_template_directory() . '/inc/custom-admin.php';
require get_template_directory() . '/inc/custom-theme-options.php';
require get_template_directory() . '/inc/custom-functions.php';
require get_template_directory() . '/inc/custom-post-types.php';


/**
 * Enqueue scripts and styles.
 */
function custom_scripts() {

	wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
	wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/js/jquery-2.2.0.min.js', array(), '00001', true );
	wp_enqueue_script( 'custom-pace', get_template_directory_uri() . '/js/pace.min.js', array(), '00001', true );
	wp_enqueue_script( 'custom-typed', get_template_directory_uri() . '/js/typed.js', array(), '00001', true );
	wp_enqueue_script( 'custom-okvideo', get_template_directory_uri() . '/js/okvideo.js', array(), '00001', true );
	wp_enqueue_script( 'custom-main', get_template_directory_uri() . '/js/main.js', array(), '00001', true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );