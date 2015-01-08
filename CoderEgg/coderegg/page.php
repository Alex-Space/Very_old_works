<?php get_header(); ?>
	<div class="content single">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="article">
            <div class="articles-title">             
                
                <span class="articles-date">
					<i class="author-icon"></i><span class="author"><?php the_author(); ?></span>
					<span class="time-box"><?php the_time('j.m.y') ?></span>
				</span>
              	<h1><?php the_title(); ?></h1>
              <div class="clear"></div>
                <div class="post-comments-box">
                  <div class="single-post-box">
                    <div class="articles-head">
                      <?php the_content(); ?>
                      <?php the_tags( '<div class="tags-box"> Метки: ', "", '</div>' ); ?>
                    </div>
                  </div>
                  
                </div>

            </div>
          
          </div>
          
        <?php endwhile; ?>
        <?php endif; ?>
		<img src="<?php bloginfo('template_url'); ?>/images/15.jpg" id="bg" alt="">
<?php get_footer(); ?>