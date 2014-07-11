<?php
/*

Twitter area for the homepage.

*/
?>
<div class="farmers-market">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/farmer-skulls.svg" class="farmer">
</div>

<div class="home-twitter">
	<div class="entry-content">

	<?php echo do_shortcode('[sstfeed]'); ?>



	</div>
</div>