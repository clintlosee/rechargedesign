<?php
/*
Template Name: Service Page
*/
?>

<?php
/**
 *
 * @package Recharge Design
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="grid-100 mobile-grid-100" id="services" role="main">

					<h3>Website Development</h3>

					<h3>WordPress Maintenance</h3>

					<h3>SEO Optimization</h3>

				</section>




				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
