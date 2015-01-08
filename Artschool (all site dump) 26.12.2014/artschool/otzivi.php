<?php
/*
Template Name:  otzivi
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
		<div id="content" class="otzivi" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="spiski-klassov-obshee" id="content_1">
				<h2 class="otzivi-title"><?php the_title(); ?></h2>
			 <?php while ( have_posts() ) : the_post(); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
			
			</div>
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>