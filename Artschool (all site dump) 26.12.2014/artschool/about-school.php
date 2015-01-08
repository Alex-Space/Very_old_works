<?php
/*
Template Name: About-school page
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
			<div class="four-photos">
				<a class="school-img1" href="<?php the_field('school-img1'); ?>" target="_blank" rel="prettyPhoto[gallery]">
					<img src="<?php the_field('school-img1'); ?>" alt="">
				</a>
				<a class="school-img2" href="<?php the_field('school-img2'); ?>" target="_blank" rel="prettyPhoto[gallery]">
					<img src="<?php the_field('school-img2'); ?>" alt="">
				</a>
				<a class="school-img3" href="<?php the_field('school-img3'); ?>" target="_blank" rel="prettyPhoto[gallery]">
					<img src="<?php the_field('school-img3'); ?>" alt="">
				</a>
				<a class="school-img4" href="<?php the_field('school-img4'); ?>" target="_blank" rel="prettyPhoto[gallery]">
					<img src="<?php the_field('school-img4'); ?>" alt="">
				</a>
			</div>
			<div class="about-school mCustomScrollbar _mCS_1" id="content_1">
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