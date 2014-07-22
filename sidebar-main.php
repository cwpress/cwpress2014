<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="sidebar-container" role="complementary">
		<div class="widget-area">
		<div class="thanks">Thanks<br>for your<br>business</div>
		<div class="exist"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/exist2.png"></div>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #secondary -->
<?php endif; ?>