<?php
/*
Template Name: Igroteka
*/
?>
<?php get_header(); ?>
    <div class="clear"></div>
    <div class="container container-fluid igroteka-page">
    	<div class="tag-cloud-box">
    		<?php wp_tag_cloud('include=20,21,22,23,24,25,26,27,28,29,30,15,31,32,33,34,35,17,16,36,37,38,39,40,41'); ?>
    	</div>
    	<div class="igroteka-box">
			<?php $query99 = new WP_Query( array( 'post_type'=>'igroteka', 'posts_per_page'=> 16, 'paged'=>get_query_var('paged')) );
	            if (is_object($query99)) : while ($query99->have_posts()) : $query99->the_post(); ?>
	                <div class="articles">
	                  	<div class="articles-title">
	                    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                  	</div>
	                  	<div class="clear"></div>
	                  	<div class="articles-thumbnail">
		                    <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
		                    <a href="<?php the_permalink(); ?>">
			                    <?php if(has_post_thumbnail()): ?>
			                      <?php the_post_thumbnail(); ?>
			                    <?php else: ?>
			                      <img src="<?php bloginfo('template_url'); ?>/images/igro-img.jpg" alt="thumbnail">
			                    <?php endif; ?>
		                    </a>
	                  	</div>
	                  	
	                  <div class="articles-head"><?php the_excerpt('new_excerpt_length', 40); ?></div>
	                </div>
	        <?php endwhile; ?>
	        <?php endif; ?>
    	</div> <!-- .igroteka-box -->
    	
    	<div class="pager">
			<?php  
			wp_pagenavi( array( 'query' => $query99 ) );

			wp_reset_postdata();	// avoid errors further down the page ?>
		</div>
    
    </div> <!-- .igroteka-page -->
    
<?php get_footer(); ?>