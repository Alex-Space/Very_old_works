<?php
/*
Template Name:  otdelenia obshee
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
			<div class="otdelenia-obshee-page" id="content_1">
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
			 <div class="recomend-materials">
			 	<a class="recom-icon rec-i-1" href="http://www.artschool1omsk.ru/?page_id=477">Расписание</a>
			 	<a class="recom-icon rec-i-2" href="http://www.artschool1omsk.ru/?page_id=602">Рекомендуемые материалы</a>
			 	<a class="recom-icon rec-i-3" href="https://www.youtube.com/channel/UCHwXIy8QQ4XmLjArxEl0p1A">Видео</a>
			 	<a class="recom-icon rec-i-4" href="http://www.artschool1omsk.ru/?page_id=40">Галерея</a>
			 </div>
			
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>