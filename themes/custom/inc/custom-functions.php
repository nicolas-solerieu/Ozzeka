<?php
/**
 * Custom functions
 */


/**
 * Thumbnails support
 */
add_theme_support( 'post-thumbnails' );

/**
 * Excerpt support
 */
add_post_type_support('page', 'excerpt');

/**
 * Remove admin entries
 */
if ( ! function_exists( 'remove_admin_entries' ) ) :
function remove_admin_entries() {
    remove_menu_page('edit-comments.php'); // Commentaires
}
endif;
add_action('admin_init', 'remove_admin_entries');
