<?php
/*
Template Name: Portfolio
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

			<?php if (have_posts()) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //the_content(''); ?>
				test
			<?php endwhile; // end of the loop. ?>

			<?php query_posts('cat=1'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="portfolio-item">
					<?php the_title(); ?><br />
				</div>

			<?php endwhile; ?>
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
			
			<?php endif; ?>



			<?php //get_template_part( 'content', 'page' ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>