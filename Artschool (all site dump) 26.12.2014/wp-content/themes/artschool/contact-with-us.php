<?php
/*
Template Name: Contact-with-us
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
	<div id="primary" class="site-content contact-with-us">
		<div id="content" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="reviews-box">
				<img src="<?php bloginfo("template_url") ?>/images/pencil.png" alt="">
				<a href="http://www.artschoolomsk.ru/?page_id=601">Отзывы</a>
			</div>
		
		
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="clear"></div>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>