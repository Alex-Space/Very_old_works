<?php
/*
Template Name: Archives-sobitia page
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
<?php //начало выборки терминов для таксономии animal_cat
 $terms = get_terms( 'animal_cat', array(
    'orderby'    => 'count',
    'hide_empty' => 0
 ) );
 ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">
		<?php navigation_left (); ?>
<?php
// теперь выполняется запрос для каждого семейства животных
echo "<pre>";
print_r($terms);
echo "</pre>";
foreach( $terms as $term ) {
 
    // Определение запроса
    $args = array(
        'post_type' => 'animal',
        'animal_cat' => $term->slug
    );
    $query = new WP_Query( $args );
             
    // вывод названий записей в тегах заголовков
     echo'<h2>' . $term->name . '</h2>';
     
    // вывод списком заголовков записей
    echo '<ul>';
     
        // Начало цикла
        while ( $query->have_posts() ) : $query->the_post(); ?>
 
        <li class="animal-listing" id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
         
        <?php endwhile;
     
    echo '</ul>';
     
    // используем сброс данных записи, чтобы восстановить оригинальный запрос
    wp_reset_postdata();
 
} ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>