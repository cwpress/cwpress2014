<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- easy tabs  -->
	<script src="<?php echo site_url(); ?>/cwpress/wp-content/themes/cwpress2014/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>/cwpress/wp-content/themes/cwpress2014/js/jquery.hashchange.min.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>/cwpress/wp-content/themes/cwpress2014/js/jquery.easytabs.js" type="text/javascript"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	 <script type="text/javascript">
	$(document).ready(function(){
		$('#tab-container').easytabs({
			collapsible: true,
			transitionCollapse: 'fadeOut'
		});
		$('#shirt-tab-container').easytabs({
			
			transitionCollapse: 'fadeOut'
		});
		$('#sweatshirt-tab-container').easytabs({
			collapsible: true,
			transitionCollapse: 'fadeOut'
		});
		$('#poster-tab-container').easytabs({
			collapsible: true,
			transitionCollapse: 'fadeOut'
		});
		$('#sticker-tab-container').easytabs({
			collapsible: true,
			transitionCollapse: 'fadeOut'
		});
		$('#question-tab-container').easytabs({
			collapsible: true,
			transitionCollapse: 'fadeOut'
		});
	});
	</script>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			
			<?php /*
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a> */ ?>

			<div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/cwpress2014/images/nav-logo.png"></a></div>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		
		<div id="main" class="site-main">

		
		<?php if( is_front_page() ) {
			echo get_new_royalslider(2); 
		} elseif (is_page(5)) {
			//do nothing
		} else {
			echo get_new_royalslider(3);
		} ?>