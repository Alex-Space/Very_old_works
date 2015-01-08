<?php
/*
Template Name: Archives-events page
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
        <?php navigation_left (); ?>
        <div id="content" role="main">
        
        <h2><?php the_title(); ?></h2>

        <?php
            $args = array(
                'post_type' => 'events'
            );
            $query = new WP_Query( array( 'post_type' => 'events', 'paged'=>get_query_var('paged'), 'posts_per_page'=>'20'  ) );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();?>
                    <li><?php the_time('d.m.y') ?>  |  <a  href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></li>
              <?php  }
            }
            wp_reset_postdata();
        ?>
        <?php  
                wp_pagenavi( array( 'query' => $query ) );

            wp_reset_postdata();

                ?>
        </div><!-- #content -->
    </section><!-- #primary -->

<?php get_footer(); ?>