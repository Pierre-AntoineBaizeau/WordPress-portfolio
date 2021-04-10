<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio_custom
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__('Theme: %1$s by %2$s.', 'portfolio-custom' ), 'portfolio-custom', 'Pierre-Antoine BAIZEAU' );
				?>
			</p>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio-custom' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'portfolio-custom' ), 'WordPress' );
				?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
