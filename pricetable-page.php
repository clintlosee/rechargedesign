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


		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="" id="">

					<div class="clearfix" id="">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div><!-- End -->

				<!-- Price Table include -->
				<?php include(TEMPLATEPATH . '/inc/price.php'); ?>

				</section>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->


<?php get_footer(); ?>
