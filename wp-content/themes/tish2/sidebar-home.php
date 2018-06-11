<?php
/**
 * The sidebar containing the main home columns widget areas
 *
 * @subpackage tish2
 * @author tishthemes
 * @since tish2 1.6.1
 *
 */
?>

<div id="home-cols">

	<div id="home-cols-inner">

		<?php if ( !dynamic_sidebar( 'homepage-widget-area' ) && is_customize_preview() ) : ?>

					<h2 class="sidebar-title">
						<?php esc_html_e('Homepage Widget', 'tish2'); ?>
					</h2><!-- .sidebar-title -->
					
					<div class="sidebar-after-title">
					</div><!-- .sidebar-after-title -->
					
					<div class="textwidget">
						<?php esc_html_e('This is the homepage widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Homepage Widget.', 'tish2'); ?>
					</div><!-- .textwidget -->
		
		<?php endif; // end of ! dynamic_sidebar( 'homepage-widget-area' )
			  ?>
		
		<div class="clear">
		</div><!-- .clear -->

	</div><!-- #home-cols-inner -->

</div><!-- #home-cols -->