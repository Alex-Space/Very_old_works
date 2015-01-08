<?php get_header(); ?>
	<div class="content search-page">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="article">
            <div class="articles-title">             
                
                <span class="articles-date">
					<i class="author-icon"></i><span class="author"><?php the_author(); ?></span>
					<span class="time-box"><?php the_time('j.m.y') ?></span>
				</span>
              	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <div class="clear"></div>
                <div class="post-comments-box">
                  <div class="single-post-box">
                    <div class="articles-head">
                      <?php the_content(); ?>
                      <a class="comment-img" href="<?php the_permalink() ?>#comments">
                        <?php comments_number('нет комментариев', '1 комменатрий', '% комментариев'); ?>
                      </a>
                      <?php the_tags( '<div class="tags-box"> Метки: ', "", '</div>' ); ?>
                    </div>
                  </div>
                  <div class="comments">
                    
					  	<?php comments_template(); ?>
					
                  </div>
                </div>

            </div>
          
          </div>
          
        <?php endwhile; ?>
        <?php endif; ?>
<?php get_footer(); ?>