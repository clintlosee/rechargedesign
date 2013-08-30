<?php
/**
 * The Template for displaying all single portfolio posts.
 *
 * @package Recharge Design
 */

get_header(); ?>


		<div id="content" class="" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php
			$custom = get_post_custom($post->ID);
			$link = $custom["link"][0];
			$desc = $custom["description"][0];
			$thumbpic = get_the_post_thumbnail($post->ID);
			$thumb = wp_get_attachment_image_src($post->ID);
		?>

		<div class="portfolio-page">
			<div class="grid-60 portfolio-image">
				<?php the_post_thumbnail('portfolio'); ?>
			</div>
			<div class="grid-40 portfolio-details">
				<h2><?php the_title(); ?></h2>
				<h3>What I Did:</h3>
					<?php the_content(); ?>
				
				<div class="web-link">
					<h4><a href="<?php echo $link; ?>" class="button" target="_blank">View Website</a><h4>
				</div>
			</div>
		</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->



<?php get_footer(); ?>