<?php
/*
Template Name: Prepod page
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
			<div class="foto-button-box">
				<div class="foto-inner">
					<div class="articles-thumbnail">
						<a href="<?php the_permalink(); ?>">
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<a href="images/lepestok.jpg" rel="prettyPhoto[gallery]" title="ЦветуЁчек1">
								<img style="width: 220px; height: 245px" src="<?php bloginfo('template_url'); ?>/images/thumb-default.jpg" alt="thumbnail">
							</a>
						<?php endif; ?>
						</a>
					</div>
				</div>
			</div>
			<div class="about-prepod" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="clear"></div>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			
			
		</div><!-- .general-area -->
		<div class="photo-gallery" id="myExample" style="width: 80%; height:300px;margin: auto; visibility: hidden /* trick to hide loading images before Theatre kicks in */;">
		    <?php if( get_field('slide1') ): ?>
		      <a href="<?php the_field('slide1'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide1'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('slide2') ): ?>
		      <a href="<?php the_field('slide2'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide2'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('slide3') ): ?>
		      <a href="<?php the_field('slide3'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide3'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		     <?php endif; ?>

		    <?php if( get_field('slide4') ): ?>
		      <a href="<?php the_field('slide4'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide4'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('slide5') ): ?>  
		    <a href="<?php the_field('slide5'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide5'); ?>" style="height: 236px; width: 320px;"/>
		    </a>
		    <?php endif; ?>

		    <?php if( get_field('slide6') ): ?> 
		      <a href="<?php the_field('slide6'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide6'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		   	<?php if( get_field('slide7') ): ?> 
		      <a href="<?php the_field('slide7'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide7'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('slide8') ): ?> 
		      <a href="<?php the_field('slide8'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide8'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		   	<?php if( get_field('slide9') ): ?> 
		      <a href="<?php the_field('slide9'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide9'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    
		    <?php if( get_field('slide10') ): ?>
		      <a href="<?php the_field('slide10'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide10'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    </div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>