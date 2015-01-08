<?php
/*
Template Name: Home
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   
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
    <script>
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
      <div class="menu-button-hider">
          <span class="white-line"></span>
          <span class="white-line"></span>
          <span class="white-line"></span>
          <span class="white-line"></span>
        </div>
      <div class="container container-fluid rel menu-fix-1275">
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
    </div> <!-- .top-box -->
    <div class="header-top">
      <div class="container container-fluid width95percent">
        <a class="logo-link" href="/"></a>
        <div class="slider-box">
          <?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?>
        </div>
        <div class="clear"></div>
       
      </div>
    </div> <!-- .header-top -->
    <div class="header-bottom">
      <div class="container container-fluid">
        <p class="slogan">Оставайтесь с нами на MiddlersTV ^^<p>
        <div class="social">
          <a class="social-link cybergame" href="http://cybergame.tv/n7kote/"></a>
          <a class="social-link youtube" href="https://www.youtube.com/middlerstv"></a>
          <a class="social-link cs2tv" href="http://sc2tv.ru/content/n7kote"></a>
          <a class="social-link twich" href="http://www.twitch.tv/n7kote"></a>
          <a class="social-link googgame" href="http://goodgame.ru/channel/n7kote"></a>
        </div>
      </div>  
    </div> <!-- .header-bottom -->
    <div class="clear"></div>
    
    <div class="container container-fluid home-page general-front-page width95percent">
      
      <div class="content-box">
        <!-- <div class="popular-authors-box">
          <a class="popular-authors" href="http://vk.com/id247682038">
            <img src="<?php bloginfo('template_url'); ?>/images/t1OlYA4fXlg.jpg" alt="thumbnail">
            <p>N7kote</p>
          </a>
          <a class="popular-authors" href="">
            <img src="<?php bloginfo('template_url'); ?>/images/ava-proba.jpg" alt="thumbnail">
            <p>Comrade11330</p>
          </a>
          <a class="popular-authors" href="">
            <img src="<?php bloginfo('template_url'); ?>/images/ava-proba.jpg" alt="thumbnail">
            <p>SeffeRot</p>
          </a>
          <a class="popular-authors" href="http://vk.com/id195858168"><img src="<?php bloginfo('template_url'); ?>/images/photos/balu.jpg" alt="thumbnail"><p>Ballu89</p></a>
          <a class="popular-authors" href="">
            <img src="<?php bloginfo('template_url'); ?>/images/ava-proba.jpg" alt="thumbnail">
            <p>Anonymous</p>
          </a>
        </div>  .popular-authors-box -->
        <div class="zag-box"><a class="cat-path zag-general-news" href="http://middlerstv.ru/?cat=6"><i class="fa fa-book"></i>Новости</a></div>
        <div class="news-block">
          <ul class="bxslider7">
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'na_glavnuyu', 'posts_per_page'=> 8) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(85, ""); ?> </div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'na_glavnuyu', 'posts_per_page'=> 8, 'offset' => 8) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(85, ""); ?> </div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'na_glavnuyu', 'posts_per_page'=> 8, 'offset' => 16) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                      <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(85, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'na_glavnuyu', 'posts_per_page'=> 8, 'offset' => 24) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                      <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(85, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
          </ul>
        </div> <!-- New block -->
        
        <ul class="bxslider slider-text1">
          <li>
            <div class="slider-column-box">
              <?php
                $query10 = new WP_Query( array( 'post_type'=>'text_slider1', 'posts_per_page'=> 1) );
                if (is_object($query10)) : while ($query10->have_posts()) : $query10->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 40); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="slider-column-box">
              <?php
                $query10 = new WP_Query( array( 'post_type'=>'text_slider1', 'posts_per_page'=> 1, 'offset' => 1) );
                if (is_object($query10)) : while ($query10->have_posts()) : $query10->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 40); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-column-box">
              <?php
                $query10 = new WP_Query( array( 'post_type'=>'text_slider1', 'posts_per_page'=> 1, 'offset' => 2) );
                if (is_object($query10)) : while ($query10->have_posts()) : $query10->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 40); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
          </li>
          <li>
            <div class="slider-column-box">
              <?php
                $query10 = new WP_Query( array( 'post_type'=>'text_slider1', 'posts_per_page'=> 1, 'offset' => 3) );
                if (is_object($query10)) : while ($query10->have_posts()) : $query10->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 40); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="slider-column-box">
              <?php
                $query10 = new WP_Query( array( 'post_type'=>'text_slider1', 'posts_per_page'=> 1, 'offset' => 4) );
                if (is_object($query10)) : while ($query10->have_posts()) : $query10->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 40); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-column-box">
              <?php
                $query10 = new WP_Query( array( 'post_type'=>'text_slider1', 'posts_per_page'=> 1, 'offset' => 5) );
                if (is_object($query10)) : while ($query10->have_posts()) : $query10->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
          </li>
        </ul> 
        <div class="zag-box"><a class="cat-path zag-general-news" href="http://middlerstv.ru/?cat=9"><i class="fa fa-gamepad"></i>Обзоры, рецензии, превью</a></div>
        <div class="obzors-block">
          <ul class="bxslider7">
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'obzors', 'posts_per_page'=> 3) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(140, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'obzors', 'posts_per_page'=> 3, 'offset' => 3) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(140, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'obzors', 'posts_per_page'=> 3, 'offset' => 6) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(140, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
          </ul>
        </div><!-- Obzors block -->


        <ul class="bxslider2 slider-text1">
          <li>
            <div class="slider-column-box">
              <?php
                $query11 = new WP_Query( array( 'post_type'=>'text_slider2', 'posts_per_page'=> 1) );
                if (is_object($query11)) : while ($query11->have_posts()) : $query11->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-column-box">
              <?php
                $query11 = new WP_Query( array( 'post_type'=>'text_slider2', 'posts_per_page'=> 1, 'offset' => 1) );
                if (is_object($query11)) : while ($query11->have_posts()) : $query11->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-column-box">
              <?php
                $query11 = new WP_Query( array( 'post_type'=>'text_slider2', 'posts_per_page'=> 1, 'offset' => 2) );
                if (is_object($query11)) : while ($query11->have_posts()) : $query11->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
          </li>
          <li>
            <div class="slider-column-box">
              <?php
                $query11 = new WP_Query( array( 'post_type'=>'text_slider2', 'posts_per_page'=> 1, 'offset' => 3) );
                if (is_object($query11)) : while ($query11->have_posts()) : $query11->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-column-box">
              <?php
                $query11 = new WP_Query( array( 'post_type'=>'text_slider2', 'posts_per_page'=> 1, 'offset' => 4) );
                if (is_object($query11)) : while ($query11->have_posts()) : $query11->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="slider-column-box">
              <?php
                $query11 = new WP_Query( array( 'post_type'=>'text_slider2', 'posts_per_page'=> 1, 'offset' => 5) );
                if (is_object($query11)) : while ($query11->have_posts()) : $query11->the_post(); ?>
                  <div class="articles home-page-article">
                    <div class="articles-head"><?php the_content('new_excerpt_length', 20); ?></div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
          </li>
        </ul>
        <div class="zag-box"><a class="cat-path zag-general-news" href="http://middlerstv.ru/?p=431"><i class="fa fa-video-camera"></i>Трансляции</a></div>
        <div class="translations-block">
          <ul class="bxslider7">
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'translation', 'posts_per_page'=> 3) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default2.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(140, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'translation', 'posts_per_page'=> 3, 'offset' => 3) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default2.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(140, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
            <li>
              
              <?php
                $query = new WP_Query( array( 'category_name'=>'translation', 'posts_per_page'=> 3, 'offset' => 6) );
                if (is_object($query)) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="articles home-page-article">
                      <div class="articles-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="articles-date">
                          <img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
                          <a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
                          <?php the_time('j.m.y') ?>
                        </span>
                      </div>
                      <div class="clear"></div>
                      <div class="articles-thumbnail">
                        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                          <img src="<?php bloginfo('template_url'); ?>/images/thumb-default2.jpg" alt="thumbnail">
                        <?php endif; ?>
                        <p class="podrobnee"><i class="fa fa-sign-out"></i>Подробнее</p>
                        </a>
                      </div>
                      <div class="articles-head"><?php the_content_limit(140, ""); ?></div>
                      <div class="comments-more">
                        
                        <span class="articles-comments"><i class="fa fa-comments"></i><?php comments_popup_link(); ?></span>
                      </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </li>
          </ul>
        </div><!-- Translations block -->
      </div> <!-- .content-box -->
      
      <div class="bottom-sidebar">
          <?php if(!dynamic_sidebar('sidebar-bottom')): ?>
            <p>Здесь виджеты сайдбара</p>
          <?php endif; ?>
      </div> <!-- .bottom-sidebar -->
      <div class="clear"></div>

    </div> <!-- .container -->
               
    
    <?php get_footer(); ?>
