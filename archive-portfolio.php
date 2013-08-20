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

			<?php //$loop = new WP_Query( array( 'post_type' => 'Portfolio' ) ); ?>

			<?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!--
				<article class="portfolio-item grid-30 mobile-grid-100">
						<?php the_post_thumbnail('portfolio-thumb'); ?>
						<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article> end portfolio-item -->

			<?php //endwhile; ?>

			<?php //get_template_part( 'content', 'page' ); ?>







				<!-- Test Portfolio Page -->		

			<ul class="portfolio-grid">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php
				$custom = get_post_custom($post->ID);
				$link = $custom["link"][0];
				$desc = $custom["description"][0];
				//$fullpic = the_post_thumbnail('portfolio');
				$thumbpic = get_the_post_thumbnail($post->ID);
				$thumb = wp_get_attachment_image_src($post->ID);
			?>
			<?php if (has_post_thumbnail( $post->ID) ): ?>
			<?php 
				$imageLrg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'portfolio' );
				$image250 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'portfolio-thumb' );
			?>



			<!--
				<ul class="portfolio-item grid-25">
					<li>
						<a href="<?php the_permalink(); ?>" data-largesrc="<?php echo $imageLrg[0]; ?>" data-title="Azuki bean" data-description="<?php print $desc; ?>">
							<img src="<?php echo $image250[0]; ?>" alt="img01" />
						</a>
					</li>
				<?php //endif; ?>
				</ul>
-->

				
					<li>
						<a href="<?php the_permalink(); ?>" data-largesrc="<?php echo $imageLrg[0]; ?>" data-title="Azuki bean" data-description="<?php print $desc; ?>">
							<img src="<?php echo $image250[0]; ?>" alt="img01" />
						</a>
					</li>
				<?php endif; ?>
				
			
			<?php endwhile; endif; ?>
</ul>




			

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>


