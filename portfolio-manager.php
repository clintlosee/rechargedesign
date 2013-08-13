<?php

add_action('init', 'create_portfolio_post_type');

function create_portfolio_post_type() {
  register_post_type('portfolio', array( 
    'label' => __('Portfolio'),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'rewrite' => array('slug' => 'portfolio', 'with_front' => false),
    'has_archive' => true,
    'exclude_from_search' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'author', 'post-formats'),
    
      'labels' => array (
        'name' => __('Portfolio'),
        'singular_name' => __('Portfolio'),
        'add_new' => __('Add New Item'),
        'add_new_item' => __('Add New Portfolio Item'),
        'edit' => __('Edit'),
        'edit_item' => __('Edit Portfolio Item'),
        'new_item' => 'New Portfolio Item',
        'view' => 'View Portfolio',
        'view_item' => 'View Portfolio Item',
        'search_items' => 'Search Portfolio',
        'not_found' => 'No Test Found',
        'not_found_in_trash' => 'No Test Found in Trash',
        'parent' => 'Parent Test',
      )
    ) 
    ); 
}

if (function_exists('add_theme_support')) {
    add_theme_support('post_thumbnails');
    add_image_size('portfolio', 620, 270, true);
}


?>