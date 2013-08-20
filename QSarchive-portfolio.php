<?php
/*
Template Name: Portfolio
NEW*/
?>

<?php
/**
 *
 * @package Recharge Design
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="grid-100" role="main">

			


				<!-- Test Portfolio Page -->

			<ul class="filter clearfix">
				<li><strong>Filter:</strong></li>
				<li class="active"><a href="javascript:void(0)" class="all">All</a></li>
			
			<?php
				// Get the taxonomy
				$terms = get_terms('filter', $args);
				
				// set a count to the amount of categories in our taxonomy
				$count = count($terms); 
				
				// set a count value to 0
				$i=0;
				
				// test if the count has any categories
				if ($count > 0) {
					
					// break each of the categories into individual elements
					foreach ($terms as $term) {
						
						// increase the count by 1
						$i++;
						
						// rewrite the output for each category
						$term_list .= '<li><a href="javascript:void(0)" class="'. $term->slug .'">' . $term->name . '</a></li>';
						
						// if count is equal to i then output blank
						if ($count != $i)
						{
							$term_list .= '';
						}
						else 
						{
							$term_list .= '';
						}
					}
					
					// print out each of the categories in our new format
					echo $term_list;
				}
			?>

			</ul>

			<ul id="og-grid" class="portfolio-grid">
			
				<?php 
					// Query Out Database
					$wpbp = new WP_Query(array( 'post_type' => 'portfolio', 'posts_per_page' =>'-1' ) ); 
				?>
					
				<?php
					// Begin The Loop
					if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
				?>
					
				<?php 
					// Get The Taxonomy 'Filter' Categories
					$terms = get_the_terms( get_the_ID(), 'filter' ); 
				?>
								
					<li data-id="id-<?php echo $count; ?>" data-type="<?php foreach ($terms as $term) { echo strtolower(preg_replace('/\s+/', '-', $term->name)). ' '; } ?>">
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>  
          
				            <a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portfolio-thumb'); ?></a>  
				              
				        <?php endif;  ?>  
					</li>

					<?php $count++; // Increase the count by 1 ?>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
			
			</ul>















			

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>


