<?php
/*
Template Name: Planeri page
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
                
                <div class="arch-news"><a href="http://www.artschoolomsk.ru/?page_id=498"><img src="http://www.artschoolomsk.ru/images/archive.png" alt="">Архив событий</a></div>
                <h2 class="news-p">Планэры</h2>
                <?php 
            
            $query = new WP_Query( array( 'post_type' => 'events', 'category_name' => 'planeri', 'paged'=>get_query_var('paged'), 'posts_per_page'=>'10'  ) );
            while ( $query->have_posts() ) { 
                $query->the_post();
                
                 ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php } ?>
             </div>
            <div class="pager12">
                <?php  
                wp_pagenavi( array( 'query' => $query ) );

            wp_reset_postdata();

                ?>
            </div>
            </div>
            
        </div><!-- .general-area -->
        </div><!-- #content -->
    </div><!-- #primary -->
    

<?php get_footer(); ?>