<?php
/**
 * The Template for displaying all single portfolio posts.
 *
 * @package Recharge Design
 */

get_header(); ?>

	<div id="primary" class="">
		<div id="content" class="" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="portfolio-page">
			<div class="grid-60">
				<?php the_post_thumbnail('portfolio'); ?>
			</div>
			<div class="grid-40 portfolio-details">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?> </p>

			</div>

			<?php //recharge_design_content_nav( 'nav-below' ); ?>
		</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>