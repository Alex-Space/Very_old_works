<?php
/*
Template Name:  stranica chistaya s gorizontalnoy prokrutkoy
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
			<div class="chistaya-s-polunkom" id="content_1">
			 <div class="opisania-programm">
			 	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="articles home-page-article">
						<div class="articles-head">
							<?php the_content(); ?> 
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			 </div>
			
			</div>
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>