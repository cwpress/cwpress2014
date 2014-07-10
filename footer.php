<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<ul class="social-icons">
					<li><a href="https://twitter.com/cwpress" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://instagram.com/cwpress" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.facebook.com/commonwealthpress" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="http://vimeo.com/cwpress" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				</ul>
				<div class="copywright">&copy; COMMONWEALTH PRESS <?php echo date("Y"); ?></div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>