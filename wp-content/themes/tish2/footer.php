<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "body-content-wrapper" div and all content after.
 *
 */
?>
			<a href="#" class="scrollup"></a>

			<footer id="footer-main">

				<div id="footer-content-wrapper">

					<?php get_sidebar( 'footer' ); ?>

					<nav id="footer-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', ) ); ?>
					</nav>

					<div class="clear">
					</div>

					<div id="copyright">
						<p>
						 	<?php tish2_show_copyright_text(); ?> <a href="<?php echo esc_url( 'https://tishthemes.com/product/tish2' ); ?>"
						 		title="<?php esc_attr_e( 'Tish2 Theme', 'tish2' ); ?>">
								<?php esc_html_e('Tish2 Theme', 'tish2'); ?>
							</a> 
							<?php
								/* translators: %s: WordPress name */
								printf( __( 'Powered by %s', 'tish2' ), 'WordPress' ); ?>
						</p>
					</div><!-- #copyright -->
				</div><!-- #footer-content-wrapper -->

			</footer><!-- #footer-main -->

		</div><!-- #body-content-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>