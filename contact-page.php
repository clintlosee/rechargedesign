<?php
/*
Template Name: Contact Page
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

				<section class="grid-100 mobile-grid-100" id="contact" role="main">

					<div class="grid-30" id="contact-info">
						<h3>Contact Info</h3>
						
						<p>337 East 6280 South<br />
						Murray, UT 84107<br />
						USA</p>
						
						<p>Phone: (801) 369-6511<br />
						Email: clint@rechargedesign.com<br />
						Web: rechargedesign.com<br />
					</div><!-- End #contact-info -->


					<div class="grid-70" id="contact-form">
						<h3>Let&#8217;s keep in touch</h3>
						<?php the_content(); ?>
					</div><!-- End #contact-form -->

				</section>		

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
