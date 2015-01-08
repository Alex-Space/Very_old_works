<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo(template_directory); ?>/images/favicon.ico" type="image/x-icon">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
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
    <script type="text/javascript" src="http://vk.com/js/api/share.js?90" charset="windows-1251"></script>
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
      <img class="back-page" src="<?php bloginfo('template_url'); ?>/images/ar-left.png" alt="">
      <?php
      if(function_exists('bcn_display'))
      {
        bcn_display();
      }
      ?>

      </div>
      
    </div> 
    <div class="clear"></div>
    <div class="container container-fluid single-article">
    	
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="articles">
            <div class="articles-title">
              <div class="thumb-big">
                <?php if( get_field('thumb-big') ): ?>
                  <img src="<?php the_field('thumb-big'); ?>">
                  <?php else : ?>
                  <img src="<?php bloginfo('template_url'); ?>/images/big-img.jpg">
                <?php endif; ?>
              </div>
              
                <h2><?php the_title(); ?></h2>
                <span class="articles-date">
                  <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                  <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                 
                  <?php the_time('j.m.y') ?>
                </span>
              
              <div class="clear"></div>
                <div class="post-comments-box">
                  <div class="single-post-box">
                    <div class="articles-head">
                      <?php the_content(); ?>
                      <!-- Put this script tag to the place, where the Share button will be -->
                      <script type="text/javascript"><!--
                      document.write(VK.Share.button(false,{type: "round", text: "Сохранить"}));
                      --></script>
                      
                        <div class="tags-box">
                          <i class="fa fa-tag"></i><?php the_tags( $before, "|", $after ); ?>
                       
                        </div>
                       
                    </div>
                  </div>
                  <div class="comments">
                      <?php comments_template(); ?>
                  </div>
                  <div class="vk-comments-single">
                    <div id="vk_comments"></div>
                      <script type="text/javascript">
                      VK.Widgets.Comments("vk_comments", {limit: 10, width: "741", attach: "*"});
                      </script>
                  </div>
                </div>
                
              <div class="bottom-sidebar">
                <?php if(!dynamic_sidebar('sidebar-bottom')): ?>
                  <p>Здесь виджеты сайдбара</p>
                <?php endif; ?>
              </div> <!-- .bottom-sidebar -->
            </div>
          </div>
          
        <?php endwhile; ?>
        <?php endif; ?>
      
      
    
    

    </div>
<?php get_footer(); ?>