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
		<div id="content" class="grid-100" role="main">

			<?php $loop = new WP_Query( array( 'post_type' => 'Portfolio' ) ); ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<article class="portfolio-item grid-30 mobile-grid-100">
						<?php the_post_thumbnail('portfolio'); ?>
						<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article><!-- end portfolio-item -->

			<?php endwhile; ?>

			<?php //get_template_part( 'content', 'page' ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>


