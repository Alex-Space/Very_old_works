<?php
/*
Template Name:  gallery-na-obichnoy-stranice
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
<div id="primary" class="site-content prepod-page chistaya-s-polzunkom-container">
		<div id="content" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="chistaya-s-polunkom" id="content_1">
			 <div class="opisania-programm">
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
		    <?php if( get_field('slide11') ): ?>
		      <a href="<?php the_field('slide11'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide11'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide12') ): ?>
		      <a href="<?php the_field('slide12'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide12'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide13') ): ?>
		      <a href="<?php the_field('slide13'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide13'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide14') ): ?>
		      <a href="<?php the_field('slide14'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide14'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide15') ): ?>
		      <a href="<?php the_field('slide15'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide15'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide16') ): ?>
		      <a href="<?php the_field('slide16'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide16'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide17') ): ?>
		      <a href="<?php the_field('slide17'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide17'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide18') ): ?>
		      <a href="<?php the_field('slide18'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide18'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide19') ): ?>
		      <a href="<?php the_field('slide19'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide19'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide20') ): ?>
		      <a href="<?php the_field('slide20'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide20'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide21') ): ?>
		      <a href="<?php the_field('slide21'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide21'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide22') ): ?>
		      <a href="<?php the_field('slide22'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide22'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide23') ): ?>
		      <a href="<?php the_field('slide23'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide23'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide24') ): ?>
		      <a href="<?php the_field('slide24'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide24'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    <?php if( get_field('slide25') ): ?>
		      <a href="<?php the_field('slide25'); ?>" target="_blank" rel="prettyPhoto[gallery]">
		        <img src="<?php the_field('slide25'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    <?php endif; ?>
		    </div>
			 </div>
			
			</div>
			
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>