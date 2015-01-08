<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo('name'); wp_title(); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-menu.css">
	<link href="<?php bloginfo('template_url'); ?>/css/gallery_5_skin.css" class="piro_style" media="screen" title="white" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php bloginfo(template_directory); ?>/favicon.ico" type="image/x-icon">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>
	
	<script src="<?php bloginfo('template_url'); ?>/js/toTop.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/animate-bg.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/pirobox.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/sliding_effect.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.spritely.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
	
	<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.3, //background opacity
			slideShow : true, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

	});
});
</script>
	
	
	
	
	<?php wp_head(); ?>
	<?php wp_footer(); ?>
</head>
<body>
<div class="experiment">
	
	
	<!------------- 
		Header area 
	-------------->
	
	<div class="cloud-02"></div>
	<div class="header">
		<div class="container rel h550">
			<img class="header-box" src="<?php bloginfo('template_url'); ?>/img/bg-sky-sun.png" alt="">
			
			<div class="nav rel">
			<a href="http://liquis.zz.mu/"><h1 class="nav-logo">Spaceliquis</h1></a>
			<ul id="nav">
				<li><a href="#us">Услуги</a></li>
				<li><a href="#port">Портфолио</a></li>
				<li><a href="#contacts">Контакты</a></li>
				<li><a href="#about-my-self">О себе</a></li>
			</ul>

			</div>

			<div class="responsive-menu">
				<a href="http://liquis.zz.mu/" class="nav-logo-responsive">Spaceliquis</a>
				<a class="drop-button" href="#"></a>
				<div class="dropdown">
					<ul id="sliding-navigation">
					<li class="sliding-element"><a href="#us"><i class="i-us"></i>Услуги</a></li>
					<li class="sliding-element"><a href="#port"><i class="i-port"></i>Портфолио</a></li>
					<li class="sliding-element"><a href="#contacts"><i class="i-cont"></i>Контакты</a></li>
					<li class="sliding-element"><a href="#about-my-self"><i class="i-about"></i>О себе</a></li>
				</ul>
				</div>
			</div>

			<div class="clear"></div>
			<img class="logo-top rel" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
			<div class="slogan-box rel"><p class="slogan">Нужна Web-верстка? Вы попали по адресу!</p></div> 
		</div>
		<div class="sea rel">
			<div class="header1"></div>
			<div class="header2"></div>
			<div class="header3"></div>
			<div class="header4"></div>
		</div>
	</div>
		
	<!------------- 
		Header area ends
	-------------->
	