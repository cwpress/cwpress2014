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

	<div class="twitter-username"><a href="https://twitter.com/cwpress/">@CWPRESS</a></div>
	
	<?php echo do_shortcode('[sstfeed]'); ?>

	<ul>
		<li><a href="#">reply</a></li>
		<li><a href="#">retweet</a></li>
		<li><a href="#">favorite</a></li>
		<li><a href="#">follow</a></li>
	</ul>

	<a href="https://twitter.com/cwpress/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cw-twitter-icon.png"></a>

	</div>
</div>