<?php
/*
Template Name: Prepod page (no gallery)
*/
?>
<?php
/**
 * @author Alex Space
 *
 * @package WordPress
 * @subpackage rhsh
 * @since rhsh 1.0
 */
get_header(); ?>
<div id="primary" class="site-content prepod-page">
		<div id="content" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="foto-button-box">
				<div class="foto-inner">
					<div class="articles-thumbnail">
						<a href="<?php the_permalink(); ?>">
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<a href="images/lepestok.jpg" rel="prettyPhoto[gallery]" title="">
								<img style="width: 220px; height: 245px" src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
							</a>
						<?php endif; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="about-prepod" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="clear"></div>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>