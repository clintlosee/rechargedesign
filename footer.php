<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Recharge Design
 */
?>

	</div><!-- #main .grid-container .content .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="grid-container">	
			<div class="site-info">
				<?php do_action( 'recharge_design_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'recharge_design' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'recharge_design' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'recharge_design' ), 'Recharge Web Design', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- End .grid-container -->
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