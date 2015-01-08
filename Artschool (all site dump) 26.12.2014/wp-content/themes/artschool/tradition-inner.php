<?php
/*
Template Name: traditions-inner
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
			<div class="tradition-page-inner mCustomScrollbar _mCS_1" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					
					<div class="clear"></div>
					
						
					
					<div class="articles-head">
						<div class="articles-title">
							<h1><?php the_title(); ?></h2>
						</div>
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="photo-gallery" id="myExample" style="width: 80%; height:300px;margin: auto; visibility: hidden /* trick to hide loading images before Theatre kicks in */;">
		    <?php if( get_field('pos-img1') ): ?>
		      <a href="<?php the_field('pos-img1'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img1'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('pos-img2') ): ?>
		      <a href="<?php the_field('pos-img2'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img2'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('pos-img3') ): ?>
		      <a href="<?php the_field('pos-img3'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img3'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		     <?php endif; ?>

		    <?php if( get_field('pos-img4') ): ?>
		      <a href="<?php the_field('pos-img4'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img4'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('pos-img5') ): ?>  
		    <a href="<?php the_field('pos-img5'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img5'); ?>" style="height: 236px; width: 320px;"/>
		    </a>
		    <?php endif; ?>

		    <?php if( get_field('pos-img6') ): ?> 
		      <a href="<?php the_field('pos-img6'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img6'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		   	<?php if( get_field('pos-img7') ): ?> 
		      <a href="<?php the_field('pos-img7'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img7'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('pos-img8') ): ?> 
		      <a href="<?php the_field('pos-img8'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img8'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		   	<?php if( get_field('pos-img9') ): ?> 
		      <a href="<?php the_field('pos-img9'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img9'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    
		    <?php if( get_field('pos-img10') ): ?>
		      <a href="<?php the_field('pos-img10'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img10'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>

		    <?php if( get_field('pos-img11') ): ?>
		      <a href="<?php the_field('pos-img11'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img11'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img12') ): ?>
		      <a href="<?php the_field('pos-img12'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img12'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img13') ): ?>
		      <a href="<?php the_field('pos-img13'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img13'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img14') ): ?>
		      <a href="<?php the_field('pos-img14'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img14'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img15') ): ?>
		      <a href="<?php the_field('pos-img15'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img15'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img16') ): ?>
		      <a href="<?php the_field('pos-img16'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img16'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img17') ): ?>
		      <a href="<?php the_field('pos-img17'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img17'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img18') ): ?>
		      <a href="<?php the_field('pos-img18'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img18'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img19') ): ?>
		      <a href="<?php the_field('pos-img19'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img19'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('pos-img20') ): ?>
		      <a href="<?php the_field('pos-img20'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('pos-img20'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    </div>
			<div class="clear"></div>
			<?php if( get_field('video-link2') ): ?>
				 <?php the_field('video-link2'); ?>
			<?php endif; ?>

			
		</div><!-- .general-area -->
	</div><!-- #content -->
</div><!-- #primary -->
	

<?php get_footer(); ?>