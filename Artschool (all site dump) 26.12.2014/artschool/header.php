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
<link type="text/css" rel="stylesheet" href="http://www.artschool1omsk.ru/css/theatre.css"/>
<link rel="stylesheet" href="http://www.artschool1omsk.ru/css/prettyPhoto.css"/>
<link rel="stylesheet" media="all" href="http://www.artschool1omsk.ru/css/puritan.css" />
<link rel="stylesheet" type="text/css" href="http://www.artschool1omsk.ru/css/style2.css" media="all" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="http://www.artschool1omsk.ru/js/jquery.js"></script>
<script src="http://www.artschool1omsk.ru/js/common.js" type="text/javascript"></script>
<script src="http://www.artschool1omsk.ru/js/jquery.theatre.min.js" type="text/javascript"></script>
<script src="http://www.artschool1omsk.ru/js/photo_gal.js" type="text/javascript"></script>
<script src="http://www.artschool1omsk.ru/js/prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.artschool1omsk.ru/js/jquery.jcarousel.js"></script>

	
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
	<script type="text/javascript">
	  $(window).load(function() { // Run when everything is loaded (especially images)
	  $('#myExample').theatre({ //Initialize theatre
	  // For comlete list of possible settings visit http://www.webdevelopers.eu/shop/5/doc/index#wdx_Settings
	  'effect': '3d', // css3:stack effect and fall over to 3d effect for older browsers
	  'selector': 'img, embed, video', // for galleries we want to animage only images without the surrounding links
	  'paging': '.paging' // generate paging using element with class 'paging' as the template
	  });
	  });
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
		    // Initialise the first and second carousel by class selector.
			// Note that they use both the same configuration options (none in this case).
			jQuery('.d-carousel .carousel').jcarousel({
		        scroll: 1
		    });
		});
	</script>
	<!-- slider -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ideal-image-slider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/default.css">
    <style media="screen">
    #slider {
        max-width: 1000px;
        margin: 10px auto;
        height: 665px!important;
    }
    </style>
    <link rel="Stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/smoothDivScroll.css" />
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
				<li><a class="menu-icon i2" href="https://www.youtube.com/channel/UCHwXIy8QQ4XmLjArxEl0p1A"></a></li>
				<li><a class="menu-icon i3" href="http://www.artschool1omsk.ru/?page_id=40"></a></li>
				<li><a class="menu-icon i4" href="http://www.artschool1omsk.ru/?page_id=544"></a></li>
			</div>
			<div class="search-header">
				<?php get_search_form(); ?>
			</div>
</div>
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">