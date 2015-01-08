<?php
/*
Template Name: dostizhenia
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
			<div class="dostizhenia" id="content_1">
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