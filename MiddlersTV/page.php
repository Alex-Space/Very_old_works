<?php
/*
Template Name: Page
*/
?>
<?php get_header(); ?>
    <div class="clear"></div>
    <div class="container container-fluid page">
    	<div class="content-box">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="clear"></div>
					
					<div class="big-thumb">
						<?php if( get_field('big-page-img1') ) : ?>
							<img src="<?php the_field('big-page-img1'); ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
    	</div>
    	
		<div class="bottom-sidebar">
			<?php if(!dynamic_sidebar('sidebar-bottom')): ?>
				<p>Здесь виджеты сайдбара</p>
			<?php endif; ?>
		</div>
    </div>
    
<?php get_footer(); ?>