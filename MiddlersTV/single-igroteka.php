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
    <div class="container container-fluid single-article single-igroteka">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="articles">
				<div class="articles-title">
					<div class="thumb-big">
            <?php if( get_field('thumb-big') ): ?>
              <img src="<?php the_field('thumb-big'); ?>">
              <?php else : ?>
              <img src="<?php bloginfo('template_url'); ?>/images/big-img.jpg">
            <?php endif; ?>
            <div class="fields_game">
              <?php if( get_field('jan1') ): ?>
                <p>Жанр: <?php the_field('jan1'); ?> |</p>
              <?php endif; ?>
              <?php if( get_field('plat1') ): ?>
                <p> Платформа: <?php the_field('plat1'); ?> |</p>
              <?php endif; ?>
              <?php if( get_field('izd1') ): ?>
                <p> Издатель: <?php the_field('izd1'); ?> |</p>
              <?php endif; ?>
              <?php if( get_field('raz1') ): ?>
                <p> Разработчик: <?php the_field('raz1'); ?> |</p>
              <?php endif; ?>
              <?php if( get_field('dat1') ): ?>
                <p> Дата выхода: <?php the_field('dat1'); ?></p>
              <?php endif; ?>
            </div>
          </div>
          <h2><?php the_title(); ?></h2>
					<span class="articles-date">
						<img src="<?php bloginfo('template_url'); ?>/images/articles-autor.png" alt="author">
						<a class="author" href="<?php bloginfo('url'); ?>/members/<?php the_author(); ?>"><?php the_author(); ?></a>
						<?php the_time('j.m.y') ?>
					</span>
				</div>
				<div class="clear"></div>
				<div class="post-comments-box">
                  <div class="single-post-box">
                   
                      <?php the_content(); ?>

                      <!-- Put this script tag to the place, where the Share button will be -->
                      <script type="text/javascript"><!--
                      document.write(VK.Share.button(false,{type: "round", text: "Сохранить"}));
                      --></script>
                      
                        <div class="tags-box">
                          <i class="fa fa-tag"></i><?php the_tags( $before, "|", $after ); ?>
                       
                        </div>
                      
                  </div>
                  <div class="clear"></div>
                  <h2 class="screenshot-title">Скриншоты</h2>
                  <ul class="bxslider">
                        <li>
                          <?php if( get_field('screen1') ): ?>
                            <a class="fancybox" href="<?php the_field('screen1'); ?>"><img src="<?php the_field('screen1'); ?>" alt=""></a>
                          <?php else : ?>
                            <a class="prev-def" href="#"><img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt=""></a>
                          <?php endif; ?>

                          <?php if( get_field('screen2') ): ?>
                            <a class="fancybox" href="<?php the_field('screen2'); ?>"><img src="<?php the_field('screen2'); ?>" alt=""></a>
                          <?php else : ?>
                            <a class="prev-def" href="#"><img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt=""></a>
                          <?php endif; ?>

                          <?php if( get_field('screen3') ): ?>
                            <a class="fancybox" href="<?php the_field('screen3'); ?>"><img src="<?php the_field('screen3'); ?>" alt=""></a>
                          <?php else : ?>
                            <a class="prev-def" href="#"><img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt=""></a>
                          <?php endif; ?>
                          
                        </li>
                        <li>
                          <?php if( get_field('screen4') ): ?>
                            <a class="fancybox" href="<?php the_field('screen4'); ?>"><img src="<?php the_field('screen4'); ?>" alt=""></a>
                          <?php else : ?>
                            <a class="prev-def" href="#"><img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt=""></a>
                          <?php endif; ?>

                          <?php if( get_field('screen5') ): ?>
                            <a class="fancybox" href="<?php the_field('screen5'); ?>"><img src="<?php the_field('screen5'); ?>" alt=""></a>
                          <?php else : ?>
                            <a class="prev-def" href="#"><img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt=""></a>
                          <?php endif; ?>

                          <?php if( get_field('screen6') ): ?>
                            <a class="fancybox" href="<?php the_field('screen6'); ?>"><img src="<?php the_field('screen6'); ?>" alt=""></a>
                          <?php else : ?>
                            <a class="prev-def" href="#"><img src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt=""></a>
                          <?php endif; ?>
                          
                        </li>
                  </ul> 
                  <div class="comments">
                      <?php comments_template(); ?>
                  </div>
                  <div class="vk-comments-single">
                    <div id="vk_comments"></div>
                      <script type="text/javascript">
                      VK.Widgets.Comments("vk_comments", {limit: 10, width: "855px", attach: "*"});
                      </script>
                  </div>

        <div class="clear"></div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
    <div class="bottom-sidebar">
                <div class="articles-head">
                  <div class="articles-thumbnail">
                  
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/igro-img.jpg" alt="thumbnail">
                  <?php endif; ?>
                  
                </div>
                
                </div>
                <div class="buttons-box">
                  <a class="contact-us-link" href="http://middlerstv.ru/?p=83">Есть что добавить? Напиши нам!</a>
                </div>
                <?php if( get_field('os1') || get_field('proc1') || get_field('mem1') || get_field('vid1') || get_field('hdd1') || get_field('dir1')): ?>
                <div class="sistem-requires">
                  <h2>Минимальные требования</h2>
                  <?php if( get_field('os1') ): ?>
                    <p><span>ОС: </span><?php the_field('os1'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('proc1') ): ?>
                  <p><span>Процессор: </span><?php the_field('proc1'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('mem1') ): ?>
                  <p><span>Память: </span><?php the_field('mem1'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('vid1') ): ?>
                  <p><span>Видео: </span><?php the_field('vid1'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('hdd1') ): ?>
                  <p><span>HDD: </span><?php the_field('hdd1'); ?></p>
                  <?php endif; ?>
                  <?php if( get_field('dir1') ): ?>
                  <p><span>DirectX: </span><?php the_field('dir1'); ?></p>
                  <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php if( get_field('link-shop1') || get_field('link-shop2') || get_field('link-shop3') ): ?>
                  <div class="game-shops-box">
                    <h2>Купить игру</h2>
                    <?php if( get_field('link-shop1') ): ?>
                      <a href="<?php the_field('link-shop1'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/globalheader_logo.png" alt=""></a>
                    <?php endif; ?>
                    <?php if( get_field('link-shop2') ): ?>
                      <a href="<?php the_field('link-shop2'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header-logo.png" alt=""></a>
                    <?php endif; ?>
                    <?php if( get_field('link-shop3') ): ?>
                      <a href="<?php the_field('link-shop3'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/u_play.png" alt=""></a>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <div class="clear"></div>
                <h2 class="widgettitle last-games-list">Последние игры</h2>
                <ul class="last-games">
                  <?php $the_query = new WP_Query( array( 'post_type'=>'igroteka', 'posts_per_page'=> 16)); ?>
                  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                  <?php endwhile;?>
                </ul>
                <div class="relatedposts">  
                    <?php if(!dynamic_sidebar('igroteka-sidebar')): ?>
                      <p>Здесь виджеты сайдбара</p>
                    <?php endif; ?>
                </div> 
              </div> <!-- .bottom-sidebar -->
    </div>
</div>
<?php get_footer(); ?>