<?php

/* Custom Skin for Home Slider */
add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
function new_royalslider_add_custom_skin($skins) {
      $skins['cwHomeSlider'] = array(
           'label' => 'The custom skin',
           'path' => get_stylesheet_directory_uri() . '/slider/cw-home-slider.css'  // get_stylesheet_directory_uri returns path to your theme folder
      );
      return $skins;
}

if ( ! function_exists('twentythirteen_body_class')) {
	function cwpress2014_body_class( $classes ) {
		if ( ! is_multi_author() )
			$classes[] = 'single-author';

		if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() && ! is_front_page())
			$classes[] = 'sidebar';

		if ( ! get_option( 'show_avatars' ) )
			$classes[] = 'no-avatars';

		return $classes;
	}
}


// This action runs after the theme is all setup
add_action('after_setup_theme', 'mychildtheme_new_filter');

// This removes the twentyten filter and replaces it with this childthemes filter
function mychildtheme_new_filter() {
       remove_filter('body_class', 'twentythirteen_body_class');
       add_filter('body_class', 'cwpress2014_body_class');
}

?>