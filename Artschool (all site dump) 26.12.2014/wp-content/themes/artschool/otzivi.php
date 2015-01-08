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
		<div class="otzivi" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="spiski-klassov-obshee" id="content_1">
				<h2 class="otzivi-title"><?php the_title(); ?></h2>
			 <?php while ( have_posts() ) : the_post(); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
			<!-- Put this script tag to the <head> of your page -->
			<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

			<script type="text/javascript">
			  VK.init({apiId: 4696152, onlyWidgets: true});
			</script>

			<!-- Put this div tag to the place, where the Comments block will be -->
			<div id="vk_comments"></div>
			<script type="text/javascript">
			VK.Widgets.Comments("vk_comments", {limit: 20, width: "959", attach: "*"});
			</script>
			
			</div>
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>