<?php
/*
Template Name: Archives page
*/
?>
<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
<?php while(have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<ul>
<?php
$myposts = get_posts('numberposts=all&offset=0');
foreach($myposts as $post) :
?>
<li><?php the_time('d.m.y') ?>  |  <a  href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></li>
<?php  endforeach;  ?>
</ul>
<?php  endwhile;  ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>