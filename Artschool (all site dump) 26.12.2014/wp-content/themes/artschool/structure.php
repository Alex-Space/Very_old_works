<?php
/*
Template Name: structure
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
			<div class="structure-page mCustomScrollbar _mCS_1" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="clear"></div>
					<div class="articles-head">
						<?php the_content(); ?>
						
						<a class="str-link1" href="http://www.artschoolomsk.ru/?page_id=215">Совет школы</a>
						<a class="str-link2" href="http://www.artschoolomsk.ru/?page_id=224">Педагогический совет</a>
						<a class="str-link3" href="http://www.artschoolomsk.ru/?page_id=212">Зам. директора по АХД</a>
						<a class="str-link4" href="http://www.artschoolomsk.ru/?page_id=594">Преподаватели</a>
						<a class="str-link5" href="http://www.artschoolomsk.ru/?page_id=145">Заведующий выставочной деятельностью</a>
						<a class="str-link6" href="http://www.artschoolomsk.ru/?page_id=139">Директор</a>
						<a class="str-link7" href="http://www.artschoolomsk.ru/?page_id=121">Зам.директора по УР</a>
						<a class="str-link8" href="http://www.artschoolomsk.ru/?page_id=226">Методический совет школы</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>


			
		</div><!-- .general-area -->
	</div><!-- #content -->
</div><!-- #primary -->
	

<?php get_footer(); ?>