<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="http://www.artschool1omsk.ru/css/style1.css">
<link rel="stylesheet" href="http://www.artschool1omsk.ru/css/css3_3d.css">
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="icon" type="image/x-icon" href="http://www.artschool1omsk.ru/images/favicon.ico" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="http://www.artschool1omsk.ru/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://www.artschool1omsk.ru/js/common.js" type="text/javascript"></script>

	
	<link href="http://www.artschool1omsk.ru/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
	<!-- custom scrollbars plugin -->
	<script src="http://www.artschool1omsk.ru/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>



</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="shtrih"></div>
		<div class="r-block">
			<hgroup>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="site-title">Детская<br> художественная школа №1<br> им.Саниных<br> Омск</h1></a>
		</hgroup>
		
		</div>
		<div class="nav">
			<ul class="menu">
				<li><a class="menu-icon i1" href="http://www.artschool1omsk.ru/"></a></li>
				<li><a class="menu-icon i2" href="#"></a></li>
				<li><a class="menu-icon i3" href="http://www.artschool1omsk.ru/?page_id=40"></a></li>
				<li><a class="menu-icon i4" href="#"></a></li>
			</div>
			<div class="search-header">
				<?php get_search_form(); ?>
			</div>
</div>
		
		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav> -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">