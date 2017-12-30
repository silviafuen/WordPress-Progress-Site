<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Theme
 */

?>

			</div><!-- #content -->
		</div><!-- #site-content -->
	</div><!-- #main-content-area -->

	<div class="footer-area full">
		<div class="main-page">
			<footer id="colophon" class="site-footer inner">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'trial-theme' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'trial-theme' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'trial-theme' ), 'trial-theme', '<a href="http://silviafuentes.me">Silvia Fuentes</a>' );
					?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #main-page -->
	</div><!-- #footer-area -->

<?php wp_footer(); ?>

</body>
</html>
