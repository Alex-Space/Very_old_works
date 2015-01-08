<?php
/*
Template Name:  vstupitelnie exameni
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
			<div class="d-carousel">
					      <ul class="carousel">
					        <?php if( get_field('history-img1') ): ?>
					        <li> <a href="<?php the_field('history-img1'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img1'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img2') ): ?>
					        <li> <a href="<?php the_field('history-img2'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img2'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img3') ): ?>
					        <li> <a href="<?php the_field('history-img3'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img3'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img4') ): ?>
					        <li> <a href="<?php the_field('history-img4'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img4'); ?>" alt="" /></a>
					        
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img5') ): ?>
					        <li> <a href="<?php the_field('history-img5'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img5'); ?>" alt="" /></a>
					         
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img6') ): ?>
					        <li> <a href="<?php the_field('history-img6'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img6'); ?>" alt="" /></a>
					          
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img7') ): ?>
					        <li> <a href="<?php the_field('history-img7'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img7'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img8') ): ?>
					        <li> <a href="<?php the_field('history-img8'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img8'); ?>" alt="" /></a>
					         
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img9') ): ?>
					        <li> <a href="<?php the_field('history-img9'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img9'); ?>" alt="" /></a>
					          
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img10') ): ?>
					        <li> <a href="<?php the_field('history-img10'); ?>" target="_blank" rel="prettyPhoto[gallery]"><img src="<?php the_field('history-img10'); ?>" alt="" /></a>
					         
					        </li>
					        <?php endif; ?>
					      </ul>
					    </div>
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>
