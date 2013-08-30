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
</div><!-- end primary content-area -->
</div><!-- end grid-container site-main -->

		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //the_content(); //get_template_part( 'content', 'page' ); ?>
			<section class="services" id="service-one">
				
				<div class="grid-container">
					
					<div class="grid-100 mobile-grid-100">	
						
						<div class="grid-60 alignleft">
						<h3>Website Development</h3>
							
							<div class="" id="webserviceinfo">
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
									Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero 
									sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
									Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero 
									sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							</div>
						</div>
							
							<div id="webserviceimg" class="grid-30 alignright"></div>
					
					</div>

				</div>

			</section>

			<section class="services" id="service-two">
				
				<div class="grid-container">
					
					<div class="grid-100 mobile-grid-100">
						<span class="entypo-tools entypoService grid-30"></span>

						<div class="alignright grid-60">
							<h3 class="">WordPress Maintenance</h3>
							
							<div class="" id="webserviceinfo">
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
									Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero 
									sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
									Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero 
									sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							</div>
						</div>
						
					</div>

				</div>

			</section>

			<section class="services" id="service-three">
				<div class="grid-container">
				    <div class="grid-100 mobile-grid-100">	
						
						<div class="grid-60 alignleft">
						<h3>SEO Consulting</h3>
							
							<div class="" id="webserviceinfo">
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
									Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero 
									sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
									Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero 
									sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							</div>
						</div>
							
							<span class="entypo-target entypoService grid-30"></span>
					
					</div>
				</div>
			</section>

			<div class="grid-container site-main">


				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		


<?php get_footer(); ?>