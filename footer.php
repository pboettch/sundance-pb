<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Sundance
 * @since Sundance 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'sundance_credits' ); ?>

			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'sundance' ); ?>" rel="generator"><?php printf( __( '%s', 'sundance' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme %1$s by %2$s.', 'sundance' ), 'Sundance', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
			<span class="sep"> | </span>
			with modifcations made by <a href="https://github.com/pboettch/sundance-pb" target="_blank">me</a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
