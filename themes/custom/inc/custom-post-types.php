<?php

/**
 * Custom post type declaration - Works
 */
add_action( 'init', 'create_post_type' );

function create_post_type() {

/* --- WORKS ----*/
register_post_type(
    'services',   
    array(
        'label' => 'Services',
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'all_items' => 'All services',
            'add_new_item' => 'Add a new service',
            'edit_item' => 'Edit service',
            'new_item' => 'New service',
            'view_item' => 'See service',
            'search_items' => 'Search services',
            'not_found' => 'No service found',
            'not_found_in_trash'=> 'No services found in trash'
        ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
        'title',
        'excerpt',
        'editor',
        'thumbnail'
    ),
    'has_archive' => false
    )
);

}

?>