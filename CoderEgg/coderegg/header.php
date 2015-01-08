<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>

	<link rel="icon" href="<?php bloginfo('template_url'); ?>/egg-mini.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/egg-mini.ico" type="image/x-icon" />

	<link href='http://fonts.googleapis.com/css?family=Exo+2:500&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.bxslider.css">
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
	
	<?php wp_head(); ?>
	<?php wp_footer(); ?>
</head>
<body>
	<div class="header">
		<a href="<?php bloginfo('home'); ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/egg.png" alt=""></a>
		<div class="search"><?php get_search_form(); ?> </div>
		<?php wp_nav_menu(); ?>
		<div class="drop-btn">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		
	</div>
