<?php
/*
Template Name: Front Page
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

				<section class="grid-100 mobile-grid-100" role="main">
					<div id="service-box" class="grid-100 mobile-grid-100">
						<h2><a href="<?php echo get_permalink( 1675 ); ?>">Services</a></h2>
							<ul>
								<li><h3><a href="<?php echo get_permalink( 1664 ); ?>"><span class="entypo-monitor entypoFront"></span><br />Website Development</a></h3></li> <!-- Enter Page ID to Link To -->
								<li><h3><a href="<?php echo get_permalink( 1666 ); ?>"><span class="entypo-tools entypoFront"></span><br />WordPress Maintenance</a></h3></li>
								<li><h3><a href="<?php echo get_permalink( 1665 ); ?>"><span class="entypo-target entypoFront"></span><br />SEO Optimization</a></h3></li>
							</ul>
					</div><!-- End #service-box -->
				
					<div id="work-box" class="grid-100 mobile-grid-100">
						<h2><a href="<?php echo get_permalink(  ); ?>">Portfolio</a></h2>
							<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ) ); ?>

							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

								
							<?php endwhile; ?>
					</div><!-- End #work-box -->
				</section>






				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>