<?php

/**
 * Custom post type declaration - Works
 */
add_action( 'init', 'create_post_type' );

function create_post_type() {

/* --- WORKS ----*/
register_post_type(
    'work',   
    array(
        'label' => 'Works',
        'labels' => array(
            'name' => 'Works',
            'singular_name' => 'Work',
            'all_items' => 'All works',
            'add_new_item' => 'Add a new work',
            'edit_item' => 'Edit work',
            'new_item' => 'New work',
            'view_item' => 'See work',
            'search_items' => 'Search works',
            'not_found' => 'No work found',
            'not_found_in_trash'=> 'No works found in trash'
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


/* --- SHOTS ----*/
register_post_type(
    'shot',
    array(
        'label' => 'Shots',
        'labels' => array(
            'name' => 'Shots',
            'singular_name' => 'Shot',
            'all_items' => 'All shots',
            'add_new_item' => 'Add a new shot',
            'edit_item' => 'Edit shot',
            'new_item' => 'New shot',
            'view_item' => 'See shot',
            'search_items' => 'Search shots',
            'not_found' => 'No shot found',
            'not_found_in_trash'=> 'No shots found in trash'
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