<?php
/*
Template Name: History page
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
			<div class="hystory-page mCustomScrollbar _mCS_1" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="clear"></div>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
					<div class="history-catalog">
						<?php if( get_field('catalog-thumb') ): ?>
							<img class="red-mini-box" src="<?php the_field('catalog-thumb'); ?>" alt="">
						<?php endif; ?>
						<div class="catalog-box">
							<h2>Подробнее можно почитать об истории школы в катлоге посвящённому 50-летию школы</h2>
							<a href="<?php the_field('catalog-link'); ?>">Каталог на 50-летний юбилей</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="d-carousel">
					      <ul class="carousel">
					        <?php if( get_field('history-img1') ): ?>
					        <li> <a href="<?php the_field('history-img1'); ?>" ><img src="<?php the_field('history-img1'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img2') ): ?>
					        <li> <a href="<?php the_field('history-img2'); ?>" ><img src="<?php the_field('history-img2'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img3') ): ?>
					        <li> <a href="<?php the_field('history-img3'); ?>" ><img src="<?php the_field('history-img3'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img4') ): ?>
					        <li> <a href="<?php the_field('history-img4'); ?>" ><img src="<?php the_field('history-img4'); ?>" alt="" /></a>
					        
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img5') ): ?>
					        <li> <a href="<?php the_field('history-img5'); ?>" ><img src="<?php the_field('history-img5'); ?>" alt="" /></a>
					         
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img6') ): ?>
					        <li> <a href="<?php the_field('history-img6'); ?>" ><img src="<?php the_field('history-img6'); ?>" alt="" /></a>
					          
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img7') ): ?>
					        <li> <a href="<?php the_field('history-img7'); ?>" ><img src="<?php the_field('history-img7'); ?>" alt="" /></a>
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img8') ): ?>
					        <li> <a href="<?php the_field('history-img8'); ?>" ><img src="<?php the_field('history-img8'); ?>" alt="" /></a>
					         
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img9') ): ?>
					        <li> <a href="<?php the_field('history-img9'); ?>" ><img src="<?php the_field('history-img9'); ?>" alt="" /></a>
					          
					        </li>
					        <?php endif; ?>
					        <?php if( get_field('history-img10') ): ?>
					        <li> <a href="<?php the_field('history-img10'); ?>" ><img src="<?php the_field('history-img10'); ?>" alt="" /></a>
					         
					        </li>
					        <?php endif; ?>
					      </ul>
					    </div>
					    <div class="clear"></div>
			
			
		</div><!-- .general-area -->
	</div><!-- #content -->
</div><!-- #primary -->
	

<?php get_footer(); ?>