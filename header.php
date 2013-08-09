<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Recharge Design
 */
?><!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="grid-container">
			<hgroup class="grid-30 mobile-grid-100">
				<h1 class="site-title" id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</hgroup>

			<nav id="site-navigation" class="navigation-main grid-70 mobile-grid-100" role="navigation">
				<span class="menu-toggle"><?php _e( '<span class="entypo-menu entypoMenu">&nbsp;Menu</span>', 'recharge_design' ); ?></span>
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- end grid-container -->
	</header><!-- #masthead -->

	<section>

		<?php 
			if ( is_page('front-page')) {
				layerslider(3, 'homepage'); //insert LayerSlider : number is ID of slider
			}
		

		 //Responsive Google Map on Contact Page
			if ( is_page('Contact')) {
				echo '<div class="responsive-iframe-container">';
				echo '<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=murray,+ut&amp;aq=&amp;sll=39.499761,-111.547028&amp;sspn=6.492924,9.876709&amp;ie=UTF8&amp;hq=&amp;hnear=Murray,+Salt+Lake,+Utah&amp;t=m&amp;ll=40.671525,-111.886482&amp;spn=0.045569,0.072956&amp;z=13&iwloc=near&amp;output=embed"></iframe>';
				echo '</div>';
			}
		?>

	</section>

	<div id="main" class="grid-container content site-main">
