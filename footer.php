<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Recharge Design
 */
?>
		</div><!-- #primary -->
	</div><!-- #main .grid-container .site-main -->
</div><!-- end content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="grid-container">	
			

			<div id="footer-one" class="grid-33 mobile-grid-100 widget footer-widget">
            	<?php if ( ! dynamic_sidebar('footer-1') ) : ?>

					<aside id="archives" class="widget">
						<h1 class="widget-title"><?php _e( 'Archives', 'recharge_design' ); ?></h1>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>

				<?php endif; // end footer widget area ?>
            </div>
            <!-- /footer-one -->

            <div id="footer-two" class="grid-33 mobile-grid-100 widget footer-widget">
            	<?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>

					<aside id="search" class="widget widget_search">
						<?php get_search_form(); ?>
					</aside>

				<?php endif; // end footer widget area ?>
            </div>
            <!-- /footer-one -->

            <div id="footer-three" class="grid-33 mobile-grid-100 site-info widget footer-widget">
            	<?php if ( ! dynamic_sidebar('footer-3') ) : ?>

	            	<?php do_action( 'recharge_design_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'recharge_design' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'recharge_design' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'recharge_design' ), 'Recharge Web Design', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>

				<?php endif; // end sidebar widget area ?>
            </div>
            <!-- /footer-one -->




		</div><!-- End #grid-container -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

<script>if (location.hostname === "localhost") { document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=2"></' + 'script>') }</script>

<!-- Testing
<script>
	$('.menu-toggle').click(function() {
		$('.menu-final-nav-container').addClass("pullDown");
	});
</script>
-->

</body>
</html>