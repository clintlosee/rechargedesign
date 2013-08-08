<?php
/*
Template Name: Pricing Table Page
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

				<section class="" id="">

					<div class="clearfix" id="">
						<h3>Pricing Information and content below</h3>
						<?php the_content(); ?>
					</div><!-- End -->

				<!-- Price Table include -->
				<?php include(TEMPLATEPATH . '/inc/price.php'); ?>

				</section>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
