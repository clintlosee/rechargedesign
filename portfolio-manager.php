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
        'not_found' => 'No Portfolio Items Found',
        'not_found_in_trash' => 'No Portfolio Items in Trash',
        'parent' => 'Parent Test',
      )
    ) 
    ); 
}

if (function_exists('add_image_size')) {
    add_image_size('portfolio', 610, 430, true);
    add_image_size('portfolio-thumb', 230, 160, true);
    add_image_size('portfolio-square', 250, 250, true);
}

add_action("admin_init", "portfolio_manager_add_meta");

function portfolio_manager_add_meta() {
    add_meta_box("portfolio-meta", "Portfolio Options", 
        "portfolio_manager_meta_options", "portfolio",
        "normal", "high");
}

function portfolio_manager_meta_options() {
    global $post;
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;

    $custom = get_post_custom($post->ID);
    $link= $custom["link"][0];
    $desc= $custom["description"][0];
    ?>

    <style type="text/css">
    <?php include('css/portfolio_manager.css'); ?>
    </style>

    <div class="portfolio-manager-extras">
        
        <?php
            $link= ($link =="") ? "http://" : $link;
        ?>

        <div><label>Website:</label><input name="website" value="<?php echo $link; ?>" /></div>
        <div><label>Brief Description:</label><textarea name="description" value="<?php echo $desc; ?>"></textarea></div>
    </div>
    <?php
}

add_action('save_post', 'portfolio_manager_save_extras');

function portfolio_manager_save_extras() {
    global $post;

    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        //don't remove
        return $post_id;
    }else{
        update_post_meta($post->ID, "link",
            $_POST["website"]);
        update_post_meta($post->ID, "desc", 
            $_POST["description"]);
    }
}

function portfolio_filter()
{
    // Register the Taxonomy
    register_taxonomy(__( "filter" ), 
    
    // Assign the taxonomy to be part of the portfolio post type
    array(__( "portfolio" )), 
    
    // Apply the settings for the taxonomy
    array(
        "hierarchical" => true, 
        "label" => __( "Filter" ), 
        "singular_label" => __( "Filter" ), 
        "rewrite" => array(
                'slug' => 'filter', 
                'hierarchical' => true
                )
        )
    ); 
} // function: portfolio_filter taxonomy END

add_action( 'init', 'portfolio_filter', 0 );

?>