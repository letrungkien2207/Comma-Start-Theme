<?php 
/*
	* This file use to defined Example Custom Post Type
*/
	function create_example_post_type() {
    $label = array(
        'name' => 'Example', 
        'singular_name' => 'example' 
    );

    $args = array(
        'labels' => $label,
        'description' => 'Post Type Example', 
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'show_in_nav_menus' => true, 
        'show_in_admin_bar' => true, 
        'menu_position' => 28, 
        'menu_icon' => 'dashicons-welcome-write-blog', 
        'can_export' => true, 
        'has_archive' => true, 
        'exclude_from_search' => false,
        'publicly_queryable' => true, 
        'capability_type' => 'post' 
    );
 
    register_post_type('example', $args);
 
}
add_action('init', 'create_example_post_type');