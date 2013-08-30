<?php
/**
 * Recharge Design functions and definitions
 *
 * @package Recharge Design
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 654; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'recharge_design_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function recharge_design_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Recharge Design, use a find and replace
	 * to change 'recharge_design' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'recharge_design', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'recharge_design' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // recharge_design_setup
add_action( 'after_setup_theme', 'recharge_design_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function recharge_design_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'recharge_design_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'recharge_design_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function recharge_design_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'recharge_design' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'recharge_design_widgets_init' );

/**
 * Implement the Portfolio Custom Post Type
*/
require_once('portfolio-manager.php');

/* Force WordPress to rewrite properly */
add_action('init', 'portfolio_rewrite');
function portfolio_rewrite() {
	global $wp_rewrite;
	$wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
	add_rewrite_rule('typename/([0-9]{4})/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
	$wp_rewrite->flush_rules();
}

/**
 * Enqueue scripts and styles
 */
function recharge_design_scripts() {
	wp_enqueue_style ( 'Unsemantic Grid', get_template_directory_uri() . '/css/unsemantic-grid-responsive.css' );
	wp_enqueue_style ( 'Animations', get_template_directory_uri() . '/css/animations.css' );
	wp_enqueue_style( 'Recharge Design-style', get_stylesheet_uri() );

	wp_enqueue_script( 'Recharge Design-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'Recharge Design-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'Recharge Design-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	if ( is_page('WordPress Maintenance')) {
		wp_enqueue_style ( 'Tooltips', get_template_directory_uri() . '/css/css-tooltips.css' );
	}
	
	//wp_enqueue_script( 'Quicksand', get_template_directory_uri() . '/js/quicksand.js', 'jquery' );
	//wp_enqueue_script( 'Custom', get_template_directory_uri() . '/js/custom.js', 'jquery', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'recharge_design_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );


/**************************/
/* Include LayerSlider WP */
/**************************/  
// Path for LayerSlider WP main PHP file 
$layerslider = get_stylesheet_directory() . '/plugins/LayerSlider/layerslider.php';   
// Check if the file is available to prevent warnings 
if(file_exists($layerslider)) {       

	// Include the file     
	include $layerslider;       

	// Get last version number, defaults to 1.0     
	$layerslider_last_version = get_option('layerslider_last_version', '1.0');       

	// Activate the plugin if necessary     
	if(get_option('rechargedesign_layerslider_activated', '0') == '0') {           

		// Run activation script         
		layerslider_activation_scripts();           

		// Save a flag that it is activated, so this won't run again         
		update_option('rechargedesign_layerslider_activated', '1');           

		// Save the current version number of LayerSlider         
		update_option('layerslider_last_version', $GLOBALS['lsPluginVersion']);       

	// Do version check     
	} else if(version_compare($GLOBALS['lsPluginVersion'], $layerslider_last_version, '>')) {           

		// Run again activation scripts for possible adjustments         
		layerslider_activation_scripts();           

		// Update the version number         
		update_option('layerslider_last_version', $GLOBALS['lsPluginVersion']);     
	} 
} 

// Register your custom function to override some LayerSlider data     
add_action('layerslider_ready', 'my_layerslider_overrides');       

 // Define your function     
 function my_layerslider_overrides() {                   
 	// Items to override         
 	$GLOBALS['lsPluginPath'] = get_stylesheet_directory_uri() . '/plugins/LayerSlider/';         
 	$GLOBALS['lsAutoUpdateBox'] = false;     
 }

 // Register Footer Widget Areas
 function rcd_widgets_init() {
register_sidebar( array(
    'name' => __( 'Footer Area 1', 'rcd' ),
    'id' => 'footer-1',
    'description' => __( 'The left side widget area in the footer', 'rcd' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' =>__( 'Footer Area 2', 'rcd'),
    'id' => 'footer-2',
    'description' => __( 'The middle widget area in the footer', 'rcd' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' =>__( 'Footer Area 3', 'rcd'),
    'id' => 'footer-3',
    'description' => __( 'The right side widget area in the footer', 'rcd' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
}
 
add_action( 'widgets_init', 'rcd_widgets_init' );
