<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo(template_directory); ?>/images/favicon.ico" type="image/x-icon">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>

    <script type="text/javascript">
      VK.init({apiId: 4536967, onlyWidgets: true});
    </script>
    <?php wp_head(); ?>
    
  </head>
  <body>
    <!-- <div class="covervid-wrapper">
      <video class="covervid-video" autoplay loop>
         <source src="<?php bloginfo('template_url'); ?>/videos/clouds.webm" type="video/webm">
          <source src="<?php bloginfo('template_url'); ?>/videos/clouds.mp4" type="video/mp4">
      </video>
    </div> -->
    <div class="top-box">
      <div class="container container-fluid rel">
        <!-- <a class="logo" href="#">Логотип</a> -->
        <?php if(!dynamic_sidebar('menu_header')): ?>
        <?php endif; ?>
        <div class="log-reg">
          <p>Вход/Регистрация</p>
          <div class="dropdown-log">
            <?php if(!dynamic_sidebar('menu-register')): ?>
            <?php endif; ?>
          </div>  
        </div>
        <div class="search"><?php get_search_form(); ?> </div>
      </div>
      <a class="vk" href="http://vk.com/middlerstv"></a>
    </div>
    <div class="container container-fluid">
      <div class="breadcrumb">
      <?php
      if(function_exists('bcn_display'))
      {
        bcn_display();
      }
      ?>
      </div>
    </div> 
    <div class="clear"></div>
    <div class="container container-fluid archive-igroteka">
    	<div class="content-box">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="one-post-box">
      <div class="articles-title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <img class="arrow-button-down" src="<?php bloginfo('template_url'); ?>/images/9aiqpp7cM.png" alt="">
      </div>
      <div class="articles">
				
				<div class="clear"></div>
				
				<div class="articles-head">
					<div class="articles-thumbnail">
          
          <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
            <?php else: ?>
              <img src="<?php bloginfo('template_url'); ?>/images/igro-img.jpg" alt="thumbnail">
            <?php endif; ?>
            <p class="podrobnee">Подробнее</p>
          </a>
          
        </div>
          
				</div>
				<?php the_content_limit(1550, " "); ?> 
				
			</div>
      </div>
      <div class="comments">
          <?php comments_template(); ?>
      </div>
		<?php endwhile; ?>
		<?php endif; ?>
    <div class="pager">
      <?php  
      wp_pagenavi();

      wp_reset_postdata();  // avoid errors further down the page ?>
    </div>
    </div> <!-- .content-box -->
    <div class="bottom-sidebar">
        <?php if(!dynamic_sidebar('sidebar-bottom')): ?>
          <p>Здесь виджеты сайдбара</p>
        <?php endif; ?>
    </div> <!-- .bottom-sidebar -->
    </div> <!-- .container -->

    <div class="clear"></div>
<?php get_footer(); ?>