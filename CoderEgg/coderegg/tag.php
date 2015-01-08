<?php get_header(); ?>
  <div class="content tag-page">
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
                      <?php the_excerpt(); ?>
                      <a class="comment-img" href="<?php the_permalink() ?>#comments">
                        <?php comments_number('нет комментариев', '1 комменатрий', '% комментариев'); ?>
                      </a>
                      <a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
                      <div class="tags-box">
                        <?php the_tags( $before, "", $after ); ?> 
                      </div>
                    </div>
                  </div>
                </div>

            </div>
          
          </div>
          
        <?php endwhile; ?>
        <?php endif; ?>
        <?php  
          wp_pagenavi();
          wp_reset_postdata();  // avoid errors further down the page 
        ?>
<?php get_footer(); ?>